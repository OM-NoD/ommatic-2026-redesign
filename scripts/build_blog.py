#!/usr/bin/env python3
"""
Blog builder script for OMmatic 2026 redesign.
Crawls all 23 blog posts from ommatic.de and builds PHP files.
"""
import urllib.request, ssl, re, os, sys

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

BASE_DIR = '/Users/normendaunderer/Projects/ommatic-2026-redesign'

def fetch(path):
    req = urllib.request.Request(
        'https://www.ommatic.de' + path,
        headers={'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36'}
    )
    r = urllib.request.urlopen(req, timeout=40, context=ctx)
    return r.read().decode('utf-8', errors='replace')


def extract_post(html):
    """Extract all fields from a blog post page."""
    # Title from elementor h1
    h1_m = re.search(r'<h1 class="elementor-heading-title[^"]*">(.*?)</h1>', html, re.DOTALL)
    title = re.sub(r'<[^>]+>', '', h1_m.group(1)).strip() if h1_m else ''
    # Fallback to page title
    if not title:
        t_m = re.search(r'<title[^>]*>(.*?)\s*[–|]\s*', html)
        title = t_m.group(1).strip() if t_m else ''

    # Meta description
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']', html, re.IGNORECASE)
    description = desc_m.group(1).strip() if desc_m else ''

    # Date
    date_m = re.search(r'elementor-post-info__item--type-date[^>]*>\s*<time[^>]*>([^<]+)</time>', html)
    date = date_m.group(1).strip() if date_m else ''

    # Category from post classes
    cat_class_m = re.search(r'\bcategory-([a-z0-9-]+)', html)
    cat_slug = cat_class_m.group(1) if cat_class_m else 'allgemein'
    cat_map = {
        'allgemein': 'Blog', 'marketing': 'Marketing', 'seo': 'SEO',
        'google-ads': 'Google Ads', 'social-media': 'Social Media',
        'kanzleimarketing': 'Kanzleimarketing', 'digitalisierung': 'Digitalisierung',
        'legal-tech': 'Legal Tech', 'news': 'News', 'partner': 'Partner',
        'recruiting': 'Recruiting', 'webdesign': 'Webdesign'
    }
    category = cat_map.get(cat_slug, cat_slug.replace('-', ' ').title())

    # Reading time estimate
    rt_m = re.search(r'(\d+)\s*(?:min|minute|Minute)', html[120000:140000], re.IGNORECASE)
    reading_time = rt_m.group(1) if rt_m else ''

    # Featured image
    feat_img_m = re.search(r'elementor-post__thumbnail.*?data-src="([^"]+)"', html, re.DOTALL)
    if not feat_img_m:
        feat_img_m = re.search(r'class="[^"]*wp-post-image[^"]*"[^>]*data-src="([^"]+)"', html)
    featured_image = feat_img_m.group(1) if feat_img_m else ''

    # Content - find blog-content widget
    # Pattern: elementor div with class "blog-content elementor-widget-theme-post-content"
    bc_start = html.find('blog-content elementor-widget elementor-widget-theme-post-content')
    if bc_start < 0:
        # Try alt pattern - just find theme-post-content
        bc_start = html.find('data-widget_type="theme-post-content.default"')
        if bc_start >= 0:
            bc_start = html.rfind('<div', 0, bc_start)

    content = ''
    if bc_start >= 0:
        # Find end of opening tag
        tag_end = html.find('>', bc_start) + 1

        # The blog-content widget content is NOT wrapped in a child div.
        # It's raw HTML blocks directly inside the elementor widget div.
        # We need to find where the post body content ends.
        # End markers: share-buttons widget, loop-grid (related posts), elementor-location-footer
        end_patterns = [
            r'data-widget_type="share-buttons\.default"',
            r'data-widget_type="loop-grid\.',
            r'class="elementor-location-footer"',
            r'data-widget_type="related-posts\.',
            r'elementor-loop-container elementor-grid',
            r'data-widget_type="nav-menu\.',
        ]

        found_end = -1
        for pattern in end_patterns:
            m = re.search(pattern, html[tag_end:])
            if m:
                # Walk back to find the start of this elementor-element div
                pos = tag_end + m.start()
                # Find the opening <div of this widget
                div_back = html.rfind('<div', tag_end, pos)
                if div_back > tag_end:
                    candidate = div_back
                    if found_end < 0 or candidate < found_end:
                        found_end = candidate
                break

        # If no end marker found, fall back to elementor-location-footer
        if found_end < 0:
            footer_pos = html.find('elementor-location-footer', tag_end)
            if footer_pos > 0:
                found_end = html.rfind('<', tag_end, footer_pos)

        if found_end > tag_end:
            content = clean_content(html[tag_end:found_end])

    return {
        'title': title,
        'description': description,
        'date': date,
        'category': category,
        'reading_time': reading_time,
        'featured_image': featured_image,
        'content': content
    }


