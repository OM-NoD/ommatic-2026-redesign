#!/usr/bin/env python3
"""
OMmatic 2026 Redesign – Page Builder
Crawls ommatic.de and generates PHP pages
"""
import urllib.request, ssl, re, os, time

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE
BASE = '/Users/normendaunderer/Projects/ommatic-2026-redesign'

def crawl(path):
    req = urllib.request.Request(
        'https://www.ommatic.de' + path,
        headers={'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36'}
    )
    r = urllib.request.urlopen(req, timeout=30, context=ctx)
    return r.read().decode('utf-8')

def clean(s):
    s = re.sub(r'<[^>]+>', '', s)
    s = re.sub(r'\s+', ' ', s)
    s = s.replace('&amp;', '&').replace('&nbsp;', ' ').replace('&#8203;', '').replace('&#8211;', '–').replace('&#8212;', '—').replace('&#8216;', ''').replace('&#8217;', ''').replace('&#8220;', '"').replace('&#8221;', '"')
    return s.strip()

def php_safe(s):
    return s.replace("'", "\\'")

def get_meta_desc(html):
    m = re.search(r'<meta name="description" content="([^"]*)"', html)
    return m.group(1) if m else ''

def get_h1(html):
    m = re.search(r'<h1[^>]*>(.*?)</h1>', html, re.DOTALL)
    return clean(m.group(1)) if m else ''

def split_concatenated(h):
    """Split headings like 'Google Ads für AnwälteSteigern Sie...' into first part"""
    # if a heading has two capitalised sentences merged, just take first meaningful part
    # Detect by finding a capital letter after a lowercase letter without space
    m = re.search(r'([a-zäöüß])([A-ZÄÖÜ])', h)
    if m:
        idx = m.start() + 1
        # return only first part (before the capitalisation break)
        return h[:idx]
    return h

def get_h2s(html):
    h2s = [clean(h) for h in re.findall(r'<h2[^>]*>(.*?)</h2>', html, re.DOTALL)]
    result = []
    for h in h2s:
        if h and len(h) > 5 and 'script' not in h.lower() and len(h) < 300:
            result.append(split_concatenated(h))
    return result

def get_h3s(html):
    h3s = [clean(h) for h in re.findall(r'<h3[^>]*>(.*?)</h3>', html, re.DOTALL)]
    result = []
    for h in h3s:
        if h and len(h) > 5 and len(h) < 200:
            result.append(split_concatenated(h))
    return result

def is_nav_text(t):
    """Returns True if text looks like navigation/menu content"""
    nav_keywords = ['Zum Inhalt springen', 'Legal Business Forum', 'Leistungen Kanzleimarketing',
                    'SEA für Rechtsanwälte', 'Lokales Online Marketing für Rechtsanwälte',
                    'hallo@ommatic.de', 'Linkedin', '0160-96315616', '@ommatic.de',
                    'Termin buchen Kontakt Telefon']
    for k in nav_keywords:
        if k in t:
            return True
    # Nav text typically has lots of short capitalized words
    words = t.split()
    if len(words) < 10 and sum(1 for w in words if w and w[0].isupper()) > len(words) * 0.7:
        return True
    return False

def get_paras(html):
    paras = []
    for p in re.findall(r'<p[^>]*>(.*?)</p>', html, re.DOTALL):
        t = clean(p)
        if (len(t) > 60 and
            len(t) < 2000 and  # filter out CSS/JS blobs
            'Cookie' not in t[:30] and
            'Copyright' not in t and
            'Impressum' not in t[:20] and
            '©' not in t and
            'display:' not in t and  # filter CSS
            'position:' not in t and  # filter CSS
            '{' not in t[:50] and  # filter JS/CSS blocks
            not is_nav_text(t)):
            paras.append(t)
    return paras

