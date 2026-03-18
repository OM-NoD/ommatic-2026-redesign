# OMmatic 2026 – Komponenten-Bibliothek

> **Zentrale Referenz** für alle Designbausteine.
> PHP-Prototyp → React/Next.js Mapping ist 1:1 vorbereitet.

---

## Design Tokens (aus `assets/css/main.css`)

```css
/* Farben */
--primary:  #00C2FF    /* Cyan – primäre Akzentfarbe */
--indigo:   #7C73E6    /* Indigo – sekundäre Akzentfarbe */
--teal:     #00D4AA    /* Teal – dritte Akzentfarbe */
--bg:       #0B1120    /* Dark Background */
--bg-2:     #111827    /* Section Alt Background */
--bg-card:  rgba(17,24,39,0.7)  /* Karten-Hintergrund */

/* Typografie */
--font-h:   'Outfit', sans-serif   /* Überschriften */
--font-b:   'Manrope', sans-serif  /* Fließtext */

/* Abstände & Radien */
--radius-s:  8px
--radius:    16px
--radius-l:  24px   /* Standard für Karten */
--radius-xl: 32px
--py:        clamp(72px, 10vw, 120px)  /* Section-Padding */
--max-w:     1280px
```

**Gradient-Text:**
```html
<span class="gradient-text">Schlüsselwort</span>
```

---

## Komponenten

---

### 1. PageHero
**PHP:** `om_page_hero($p)` in `includes/components.php`
**React:** `<PageHero />`
**Verwendet auf:** 18 Seiten

```php
om_page_hero([
    'tag'        => 'Leistungen',
    'breadcrumb' => 'SEO für Rechtsanwälte',
    'title'      => 'SEO für <span class="gradient-text">Rechtsanwälte</span>',
    'sub'        => 'Beschreibungstext...',
    'ctas'       => [
        ['label' => 'Kostenlose Erstberatung', 'href' => '/kontakt/',   'class' => 'btn-primary'],
        ['label' => 'Alle Leistungen',         'href' => '#leistungen', 'class' => 'btn-ghost'],
    ],
    'mesh3' => false,
]);
```

**React Props:**
```tsx
interface PageHeroProps {
  tag?: string
  breadcrumb?: string
  title: string          // kann JSX enthalten
  sub?: string
  ctas?: { label: string; href: string; variant: 'primary' | 'ghost' }[]
  mesh3?: boolean
}
```

---

### 2. SectionHeader
**PHP:** `om_section_header($tag, $title, $sub, $align)`
**React:** `<SectionHeader />`
**Verwendet auf:** Alle Seiten (jede Section)

```php
om_section_header(
    'Was wir bieten',
    'Was beinhaltet <span class="gradient-text">Kanzleimarketing</span>?',
    'Optionaler Subtext hier.',
    'center'  // oder 'left'
);
```

**CSS-Klassen:** `.section-header`, `.section-header.sh-left`, `.tag-chip`, `.section-sub`

---

### 3. CTABanner
**PHP:** `om_cta_banner($p)` in `includes/components.php`
**React:** `<CTABanner />`
**Verwendet auf:** 18 Seiten (immer am Seitenende)

```php
om_cta_banner([
    'tag'           => 'Jetzt starten',
    'title'         => 'Bereit für messbar mehr Mandanten?',
    'sub'           => 'Fordern Sie jetzt Ihre kostenlose Erstberatung an...',
    'primary_btn'   => ['label' => 'Kostenlose Erstberatung', 'href' => '/kontakt/'],
    'secondary_btn' => ['label' => 'Über OMmatic', 'href' => '/ueber-uns/'],
]);
```

**CSS-Klassen:** `.cta-banner`, `.cta-banner-inner`, `.cta-banner-title`, `.cta-banner-sub`, `.cta-banner-btns`

---

### 4. FeatureGrid + FeatureCard
**PHP:** `om_feature_card(...)` in `includes/components.php`
**React:** `<FeatureGrid>` + `<FeatureCard />`
**Verwendet auf:** 11 Seiten

```php
// Grid-Container (manuell):
// <div class="feature-grid">

om_feature_card(
    '<svg>...</svg>',     // Icon SVG
    'cyan',               // 'cyan' | 'indigo' | 'teal'
    'Keyword-Recherche',  // Titel
    'Wir identifizieren...',  // Text
    ['Bullet 1', 'Bullet 2'], // optional
    'sr-d1'               // SR-Delay-Klasse
);
```

**CSS-Klassen:** `.feature-grid`, `.feature-card`, `.feature-icon`, `.ic-cyan`, `.ic-indigo`, `.ic-teal`, `.feature-title`, `.feature-text`, `.feature-bullets`

**Farb-Rotation (Standard):** cyan → indigo → teal → cyan → ...

---

### 5. WhyCard (Warum OMmatic)
**PHP:** `om_why_card($num, $title, $text)`
**React:** `<WhyCard />`
**Verwendet auf:** 12 Seiten

