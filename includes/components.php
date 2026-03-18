<?php
/**
 * OMmatic 2026 – Zentrale PHP-Komponenten
 *
 * Jede Funktion hier = eine React-Komponente beim JAMstack-Umzug.
 * Änderungen wirken sofort auf ALLE Seiten.
 *
 * Verwendung: require_once '../includes/components.php';
 *
 * React-Mapping:
 *   om_page_hero()       → <PageHero />
 *   om_section_header()  → <SectionHeader />
 *   om_cta_banner()      → <CTABanner />
 *   om_feature_card()    → <FeatureCard />
 *   om_why_card()        → <WhyCard />
 *   om_stat_item()       → <StatItem />
 */

// ============================================================
//  PAGE HERO
//  React: <PageHero tag breadcrumb title sub ctas />
// ============================================================
/**
 * @param array $p {
 *   string $tag          Tag-Chip text (z.B. "Leistungen")
 *   string $breadcrumb   Aktuelle Seite (z.B. "SEO für Anwälte")
 *   string $title        H1 – darf HTML/<span class="gradient-text"> enthalten
 *   string $sub          Untertitel
 *   array  $ctas         [ ['label'=>'', 'href'=>'', 'class'=>'btn-primary'], ... ]
 *   bool   $mesh3        Dritten Mesh-Blob anzeigen (default false)
 * }
 */
function om_page_hero(array $p): void {
    $tag        = $p['tag']        ?? '';
    $breadcrumb = $p['breadcrumb'] ?? '';
    $title      = $p['title']      ?? '';
    $sub        = $p['sub']        ?? '';
    $ctas       = $p['ctas']       ?? [];
    $mesh3      = $p['mesh3']      ?? false;
    ?>
    <section class="page-hero">
        <div class="hero-mesh" aria-hidden="true">
            <div class="mesh-blob mesh-1"></div>
            <div class="mesh-blob mesh-2"></div>
            <?php if ($mesh3): ?><div class="mesh-blob mesh-3"></div><?php endif; ?>
        </div>
        <div class="hero-grid-bg" aria-hidden="true"></div>
        <div class="container page-hero-inner">
            <?php if ($breadcrumb): ?>
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="/">OMmatic</a>
                <span class="breadcrumb-sep" aria-hidden="true">/</span>
                <span><?= htmlspecialchars($breadcrumb) ?></span>
            </nav>
            <?php endif; ?>
            <?php if ($tag): ?>
            <div class="sr"><span class="tag-chip"><?= htmlspecialchars($tag) ?></span></div>
            <?php endif; ?>
            <h1 class="page-hero-title sr sr-d1"><?= $title ?></h1>
            <?php if ($sub): ?>
            <p class="page-hero-sub sr sr-d2"><?= htmlspecialchars($sub) ?></p>
            <?php endif; ?>
            <?php if ($ctas): ?>
            <div class="page-hero-ctas sr sr-d3">
                <?php foreach ($ctas as $cta): ?>
                <a href="<?= htmlspecialchars($cta['href']) ?>"
                   class="btn <?= $cta['class'] ?? 'btn-ghost' ?> btn-lg">
                    <?= htmlspecialchars($cta['label']) ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
}


// ============================================================
//  SECTION HEADER  (Tag-Chip + H2 + Subtext)
//  React: <SectionHeader tag title sub align />
// ============================================================
/**
 * @param string $tag    Tag-Chip text
 * @param string $title  H2 – darf HTML enthalten (für gradient-text)
 * @param string $sub    Optionaler Subtext
 * @param string $align  'center' (default) | 'left'
 */
function om_section_header(string $tag, string $title, string $sub = '', string $align = 'center'): void {
    $cls = $align === 'left' ? ' sh-left' : '';
    ?>
    <div class="section-header<?= $cls ?> sr">
        <?php if ($tag): ?><span class="tag-chip"><?= htmlspecialchars($tag) ?></span><?php endif; ?>
        <h2><?= $title ?></h2>
        <?php if ($sub): ?><p class="section-sub"><?= htmlspecialchars($sub) ?></p><?php endif; ?>
    </div>
    <?php
}


// ============================================================
//  CTA BANNER
//  React: <CTABanner tag title sub primaryBtn secondaryBtn />
// ============================================================
/**
 * @param array $p {
 *   string $tag           Tag-Chip (default "Jetzt starten")
 *   string $title         H2 Überschrift
 *   string $sub           Subtext
 *   array  $primary_btn   ['label'=>'', 'href'=>'']
 *   array  $secondary_btn ['label'=>'', 'href'=>''] (optional)
 * }
 */