def get_lis(html, min_len=20, max_len=300):
    lis = [clean(l) for l in re.findall(r'<li[^>]*>(.*?)</li>', html, re.DOTALL)]
    nav_prefixes = ['Kanzleimarketing', 'SEO für Rechtsanwälte', 'SEA für Rechtsanwälte',
                 'Lokales Online Marketing', 'Social Media für Rechtsanwälte', 'Leistungen',
                 'Startseite', 'Über uns', 'Kontakt', 'Erfolge', 'Blog', 'Ansprechpartner',
                 'Preise', 'Datenschutz', 'Impressum', 'Call Tracking für Anwälte',
                 'Branchenlisting', 'KI Anrufbeantworter', 'Analytics']
    result = []
    for l in lis:
        if len(l) >= min_len and len(l) <= max_len and 'display:' not in l and '{' not in l:
            skip = False
            for nav in nav_prefixes:
                if l == nav or l.startswith(nav + '\n') or l == nav + ' für Rechtsanwälte':
                    skip = True
                    break
            if not skip:
                result.append(l)
    return result

def make_dir(path):
    os.makedirs(path, exist_ok=True)

def write_php(filepath, content):
    os.makedirs(os.path.dirname(filepath), exist_ok=True)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f'  Written: {filepath}')

def make_php_header(title, desc, canonical, include_depth=2):
    inc = '../' * include_depth + 'includes/'
    return f"""<?php
$page_title = '{php_safe(title)}';
$page_description = '{php_safe(desc)}';
$page_canonical = '{canonical}';
require_once '{inc}header.php';
?>
"""

def make_php_footer(include_depth=2):
    inc = '../' * include_depth + 'includes/'
    return f"""
<?php require_once '{inc}footer.php'; ?>
"""

def make_hero(tag_chip, h1, desc, cta_href='/kontakt/', cta_text='Jetzt anfragen'):
    return f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">{tag_chip}</div>
      <h1 class="sr">{h1}</h1>
      <p class="hero-sub-desc sr">{desc}</p>
      <a href="{cta_href}" class="btn btn-primary sr">{cta_text}</a>
    </div>
  </section>
"""

def make_cta(headline='Bereit für mehr Mandanten?', btn_text='Kostenlose Erstberatung'):
    return f"""
  <!-- CTA -->
  <section class="section cta-section">
    <div class="container" style="text-align:center">
      <h2>{headline}</h2>
      <a href="/kontakt/" class="btn btn-primary">{btn_text}</a>
    </div>
  </section>
"""

# ============================================================
# BUILD: KANZLEIMARKETING OVERVIEW
# ============================================================
def build_kanzleimarketing_overview():
    print('\n[BUILD] kanzleimarketing/index.php')
    html = crawl('/kanzleimarketing/')
    h1 = get_h1(html)
    h2s = get_h2s(html)
    h3s = get_h3s(html)
    paras = get_paras(html)
    lis = get_lis(html)

    desc = 'OMmatic – Branchenspezifisches Kanzleimarketing für Rechtsanwälte. Google Ads, SEO, Social Media, Local SEO und mehr für Ihre Kanzlei. Jetzt kostenlos beraten lassen.'

    content = make_php_header(
        'Kanzleimarketing – OMmatic Kanzleimarketing',
        desc,
        'https://ommatic.de/kanzleimarketing/',
        include_depth=1
    )
    content += '<main>\n'
    content += make_hero('Kanzleimarketing', h1 or 'Kanzleimarketing', desc)

    # Intro section
    intro_paras = [p for p in paras if len(p) > 80][:2]
    content += """
  <!-- Intro -->
  <section class="section">
    <div class="container">
"""
    if h2s:
        content += f'      <h2 class="sr">{h2s[0]}</h2>\n'
    for p in intro_paras:
        content += f'      <p class="sr">{p}</p>\n'

    # 8 Pillars
    content += """
      <!-- Die 8 Säulen -->