def clean_content(html):
    """Clean WordPress/Elementor HTML for our new design."""
    # Fix lazy loaded images - replace data-src with src
    def fix_img(m):
        full = m.group(0)
        ds = re.search(r'data-src="([^"]+)"', full)
        alt = re.search(r'alt="([^"]*)"', full)
        w = re.search(r'width="([^"]+)"', full)
        h = re.search(r'height="([^"]+)"', full)
        if ds:
            src = ds.group(1)
            alt_text = alt.group(1) if alt else ''
            dims = ''
            if w: dims += f' width="{w.group(1)}"'
            if h: dims += f' height="{h.group(1)}"'
            return f'<img src="{src}" alt="{alt_text}"{dims} loading="lazy">'
        return full

    html = re.sub(r'<img\s[^>]+>', fix_img, html)

    # Remove noscript img duplicates
    html = re.sub(r'<noscript>.*?</noscript>', '', html, flags=re.DOTALL)

    # Simplify picture elements - remove source tags, keep picture wrapper
    html = re.sub(r'<source[^>]*>', '', html)
    # Clean empty picture tags (just keep the img inside)
    html = re.sub(r'<picture[^>]*>(.*?)</picture>', r'\1', html, flags=re.DOTALL)

    # Remove WordPress block classes from headings but keep the tags
    html = re.sub(r'(<h[23][^>]*)\s+class="wp-block-heading"', r'\1', html)
    html = re.sub(r'(<h[23])(\s*>)', r'\1\2', html)

    # Remove font-size classes from paragraphs
    html = re.sub(r'<p class="has-[a-z-]+-font-size">', '<p>', html)
    html = re.sub(r'<p class="[^"]*has-[a-z-]+-font-size[^"]*">', '<p>', html)

    # Fix figure/image blocks
    html = re.sub(r'<figure class="wp-block-image[^"]*">', '<figure class="blog-figure">', html)
    html = re.sub(r'<figure class="wp-block-image[^"]*"\s+style="[^"]*">', '<figure class="blog-figure">', html)

    # Fix tables: replace wp-block-table figure wrapper with div
    html = re.sub(r'<figure class="wp-block-table[^"]*">', '<div class="table-responsive">', html)
    # Replace </figure> that closes table wrapper
    # Do this by replacing </table>\s*</figure> -> </table>\s*</div>
    html = re.sub(r'(</table>)\s*</figure>', r'\1\n</div>', html)
    # Any remaining wp-block-table figures
    html = re.sub(r'<figure class="[^"]*wp-block-table[^"]*"[^>]*>', '<div class="table-responsive">', html)

    # Convert WP button blocks to our design system
    # Pattern: <div class="wp-block-buttons..."><div class="wp-block-button"><a class="wp-block-button__link..." href="URL" style="...">TEXT</a></div></div>
    html = re.sub(
        r'<div[^>]*class="[^"]*wp-block-buttons[^"]*"[^>]*>\s*<div[^>]*class="[^"]*wp-block-button[^"]*"[^>]*>\s*<a[^>]*href="([^"]*)"[^>]*>\s*(?:<strong>)?(.*?)(?:</strong>)?\s*</a>\s*</div>\s*</div>',
        r'<a href="\1" class="btn btn-primary">\2</a>',
        html, flags=re.DOTALL
    )
    # Also handle remaining wp-block-button links
    html = re.sub(
        r'<a class="wp-block-button__link[^"]*"[^>]*href="([^"]*)"[^>]*>',
        r'<a href="\1" class="btn btn-primary">',
        html
    )
    html = re.sub(r'<a class="wp-block-button__link[^"]*"[^>]*>',
                  '<a class="btn btn-primary">', html)

    # Fix internal links
    html = html.replace('href="https://www.ommatic.de/', 'href="/')
    html = html.replace('href="https://ommatic.de/', 'href="/')

    # Convert wp-block-group (highlight boxes) to a styled div
    html = re.sub(r'<div[^>]*class="[^"]*wp-block-group[^"]*has-background[^"]*"[^>]*style="[^"]*"[^>]*>', '<div class="blog-highlight-box">', html)
    html = re.sub(r'<div[^>]*class="[^"]*wp-block-group[^"]*has-background[^"]*"[^>]*>', '<div class="blog-highlight-box">', html)
    html = re.sub(r'<div[^>]*class="[^"]*wp-block-group[^"]*"[^>]*>', '<div class="blog-group">', html)

    # Convert has-text-align-center
    html = re.sub(r' class="has-text-align-center"', ' style="text-align:center"', html)
    html = re.sub(r' class="[^"]*has-text-align-center[^"]*"', ' style="text-align:center"', html)

    # Remove WP block class attributes but keep the tags
    html = re.sub(r' class="wp-block-[a-z-]+"', '', html)
    html = re.sub(r' class="wp-element-[a-z-]+"', '', html)
    html = re.sub(r' class="is-layout-[a-z-0-9]+"', '', html)
    html = re.sub(r' class="wp-container-[a-z0-9-]+"', '', html)
    html = re.sub(r' is-layout-[a-z-0-9]+', '', html)
    html = re.sub(r' wp-container-[a-z0-9-]+', '', html)
    html = re.sub(r' class="[^"]*wp-block-heading[^"]*"', '', html)
    html = re.sub(r' class="[^"]*has-[a-z-]+-color[^"]*"', '', html)
    html = re.sub(r' class="[^"]*has-link-color[^"]*"', '', html)
    html = re.sub(r' class="[^"]*no-mt[^"]*"', '', html)

    # Remove empty class attributes
    html = re.sub(r'\s+class=""', '', html)
    html = re.sub(r'\s+class=\s+"?\s+"?', '', html)

    # Remove inline style attributes from content elements (keep for figures and highlight boxes)
    html = re.sub(r'(<(?:p|li|ul|ol|h[2-6])[^>]*)\s+style="[^"]*"', r'\1', html)

    # Remove data- attributes
    html = re.sub(r'\s+data-[a-z-]+="[^"]*"', '', html)

    # Remove decoding attribute
    html = re.sub(r'\s+decoding="[^"]*"', '', html)

    # Clean up excessive whitespace
    html = re.sub(r'\t+', '', html)
    html = re.sub(r' {2,}', ' ', html)
    html = re.sub(r'\n{3,}', '\n\n', html)
    html = re.sub(r'>\s+<', '>\n<', html)

    return html.strip()


