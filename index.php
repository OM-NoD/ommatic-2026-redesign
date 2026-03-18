<?php
$page_title       = 'OMmatic – Legal Marketing & Performance Ads für Kanzleien | Google Ads, SEO, Webdesign';
$page_description = 'OMmatic ist Deutschlands führende Marketing-Agentur für Rechtsanwaltskanzleien. Messbare Mandantengewinnung durch Google Ads, SEO, Webdesign und Performance Marketing. Kostenlose Erstberatung.';
$page_canonical   = 'https://ommatic.de/';
$hide_contact_section = true; // Startseite hat eigenes Kontaktformular inline
$page_hreflang_de = 'https://ommatic.de/';
$page_hreflang_en = 'https://ommatic.de/en/';
require_once 'includes/header.php';
?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero" id="hero" aria-labelledby="hero-h1">
  <div class="hero-mesh" aria-hidden="true">
    <div class="mesh-blob mesh-1"></div>
    <div class="mesh-blob mesh-2"></div>
    <div class="mesh-blob mesh-3"></div>
  </div>
  <div class="hero-grid-bg" aria-hidden="true"></div>

  <div class="container hero-content">
    <div class="hero-grid">

      <div class="hero-left">
        <div class="sr"><span class="tag-chip">Legal · Tech · Growth</span></div>
        <h1 class="hero-title sr sr-d1" id="hero-h1">
          Mehr Mandanten.<br>
          <span class="gradient-text">Messbar. Digital.</span>
          <span class="line-sub">Die führende Kanzlei-Marketing-Agentur.</span>
        </h1>
        <p class="hero-sub sr sr-d2">
          OMmatic ist Deutschlands spezialisierte Performance-Marketing-Agentur für Rechtsanwaltskanzleien. Datenbasiert. ROI-fokussiert. Full-Service aus einer Hand.
        </p>
        <div class="hero-ctas sr sr-d3">
          <a href="#kontakt" class="btn btn-primary btn-lg">Kostenlose Erstberatung
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#leistungen" class="btn btn-ghost btn-lg">Leistungen entdecken</a>
        </div>
        <div class="hero-stats sr sr-d4">
          <div class="hs-card">
            <div class="hs-num" data-count="150" data-suffix="+">0</div>
            <div class="hs-label">Betreute Kanzleien</div>
          </div>
          <div class="hs-card">
            <div class="hs-num" data-count="150" data-suffix="+">0</div>
            <div class="hs-label">TOP10 SEO Rankings</div>
          </div>
          <div class="hs-card">
            <div class="hs-num">4,8<span style="font-size:.6em">★</span></div>
            <div class="hs-label">Google Bewertung</div>
          </div>
        </div>
      </div>

      <div class="hero-right sr sr-d2">
        <div class="hero-badge" aria-hidden="true">
          <div class="hero-badge-num">+312%</div>
          <div class="hero-badge-label">Ø ROI</div>
        </div>
        <div class="hero-visual">
          <div class="hv-top">
            <div class="hv-dot" style="background:var(--primary)"></div>
            <div class="hv-dot" style="background:var(--indigo)"></div>
            <div class="hv-dot" style="background:var(--teal)"></div>
            <span class="hv-title">Performance Dashboard</span>
          </div>
          <div class="hv-kpi-grid">
            <div class="hv-kpi">
              <div class="hv-kpi-label">Anfragen / Monat</div>
              <div class="hv-kpi-value">48</div>
            </div>
            <div class="hv-kpi">
              <div class="hv-kpi-label">Conversion Rate</div>
              <div class="hv-kpi-value">8,3%</div>
            </div>
            <div class="hv-kpi">
              <div class="hv-kpi-label">Kosten / Anfrage</div>
              <div class="hv-kpi-value">24 €</div>
            </div>
            <div class="hv-kpi">
              <div class="hv-kpi-label">ROAS</div>
              <div class="hv-kpi-value">5,8×</div>
            </div>
          </div>
          <div class="hv-chart" id="heroChart" aria-hidden="true">
            <div class="bar" style="height:35%"></div>
            <div class="bar" style="height:52%"></div>
            <div class="bar" style="height:44%"></div>
            <div class="bar" style="height:68%"></div>
            <div class="bar" style="height:58%"></div>
            <div class="bar" style="height:80%"></div>
            <div class="bar" style="height:72%"></div>
            <div class="bar" style="height:90%"></div>
            <div class="bar" style="height:85%"></div>
            <div class="bar" style="height:100%"></div>
          </div>
          <div class="hv-footer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:16px;height:16px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
            Anfragen +312% im Vergleich zum Vorjahr
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="hero-bottom-line" aria-hidden="true"></div>
</section>