"""
    if len(h2s) > 1:
        content += f'      <h2 class="sr" style="margin-top:3rem">{h2s[1] if len(h2s)>1 else "Die acht Säulen des erfolgreichen Kanzleimarketings"}</h2>\n'

    pillars = [
        ('🔍', 'Suchmaschinenoptimierung (SEO)', 'Nachhaltige Sichtbarkeit in Google durch technische Optimierung und relevante Inhalte für Ihre Rechtsgebiete.', '/kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/'),
        ('📢', 'Suchmaschinenwerbung (SEA)', 'Sofortige Sichtbarkeit durch gezielte Google Ads Kampagnen – nur für Ihre Wunschmandanten.', '/kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/'),
        ('📱', 'Social Media Marketing', 'Präsenz aufbauen und Vertrauen gewinnen durch professionelle Social-Media-Strategie für Ihre Kanzlei.', '/kanzleimarketing/social-media-fuer-rechtsanwaelte/'),
        ('📍', 'Local Online Marketing', 'In Ihrer Region sichtbar werden – mit Google My Business Optimierung und lokalem SEO.', '/kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/'),
        ('📊', 'Analytics & Reporting', 'Erfolg messbar machen und Kampagnen datenbasiert optimieren.', '/kanzleimarketing/messung-und-berichte-analytics-reporting/'),
        ('🔒', 'Datenschutz & Compliance', 'Rechtssicher agieren und das Vertrauen Ihrer Mandanten stärken.', '/kanzleimarketing/datenschutz-und-compliance-fuer-rechtsanwaelte/'),
        ('📋', 'Branchenverzeichnisse', 'Optimale Präsenz in relevanten Verzeichnissen für mehr Mandantenanfragen.', '/kanzleimarketing/branchenlisting-fuer-anwaelte/'),
        ('📞', 'Call Tracking', 'Präzise Analyse Ihrer Mandantenanfragen für gezieltes Marketing.', '/kanzleimarketing/call-tracking-fuer-anwaelte/'),
        ('🤖', 'KI Anrufbeantworter', 'Automatisierte Mandatsannahme – rund um die Uhr, juristisch präzise.', '/kanzleimarketing/ki-anrufbeantworter-fuer-anwaelte/'),
    ]

    content += '      <div class="card-grid sr">\n'
    for icon, title, text, link in pillars:
        content += f"""        <a href="{link}" class="card card-link">
          <div class="card-icon">{icon}</div>
          <h3>{title}</h3>
          <p>{text}</p>
        </a>
"""
    content += '      </div>\n'

    # Why OMmatic section
    if len(paras) > 3:
        why_paras = [p for p in paras if 'OMmatic' in p or 'optimier' in p.lower() or 'Strateg' in p][:2]
        if not why_paras:
            why_paras = paras[3:5]
        if why_paras:
            content += f"""
      <!-- Warum OMmatic -->
      <div class="section-intro" style="margin-top:4rem">
        <h2 class="sr">{h2s[-1] if h2s else 'Wie kann OMmatic Ihr Kanzleimarketing optimieren?'}</h2>
"""
            for p in why_paras:
                content += f'        <p class="sr">{p}</p>\n'
            content += '      </div>\n'

    content += '    </div>\n  </section>\n'
    content += make_cta('Jetzt Kanzleimarketing optimieren', 'Kostenlose Erstberatung')
    content += '</main>\n'
    content += make_php_footer(include_depth=1).replace("'../includes/'", "'../includes/'")

    # Fix include path for depth=1
    content = content.replace("require_once '../../includes/header.php'", "require_once '../includes/header.php'")
    content = content.replace("require_once '../../includes/footer.php'", "require_once '../includes/footer.php'")

    write_php(f'{BASE}/kanzleimarketing/index.php', content)

# ============================================================
# BUILD: SERVICE SUB-PAGES
# ============================================================
def build_service_page(url_path, file_path, page_title, canonical, tag='Kanzleimarketing', include_depth=2, extra_content_fn=None):
    print(f'\n[BUILD] {file_path}')
    try:
        html = crawl(url_path)
    except Exception as e:
        print(f'  ERROR crawling {url_path}: {e}')
        return

    h1 = get_h1(html)
    h2s = get_h2s(html)
    h3s = get_h3s(html)
    paras = get_paras(html)
    lis = get_lis(html)
    desc_raw = get_meta_desc(html)
    desc = desc_raw[:160] if desc_raw else f'{h1} – OMmatic bietet professionelles Kanzleimarketing für Rechtsanwälte.'

    print(f'  H1: {h1}')
    print(f'  H2s: {h2s[:3]}')
    print(f'  Paras: {len(paras)} found')

    content = make_php_header(page_title, desc, canonical, include_depth)
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">{tag}</div>
      <h1 class="sr">{h1 or page_title.split('–')[0].strip()}</h1>
      <p class="hero-sub-desc sr">{desc[:200] if len(desc) > 200 else desc}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Jetzt anfragen</a>
    </div>
  </section>
"""

    # Content section
    content += '  <section class="section">\n    <div class="container">\n'

    # First intro section with h2 + paras
    if h2s:
        content += f'\n      <h2 class="sr">{h2s[0]}</h2>\n'

    intro_paras = paras[:3]
    for p in intro_paras:
        content += f'      <p class="sr">{p}</p>\n'

    # Second h2 section if exists
    if len(h2s) > 1:
        content += f'\n      <h2 class="sr" style="margin-top:3rem">{h2s[1]}</h2>\n'
        more_paras = paras[3:6]
        for p in more_paras:
            content += f'      <p class="sr">{p}</p>\n'

    # Feature list if exists
    if lis:
        content += '\n      <ul class="feature-list sr">\n'
        for li in lis[:8]:
            content += f'        <li>{li}</li>\n'
        content += '      </ul>\n'

    # Third section
    if len(h2s) > 2:
        content += f'\n      <h2 class="sr" style="margin-top:3rem">{h2s[2]}</h2>\n'
        more_paras = paras[6:9]
        for p in more_paras:
            content += f'      <p class="sr">{p}</p>\n'

    # H3 cards if available
    if h3s:
        content += '\n      <div class="card-grid sr" style="margin-top:2rem">\n'
        for h3 in h3s[:6]:
            content += f"""        <div class="card">
          <h3>{h3}</h3>
        </div>
"""
        content += '      </div>\n'

    # 4th and beyond
    if len(h2s) > 3:
        for idx, h2 in enumerate(h2s[3:], start=3):
            content += f'\n      <h2 class="sr" style="margin-top:3rem">{h2}</h2>\n'
            more = paras[idx*2+3:(idx*2)+6]
            for p in more:
                content += f'      <p class="sr">{p}</p>\n'

    if extra_content_fn:
        content += extra_content_fn(h1, h2s, h3s, paras, lis)

    content += '\n    </div>\n  </section>\n'
    content += make_cta()
    content += '</main>\n'
    content += make_php_footer(include_depth)

    write_php(f'{BASE}/{file_path}', content)