def estimate_reading_time(content):
    """Estimate reading time from content."""
    text = re.sub(r'<[^>]+>', '', content)
    words = len(text.split())
    minutes = max(1, round(words / 200))
    return str(minutes)


def generate_post_php(slug, post_data):
    """Generate PHP file content for a blog post."""
    title = post_data['title'].replace("'", "\\'")
    description = post_data['description'].replace("'", "\\'")
    # slug is like "blog/mandantenakquise-rechtsanwaelte"
    slug_clean = slug.strip('/')
    # Remove leading "blog/" for the canonical path construction
    slug_path = slug_clean  # already has blog/ prefix
    reading_time = post_data['reading_time'] or estimate_reading_time(post_data['content'])

    php = f"""<?php
$page_title = '{title} – OMmatic Blog';
$page_description = '{description}';
$page_canonical = 'https://ommatic.de/{slug_path}/';
require_once '../../includes/header.php';
?>
<main>
  <article class="blog-post">
    <div class="container">
      <div class="blog-post-header section">
        <div class="tag-chip">{post_data['category']}</div>
        <h1 class="sr">{post_data['title']}</h1>
        <p class="blog-meta">{post_data['date']} · {reading_time} Min. Lesezeit</p>
      </div>
      <div class="blog-post-body">
{post_data['content']}
      </div>
    </div>
  </article>

  <section class="section cta-section">
    <div class="container" style="text-align:center">
      <h2>Mehr Mandanten für Ihre Kanzlei?</h2>
      <p class="text-muted">Sprechen Sie jetzt mit unseren Experten.</p>
      <a href="/kontakt/" class="btn btn-primary">Kostenlose Erstberatung</a>
    </div>
  </section>
</main>
<?php require_once '../../includes/footer.php'; ?>
"""
    return php