```php
// Grid-Container: <div class="why-grid">
om_why_card('01', 'Legal-Expertise', 'Wir arbeiten ausschließlich...', 'sr-d1');
om_why_card('02', 'Messbare Ergebnisse', 'Jede Maßnahme...', 'sr-d2');
om_why_card('03', 'Full-Service', 'Von SEO bis KI...', 'sr-d3');
```

**CSS-Klassen:** `.why-grid`, `.why-card`, `.why-num`, `.why-title`, `.why-text`

---

### 6. ServiceDetailBlock (Leistungen im Detail)
**React:** `<ServiceDetailBlock />`
**Verwendet auf:** kanzleimarketing/index.php (2-Spalten-Grid)

```html
<!-- Grid: <div class="service-details-grid"> -->
<div class="service-detail-block">
    <div class="service-detail-icon ic-cyan"><!-- SVG --></div>
    <h3>SEO für Rechtsanwälte</h3>
    <p>Beschreibung...</p>
    <a href="/kanzleimarketing/seo/" class="btn btn-ghost btn-sm">Mehr erfahren →</a>
</div>
```

**CSS-Klassen:** `.service-details-grid` (2-col), `.service-detail-block`, `.service-detail-icon`

---

### 7. ProcessTrack (4-Schritte)
**PHP:** `om_process_step($num, $title, $text)`
**React:** `<ProcessTrack>` + `<ProcessStep />`
**Verwendet auf:** 10 Seiten

```php
// Container: <div class="process-track">
om_process_step('01', 'Erstberatung', 'Wir analysieren...', 'sr-d1');
om_process_step('02', 'Strategie', 'Maßgeschneiderter Plan...', 'sr-d2');
om_process_step('03', 'Umsetzung', 'Kampagnen live...', 'sr-d3');
om_process_step('04', 'Optimierung', 'Kontinuierliche...', 'sr-d4');
```

**CSS-Klassen:** `.process-section`, `.process-track`, `.process-step`, `.step-num`, `.step-title`, `.step-text`

---

### 8. StatsGrid
**PHP:** `om_stat_item($number, $label)`
**React:** `<StatsGrid>` + `<StatItem />`

```php
// Container: <div class="stats-grid">
om_stat_item('150+', 'betreute Kanzleien');
om_stat_item('+312%', 'durchschn. ROI');
om_stat_item('4,8★', 'Kundenbewertung');
om_stat_item('Seit 2019', 'Legal-Experten');
```

---

### 9. TwoCol Layout
**React:** `<TwoCol>` Wrapper
**Varianten:** Standard | `.reverse`

```html
<div class="two-col">
    <div class="prose"><!-- Text/Content --></div>
    <div><!-- Feature-Grid, Cards, etc. --></div>
</div>
```

---

### 10. BlogCard
**React:** `<BlogCard />`

```html
<article class="blog-card">
    <div class="blog-card-img"><!-- Bild --></div>
    <div class="blog-card-body">
        <span class="blog-card-cat">Kategorie</span>
        <h3 class="blog-card-title">Titel</h3>
        <p class="blog-card-excerpt">Auszug...</p>
        <div class="blog-card-meta">
            <span class="blog-card-date">18. März 2026</span>
            <span class="blog-card-read">5 min</span>
        </div>
    </div>
</article>
```

---

## Scroll-Reveal System

```html
<!-- Basisklasse: startet unsichtbar, faded beim Scrollen ein -->
<div class="sr">...</div>

<!-- Mit Delay (für gestaffelte Animationen) -->
<div class="sr sr-d1">...</div>  <!-- 100ms -->
<div class="sr sr-d2">...</div>  <!-- 200ms -->
<div class="sr sr-d3">...</div>  <!-- 300ms -->
<div class="sr sr-d4">...</div>  <!-- 400ms -->
```

**React:** `<motion.div>` mit Framer Motion oder `IntersectionObserver` Hook

---

## Seiten-Struktur (Standard-Pattern)

Jede Seite folgt diesem Aufbau:

```
1. PageHero          → Immer oben
2. Intro (TwoCol)    → Was ist diese Leistung?
3. FeatureGrid       → Was bieten wir konkret?
4. WhyGrid           → Warum OMmatic?
5. ProcessTrack      → Wie läuft es ab?
6. StatsGrid         → Zahlen/Beweise
7. CTABanner         → Immer ganz unten
```

---

## Migrations-Checkliste (PHP → React)

- [ ] `om_page_hero()` → `<PageHero />` mit Props
- [ ] `om_section_header()` → `<SectionHeader />`
- [ ] `om_cta_banner()` → `<CTABanner />`
- [ ] `om_feature_card()` → `<FeatureCard />`
- [ ] `om_why_card()` → `<WhyCard />`
- [ ] `om_stat_item()` → `<StatItem />`
- [ ] `om_process_step()` → `<ProcessStep />`
- [ ] CSS Tokens → `tailwind.config.ts` oder `globals.css` `:root`
- [ ] `.sr` + IntersectionObserver → Framer Motion `whileInView`
- [ ] PHP includes → Sanity-Schema + `groq` Queries