# ============================================================
# BUILD: ERFOLGE OVERVIEW
# ============================================================
def build_erfolge_overview():
    print('\n[BUILD] erfolge/index.php')
    html = crawl('/erfolge/')
    h1 = get_h1(html)
    h2s = get_h2s(html)
    paras = get_paras(html)
    desc = 'Echte Erfolge für Rechtsanwaltskanzleien – Erfahren Sie, wie OMmatic Kanzleien zu mehr Mandanten und Online-Sichtbarkeit verholfen hat.'

    content = make_php_header(
        'Erfolge & Referenzen – OMmatic Kanzleimarketing',
        desc,
        'https://ommatic.de/erfolge/',
        include_depth=1
    )
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">Referenzen</div>
      <h1 class="sr">{h1 or 'Unsere Erfolge'}</h1>
      <p class="hero-sub-desc sr">{desc}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Jetzt anfragen</a>
    </div>
  </section>
"""
    content += '  <section class="section">\n    <div class="container">\n'

    if h2s:
        content += f'      <h2 class="sr">{h2s[0]}</h2>\n'
    for p in paras[:2]:
        content += f'      <p class="sr">{p}</p>\n'

    # Case studies grid
    cases = [
        ('Kanzlei Freudenberg', 'Steigerung der Mandantenanfragen durch gezielte Google Ads & SEO-Strategie.', '/erfolge/kanzlei-freudenberg/'),
        ('Kanzlei Motzenböcker Adams', 'Erfolgreiches Local SEO und Google My Business Optimierung für mehr regionale Sichtbarkeit.', '/erfolge/kanzlei-motzenbaecker-adam/'),
        ('Kanzlei Rischmüller Seide', 'Performance-Marketing-Kampagne mit messbaren Ergebnissen in kürzester Zeit.', '/erfolge/kanzlei-rischmueller-seide/'),
        ('Kanzlei Schullerus', 'Systematische SEO-Optimierung und Content-Strategie für nachhaltige Online-Präsenz.', '/erfolge/kanzlei-schullerus/'),
        ('Kanzlei Trixie Hoferichter', 'Integrierte Digital-Marketing-Strategie für maximale Mandantengewinnung.', '/erfolge/kanzlei-trixie-hoferichter/'),
    ]

    content += '\n      <div class="card-grid sr" style="margin-top:2rem">\n'
    for name, text, link in cases:
        content += f"""        <a href="{link}" class="card card-link">
          <h3>{name}</h3>
          <p>{text}</p>
          <span class="btn btn-ghost" style="margin-top:1rem">Mehr erfahren →</span>
        </a>
