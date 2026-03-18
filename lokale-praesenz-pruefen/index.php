<?php
$page_title       = 'Lokale Präsenz prüfen – OMmatic | Kostenloser Online-Präsenz-Check für Kanzleien';
$page_description = 'Prüfen Sie kostenlos die lokale Online-Präsenz Ihrer Kanzlei. Google MyBusiness, lokales Ranking, Bewertungen – OMmatic analysiert Ihr lokales Potenzial.';
$page_canonical   = 'https://ommatic.de/lokale-praesenz-pruefen/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Lokales Marketing</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Werden Sie lokal<br><span class="gradient-text">wirklich gefunden</span>?
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:680px;margin:1.5rem auto 2.5rem;">
          Prüfen Sie jetzt kostenlos, wie Ihre Kanzlei lokal sichtbar ist. Unser Online-Präsenz-Check analysiert Google MyBusiness, lokale Rankings und Ihre Bewertungssituation.
        </p>
        <a href="#praesenz-pruefen" class="btn btn-primary" style="font-size:1.05rem;padding:1rem 2.5rem;">
          Kostenlos prüfen lassen
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BEDEUTUNG LOKALER SICHTBARKEIT
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="sr">
        <div>
          <span class="tag-chip">Warum es wichtig ist</span>
          <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin:1rem 0 1.5rem;">
            Lokale Suche = Lokale Mandanten
          </h2>
          <p style="color:var(--color-text-muted);line-height:1.8;margin-bottom:1.25rem;">
            Über <strong>80% der Mandantensuchen</strong> auf Google haben einen lokalen Bezug – „Rechtsanwalt [Stadt]" oder „Fachanwalt für [Rechtsgebiet] in der Nähe".
          </p>
          <p style="color:var(--color-text-muted);line-height:1.8;margin-bottom:1.25rem;">
            Wer im lokalen Suchergebnis nicht sichtbar ist, verliert täglich potenzielle Mandanten an die Konkurrenz – ohne es zu merken.
          </p>
          <p style="color:var(--color-text-muted);line-height:1.8;">
            Unser kostenloser Präsenz-Check zeigt Ihnen in wenigen Minuten, wo Sie stehen und was Sie konkret verbessern können.
          </p>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="card" style="padding:1.5rem;text-align:center;">
            <div style="font-size:2.5rem;font-weight:900;color:var(--color-primary);line-height:1;">80%</div>
            <div style="color:var(--color-text-muted);font-size:0.85rem;margin-top:0.5rem;">aller Kanzlei-Suchen haben lokalen Bezug</div>
          </div>
          <div class="card" style="padding:1.5rem;text-align:center;">
            <div style="font-size:2.5rem;font-weight:900;color:var(--color-primary);line-height:1;">3×</div>
            <div style="color:var(--color-text-muted);font-size:0.85rem;margin-top:0.5rem;">mehr Anfragen durch optimiertes MyBusiness</div>
          </div>
          <div class="card" style="padding:1.5rem;text-align:center;">
            <div style="font-size:2.5rem;font-weight:900;color:var(--color-primary);line-height:1;">4.7+</div>
            <div style="color:var(--color-text-muted);font-size:0.85rem;margin-top:0.5rem;">Sternbewertung entscheidet über Kontaktaufnahme</div>
          </div>
          <div class="card" style="padding:1.5rem;text-align:center;">
            <div style="font-size:2.5rem;font-weight:900;color:var(--color-primary);line-height:1;">Top 3</div>
            <div style="color:var(--color-text-muted);font-size:0.85rem;margin-top:0.5rem;">Plätze im Local Pack erhalten 90% der Klicks</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       WAS WIR PRÜFEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;">
          Ihr <span class="gradient-text">Präsenz-Check</span> umfasst
        </h2>
      </div>

      <div style="display:flex;flex-direction:column;gap:1.25rem;max-width:800px;margin:0 auto;">
        <?php
        $items = [
            ['num' => '01', 'title' => 'Google MyBusiness-Profil', 'desc' => 'Ist Ihr Profil vollständig ausgefüllt? Sind alle Informationen korrekt und aktuell? Fotos, Öffnungszeiten, Dienstleistungen.'],
            ['num' => '02', 'title' => 'Lokale Suchmaschinenrankings', 'desc' => 'Auf welchen Positionen erscheint Ihre Kanzlei bei relevanten lokalen Suchanfragen? Welche Mitbewerber sind besser platziert?'],
            ['num' => '03', 'title' => 'Bewertungsanalyse', 'desc' => 'Anzahl, Aktualität und Qualität Ihrer Google-Bewertungen. Wie aktiv antworten Sie auf Bewertungen?'],
            ['num' => '04', 'title' => 'NAP-Konsistenz', 'desc' => 'Sind Name, Adresse und Telefonnummer Ihrer Kanzlei im Internet einheitlich und korrekt angegeben?'],
            ['num' => '05', 'title' => 'Lokale Konkurrenzanalyse', 'desc' => 'Wie positionieren sich Ihre lokalen Mitbewerber? Was machen die Top-Platzierten anders?'],
            ['num' => '06', 'title' => 'Maßnahmenplan', 'desc' => 'Konkrete, priorisierte Handlungsempfehlungen für schnell umsetzbare Verbesserungen.'],
        ];
        foreach ($items as $item): ?>
        <div class="card sr" style="padding:1.75rem;display:flex;align-items:flex-start;gap:1.5rem;">
          <div style="font-size:1.75rem;font-weight:900;color:var(--color-primary);flex-shrink:0;line-height:1;font-family:var(--font-heading);"><?= $item['num'] ?></div>
          <div>
            <h3 style="font-weight:700;margin-bottom:0.4rem;"><?= htmlspecialchars($item['title']) ?></h3>
            <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.6;margin:0;"><?= htmlspecialchars($item['desc']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       KUNDENSTIMMEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;">Kundenstimmen</h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;">
        <?php
        $testimonials = [
            [
                'text' => 'Wir wussten gar nicht, wie schlecht unser Google MyBusiness-Profil aufgestellt war. Nach der Optimierung haben sich unsere Anrufe verdoppelt.',
                'name' => 'RA Markus H.',
                'role' => 'Kanzlei für Verkehrsrecht, Frankfurt',
            ],
            [
                'text' => 'Der lokale Präsenz-Check war der erste Schritt zu einer vollständigen Neuausrichtung unseres Online-Marketings. Sehr zu empfehlen!',
                'name' => 'RA Dr. Julia W.',
                'role' => 'Fachanwältin für Erbrecht, Düsseldorf',
            ],
            [
                'text' => 'Innerhalb von 6 Wochen nach Umsetzung der Empfehlungen sind wir in unserem Ort auf Platz 1 bei Google. Fantastisch!',
                'name' => 'RA Peter S.',
                'role' => 'Allgemeinanwalt, Nürnberg',
            ],
        ];
        foreach ($testimonials as $t): ?>
        <div class="card sr" style="padding:2rem;">
          <div style="color:var(--color-primary);font-size:1.5rem;margin-bottom:0.75rem;">★★★★★</div>
          <p style="color:var(--color-text-muted);font-style:italic;line-height:1.7;margin-bottom:1.25rem;">
            „<?= htmlspecialchars($t['text']) ?>"
          </p>
          <div>
            <div style="font-weight:700;font-size:0.95rem;"><?= htmlspecialchars($t['name']) ?></div>
            <div style="color:var(--color-text-muted);font-size:0.85rem;"><?= htmlspecialchars($t['role']) ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section" id="praesenz-pruefen">
    <div class="container" style="max-width:800px;">
      <div class="card sr" style="background:linear-gradient(135deg,var(--color-primary) 0%,#7c3aed 100%);text-align:center;padding:clamp(2.5rem,6vw,4rem);">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;color:#fff;margin-bottom:1rem;">
          Lokale Präsenz jetzt prüfen
        </h2>
        <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 2rem;font-size:1.05rem;">
          Erhalten Sie Ihren kostenlosen Präsenz-Check innerhalb von 48 Stunden – komplett unverbindlich.
        </p>
        <a href="/kontakt/" class="btn" style="background:#fff;color:#000;font-weight:700;padding:0.875rem 2.5rem;">
          Jetzt kostenlos anfragen
        </a>
        <p style="color:rgba(255,255,255,0.7);font-size:0.85rem;margin-top:1rem;">
          Kein Verkaufsgespräch. Keine Verpflichtung.
        </p>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
