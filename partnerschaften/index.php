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
       TECHNOLOGY PARTNERS GRID
       ============================================================ -->
  <section class="content-section alt" id="technologie-partner">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Technologie-Ökosystem</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.5rem,3vw,2.25rem);font-weight:800;margin-top:1rem;">
          Führende <span class="gradient-text">Technologiepartner</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;">
          Wir arbeiten mit den besten Tools und Plattformen – für messbare Ergebnisse in jeder Kanzlei-Kampagne.
        </p>
      </div>

      <?php
      /* Hilfsfunktion: Initialen aus Name generieren (max. 2 Zeichen) */
      function partner_initials(string $name): string {
          $words = preg_split('/[\s\-_]+/', trim($name));
          if (count($words) >= 2) {
              return strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
          }
          return strtoupper(substr($name, 0, 2));
      }

      /* Farb-Hash: deterministisch, aber schön bunt */
      function partner_color(string $name): string {
          $colors = ['#4f46e5','#0ea5e9','#10b981','#f59e0b','#ef4444','#8b5cf6','#ec4899','#06b6d4','#84cc16','#f97316'];
          return $colors[abs(crc32($name)) % count($colors)];
      }

      $tech_partners = [
          ['name' => 'Google',            'cat' => 'Ads & Analytics',       'domain' => 'google.com',           'url' => 'https://ads.google.com/'],
          ['name' => 'Meta',              'cat' => 'Social Ads',             'domain' => 'meta.com',             'url' => 'https://www.meta.com/'],
          ['name' => 'Microsoft',         'cat' => 'Microsoft Advertising',  'domain' => 'microsoft.com',        'url' => 'https://ads.microsoft.com/'],
          ['name' => 'HubSpot',           'cat' => 'CRM & Automation',       'domain' => 'hubspot.com',          'url' => 'https://www.hubspot.com/'],
          ['name' => 'Semrush',           'cat' => 'SEO & Content',          'domain' => 'semrush.com',          'url' => 'https://www.semrush.com/'],
          ['name' => 'Ahrefs',            'cat' => 'SEO & Backlink-Analyse', 'domain' => 'ahrefs.com',           'url' => 'https://ahrefs.com/'],
          ['name' => 'Sistrix',           'cat' => 'SEO-Sichtbarkeit',       'domain' => 'sistrix.de',           'url' => 'https://www.sistrix.de/'],
          ['name' => 'Calendly',          'cat' => 'Terminbuchung',          'domain' => 'calendly.com',         'url' => 'https://calendly.com/'],
          ['name' => 'Zapier',            'cat' => 'Workflow-Automatisierung','domain' => 'zapier.com',          'url' => 'https://zapier.com/'],
          ['name' => 'Trustpilot',        'cat' => 'Bewertungsmanagement',   'domain' => 'trustpilot.com',       'url' => 'https://www.trustpilot.com/'],
          ['name' => 'ProvenExpert',      'cat' => 'Kanzlei-Bewertungen',    'domain' => 'provenexpert.com',     'url' => 'https://www.provenexpert.com/'],
          ['name' => 'OptimizeLocation', 'cat' => 'Local SEO',              'domain' => 'optimizelocation.com', 'url' => 'https://optimizelocation.com/'],
          ['name' => 'WP Engine',         'cat' => 'Managed WordPress',      'domain' => 'wpengine.com',         'url' => 'https://wpengine.com/'],
          ['name' => 'Cloudflare',        'cat' => 'CDN & Security',         'domain' => 'cloudflare.com',       'url' => 'https://www.cloudflare.com/'],
      ];
      ?>

      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:1.25rem;" class="sr">
        <?php foreach ($tech_partners as $p):
            $logo     = 'https://logo.clearbit.com/' . $p['domain'];
            $initials = partner_initials($p['name']);
            $color    = partner_color($p['name']);
            $bg       = $color . '22'; /* ~13 % opacity */
        ?>
        <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener"
           style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem 1.25rem;text-align:center;transition:border-color .2s,transform .2s,box-shadow .2s;display:block;text-decoration:none;"
           onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-4px)';this.style.boxShadow='0 8px 32px var(--primary-glow)'"
           onmouseout="this.style.borderColor='var(--border-s)';this.style.transform='translateY(0)';this.style.boxShadow='none'">

          <!-- Logo-Bereich: weißer Hintergrund damit farbige Logos sichtbar sind -->
          <div style="height:3.5rem;display:flex;align-items:center;justify-content:center;margin:0 auto .875rem;background:#fff;border-radius:.625rem;padding:.5rem .75rem;">
            <img
              src="<?= htmlspecialchars($logo) ?>"
              alt="<?= htmlspecialchars($p['name']) ?> Logo"
              width="120"
              height="48"
              style="max-height:2.75rem;max-width:7.5rem;width:auto;height:auto;object-fit:contain;display:block;"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
            >
            <!-- Initialen-Fallback -->
            <div style="display:none;width:3rem;height:3rem;border-radius:.75rem;background:<?= htmlspecialchars($bg) ?>;align-items:center;justify-content:center;font-weight:800;font-size:1rem;color:<?= htmlspecialchars($color) ?>;font-family:var(--font-h);">
              <?= htmlspecialchars($initials) ?>
            </div>
          </div>

          <div style="font-weight:700;font-size:.9rem;color:var(--text-1);margin-bottom:.3rem;"><?= htmlspecialchars($p['name']) ?></div>
          <div style="font-size:.75rem;color:var(--text-3);"><?= htmlspecialchars($p['cat']) ?></div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       EXISTING PARTNERS GRID
       ============================================================ -->
  <section class="content-section">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Legal-Tech-Netzwerk</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.5rem,3vw,2.25rem);font-weight:800;margin-top:1rem;">
          Ausgewählte Partner
        </h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1.25rem;" class="sr">
        <?php
        $partners = [
            ['name' => 'jur|nodes',      'cat' => 'Legal Tech',         'domain' => 'jurnodes.de',        'url' => 'https://jurnodes.de/'],
            ['name' => 'VAReNo',          'cat' => 'Kanzleiverwaltung',  'domain' => 'vareno.de',           'url' => 'https://vareno.de/'],
            ['name' => 'Flexilead',       'cat' => 'Lead-Management',    'domain' => 'flexilead.de',        'url' => 'https://flexilead.de/'],
            ['name' => 'Actaport',        'cat' => 'Kanzleisoftware',    'domain' => 'actaport.de',         'url' => 'https://actaport.de/'],
            ['name' => 'Silberfluss',     'cat' => 'Legal Design',       'domain' => 'silberfluss.de',      'url' => 'https://silberfluss.de/'],
            ['name' => 'Justin Legal',    'cat' => 'Legal Tech',         'domain' => 'justin.legal',        'url' => 'https://justin.legal/'],
            ['name' => 'Lawlink',         'cat' => 'Mandantenportal',    'domain' => 'lawlink.de',          'url' => 'https://lawlink.de/'],
            ['name' => 'RAWTIME',         'cat' => 'Video & Multimedia', 'domain' => 'rawtime.de',          'url' => 'https://rawtime.de/'],
            ['name' => 'B2B Evolution',   'cat' => 'B2B Marketing',      'domain' => 'b2b-evolution.de',    'url' => 'https://b2b-evolution.de/'],
            ['name' => 'Eurojuris',       'cat' => 'Anwaltsnetzwerk',    'domain' => 'eurojuris.de',        'url' => 'https://eurojuris.de/'],
            ['name' => 'stp.one',         'cat' => 'Kanzleisoftware',    'domain' => 'stp.one',             'url' => 'https://stp.one/'],
            ['name' => 'Muxom',           'cat' => 'Tech Solutions',     'domain' => 'muxom.de',            'url' => 'https://muxom.de/'],
        ];
        foreach ($partners as $p):
            $logo     = 'https://logo.clearbit.com/' . $p['domain'];
            $initials = partner_initials($p['name']);
            $color    = partner_color($p['name']);
            $bg       = $color . '22';
        ?>
        <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener"
           style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem 1.25rem;text-align:center;transition:border-color .2s,transform .2s,box-shadow .2s;display:block;text-decoration:none;"
           onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-4px)';this.style.boxShadow='0 8px 32px var(--primary-glow)'"
           onmouseout="this.style.borderColor='var(--border-s)';this.style.transform='translateY(0)';this.style.boxShadow='none'">

          <!-- Logo-Bereich: weißer Hintergrund damit farbige Logos sichtbar sind -->
          <div style="height:3.5rem;display:flex;align-items:center;justify-content:center;margin:0 auto .875rem;background:#fff;border-radius:.625rem;padding:.5rem .75rem;">
            <img
              src="<?= htmlspecialchars($logo) ?>"
              alt="<?= htmlspecialchars($p['name']) ?> Logo"
              width="120"
              height="48"
              style="max-height:2.75rem;max-width:7.5rem;width:auto;height:auto;object-fit:contain;display:block;"
              onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
            >
            <!-- Initialen-Fallback -->
            <div style="display:none;width:3rem;height:3rem;border-radius:.75rem;background:<?= htmlspecialchars($bg) ?>;align-items:center;justify-content:center;font-weight:800;font-size:1rem;color:<?= htmlspecialchars($color) ?>;font-family:var(--font-h);">
              <?= htmlspecialchars($initials) ?>
            </div>
          </div>

          <div style="font-weight:700;font-size:.9rem;color:var(--text-1);margin-bottom:.3rem;"><?= htmlspecialchars($p['name']) ?></div>
          <div style="font-size:.75rem;color:var(--text-3);"><?= htmlspecialchars($p['cat']) ?></div>
        </a>
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