"""
    content += '      </div>\n'

    content += '\n    </div>\n  </section>\n'
    content += make_cta('Auch Ihre Kanzlei kann so erfolgreich werden', 'Kostenlose Erstberatung')
    content += '</main>\n'
    content += make_php_footer(include_depth=1)

    write_php(f'{BASE}/erfolge/index.php', content)

# ============================================================
# BUILD: ERFOLGE DETAIL PAGE
# ============================================================
def build_erfolge_detail(url_path, file_path, kanzlei_name):
    print(f'\n[BUILD] {file_path}')
    try:
        html = crawl(url_path)
    except Exception as e:
        print(f'  ERROR crawling {url_path}: {e}')
        return

    h1 = get_h1(html)
    h2s = get_h2s(html)
    paras = get_paras(html)
    lis = get_lis(html)
    desc = get_meta_desc(html)[:160] if get_meta_desc(html) else f'Erfolgsgeschichte {kanzlei_name} – OMmatic zeigt, wie modernes Kanzleimarketing zu mehr Mandanten führt.'

    content = make_php_header(
        f'{kanzlei_name} – Erfolgsgeschichte | OMmatic',
        desc,
        f'https://ommatic.de{url_path}',
        include_depth=2
    )
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">Erfolgsgeschichte</div>
      <h1 class="sr">{h1 or kanzlei_name}</h1>
      <p class="hero-sub-desc sr">{desc[:200]}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Ähnliche Ergebnisse erreichen</a>
    </div>
  </section>
"""
    content += '  <section class="section">\n    <div class="container">\n'

    for idx, h2 in enumerate(h2s[:4]):
        content += f'\n      <h2 class="sr" style="margin-top:{"0" if idx==0 else "3rem"}">{h2}</h2>\n'
        for p in paras[idx*2:idx*2+2]:
            content += f'      <p class="sr">{p}</p>\n'

    if lis:
        content += '\n      <ul class="feature-list sr">\n'
        for li in lis[:6]:
            content += f'        <li>{li}</li>\n'
        content += '      </ul>\n'

    content += '\n    </div>\n  </section>\n'
    content += make_cta('Auch Ihre Kanzlei kann so erfolgreich werden', 'Jetzt anfragen')
    content += '</main>\n'
    content += make_php_footer(include_depth=2)

    write_php(f'{BASE}/{file_path}', content)

# ============================================================
# BUILD: ANSPRECHPARTNER OVERVIEW
# ============================================================
def build_ansprechpartner_overview():
    print('\n[BUILD] ansprechpartner/index.php')
    html = crawl('/ansprechpartner/')
    h1 = get_h1(html)
    paras = get_paras(html)
    desc = 'Ihr persönlicher Ansprechpartner bei OMmatic – Lernen Sie unser Experten-Team für Kanzleimarketing kennen.'

    content = make_php_header(
        'Ansprechpartner – OMmatic Team',
        desc,
        'https://ommatic.de/ansprechpartner/',
        include_depth=1
    )
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">Team</div>
      <h1 class="sr">{h1 or 'Unsere Ansprechpartner'}</h1>
      <p class="hero-sub-desc sr">{desc}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Kontakt aufnehmen</a>
    </div>
  </section>
"""
    content += '  <section class="section">\n    <div class="container">\n'

    for p in paras[:2]:
        content += f'      <p class="sr">{p}</p>\n'

    team = [
        ('Alex Börsig', 'Geschäftsführer & Google Ads Experte', 'Spezialist für Performance-Marketing und Google Ads Kampagnen für Rechtsanwaltskanzleien.', '/ansprechpartner/alex-boersig/'),
        ('Cornelia Day', 'SEO & Content Expertin', 'Spezialisiert auf Suchmaschinenoptimierung und Content-Strategie für Kanzleien.', '/ansprechpartner/cornelia-day/'),
        ('Marcel Zirkel', 'Digital Marketing Manager', 'Experte für Social Media und lokales Online-Marketing für Rechtsanwälte.', '/ansprechpartner/marcel-zirkel/'),
    ]

    content += '\n      <div class="card-grid sr" style="margin-top:2rem">\n'
    for name, role, bio, link in team:
        content += f"""        <a href="{link}" class="card card-link">
          <div class="team-avatar" style="width:80px;height:80px;border-radius:50%;background:var(--color-primary-10);display:flex;align-items:center;justify-content:center;font-size:2rem;margin-bottom:1rem">👤</div>
          <h3>{name}</h3>
          <p class="text-muted" style="font-size:0.9rem;margin-bottom:0.5rem">{role}</p>
          <p>{bio}</p>
        </a>
