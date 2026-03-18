<?php
$page_title       = 'Lokale Präsenz prüfen – OMmatic | Kostenloser Online-Präsenz-Check für Kanzleien';
$page_description = 'Prüfen Sie kostenlos die lokale Online-Präsenz Ihrer Kanzlei. Google MyBusiness, lokales Ranking, Bewertungen – OMmatic analysiert Ihr lokales Potenzial.';
$page_canonical   = 'https://ommatic.de/lokale-praesenz-pruefen/';
$hide_contact_section = true;
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
        <h1 style="font-family:var(--font-h);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;letter-spacing:-0.02em;">
          Werden Sie lokal<br><span class="gradient-text">wirklich gefunden</span>?
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--text-2);max-width:680px;margin:1.5rem auto 2.5rem;line-height:1.7;">
          Prüfen Sie jetzt kostenlos, wie Ihre Kanzlei lokal sichtbar ist. Unser Online-Präsenz-Check analysiert Google MyBusiness, lokale Rankings und Ihre Bewertungssituation.
        </p>
        <a href="#praesenz-pruefen" class="btn btn-primary btn-lg">
          Kostenlos prüfen lassen
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </section>


  <!-- ============================================================
       BEDEUTUNG LOKALER SICHTBARKEIT
       ============================================================ -->
  <section class="section" style="padding-top:clamp(3rem,6vw,5rem);">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:clamp(2rem,5vw,5rem);align-items:center;" class="sr lp-two-col">
        <div>
          <span class="tag-chip" style="margin-bottom:20px;display:inline-flex;">Warum es wichtig ist</span>
          <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin:0 0 1.5rem;letter-spacing:-0.02em;">
            Lokale Suche =<br>Lokale Mandanten
          </h2>
          <p style="color:var(--text-2);line-height:1.8;margin-bottom:1.25rem;">
            Über <strong style="color:var(--text);">80% der Mandantensuchen</strong> auf Google haben einen lokalen Bezug – „Rechtsanwalt [Stadt]" oder „Fachanwalt für [Rechtsgebiet] in der Nähe".
          </p>
          <p style="color:var(--text-2);line-height:1.8;margin-bottom:1.25rem;">
            Wer im lokalen Suchergebnis nicht sichtbar ist, verliert täglich potenzielle Mandanten an die Konkurrenz – ohne es zu merken.
          </p>
          <p style="color:var(--text-2);line-height:1.8;">
            Unser kostenloser Präsenz-Check zeigt Ihnen in wenigen Minuten, wo Sie stehen und was Sie konkret verbessern können.
          </p>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="card sr" style="padding:1.75rem 1.5rem;text-align:center;">
            <div style="font-size:2.75rem;font-weight:900;color:var(--primary);line-height:1;font-family:var(--font-h);">80%</div>
            <div style="color:var(--text-2);font-size:0.85rem;margin-top:0.5rem;line-height:1.5;">aller Kanzlei-Suchen haben lokalen Bezug</div>
          </div>
          <div class="card sr sr-d1" style="padding:1.75rem 1.5rem;text-align:center;">
            <div style="font-size:2.75rem;font-weight:900;color:var(--primary);line-height:1;font-family:var(--font-h);">3×</div>
            <div style="color:var(--text-2);font-size:0.85rem;margin-top:0.5rem;line-height:1.5;">mehr Anfragen durch optimiertes MyBusiness</div>
          </div>
          <div class="card sr sr-d2" style="padding:1.75rem 1.5rem;text-align:center;">
            <div style="font-size:2.75rem;font-weight:900;color:var(--primary);line-height:1;font-family:var(--font-h);">4.7+</div>
            <div style="color:var(--text-2);font-size:0.85rem;margin-top:0.5rem;line-height:1.5;">Sternbewertung entscheidet über Kontaktaufnahme</div>
          </div>
          <div class="card sr sr-d3" style="padding:1.75rem 1.5rem;text-align:center;">
            <div style="font-size:2.75rem;font-weight:900;color:var(--primary);line-height:1;font-family:var(--font-h);">Top&nbsp;3</div>
            <div style="color:var(--text-2);font-size:0.85rem;margin-top:0.5rem;line-height:1.5;">Plätze im Local Pack erhalten 90% der Klicks</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       WAS WIR PRÜFEN
       ============================================================ -->
  <section class="section" style="background:var(--bg-2);">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip" style="margin-bottom:16px;display:inline-flex;">Leistungsumfang</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;letter-spacing:-0.02em;">
          Ihr <span class="gradient-text">Präsenz-Check</span> umfasst
        </h2>
      </div>

      <div style="display:flex;flex-direction:column;gap:1rem;max-width:820px;margin:0 auto;">
        <?php
        $items = [
            ['num' => '01', 'title' => 'Google MyBusiness-Profil',         'desc' => 'Ist Ihr Profil vollständig ausgefüllt? Sind alle Informationen korrekt und aktuell? Fotos, Öffnungszeiten, Dienstleistungen.'],
            ['num' => '02', 'title' => 'Lokale Suchmaschinenrankings',     'desc' => 'Auf welchen Positionen erscheint Ihre Kanzlei bei relevanten lokalen Suchanfragen? Welche Mitbewerber sind besser platziert?'],
            ['num' => '03', 'title' => 'Bewertungsanalyse',                'desc' => 'Anzahl, Aktualität und Qualität Ihrer Google-Bewertungen. Wie aktiv antworten Sie auf Bewertungen?'],
            ['num' => '04', 'title' => 'NAP-Konsistenz',                   'desc' => 'Sind Name, Adresse und Telefonnummer Ihrer Kanzlei im Internet einheitlich und korrekt angegeben?'],
            ['num' => '05', 'title' => 'Lokale Konkurrenzanalyse',         'desc' => 'Wie positionieren sich Ihre lokalen Mitbewerber? Was machen die Top-Platzierten anders?'],
            ['num' => '06', 'title' => 'Maßnahmenplan',                    'desc' => 'Konkrete, priorisierte Handlungsempfehlungen für schnell umsetzbare Verbesserungen.'],
        ];
        foreach ($items as $item): ?>
        <div class="card sr" style="padding:1.75rem 2rem;display:flex;align-items:flex-start;gap:1.5rem;transition:border-color .2s;">
          <div style="font-size:1.5rem;font-weight:900;color:var(--primary);flex-shrink:0;line-height:1;font-family:var(--font-h);min-width:2.5rem;"><?= $item['num'] ?></div>
          <div>
            <h3 style="font-weight:700;margin-bottom:0.35rem;font-size:1rem;"><?= htmlspecialchars($item['title']) ?></h3>
            <p style="color:var(--text-2);font-size:0.9rem;line-height:1.65;margin:0;"><?= htmlspecialchars($item['desc']) ?></p>
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
        <span class="tag-chip" style="margin-bottom:16px;display:inline-flex;">Erfahrungen</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;letter-spacing:-0.02em;">Kundenstimmen</h2>
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
        <div class="card sr" style="padding:2rem;display:flex;flex-direction:column;">
          <div style="color:var(--primary);font-size:1.25rem;letter-spacing:0.05em;margin-bottom:1rem;">★★★★★</div>
          <p style="color:var(--text-2);font-style:italic;line-height:1.75;margin-bottom:1.5rem;flex:1;">
            „<?= htmlspecialchars($t['text']) ?>"
          </p>
          <div style="border-top:1px solid var(--border-s);padding-top:1rem;">
            <div style="font-weight:700;font-size:0.95rem;"><?= htmlspecialchars($t['name']) ?></div>
            <div style="color:var(--text-2);font-size:0.85rem;margin-top:2px;"><?= htmlspecialchars($t['role']) ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- ============================================================
       SCAN-FORMULAR (OptimizeLocation)
       ============================================================ -->
  <section class="section" id="praesenz-pruefen" style="background:var(--bg-2);">
    <div class="container" style="max-width:760px;">

      <div class="sr" style="text-align:center;margin-bottom:clamp(2rem,4vw,3rem);">
        <span class="tag-chip" style="margin-bottom:16px;display:inline-flex;">Jetzt starten</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;letter-spacing:-0.02em;">
          Lokale Präsenz jetzt<br><span class="gradient-text">kostenlos analysieren</span>
        </h2>
        <p style="color:var(--text-2);max-width:540px;margin:1.25rem auto 0;font-size:1.05rem;line-height:1.7;">
          Tragen Sie die Daten Ihrer Kanzlei ein – wir prüfen Ihre lokale Sichtbarkeit und senden Ihnen das Ergebnis innerhalb von 48 Stunden zu.
        </p>
      </div>

      <!-- Form card -->
      <div class="contact-form-wrap sr sr-d1" style="position:relative;">

        <form method="POST"
              action="https://www.optimizelocation.com/partner/muxominhthorstenmller/listing-report.html"
              id="lp-scan-form"
              novalidate>

          <!-- Hidden fields -->
          <input type="hidden" name="authenticityToken" value="a4e115b5bc410307f9dc10ba018d14941d9cae9a">
          <input type="hidden" name="country"           value="DE">
          <input type="hidden" name="state"             value="OMmatic">
          <input type="hidden" name="utm_source"        id="lp-utm-source"   value="">
          <input type="hidden" name="utm_medium"        id="lp-utm-medium"   value="">
          <input type="hidden" name="utm_campaign"      id="lp-utm-campaign" value="">
          <!-- Honeypot – muss leer bleiben -->
          <input type="text"   name="hp_name"  style="display:none;" tabindex="-1" autocomplete="off" value="">
          <input type="email"  name="hp_email" style="display:none;" tabindex="-1" autocomplete="off" value="">

          <h3 class="form-title" style="margin-bottom:6px;">Präsenz-Check anfordern</h3>
          <p class="form-sub">Nur wenige Angaben – unverbindlich und 100% kostenlos.</p>

          <!-- Row 1: Kanzleiname + Straße -->
          <div class="form-row" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-name">
                Name der Kanzlei <span style="color:var(--primary);">*</span>
              </label>
              <input type="text"
                     id="lp-name"
                     name="name"
                     class="form-input"
                     placeholder="Mustermann &amp; Partner Rechtsanwälte"
                     required>
            </div>
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-address">
                Straße &amp; Hausnummer <span style="color:var(--primary);">*</span>
              </label>
              <input type="text"
                     id="lp-address"
                     name="address"
                     class="form-input"
                     placeholder="Musterstraße 12"
                     required>
            </div>
          </div>

          <!-- Row 2: PLZ + Stadt -->
          <div class="form-row" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-zip">
                PLZ <span style="color:var(--primary);">*</span>
              </label>
              <input type="text"
                     id="lp-zip"
                     name="zip"
                     class="form-input"
                     placeholder="67655"
                     maxlength="10"
                     required>
            </div>
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-city">
                Stadt <span style="color:var(--primary);">*</span>
              </label>
              <input type="text"
                     id="lp-city"
                     name="city"
                     class="form-input"
                     placeholder="Kaiserslautern"
                     required>
            </div>
          </div>

          <!-- Row 3: Telefon + E-Mail -->
          <div class="form-row" style="margin-bottom:16px;">
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-phone">
                Telefonnummer <span style="color:var(--primary);">*</span>
              </label>
              <input type="tel"
                     id="lp-phone"
                     name="phone"
                     class="form-input"
                     placeholder="+49 631 20691820"
                     required>
            </div>
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="lp-email">
                E-Mail-Adresse <span style="color:var(--primary);">*</span>
              </label>
              <input type="email"
                     id="lp-email"
                     name="email"
                     class="form-input"
                     placeholder="kanzlei@beispiel.de"
                     required>
            </div>
          </div>

          <!-- Submit -->
          <button type="submit" class="btn btn-primary btn-lg"
                  style="width:100%;justify-content:center;margin-top:8px;">
            Jetzt kostenlos prüfen
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </button>

          <!-- Trust line -->
          <p style="text-align:center;font-size:13px;color:var(--text-3);margin-top:14px;margin-bottom:0;display:flex;align-items:center;justify-content:center;gap:6px;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:15px;height:15px;color:var(--primary);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            Kostenlos &nbsp;·&nbsp; Unverbindlich &nbsp;·&nbsp; Ergebnis in 48 Stunden
          </p>

        </form>
      </div><!-- /.contact-form-wrap -->

    </div>
  </section>


</main>

<?php require_once '../includes/footer.php'; ?>

<script>
/* Auto-fill UTM params from URL if present */
(function () {
  try {
    var params = new URLSearchParams(window.location.search);
    var map = { utm_source: 'lp-utm-source', utm_medium: 'lp-utm-medium', utm_campaign: 'lp-utm-campaign' };
    Object.keys(map).forEach(function (key) {
      var val = params.get(key);
      if (val) {
        var el = document.getElementById(map[key]);
        if (el) el.value = val;
      }
    });
  } catch (e) {}
})();
</script>