# All 23 post slugs
POSTS = [
    '/blog/mandantenakquise-rechtsanwaelte/',
    '/blog/anwalt-facebook-instagram-marketing/',
    '/blog/anwaltsmarketing/',
    '/blog/call-tracking-fuer-kanzleien-so-analysieren-sie-ihre-anrufe-richtig/',
    '/blog/chatgpt-kanzleimarketing-lokale-rankings/',
    '/blog/digitalisierung-in-der-kanzlei-erfolgreiche-schritte-zur-modernen-rechtsberatung/',
    '/blog/e-rechnungspflicht-anwaltskanzleien/',
    '/blog/faq-w-fragen-kanzlei-content-seo/',
    '/blog/google-ai-max-kampagne-in-deutschland-mit-uns-ai-max-jetzt-strategisch-nutzen/',
    '/blog/interview-bfsg-barrierefreiheit-schupp-zirkel/',
    '/blog/ki-messung-kanzleien-peec-ai-sistrix/',
    '/blog/linkedin-werbung-rechtsanwalte/',
    '/blog/marktausblick-und-prognosen-fuer-legal-tech-weltweit-2024-2029/',
    '/blog/neue-e-rechnungspflicht-ab-1-januar-2025-fuer-anwaeltinnen/',
    '/blog/ommatic-x-stp-one-neue-partnerschaft-fuer-die-digitale-kanzlei/',
    '/blog/online-marketing-trends-2025-kanzleien/',
    '/blog/optimale-online-praesenz-fuer-steuerberater-und-rechtsanwaelte-mit-google-ads-sem-und-local-seo-mehr-mandanten-gewinnen/',
    '/blog/partnerschaft-ommatic-offizieller-implementierungspartner-von-justin-legal/',
    '/blog/performance-max-fuer-anwalte/',
    '/blog/rechtsanwalt-werbung-erlaubt/',
    '/blog/recruiting-fuer-rechtsanwaelte-und-kanzleien/',
    '/blog/tiktok-werbung-rechtsanwaelte/',
    '/blog/webdesign-fuer-rechtsanwaelte/',
]