"""
    content += '      </div>\n'
    content += '\n    </div>\n  </section>\n'
    content += make_cta('Sprechen Sie uns an', 'Jetzt Kontakt aufnehmen')
    content += '</main>\n'
    content += make_php_footer(include_depth=1)

    write_php(f'{BASE}/ansprechpartner/index.php', content)

# ============================================================
# BUILD: ANSPRECHPARTNER DETAIL
# ============================================================
def build_ansprechpartner_detail(url_path, file_path, name, role):
    print(f'\n[BUILD] {file_path}')
    try:
        html = crawl(url_path)
    except Exception as e:
        print(f'  ERROR crawling {url_path}: {e}')
        return

    h1 = get_h1(html)
    h2s = get_h2s(html)
    paras = get_paras(html)
    raw_desc = get_meta_desc(html)
    # Clean contact info from meta desc (e.g. "Linkedin 0160-... name@ommatic.de text...")
    if raw_desc:
        # Remove leading contact block before actual bio text
        desc_clean = re.sub(r'^(Linkedin\s+[\d\-]+\s+\S+@\S+\s*)', '', raw_desc)
        desc = desc_clean[:160] if desc_clean else f'{name} – {role} bei OMmatic, Ihrer Agentur für Kanzleimarketing.'
    else:
        desc = f'{name} – {role} bei OMmatic, Ihrer Agentur für Kanzleimarketing.'

    content = make_php_header(
        f'{name} – OMmatic Team',
        desc,
        f'https://ommatic.de{url_path}',
        include_depth=2
    )
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">Team</div>
      <h1 class="sr">{h1 or name}</h1>
      <p class="hero-sub-desc sr">{role}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Kontakt aufnehmen</a>
    </div>
  </section>
"""
    content += '  <section class="section">\n    <div class="container">\n'

    for idx, h2 in enumerate(h2s[:3]):
        content += f'\n      <h2 class="sr" style="margin-top:{"0" if idx==0 else "3rem"}">{h2}</h2>\n'
        for p in paras[idx*2:idx*2+3]:
            content += f'      <p class="sr">{p}</p>\n'

    if not h2s and paras:
        for p in paras[:4]:
            content += f'      <p class="sr">{p}</p>\n'

    content += '\n    </div>\n  </section>\n'
    content += make_cta(f'Jetzt mit {name.split()[0]} sprechen', 'Kontakt aufnehmen')
    content += '</main>\n'
    content += make_php_footer(include_depth=2)

    write_php(f'{BASE}/{file_path}', content)

# ============================================================
# BUILD: RECHTSGEBIETE PAGES
# ============================================================
def build_rechtsgebiet(url_path, file_path, title, tag, include_depth=1):
    print(f'\n[BUILD] {file_path}')
    try:
        html = crawl(url_path)
    except Exception as e:
        print(f'  ERROR crawling {url_path}: {e}')
        return

    h1 = get_h1(html)
    h2s = get_h2s(html)
    h3s = get_h3s(html)
    paras = get_paras(html)
    lis = get_lis(html)
    desc = get_meta_desc(html)[:160] if get_meta_desc(html) else f'{title} – OMmatic bietet spezialisiertes Kanzleimarketing für {tag}.'

    content = make_php_header(
        f'{title} – OMmatic Kanzleimarketing',
        desc,
        f'https://ommatic.de{url_path}',
        include_depth=include_depth
    )
    content += '<main>\n'
    content += f"""  <!-- Hero-Section -->
  <section class="hero-sub section">
    <div class="container">
      <div class="tag-chip sr">{tag}</div>
      <h1 class="sr">{h1 or title}</h1>
      <p class="hero-sub-desc sr">{desc[:220] if len(desc) > 220 else desc}</p>
      <a href="/kontakt/" class="btn btn-primary sr">Jetzt anfragen</a>
    </div>
  </section>
"""
    content += '  <section class="section">\n    <div class="container">\n'

    for idx, h2 in enumerate(h2s[:4]):
        content += f'\n      <h2 class="sr" style="margin-top:{"0" if idx==0 else "3rem"}">{h2}</h2>\n'
        para_slice = paras[idx*2:idx*2+3]
        for p in para_slice:
            content += f'      <p class="sr">{p}</p>\n'

    if lis:
        content += '\n      <ul class="feature-list sr" style="margin-top:2rem">\n'
        for li in lis[:8]:
            content += f'        <li>{li}</li>\n'
        content += '      </ul>\n'

    if h3s:
        content += '\n      <div class="card-grid sr" style="margin-top:3rem">\n'
        for h3 in h3s[:6]:
            content += f"""        <div class="card">
          <h3>{h3}</h3>
        </div>
"""
        content += '      </div>\n'

    content += '\n    </div>\n  </section>\n'
    content += make_cta(f'Jetzt Ihr Marketing für {tag} optimieren', 'Kostenlose Erstberatung')
    content += '</main>\n'
    content += make_php_footer(include_depth=include_depth)

    write_php(f'{BASE}/{file_path}', content)