<!-- ============================================================
     SERVICES STRIP
     ============================================================ -->
<div class="services-strip" aria-label="Unsere Leistungen im Überblick">
  <div class="container">
    <div class="services-strip-inner">
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" style="color:var(--primary)"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Kanzleimarketing
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        SEO-Optimierung
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="4" height="12" rx="1"/><rect x="10" y="5" width="4" height="16" rx="1"/><rect x="17" y="12" width="4" height="9" rx="1"/></svg>
        Google Ads Kampagnen
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        Webdesign
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v4a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M19 10v1a7 7 0 0 1-14 0v-1"/><line x1="12" y1="18" x2="12" y2="22"/></svg>
        KI-Anrufbeantworter
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        Consulting
      </span>
      <div class="sstrip-sep" aria-hidden="true"></div>
      <span class="sstrip-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        Full-Service Agentur
      </span>
    </div>
  </div>
</div>


<!-- ============================================================
     SERVICES 3×2 GRID
     ============================================================ -->
<section class="services-section" id="leistungen" aria-labelledby="services-h">
  <div class="container">
    <div class="sh sr">
      <span class="tag-chip">Unsere Leistungen</span>
      <h2 class="sh-title" id="services-h">Alles, was Ihre Kanzlei<br><span class="gradient-text">nach vorne bringt.</span></h2>
      <p class="sh-sub">Maßgeschneiderte Online-Marketing-Lösungen, die speziell für Rechtsanwaltskanzleien entwickelt wurden – für messbare Ergebnisse von Anfang an.</p>
    </div>
    <div class="services-grid">

      <article class="svc-card sr">
        <div class="svc-icon-wrap ic-cyan">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="4" height="12" rx="1"/><rect x="10" y="5" width="4" height="16" rx="1"/><rect x="17" y="12" width="4" height="9" rx="1"/></svg>
        </div>
        <div class="svc-label">Performance Advertising</div>
        <h3 class="svc-title">Google Ads für<br>Rechtsanwälte</h3>
        <p class="svc-text">Gezieltes Performance-Marketing, das potenzielle Mandanten in dem Moment erreicht, wenn sie einen Anwalt suchen. Mit Legal-spezifischem Keyword-Know-how und kontinuierlicher Optimierung für maximale Mandantenanfragen.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Legal-Keyword-Silos &amp; Search-Kampagnen</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Performance Max für maximale Reichweite</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>DSGVO-konformes Tracking &amp; wöchentliches Reporting</div>
        </div>
      </article>

      <article class="svc-card sr sr-d1">
        <div class="svc-icon-wrap ic-indigo">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </div>
        <div class="svc-label">Social Advertising</div>
        <h3 class="svc-title">Facebook &amp;<br>Instagram Ads</h3>
        <p class="svc-text">Zielgruppenspezifische Social-Media-Kampagnen, die Mandanten genau dort erreichen, wo sie täglich aktiv sind. Rechtlich konforme Creatives und datenbasierte Budgetsteuerung für maximalen ROI.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Lead-Kampagnen speziell für Kanzleien</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Custom &amp; Lookalike Audiences</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Kreatives Content-Design mit rechtlichem Bezug</div>
        </div>
      </article>

      <article class="svc-card sr sr-d2">
        <div class="svc-icon-wrap ic-teal">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <div class="svc-label">Web &amp; Design</div>
        <h3 class="svc-title">Webdesign &amp;<br>Entwicklung</h3>
        <p class="svc-text">Conversion-optimierte Kanzlei-Websites, die Vertrauen erzeugen und Mandanten zum Kontakt bewegen. Vollständig DSGVO-konform, barrierefrei und für alle Geräte optimiert – mit höchsten Core Web Vitals.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Mobile-first Design &amp; schnelle Ladezeiten</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>WordPress, Elementor &amp; individuelle Entwicklung</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Conversion-Optimierung &amp; A/B-Testing</div>
        </div>
      </article>

      <article class="svc-card sr">
        <div class="svc-icon-wrap ic-cyan">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </div>
        <div class="svc-label">Organische Sichtbarkeit</div>
        <h3 class="svc-title">SEO für<br>Kanzleien</h3>
        <p class="svc-text">Nachhaltige Sichtbarkeit in Google durch Legal-spezifische SEO-Strategien. Von technischer Optimierung über lokales SEO bis hin zu hochwertigem Legal-Content – damit Ihre Kanzlei zuverlässig gefunden wird.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Lokales SEO &amp; Google Business Optimierung</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Technisches SEO &amp; Core Web Vitals</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Legal Content-Strategie &amp; Linkbuilding</div>
        </div>
      </article>

      <article class="svc-card sr sr-d1">
        <div class="svc-icon-wrap ic-indigo">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
        </div>
        <div class="svc-label">Conversion</div>
        <h3 class="svc-title">SEA<br>Landing Pages</h3>
        <p class="svc-text">Hochkonvertierende Landing Pages speziell für Ihre Anzeigenkampagnen. Above-the-Fold-Kontaktformulare, rechtsgebietsspezifische Trust-Signale und kontinuierliches A/B-Testing für maximale Anfragen bei minimalem Cost-per-Lead.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Kontaktformular above the fold</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Rechtsgebiets-spezifische Texte &amp; Argumente</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>A/B-Testing, Heatmaps &amp; laufende Optimierung</div>
        </div>
      </article>

      <article class="svc-card sr sr-d2">
        <div class="svc-icon-wrap ic-teal">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
        </div>
        <div class="svc-label">Transparenz &amp; Analyse</div>
        <h3 class="svc-title">Performance<br>Analytics</h3>
        <p class="svc-text">Echtzeit-Dashboards und monatliche Berichte – jeder Euro Ihrer Investition ist nachvollziehbar und ROI-skaliert. Kein Blindflug, sondern vollständige Transparenz über alle Kanäle für fundierte Wachstumsentscheidungen.</p>
        <div class="svc-features">
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Echtzeit-Dashboard für alle Kanäle</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Monatliche Berichte &amp; persönliche Calls</div>
          <div class="svc-feat"><div class="svc-feat-check"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>Klare KPIs: CPL, ROAS, Conversion Rate</div>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ============================================================
     STATS
     ============================================================ -->