def crawl_all_posts():
    """Crawl all posts and return list of post data."""
    results = []
    for i, slug in enumerate(POSTS):
        print(f"[{i+1}/{len(POSTS)}] Crawling {slug} ...", flush=True)
        try:
            html = fetch(slug)
            data = extract_post(html)
            data['slug'] = slug.strip('/')
            results.append(data)
            print(f"  OK: {data['title'][:60]}", flush=True)
        except Exception as e:
            print(f"  ERROR: {e}", flush=True)
            results.append({
                'slug': slug.strip('/'),
                'title': slug.split('/')[-2].replace('-', ' ').title(),
                'description': '',
                'date': '',
                'category': 'Blog',
                'reading_time': '5',
                'featured_image': '',
                'content': f'<p>Inhalt wird geladen...</p>'
            })
    return results


def get_index_cards():
    """Get card data from blog index pages."""
    cards = []
    seen_slugs = set()
    for page in ['/blog/', '/blog/page/2/', '/blog/page/3/']:
        try:
            html = fetch(page)
            articles = re.findall(
                r'<article class="elementor-post[^"]*"[^>]*>(.*?)</article>',
                html, re.DOTALL
            )
            for art in articles:
                slug_m = re.search(r'href="https://(?:www\.)?ommatic\.de(/blog/[^/"]+/)"', art)
                if not slug_m:
                    continue
                slug = slug_m.group(1)
                if slug in seen_slugs or slug == '/blog/':
                    continue
                seen_slugs.add(slug)

                img_m = re.search(r'data-src="(https://ommatic\.de/wp-content/[^"]+)"', art)
                img = img_m.group(1) if img_m else ''

                title_m = re.search(r'<h3[^>]*>(.*?)</h3>', art, re.DOTALL)
                title = re.sub(r'<[^>]+>', '', title_m.group(1)).strip() if title_m else ''

                date_m = re.search(r'<time[^>]*>([^<]+)</time>', art)
                date = date_m.group(1).strip() if date_m else ''

                excerpt_m = re.search(r'<p class="elementor-post__excerpt[^"]*">(.*?)</p>', art, re.DOTALL)
                excerpt = re.sub(r'<[^>]+>', '', excerpt_m.group(1)).strip()[:180] if excerpt_m else ''

                cat_m = re.search(r'hentry\s+[^"]*category-(\S+)', art)
                cat_slug = cat_m.group(1) if cat_m else 'allgemein'

                cards.append({
                    'slug': slug,
                    'title': title,
                    'img': img,
                    'date': date,
                    'excerpt': excerpt,
                    'category': cat_slug
                })
        except Exception as e:
            print(f"Error on {page}: {e}")
    return cards


def generate_card_html(card, post_data=None):
    """Generate HTML for a blog index card."""
    slug = card['slug']
    title = card['title']
    img = card.get('img', '')
    date = card.get('date', '')
    excerpt = card.get('excerpt', '')
    cat_slug = card.get('category', 'allgemein')

    cat_map = {
        'allgemein': 'Blog', 'marketing': 'Marketing', 'seo': 'SEO',
        'google-ads': 'Google Ads', 'social-media': 'Social Media',
        'kanzleimarketing': 'Kanzleimarketing', 'digitalisierung': 'Digitalisierung',
        'legal-tech': 'Legal Tech', 'news': 'News', 'partner': 'Partner',
        'recruiting': 'Recruiting', 'webdesign': 'Webdesign'
    }
    category = cat_map.get(cat_slug, cat_slug.replace('-', ' ').title())

    img_html = ''
    if img:
        img_html = f'<img src="{img}" alt="{title}" loading="lazy">'

    excerpt_html = f'<p class="blog-card-excerpt">{excerpt}</p>' if excerpt else ''
    date_html = f'<span class="blog-card-date">{date}</span>' if date else ''

    return f"""    <a href="{slug}" class="blog-card">
      <div class="blog-card-img">
        {img_html}
      </div>
      <div class="blog-card-body">
        <div class="tag-chip">{category}</div>
        <h2 class="blog-card-title">{title}</h2>
        {excerpt_html}
        <div class="blog-card-meta">
          {date_html}
          <span class="blog-card-read">Weiterlesen →</span>
        </div>
      </div>
    </a>"""


