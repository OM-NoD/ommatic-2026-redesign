<?php
$page_title       = 'Partnerschaften – OMmatic Legal Marketing';
$page_description = 'OMmatic arbeitet mit führenden Partnern zusammen: Google Partner, Technologie- und Medienpartnerschaften für maximale Kanzlei-Performance.';
$page_canonical   = 'https://ommatic.de/partnerschaften/';
require_once '../includes/header.php';
?>
<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="page-hero">
    <div class="hero-mesh" aria-hidden="true">
      <div class="mesh-blob mesh-1"></div>
      <div class="mesh-blob mesh-2"></div>
    </div>
    <div class="container page-hero-inner">
      <div class="sr">
        <span class="tag-chip">Partnerschaften</span>
      </div>
      <h1 class="page-hero-title sr sr-d1">
        Unsere Partnerschaften
      </h1>
      <p class="page-hero-sub sr sr-d2">
        Starke Partner für starke Ergebnisse im Legal Marketing.
      </p>
      <div class="page-hero-ctas sr sr-d3">
        <a href="#partner-werden" class="btn btn-primary btn-lg">Partner werden</a>
        <a href="#partner" class="btn btn-ghost btn-lg">Alle Partner ansehen</a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       GOOGLE PARTNER FEATURED CARD
       ============================================================ -->
  <section class="content-section alt">
    <div class="container">
      <div class="sr" style="background:linear-gradient(135deg,rgba(0,194,255,.08) 0%,rgba(124,115,230,.08) 100%);border:2px solid var(--primary);border-radius:var(--radius);padding:clamp(2rem,5vw,3.5rem);display:grid;grid-template-columns:auto 1fr;gap:2.5rem;align-items:center;">

        <!-- Google G Icon Badge -->
        <div style="width:5rem;height:5rem;background:var(--bg-card);border-radius:1rem;border:1px solid var(--border-s);display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:0 4px 24px var(--primary-glow);">
          <svg viewBox="0 0 24 24" style="width:2.5rem;height:2.5rem;" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
        </div>

        <div>
          <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;flex-wrap:wrap;">
            <span class="tag-chip" style="background:var(--primary-dim);color:var(--primary);">Zertifizierter Google Partner</span>
            <span class="tag-chip">Premium-Status</span>
          </div>
          <h2 style="font-family:var(--font-h);font-size:clamp(1.4rem,3vw,2rem);font-weight:800;margin:0 0 1rem;">
            OMmatic ist <span class="gradient-text">zertifizierter Google Partner</span>
          </h2>
          <p style="font-size:.95rem;color:var(--text-2);line-height:1.75;margin:0 0 1.25rem;">
            Als zertifizierter Google Partner profitieren unsere Kanzlei-Kunden von direktem Support durch Google, frühzeitigem Zugang zu Beta-Features und nachgewiesener Expertise in der Kampagnenverwaltung. Diese Zertifizierung steht für die höchsten Standards in Google Ads-Kampagnen.
          </p>
          <div style="display:flex;flex-wrap:wrap;gap:1.25rem;">
            <?php foreach ([
              'Direkter Google-Support',
              'Beta-Feature-Zugang',
              'Nachgewiesene Expertise',
              'Höchste Kampagnenstandards',
            ] as $benefit): ?>
            <div style="display:flex;align-items:center;gap:.5rem;font-size:.85rem;color:var(--text-2);">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:.9rem;height:.9rem;color:var(--primary);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <?= htmlspecialchars($benefit) ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PARTNER TYPES
       ============================================================ -->
  <section class="content-section" id="partner">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Unser Netzwerk</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Partnerarten im <span class="gradient-text">Überblick</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;">
          Drei Kategorien, die unser Leistungsangebot für Kanzleien ergänzen und verstärken.
        </p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem;">

        <!-- Technologiepartner -->
        <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:2rem;">
          <div class="feature-icon ic-cyan" style="width:3rem;height:3rem;border-radius:.75rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
          </div>
          <h3 style="font-family:var(--font-h);font-size:1.15rem;font-weight:700;margin:0 0 .75rem;">Technologiepartner</h3>
          <p style="font-size:.9rem;color:var(--text-2);line-height:1.75;margin-bottom:1.25rem;">
            Führende Software-Anbieter, Tracking-Tools und API-Integrationen für lückenlose Performance-Messung. Wir setzen auf Technologien, die messbare Ergebnisse liefern.
          </p>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.5rem;">
            <?php foreach (['Analytics & Tracking', 'Call Tracking Software', 'CRM-Integrationen', 'KI & Automatisierung'] as $item): ?>
            <li style="font-size:.85rem;color:var(--text-2);display:flex;gap:.5rem;align-items:center;">
              <span style="color:var(--primary);">·</span> <?= htmlspecialchars($item) ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Medienpartner -->
        <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:2rem;">
          <div class="feature-icon ic-indigo" style="width:3rem;height:3rem;border-radius:.75rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
          </div>
          <h3 style="font-family:var(--font-h);font-size:1.15rem;font-weight:700;margin:0 0 .75rem;">Medienpartner</h3>
          <p style="font-size:.9rem;color:var(--text-2);line-height:1.75;margin-bottom:1.25rem;">
            Juristische Fachportale, Anwaltsverzeichnisse und Branchenmedien, über die wir Sichtbarkeit für unsere Kanzlei-Kunden schaffen und ausbauen.
          </p>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.5rem;">
            <?php foreach (['anwalt.de', 'Juristische Fachportale', 'Regionale Branchenverzeichnisse', 'Rechtsanwaltskammern online'] as $item): ?>
            <li style="font-size:.85rem;color:var(--text-2);display:flex;gap:.5rem;align-items:center;">
              <span style="color:var(--indigo);">·</span> <?= htmlspecialchars($item) ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Netzwerkpartner -->
        <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:2rem;">
          <div class="feature-icon ic-teal" style="width:3rem;height:3rem;border-radius:.75rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 style="font-family:var(--font-h);font-size:1.15rem;font-weight:700;margin:0 0 .75rem;">Netzwerkpartner</h3>
          <p style="font-size:.9rem;color:var(--text-2);line-height:1.75;margin-bottom:1.25rem;">
            Rechtsanwaltskammern, Fachanwaltsverbände und professionelle Netzwerke, die unsere Kanzlei-Kunden mit relevanten Gemeinschaften verbinden.
          </p>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.5rem;">
            <?php foreach (['Rechtsanwaltskammern', 'Fachanwaltsverbände', 'Berufsverbände', 'Regionale Kanzleinetzwerke'] as $item): ?>
            <li style="font-size:.85rem;color:var(--text-2);display:flex;gap:.5rem;align-items:center;">
              <span style="color:var(--teal);">·</span> <?= htmlspecialchars($item) ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       EXISTING PARTNERS GRID
       ============================================================ -->
  <section class="content-section alt">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:var(--font-h);font-size:clamp(1.5rem,3vw,2.25rem);font-weight:800;">
          Ausgewählte Partner
        </h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:1rem;" class="sr">
        <?php
        $partners = [
            ['name' => 'jur|nodes',        'cat' => 'Legal Tech'],
            ['name' => 'VAReNo',            'cat' => 'Kanzleiverwaltung'],
            ['name' => 'Flexilead',         'cat' => 'Lead-Management'],
            ['name' => 'Actaport',          'cat' => 'Kanzleisoftware'],
            ['name' => 'Silberfluss',       'cat' => 'Legal Design'],
            ['name' => 'Justin Legal',      'cat' => 'Legal Tech'],
            ['name' => 'Lawlink',           'cat' => 'Mandantenportal'],
            ['name' => 'Rawtime',           'cat' => 'Zeiterfassung'],
            ['name' => 'B2B Evolution',     'cat' => 'B2B Marketing'],
            ['name' => 'Eurojuris',         'cat' => 'Anwaltsnetzwerk'],
            ['name' => 'stp.one',           'cat' => 'Kanzleisoftware'],
            ['name' => 'Muxom',             'cat' => 'Tech Solutions'],
        ];
        foreach ($partners as $p): ?>
        <div style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.25rem;text-align:center;transition:border-color .2s,transform .2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)'" onmouseout="this.style.borderColor='var(--border-s)';this.style.transform='translateY(0)'">
          <div style="width:2.5rem;height:2.5rem;border-radius:.625rem;background:var(--primary-dim);display:flex;align-items:center;justify-content:center;margin:0 auto .75rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.2rem;height:1.2rem;color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <div style="font-weight:700;font-size:.9rem;margin-bottom:.25rem;"><?= htmlspecialchars($p['name']) ?></div>
          <div style="font-size:.75rem;color:var(--text-3);"><?= htmlspecialchars($p['cat']) ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       PARTNER WERDEN
       ============================================================ -->
  <section class="content-section" id="partner-werden">
    <div class="container">
      <div class="two-col sr">

        <div class="prose">
          <span class="tag-chip" style="margin-bottom:1.25rem;display:inline-block;">Partner werden</span>
          <h2>Partnerschaft mit OMmatic anfragen</h2>
          <p>
            Sie sind Softwareanbieter, Fachanwaltsverband oder Dienstleister im Legal-Bereich? Werden Sie OMmatic-Partner und profitieren Sie von unserem direkten Zugang zu über 150 aktiv betreuten Kanzleien in Deutschland.
          </p>
          <p>
            Wir suchen Partner, die wie wir auf Qualität, Transparenz und messbare Ergebnisse setzen. Gemeinsam können wir Kanzleien umfassendere und bessere Lösungen anbieten.
          </p>
          <a href="/kontakt/" class="btn btn-primary">Partnerschaft anfragen</a>
        </div>

        <div style="display:flex;flex-direction:column;gap:.875rem;">
          <?php
          $benefits = [
            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Direkter Zugang zu 150+ Kanzleien'],
            ['icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z', 'label' => 'Co-Marketing & gemeinsame Inhalte'],
            ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'label' => 'Technische Integrationen möglich'],
            ['icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'label' => 'Gemeinsame Events & Webinare'],
            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'label' => 'Empfehlungsbasiertes Netzwerk'],
          ];
          foreach ($benefits as $b): ?>
          <div style="display:flex;align-items:center;gap:.875rem;background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1rem 1.25rem;">
            <div style="width:2rem;height:2rem;border-radius:.5rem;background:var(--primary-dim);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="<?= $b['icon'] ?>"/></svg>
            </div>
            <span style="font-size:.9rem;color:var(--text-2);"><?= htmlspecialchars($b['label']) ?></span>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA BANNER
       ============================================================ -->
  <section class="cta-banner">
    <div class="container">
      <div class="cta-banner-inner sr">
        <h2 class="cta-banner-title">Partnerschaft anfragen</h2>
        <p class="cta-banner-sub">
          Werden Sie Teil des OMmatic-Partnernetzwerks und profitieren Sie von unserem einzigartigen Zugang zum deutschen Legal-Marketing-Markt.
        </p>
        <div class="cta-banner-btns">
          <a href="/kontakt/" class="btn btn-primary btn-lg">Partnerschaft anfragen</a>
          <a href="/loesungen/" class="btn btn-ghost btn-lg">Unsere Lösungen</a>
        </div>
      </div>
    </div>
  </section>

</main>
<?php require_once '../includes/footer.php'; ?>