# ============================================================
# MAIN
# ============================================================
print('=== OMmatic 2026 – Page Builder ===\n')

# 1. Kanzleimarketing Overview
build_kanzleimarketing_overview()
time.sleep(0.5)

# 2. Google Ads für Anwälte
build_service_page(
    '/kanzleimarketing/google-ads-fuer-anwaelte/',
    'kanzleimarketing/google-ads-fuer-anwaelte/index.php',
    'Google Ads für Anwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/google-ads-fuer-anwaelte/',
)
time.sleep(0.5)

# 3. SEO für Rechtsanwälte
build_service_page(
    '/kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/',
    'kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/index.php',
    'SEO für Rechtsanwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/',
)
time.sleep(0.5)

# 4. SEA/Suchanzeigen
build_service_page(
    '/kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/',
    'kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/index.php',
    'SEA / Suchanzeigen für Rechtsanwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/',
)
time.sleep(0.5)

# 5. Local SEO/MyBusiness
build_service_page(
    '/kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/',
    'kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/index.php',
    'Lokales Online-Marketing / MyBusiness für Rechtsanwälte – OMmatic',
    'https://ommatic.de/kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/',
)
time.sleep(0.5)

# 6. Social Media
build_service_page(
    '/kanzleimarketing/social-media-fuer-rechtsanwaelte/',
    'kanzleimarketing/social-media-fuer-rechtsanwaelte/index.php',
    'Social Media für Rechtsanwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/social-media-fuer-rechtsanwaelte/',
)
time.sleep(0.5)

# 7. Call Tracking
build_service_page(
    '/kanzleimarketing/call-tracking-fuer-anwaelte/',
    'kanzleimarketing/call-tracking-fuer-anwaelte/index.php',
    'Call Tracking für Anwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/call-tracking-fuer-anwaelte/',
)
time.sleep(0.5)

# 8. Branchenlisting
build_service_page(
    '/kanzleimarketing/branchenlisting-fuer-anwaelte/',
    'kanzleimarketing/branchenlisting-fuer-anwaelte/index.php',
    'Branchenlisting für Anwälte – OMmatic Kanzleimarketing',
    'https://ommatic.de/kanzleimarketing/branchenlisting-fuer-anwaelte/',
)
time.sleep(0.5)

# 9. Datenschutz & Compliance
build_service_page(
    '/kanzleimarketing/datenschutz-und-compliance-fuer-rechtsanwaelte/',
    'kanzleimarketing/datenschutz-und-compliance-fuer-rechtsanwaelte/index.php',
    'Datenschutz & Compliance für Rechtsanwälte – OMmatic',
    'https://ommatic.de/kanzleimarketing/datenschutz-und-compliance-fuer-rechtsanwaelte/',
)
time.sleep(0.5)

# 10. Analytics & Reporting
build_service_page(
    '/kanzleimarketing/messung-und-berichte-analytics-reporting/',
    'kanzleimarketing/messung-und-berichte-analytics-reporting/index.php',
    'Analytics & Reporting für Kanzleien – OMmatic',
    'https://ommatic.de/kanzleimarketing/messung-und-berichte-analytics-reporting/',
)
time.sleep(0.5)

