<?php
$page_title       = 'Kostenloser Website-Check für Kanzleien – OMmatic';
$page_description = 'Finden Sie heraus, wie gut Ihre Kanzlei-Website wirklich performt: Pagespeed, SEO-Potenzial und Wettbewerber-Analyse – kostenlos und unverbindlich.';
$page_canonical   = 'https://ommatic.de/check/';
require_once '../includes/header.php';
require_once '../includes/components.php';
?>
<main>

<?php om_page_hero([
    'tag'        => 'Kostenloser Online-Check',
    'breadcrumb' => 'Website-Check',
    'title'      => 'Kanzlei-Webseiten<br><span class="gradient-text">Check</span>',
    'sub'        => 'Finden Sie heraus, wie gut Ihre Website wirklich performt und entdecken Sie Potenziale für mehr Sichtbarkeit und Mandantenanfragen – kostenlos und unverbindlich.',
    'ctas'       => [
        ['label' => 'Jetzt kostenlos checken', 'href' => '#check-starten', 'class' => 'btn-primary'],
        ['label' => 'Mehr erfahren',           'href' => '#was-wir-pruefen', 'class' => 'btn-ghost'],
    ],
    'mesh3' => true,
]); ?>


  <!-- ============================================================
       WAS WIR LIEFERN (3 Deliverables aus Original)
       ============================================================ -->
  <section class="content-section" id="was-wir-pruefen">
    <div class="container">
      <div class="sr" style="margin-bottom:clamp(32px,4vw,52px);">
        <span class="tag-chip">Was Sie erhalten</span>
        <h2 class="section-h2">Ihr kostenloser Check – drei Analysen in einem</h2>
        <p class="section-sub">Nach dem Ausfüllen des Formulars erstellen wir kostenfrei und innerhalb von 48 Stunden:</p>
      </div>

      <div class="feature-grid" style="grid-template-columns:repeat(3,1fr);">

        <!-- Pagespeed -->
        <article class="feature-card sr sr-d1">
          <div class="feature-icon ic-cyan">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="feature-title">Pagespeed-Analyse</h3>
          <p class="feature-text">Wir messen die Ladezeit Ihrer Website und prüfen alle Core Web Vitals. Sie erhalten konkrete Optimierungsvorschläge, die Ihre Rankings und die Nutzererfahrung verbessern.</p>
        </article>

        <!-- SEO -->
        <article class="feature-card sr sr-d2">
          <div class="feature-icon ic-indigo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/></svg>
          </div>
          <h3 class="feature-title">SEO-Potenzial + Checkliste</h3>
          <p class="feature-text">Wo rankt Ihre Kanzlei bei relevanten Suchanfragen? Wir analysieren Keywords, technische SEO-Faktoren und zeigen Ihnen, welche Maßnahmen die größte Wirkung erzielen.</p>
        </article>

        <!-- Wettbewerber -->
        <article class="feature-card sr sr-d3">
          <div class="feature-icon ic-teal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="feature-title">Wettbewerber-Analyse</h3>
          <p class="feature-text">Wie positionieren sich Ihre direkten Mitbewerber? Wir zeigen, wo Sie im Vergleich stehen und welche strategischen Ansatzpunkte Sie für einen klaren Wettbewerbsvorteil nutzen können.</p>
        </article>

      </div>
    </div>
  </section>


  <!-- ============================================================
       WARUM DIESER CHECK?
       ============================================================ -->
  <section class="content-section alt">
    <div class="container">
      <div class="two-col" style="align-items:center;">

        <div class="prose sr">
          <span class="tag-chip" style="margin-bottom:20px;display:inline-flex;">Warum dieser Check?</span>
          <h2 class="section-h2">Die meisten Kanzlei-Websites verschenken Mandanten</h2>
          <p>Langsame Ladezeiten, fehlende lokale Sichtbarkeit, schwache SEO-Struktur – über 70 % der Kanzlei-Websites haben behebbare Schwachstellen, die täglich potenzielle Mandanten kosten.</p>
          <p>Unser Check macht sichtbar, wo Ihre Website verliert und was sich mit wenig Aufwand sofort verbessern lässt. Ohne Verkaufsgespräch, ohne Verpflichtung.</p>
          <ul>
            <li>100 % kostenlos und unverbindlich</li>
            <li>Ergebnis innerhalb von 48 Stunden</li>
            <li>Individuelle Analyse – kein Standardreport</li>
            <li>Von Legal-Marketing-Experten erstellt</li>
          </ul>
          <a href="#check-starten" class="btn btn-primary" style="margin-top:1.5rem;display:inline-flex;align-items:center;gap:8px;">
            Jetzt kostenlos starten
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:16px;height:16px"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <div class="sr sr-d2">
          <div class="why-grid" style="display:flex;flex-direction:column;gap:16px;">
            <div class="why-card" style="padding:24px 28px;">
              <div class="why-num" style="font-size:2rem;">150+</div>
              <div class="why-title">Kanzleien analysiert</div>
              <p class="why-text">Wir kennen die typischen Schwachstellen von Kanzlei-Websites – und wissen, was wirklich wirkt.</p>
            </div>
            <div class="why-card" style="padding:24px 28px;">
              <div class="why-num" style="font-size:2rem;">48h</div>
              <div class="why-title">Lieferzeit</div>
              <p class="why-text">Sie erhalten Ihren individuellen Check-Report innerhalb von zwei Werktagen nach Formular-Eingang.</p>
            </div>
            <div class="why-card" style="padding:24px 28px;">
              <div class="why-num" style="font-size:2rem;">0€</div>
              <div class="why-title">Vollständig kostenlos</div>
              <p class="why-text">Kein Haken, keine versteckten Kosten. Nur echte Insights für Ihre Kanzlei.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       FORMULAR
       ============================================================ -->
  <section class="content-section" id="check-starten">
    <div class="container">
      <div style="max-width:680px;margin:0 auto;">

        <div class="sr" style="text-align:center;margin-bottom:clamp(32px,4vw,48px);">
          <span class="tag-chip">Jetzt starten</span>
          <h2 class="section-h2" style="text-align:center;">Kostenlos Website-Check anfordern</h2>
          <p class="section-sub">Tragen Sie die URL Ihrer Kanzlei-Website ein – wir melden uns innerhalb von 48 Stunden mit Ihrer persönlichen Analyse.</p>
        </div>

        <div class="contact-form-wrap sr sr-d1" style="position:relative;">
          <form method="post" action="/kontakt/" class="contact-form" novalidate>
            <input type="text" name="honeypot" style="display:none;" tabindex="-1" autocomplete="off">
            <input type="hidden" name="form_type" value="website_check">

            <div class="form-group">
              <label class="form-label" for="check-url">URL der Website, die wir prüfen sollen <span style="color:var(--primary)">*</span></label>
              <input type="url" id="check-url" name="website_url" class="form-input"
                     placeholder="https://ihre-kanzlei.de" required>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="check-email">E-Mail-Adresse <span style="color:var(--primary)">*</span></label>
                <input type="email" id="check-email" name="email" class="form-input"
                       placeholder="kanzlei@beispiel.de" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="check-tel">Telefon <span style="color:var(--text-3);font-weight:400;">(optional)</span></label>
                <input type="tel" id="check-tel" name="telefon" class="form-input"
                       placeholder="+49 631 ...">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="check-name">Ihr Name <span style="color:var(--primary)">*</span></label>
              <input type="text" id="check-name" name="name" class="form-input"
                     placeholder="Dr. Max Mustermann" required>
            </div>

            <div class="form-group" style="display:flex;align-items:flex-start;gap:12px;">
              <input type="checkbox" id="check-dsgvo" name="dsgvo" required
                     style="width:18px;height:18px;margin-top:3px;flex-shrink:0;accent-color:var(--primary);">
              <label for="check-dsgvo" style="font-size:13px;color:var(--text-2);line-height:1.6;">
                Ich stimme der Verarbeitung meiner Daten gemäß der
                <a href="/datenschutz/" style="color:var(--primary);">Datenschutzerklärung</a> zu.
                Der Check ist kostenlos und unverbindlich. <span style="color:var(--primary)">*</span>
              </label>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;margin-top:8px;">
              Kostenlosen Check anfordern
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>


<?php om_cta_banner([
    'tag'           => 'Weitere Checks',
    'title'         => 'Auch interessant: Online-Präsenz-Check',
    'sub'           => 'Prüfen Sie Ihre gesamte Online-Präsenz – Google My Business, Bewertungen, lokale Sichtbarkeit und mehr.',
    'primary_btn'   => ['label' => 'Online-Präsenz prüfen', 'href' => '/check/online-praesenz/'],
    'secondary_btn' => ['label' => 'Zur Kontaktseite',     'href' => '/kontakt/'],
]); ?>

</main>

<?php require_once '../includes/footer.php'; ?>