function om_cta_banner(array $p): void {
    $tag           = $p['tag']           ?? 'Jetzt starten';
    $title         = $p['title']         ?? 'Bereit für messbar mehr Mandanten?';
    $sub           = $p['sub']           ?? 'Fordern Sie jetzt Ihre kostenlose Erstberatung an. Wir analysieren Ihre Situation und zeigen konkret, was möglich ist.';
    $primary_btn   = $p['primary_btn']   ?? ['label' => 'Kostenlose Erstberatung', 'href' => '/kontakt/'];
    $secondary_btn = $p['secondary_btn'] ?? ['label' => 'Über OMmatic',            'href' => '/ueber-uns/'];
    ?>
    <section class="cta-banner">
        <div class="container">
            <div class="cta-banner-inner sr">
                <span class="tag-chip"><?= htmlspecialchars($tag) ?></span>
                <h2 class="cta-banner-title"><?= htmlspecialchars($title) ?></h2>
                <p class="cta-banner-sub"><?= htmlspecialchars($sub) ?></p>
                <div class="cta-banner-btns">
                    <a href="<?= htmlspecialchars($primary_btn['href']) ?>" class="btn btn-primary btn-lg">
                        <?= htmlspecialchars($primary_btn['label']) ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <?php if ($secondary_btn): ?>
                    <a href="<?= htmlspecialchars($secondary_btn['href']) ?>" class="btn btn-ghost btn-lg">
                        <?= htmlspecialchars($secondary_btn['label']) ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}


// ============================================================
//  FEATURE CARD
//  React: <FeatureCard icon color title text />
// ============================================================
/**
 * @param string $icon_svg  SVG-Markup des Icons
 * @param string $color     'cyan' | 'indigo' | 'teal'
 * @param string $title     Karte Titel
 * @param string $text      Karte Beschreibung
 * @param array  $bullets   Optionale Bullet-Liste ['Punkt 1', 'Punkt 2']
 * @param string $sr_class  Zusätzliche SR-Klassen (z.B. 'sr-d1')
 */
function om_feature_card(string $icon_svg, string $color, string $title, string $text, array $bullets = [], string $sr_class = ''): void {
    ?>
    <article class="feature-card sr <?= htmlspecialchars($sr_class) ?>">
        <div class="feature-icon ic-<?= htmlspecialchars($color) ?>"><?= $icon_svg ?></div>
        <h3 class="feature-title"><?= htmlspecialchars($title) ?></h3>
        <p class="feature-text"><?= htmlspecialchars($text) ?></p>
        <?php if ($bullets): ?>
        <ul class="feature-bullets">
            <?php foreach ($bullets as $b): ?>
            <li><?= htmlspecialchars($b) ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </article>
    <?php
}


// ============================================================
//  WHY CARD  (Warum OMmatic / Vorteils-Karte mit Nummer)
//  React: <WhyCard num title text />
// ============================================================
function om_why_card(string $num, string $title, string $text, string $sr_class = ''): void {
    ?>
    <div class="why-card sr <?= htmlspecialchars($sr_class) ?>">
        <div class="why-num"><?= htmlspecialchars($num) ?></div>
        <div class="why-title"><?= htmlspecialchars($title) ?></div>
        <p class="why-text"><?= htmlspecialchars($text) ?></p>
    </div>
    <?php
}


// ============================================================
//  STAT ITEM  (Zahlen-Highlight in Stats-Grid)
//  React: <StatItem number label />
// ============================================================
function om_stat_item(string $number, string $label, string $sr_class = ''): void {
    ?>
    <div class="stat-item sr <?= htmlspecialchars($sr_class) ?>">
        <div class="stat-number"><?= htmlspecialchars($number) ?></div>
        <div class="stat-label"><?= htmlspecialchars($label) ?></div>
    </div>
    <?php
}


// ============================================================
//  PROCESS STEP  (4-Schritte-Prozess)
//  React: <ProcessStep num title text />
// ============================================================
function om_process_step(string $num, string $title, string $text, string $sr_class = ''): void {
    ?>
    <div class="process-step sr <?= htmlspecialchars($sr_class) ?>">
        <div class="step-num"><?= htmlspecialchars($num) ?></div>
        <div class="step-title"><?= htmlspecialchars($title) ?></div>
        <p class="step-text"><?= htmlspecialchars($text) ?></p>
    </div>
    <?php
}