<section class="stats-section" id="ergebnisse" aria-labelledby="stats-h">
  <div class="stats-bg-glow" aria-hidden="true"></div>
  <div class="container">
    <div class="sh sr" style="margin-bottom:56px;">
      <span class="tag-chip">Zahlen &amp; Fakten</span>
      <h2 class="sh-title" id="stats-h">Ergebnisse, die<br><span class="gradient-text">für sich sprechen.</span></h2>
    </div>
    <div class="stats-grid">
      <div class="stat-item sr">
        <div class="stat-num" data-count="150" data-suffix="+">0</div>
        <div class="stat-label">Betreute Kanzleien bundesweit</div>
      </div>
      <div class="stat-item sr sr-d1">
        <div class="stat-num" data-count="150" data-suffix="+">0</div>
        <div class="stat-label">Kundenseiten in den Google TOP 10</div>
      </div>
      <div class="stat-item sr sr-d2">
        <div class="stat-num">4,8<span style="font-size:.5em;vertical-align:.15em">★</span></div>
        <div class="stat-label">Durchschnittliche Google-Bewertung</div>
      </div>
      <div class="stat-item sr sr-d3">
        <div class="stat-num" data-count="3" data-suffix="×">0</div>
        <div class="stat-label">Mehr Mandantenanfragen im Ø nach 3 Monaten</div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     WHY OMMATIC
     ============================================================ -->
<section class="why-section" id="warum-ommatic" aria-labelledby="why-h">
  <div class="container">
    <div class="sh sr">
      <span class="tag-chip">Warum OMmatic</span>
      <h2 class="sh-title" id="why-h">Der Unterschied,<br><span class="gradient-text">der zählt.</span></h2>
      <p class="sh-sub">Wir sind keine generische Marketingagentur. Wir sind spezialisiert auf Legal Marketing – mit dem Wissen, den Tools und der nachgewiesenen Erfahrung, die es wirklich braucht.</p>
    </div>
    <div class="why-grid">
      <div class="why-card sr">
        <span class="why-num" aria-hidden="true">01</span>
        <div class="why-icon-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="why-title">100% Legal-Spezialisierung</h3>
        <p class="why-text">Wir arbeiten ausschließlich mit Rechtsanwaltskanzleien. Das bedeutet tiefes Branchen-Know-how, spezialisierte Legal-Keywords und ein vollständiges Verständnis für die Anforderungen des Anwaltsmarketings – von BRAO-Konformität bis zur Mandantengewinnung in spezifischen Rechtsgebieten.</p>
      </div>
      <div class="why-card sr sr-d1">
        <span class="why-num" aria-hidden="true">02</span>
        <div class="why-icon-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <h3 class="why-title">Messbarer ROI, keine leeren Versprechen</h3>
        <p class="why-text">Jede Kampagne, jede Maßnahme ist messbar und nachvollziehbar. Sie erhalten klare KPIs, Echtzeit-Dashboards und monatliche Berichte. Kein Blindflug – nur datenbasierte Entscheidungen mit nachweisbaren Ergebnissen für Ihre Kanzlei.</p>
      </div>
      <div class="why-card sr sr-d2">
        <span class="why-num" aria-hidden="true">03</span>
        <div class="why-icon-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </div>
        <h3 class="why-title">Full-Service aus einer Hand</h3>
        <p class="why-text">Von der Website über Google Ads bis hin zu Social Media und SEO – alles kommt von einem einzigen, spezialisierten Team. Kein Koordinationsaufwand, keine Kommunikationsverluste. Nur konsequentes, messbares Wachstum.</p>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     PROCESS
     ============================================================ -->