# 11. KI-Anrufbeantworter
build_service_page(
    '/kanzleimarketing/ki-anrufbeantworter-fuer-anwaelte/',
    'kanzleimarketing/ki-anrufbeantworter-fuer-anwaelte/index.php',
    'KI-Anrufbeantworter für Anwälte – OMmatic',
    'https://ommatic.de/kanzleimarketing/ki-anrufbeantworter-fuer-anwaelte/',
)
time.sleep(0.5)

# 12. Erfolge Overview
build_erfolge_overview()
time.sleep(0.5)

# 12b. Erfolge Detail Pages
erfolge_pages = [
    ('/erfolge/kanzlei-freudenberg/', 'erfolge/kanzlei-freudenberg/index.php', 'Kanzlei Freudenberg'),
    ('/erfolge/kanzlei-motzenbaecker-adam/', 'erfolge/kanzlei-motzenbaecker-adam/index.php', 'Kanzlei Motzenböcker Adam'),
    ('/erfolge/kanzlei-rischmueller-seide/', 'erfolge/kanzlei-rischmueller-seide/index.php', 'Kanzlei Rischmüller Seide'),
    ('/erfolge/kanzlei-schullerus/', 'erfolge/kanzlei-schullerus/index.php', 'Kanzlei Schullerus'),
    ('/erfolge/kanzlei-trixie-hoferichter/', 'erfolge/kanzlei-trixie-hoferichter/index.php', 'Kanzlei Trixie Hoferichter'),
]
for url, fp, name in erfolge_pages:
    build_erfolge_detail(url, fp, name)
    time.sleep(0.5)

# 13. Ansprechpartner Overview
build_ansprechpartner_overview()
time.sleep(0.5)

# 13b. Ansprechpartner Detail Pages
ansprechpartner_pages = [
    ('/ansprechpartner/alex-boersig/', 'ansprechpartner/alex-boersig/index.php', 'Alex Börsig', 'Geschäftsführer & Google Ads Experte'),
    ('/ansprechpartner/cornelia-day/', 'ansprechpartner/cornelia-day/index.php', 'Cornelia Day', 'SEO & Content Expertin'),
    ('/ansprechpartner/marcel-zirkel/', 'ansprechpartner/marcel-zirkel/index.php', 'Marcel Zirkel', 'Digital Marketing Manager'),
]
for url, fp, name, role in ansprechpartner_pages:
    build_ansprechpartner_detail(url, fp, name, role)
    time.sleep(0.5)

# 14. Rechtsgebiete
rechtsgebiete = [
    ('/marketing-fachanwaelte/', 'marketing-fachanwaelte/index.php', 'Marketing für Fachanwälte', 'Fachanwälte'),
    ('/marketing-familienrecht/', 'marketing-familienrecht/index.php', 'Marketing für Familienrecht', 'Familienrecht'),
    ('/marketing-scheidung/', 'marketing-scheidung/index.php', 'Marketing für Scheidungsanwälte', 'Scheidungsrecht'),
    ('/marketing-erbrecht/', 'marketing-erbrecht/index.php', 'Marketing für Erbrecht', 'Erbrecht'),
    ('/marketing-strafrecht/', 'marketing-strafrecht/index.php', 'Marketing für Strafrecht', 'Strafrecht'),
    ('/marketing-verkehrsrecht/', 'marketing-verkehrsrecht/index.php', 'Marketing für Verkehrsrecht', 'Verkehrsrecht'),
    ('/marketing-verbraucherschutz/', 'marketing-verbraucherschutz/index.php', 'Marketing für Verbraucherschutz', 'Verbraucherschutz'),
    ('/marketing-gesellschaftsrecht/', 'marketing-gesellschaftsrecht/index.php', 'Marketing für Gesellschaftsrecht', 'Gesellschaftsrecht'),
    ('/marketing-migrationsrecht/', 'marketing-migrationsrecht/index.php', 'Marketing für Migrationsrecht', 'Migrationsrecht'),
]
for url, fp, title, tag in rechtsgebiete:
    build_rechtsgebiet(url, fp, title, tag, include_depth=1)
    time.sleep(0.5)

print('\n=== ALL DONE ===')
