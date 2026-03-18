<?php
// ----------------------------------------------------------------
// PHP-Template-Include: includes/header.php
// Erwartete Variablen (müssen VOR dem Include gesetzt werden):
//   $page_title         – <title>-Inhalt
//   $page_description   – meta description
//   $page_canonical     – canonical URL + og:url
//   $page_lang          – html lang-Attribut (Default: 'de')
//   $page_schema        – optionaler zusätzlicher JSON-LD-String
//   $page_noindex       – bool, wenn true: noindex, nofollow
//   $page_hreflang_de   – hreflang de URL (optional)
//   $page_hreflang_en   – hreflang en URL (optional)
// ----------------------------------------------------------------

$page_lang        = $page_lang        ?? 'de';
$page_title       = $page_title       ?? 'OMmatic – Legal Marketing für Kanzleien';
$page_description = $page_description ?? 'Deutschlands führende Performance-Marketing-Agentur für Rechtsanwaltskanzleien.';
$page_canonical   = $page_canonical   ?? 'https://ommatic.de';
$page_noindex     = $page_noindex     ?? false;
$page_schema      = $page_schema      ?? '';
$page_hreflang_de = $page_hreflang_de ?? '';
$page_hreflang_en = $page_hreflang_en ?? '';

$robots_content = $page_noindex ? 'noindex, nofollow' : 'index, follow';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($page_lang) ?>" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="robots" content="<?= $robots_content ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:type"        content="website">
  <meta name="twitter:card"       content="summary_large_image">
  <link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
<?php if ($page_hreflang_de): ?>
  <link rel="alternate" hreflang="de" href="<?= htmlspecialchars($page_hreflang_de) ?>">
<?php endif; ?>
<?php if ($page_hreflang_en): ?>
  <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($page_hreflang_en) ?>">
<?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css">

  <!-- Schema.org Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://ommatic.de/#organization",
    "name": "OMmatic GmbH",
    "url": "https://ommatic.de",
    "description": "Deutschlands führende Performance-Marketing-Agentur für Rechtsanwaltskanzleien.",
    "telephone": "+49 631 20691820",
    "email": "info@ommatic.de",
    "openingHours": "Mo-Su 09:00-17:00",
    "address": { "@type": "PostalAddress", "addressCountry": "DE" },
    "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.8", "bestRating": "5", "reviewCount": "150" }
  }
  </script>
<?php if ($page_schema): ?>
  <!-- Seiten-spezifisches Schema -->
  <script type="application/ld+json">
  <?= $page_schema ?>
  </script>
<?php endif; ?>
</head>
<body>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="header" id="header">
  <div class="container header-inner">

    <a href="/" class="logo" aria-label="OMmatic – zur Startseite">OMmatic<span class="dot">.</span></a>

    <nav class="nav-desktop" aria-label="Hauptnavigation">
      <a href="/kanzleimarketing/"  class="nav-link">Leistungen</a>
      <a href="/#ergebnisse"        class="nav-link">Ergebnisse</a>
      <a href="/ueber-uns/"         class="nav-link">Über uns</a>
      <a href="/erfolge/"           class="nav-link">Erfolge</a>
      <a href="/blog/"              class="nav-link">Blog</a>
      <a href="/kontakt/"           class="nav-link">Kontakt</a>
    </nav>

    <div class="header-right">
      <button class="toggle-theme" id="themeToggle" aria-label="Dark/Light Mode umschalten">
        <svg class="i-moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
        <svg class="i-sun"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
      </button>
      <a href="/kontakt/" class="btn btn-primary">Beratung anfragen</a>
      <button class="hamburger" id="hamburger" aria-label="Menü öffnen/schließen">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

<nav class="mobile-nav" id="mobileNav" aria-label="Mobile Navigation">
  <a href="/kanzleimarketing/"  class="nav-link">Leistungen</a>
  <a href="/#ergebnisse"        class="nav-link">Ergebnisse</a>
  <a href="/ueber-uns/"         class="nav-link">Über uns</a>
  <a href="/erfolge/"           class="nav-link">Erfolge</a>
  <a href="/blog/"              class="nav-link">Blog</a>
  <a href="/kontakt/"           class="btn btn-primary">Beratung anfragen</a>
</nav>