<section class="process-section" id="ablauf" aria-labelledby="process-h">
  <div class="container">
    <div class="sh sr">
      <span class="tag-chip">Unser Ablauf</span>
      <h2 class="sh-title" id="process-h">In 4 Schritten zu<br><span class="gradient-text">mehr Mandanten.</span></h2>
    </div>
    <div class="process-track">
      <div class="process-step sr">
        <div class="proc-circle">01</div>
        <h3 class="proc-title">Analyse</h3>
        <p class="proc-text">Wir analysieren Ihre aktuelle Online-Präsenz, den Wettbewerb und Ihre Zielgruppe – datenbasiert und präzise auf Ihre Kanzlei und Ihr Rechtsgebiet zugeschnitten.</p>
      </div>
      <div class="process-step sr sr-d1">
        <div class="proc-circle">02</div>
        <h3 class="proc-title">Strategie</h3>
        <p class="proc-text">Auf Basis der Analyse entwickeln wir eine maßgeschneiderte Wachstumsstrategie mit klaren Zielen, realistischem Budget, Zeitplan und messbaren KPIs.</p>
      </div>
      <div class="process-step sr sr-d2">
        <div class="proc-circle">03</div>
        <h3 class="proc-title">Umsetzung</h3>
        <p class="proc-text">Unser Team setzt alle Maßnahmen professionell und termingerecht um – von der technischen Einrichtung über Kampagnenerstellung bis zum erfolgreichen Launch.</p>
      </div>
      <div class="process-step sr sr-d3">
        <div class="proc-circle">04</div>
        <h3 class="proc-title">Optimierung</h3>
        <p class="proc-text">Kontinuierliches A/B-Testing, Keyword-Optimierung und intelligente Budgetallokation sorgen für stetig bessere Ergebnisse und sinkende Kosten pro Anfrage.</p>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     REVIEWS
     ============================================================ -->
<section class="reviews-section" id="referenzen" aria-labelledby="reviews-h">
  <div class="container">
    <div class="sh sr">
      <span class="tag-chip">Kundenstimmen</span>
      <h2 class="sh-title" id="reviews-h">Was unsere Kanzlei-Kunden<br><span class="gradient-text">über uns sagen.</span></h2>
    </div>
    <div class="reviews-grid">
      <div class="review-card sr">
        <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
        <p class="review-quote">„OMmatic hat unsere Mandatsakquise komplett transformiert. Innerhalb von 3 Monaten hatten wir dreimal mehr qualifizierte Anfragen über Google. Das Team versteht wirklich, was Kanzleien brauchen und liefert messbare Ergebnisse."</p>
        <div class="review-author">
          <div class="review-avatar av-cyan">MK</div>
          <div>
            <div class="review-name">Dr. M. Kirchner</div>
            <div class="review-role">Rechtsanwalt · Familienrecht, München</div>
          </div>
        </div>
      </div>
      <div class="review-card sr sr-d1">
        <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
        <p class="review-quote">„Die neue Website, die OMmatic für unsere Kanzlei erstellt hat, ist hervorragend. Modern, schnell, überzeugend – und die Anfragen über das Kontaktformular haben sich innerhalb des ersten Quartals mehr als verdoppelt."</p>
        <div class="review-author">
          <div class="review-avatar av-indigo">SH</div>
          <div>
            <div class="review-name">Sabine Herrmann</div>
            <div class="review-role">Rechtsanwältin · Arbeitsrecht, Hamburg</div>
          </div>
        </div>
      </div>
      <div class="review-card sr sr-d2">
        <div class="review-stars"><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span></div>
        <p class="review-quote">„Endlich eine Agentur, die Legal Marketing wirklich versteht. Keine generischen Lösungen, sondern maßgeschneiderte Strategien. Unser ROI hat sich innerhalb eines Jahres verdreifacht – mit vollem Überblick über jeden investierten Euro."</p>
        <div class="review-author">
          <div class="review-avatar av-teal">TW</div>
          <div>
            <div class="review-name">Thomas Weber</div>
            <div class="review-role">Partner · Kanzlei Weber &amp; Partner, Frankfurt</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     KONTAKTFORMULAR (CTA-Anker für alle Seiten-CTAs)
     ============================================================ -->