def generate_index_php(cards, posts_data):
    """Generate the blog index PHP file."""
    # Build a dict of slug -> post data for enriched cards
    posts_by_slug = {p['slug']: p for p in posts_data}

    # Ensure all 23 posts are represented - use POSTS order
    all_slugs_in_cards = {c['slug'].strip('/') for c in cards}

    card_html_parts = []
    for card in cards:
        slug_key = card['slug'].strip('/')
        post = posts_by_slug.get(slug_key)
        # Enrich card with post data if available
        if post:
            if not card.get('excerpt') and post.get('content'):
                text = re.sub(r'<[^>]+>', '', post['content'])
                card['excerpt'] = text[:180].strip() + '...' if len(text) > 180 else text[:180]
            if not card.get('date') and post.get('date'):
                card['date'] = post['date']
        card_html_parts.append(generate_card_html(card, post))

    cards_html = '\n'.join(card_html_parts)

    php = f"""<?php
$page_title = 'Blog – OMmatic | Legal Marketing für Kanzleien';
$page_description = 'Insights, Strategien und Praxistipps für Kanzleimarketing, SEO, Google Ads und digitale Mandantengewinnung.';
$page_canonical = 'https://ommatic.de/blog/';
require_once '../includes/header.php';
?>
<main>
  <section class="section blog-hero">
    <div class="container">
      <div class="section-label">Wissen &amp; Insights</div>
      <h1 class="sr">OMmatic <span class="gradient-text">Blog</span></h1>
      <p class="text-muted" style="max-width:600px;margin:0 auto">
        Praxisnahe Strategien und aktuelle Einblicke zu digitalem Kanzleimarketing –
        von Experten, die täglich mit Rechtsanwaltskanzleien arbeiten.
      </p>
    </div>
  </section>

  <section class="section blog-index-section">
    <div class="container">
      <div class="blog-grid">
{cards_html}
      </div>
    </div>
  </section>

  <section class="section cta-section">
    <div class="container" style="text-align:center">
      <h2>Mehr Mandanten für Ihre Kanzlei?</h2>
      <p class="text-muted">Sprechen Sie jetzt mit unseren Experten.</p>
      <a href="/kontakt/" class="btn btn-primary">Kostenlose Erstberatung</a>
    </div>
  </section>
</main>
<?php require_once '../includes/footer.php'; ?>
"""
    return php


def main():
    blog_dir = os.path.join(BASE_DIR, 'blog')
    os.makedirs(blog_dir, exist_ok=True)

    print("=== Crawling all 23 blog posts ===")
    posts_data = crawl_all_posts()

    print("\n=== Creating post PHP files ===")
    for post in posts_data:
        slug = post['slug']
        slug_name = slug.replace('blog/', '').strip('/')
        post_dir = os.path.join(blog_dir, slug_name)
        os.makedirs(post_dir, exist_ok=True)
        php_content = generate_post_php(slug, post)
        php_path = os.path.join(post_dir, 'index.php')
        with open(php_path, 'w', encoding='utf-8') as f:
            f.write(php_content)
        print(f"  Written: {php_path}")

    print("\n=== Crawling blog index cards ===")
    cards = get_index_cards()
    print(f"  Found {len(cards)} cards")

    print("\n=== Writing blog index ===")
    index_php = generate_index_php(cards, posts_data)
    index_path = os.path.join(blog_dir, 'index.php')
    with open(index_path, 'w', encoding='utf-8') as f:
        f.write(index_php)
    print(f"  Written: {index_path}")

    print("\n=== Done! ===")
    print(f"Blog files in: {blog_dir}")
    print(f"Posts created: {len(posts_data)}")
    print(f"Index cards: {len(cards)}")


if __name__ == '__main__':
    main()