<section class="contact-section" id="kontakt" aria-labelledby="contact-h">
  <div class="container">
    <div class="contact-grid">

      <div class="contact-info sr">
        <span class="tag-chip">Kontakt aufnehmen</span>
        <h2 class="contact-info-title" id="contact-h">
          Bereit für mehr<br><span class="gradient-text">Mandanten?</span>
        </h2>
        <p class="contact-info-sub">
          In einem unverbindlichen Erstgespräch analysieren wir Ihre aktuelle Situation und zeigen Ihnen konkret, wie wir Ihre Kanzlei digital nach vorne bringen – ohne leere Versprechen, nur mit messbaren Ergebnissen.
        </p>
        <div class="contact-details">
          <a href="tel:+4963120691820" class="contact-detail-item">
            <div class="contact-detail-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.15 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.05 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
            </div>
            +49 631 206918 20
          </a>
          <a href="mailto:info@ommatic.de" class="contact-detail-item">
            <div class="contact-detail-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            info@ommatic.de
          </a>
          <div class="contact-detail-item">
            <div class="contact-detail-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            Mo – So, 09:00 – 17:00 Uhr
          </div>
        </div>
        <div class="contact-trust">
          <div class="contact-trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div class="contact-trust-text">
            <strong>Kostenlos &amp; unverbindlich.</strong><br>
            Unser Erstgespräch ist für Sie ohne Kosten und ohne Verpflichtung.
          </div>
        </div>
      </div>

      <div class="contact-form-wrap sr sr-d1">
        <h3 class="form-title">Erstberatung anfragen</h3>
        <p class="form-sub">Füllen Sie das Formular aus – wir melden uns innerhalb von 24 Stunden.</p>
        <form id="contactForm" method="post" action="/kontakt/send.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="f-name">Name <span class="req">*</span></label>
              <input type="text" id="f-name" name="name" placeholder="Ihr vollständiger Name" required>
            </div>
            <div class="form-group">
              <label for="f-kanzlei">Kanzlei</label>
              <input type="text" id="f-kanzlei" name="kanzlei" placeholder="Name Ihrer Kanzlei">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="f-email">E-Mail <span class="req">*</span></label>
              <input type="email" id="f-email" name="email" placeholder="ihre@email.de" required>
            </div>
            <div class="form-group">
              <label for="f-tel">Telefon</label>
              <input type="tel" id="f-tel" name="telefon" placeholder="+49 ...">
            </div>
          </div>
          <div class="form-group">
            <label for="f-leistung">Gewünschte Leistung</label>
            <select id="f-leistung" name="leistung">
              <option value="" disabled selected>Bitte wählen ...</option>
              <option value="google-ads">Google Ads für Kanzleien</option>
              <option value="social-ads">Facebook &amp; Instagram Ads</option>
              <option value="webdesign">Webdesign &amp; Entwicklung</option>
              <option value="seo">SEO für Anwälte</option>
              <option value="landing-pages">SEA Landing Pages</option>
              <option value="full-service">Full-Service (alles)</option>
              <option value="beratung">Erstberatung / Analyse</option>
            </select>
          </div>
          <div class="form-group">
            <label for="f-nachricht">Nachricht</label>
            <textarea id="f-nachricht" name="nachricht" placeholder="Kurze Beschreibung Ihrer aktuellen Situation und Ihrer Ziele ..."></textarea>
          </div>
          <div class="form-divider"></div>
          <div class="form-check">
            <input type="checkbox" id="f-dsgvo" name="dsgvo" required>
            <label class="form-check-label" for="f-dsgvo">
              Ich habe die <a href="/datenschutz/">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anfrage zu. <span class="req">*</span>
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg form-submit">
            Anfrage kostenfrei absenden
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </button>
          <p class="form-note">Keine Weitergabe an Dritte. Antwort innerhalb von 24 Stunden.</p>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     FOOTER
     ============================================================ -->

<?php require_once 'includes/footer.php'; ?>
