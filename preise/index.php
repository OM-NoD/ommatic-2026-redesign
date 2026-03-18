<?php
$page_title       = 'Preise & Pakete – Transparente Kanzleimarketing-Kosten | OMmatic';
$page_description = 'Faire, transparente Preise für professionelles Kanzleimarketing. Monatliche Festpreise, keine versteckten Kosten. Jetzt kostenlose Erstberatung anfragen.';
$page_canonical   = 'https://ommatic.de/preise/';
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
        <span class="tag-chip">Transparente Preise</span>
      </div>
      <h1 class="page-hero-title sr sr-d1">
        Transparente Preise für<br><span class="gradient-text">Ihr Kanzleimarketing</span>
      </h1>
      <p class="page-hero-sub sr sr-d2">
        Monatliche Festpreise, volle Transparenz, kein Agentur-Overpricing.
      </p>
      <div class="page-hero-ctas sr sr-d3">
        <a href="/kontakt/" class="btn btn-primary btn-lg">Kostenloses Angebot anfragen</a>
        <a href="#pakete" class="btn btn-ghost btn-lg">Pakete ansehen</a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       PRICING PHILOSOPHY
       ============================================================ -->
  <section class="content-section alt">
    <div class="container">
      <div class="two-col sr">

        <div class="prose">
          <span class="tag-chip" style="margin-bottom:1.25rem;display:inline-block;">Warum Festpreise?</span>
          <h2>Klarheit statt Stundenabrechnungen</h2>
          <p>
            OMmatic setzt auf monatliche Festpreise statt undurchsichtige Stundenabrechnungen. Sie wissen von Anfang an genau, was Ihr Marketing kostet – keine versteckten Gebühren, keine überraschenden Rechnungen.
          </p>
          <p>
            Durch unsere softwaregestützte Lösung können wir professionelles Kanzleimarketing zu einem Bruchteil der Kosten einer klassischen Agentur anbieten. Und das, ohne Abstriche bei der Qualität.
          </p>
          <a href="/kontakt/" class="btn btn-primary">Jetzt anfragen</a>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
          <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem;text-align:center;">
            <div style="font-family:var(--font-h);font-size:1.75rem;font-weight:800;color:var(--primary);margin-bottom:.4rem;">Festpreis</div>
            <div style="font-size:.85rem;color:var(--text-2);line-height:1.5;">Monatlich kalkulierbar, keine Überraschungen</div>
          </div>
          <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem;text-align:center;">
            <div style="font-family:var(--font-h);font-size:1.75rem;font-weight:800;color:var(--indigo);margin-bottom:.4rem;">Flexibel</div>
            <div style="font-size:.85rem;color:var(--text-2);line-height:1.5;">Monatliche Kündigung möglich</div>
          </div>
          <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem;text-align:center;">
            <div style="font-family:var(--font-h);font-size:1.75rem;font-weight:800;color:var(--teal);margin-bottom:.4rem;">Transparent</div>
            <div style="font-size:.85rem;color:var(--text-2);line-height:1.5;">Alle Kosten offen ausgewiesen</div>
          </div>
          <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:1.5rem;text-align:center;">
            <div style="font-family:var(--font-h);font-size:1.75rem;font-weight:800;color:var(--primary);margin-bottom:.4rem;">Kein&nbsp;Bindung</div>
            <div style="font-size:.85rem;color:var(--text-2);line-height:1.5;">Kein Vertragszwang – Vertrauen statt Zwang</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PAKETE
       ============================================================ -->
  <section class="content-section" id="pakete">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Leistungspakete</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Das richtige Paket für <span class="gradient-text">Ihre Kanzlei</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;">
          Von der Einzelkanzlei bis zur überregionalen Sozietät – wir skalieren mit Ihrem Wachstum.
        </p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;align-items:stretch;">

        <!-- Starter -->
        <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:2rem;display:flex;flex-direction:column;">
          <div style="margin-bottom:1.5rem;">
            <span class="tag-chip">Starter</span>
            <h3 style="font-family:var(--font-h);font-size:1.5rem;font-weight:800;margin:.75rem 0 .5rem;">Einzelkanzlei</h3>
            <p style="font-size:.9rem;color:var(--text-2);line-height:1.7;">
              Ideal für Einzelanwälte und kleine Kanzleien, die lokal mehr Mandanten gewinnen wollen.
            </p>
          </div>
          <ul style="list-style:none;padding:0;margin:0 0 auto;display:flex;flex-direction:column;gap:.6rem;">
            <?php foreach ([
              'Local SEO-Optimierung',
              'Google My Business Management',
              '1 Branchenlisting-Paket (Top-Verzeichnisse)',
              'Monatlicher Performance-Report',
              'Dedizierter Ansprechpartner',
            ] as $feat): ?>
            <li style="display:flex;align-items:flex-start;gap:.6rem;font-size:.9rem;color:var(--text-2);">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;flex-shrink:0;margin-top:.15rem;color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <?= htmlspecialchars($feat) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div style="margin-top:1.75rem;padding-top:1.5rem;border-top:1px solid var(--border-s);">
            <div style="font-size:.8rem;color:var(--text-3);margin-bottom:.75rem;">Individuelles Angebot nach kostenlosem Beratungsgespräch</div>
            <a href="/kontakt/" class="btn btn-ghost" style="width:100%;text-align:center;">Preis auf Anfrage</a>
          </div>
        </div>

        <!-- Professional (Most Popular) -->
        <div class="sr" style="background:var(--bg-card);border:2px solid var(--primary);border-radius:var(--radius);padding:2rem;display:flex;flex-direction:column;position:relative;box-shadow:0 0 40px var(--primary-glow);">
          <div style="position:absolute;top:-1px;left:50%;transform:translateX(-50%)translateY(-50%);">
            <span style="background:var(--primary);color:#000;font-weight:700;font-size:.75rem;padding:.3rem .9rem;border-radius:2rem;white-space:nowrap;letter-spacing:.05em;">BELIEBTESTES PAKET</span>
          </div>
          <div style="margin-bottom:1.5rem;">
            <span class="tag-chip" style="background:var(--primary-dim);color:var(--primary);">Professional</span>
            <h3 style="font-family:var(--font-h);font-size:1.5rem;font-weight:800;margin:.75rem 0 .5rem;">Wachsende Kanzlei</h3>
            <p style="font-size:.9rem;color:var(--text-2);line-height:1.7;">
              Die umfassende Lösung für Kanzleien, die systematisch und nachhaltig wachsen wollen.
            </p>
          </div>
          <ul style="list-style:none;padding:0;margin:0 0 auto;display:flex;flex-direction:column;gap:.6rem;">
            <?php foreach ([
              'Alles aus dem Starter-Paket',
              'SEO-Optimierung (technisch + content)',
              'Google Ads Management (SEA)',
              'Analytics & Conversion-Tracking',
              '50+ Premium-Branchenlistings',
              'Wöchentlicher Performance-Report',
              'Monatliches Strategiegespräch',
            ] as $feat): ?>
            <li style="display:flex;align-items:flex-start;gap:.6rem;font-size:.9rem;color:var(--text-2);">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;flex-shrink:0;margin-top:.15rem;color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <?= htmlspecialchars($feat) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div style="margin-top:1.75rem;padding-top:1.5rem;border-top:1px solid var(--border-s);">
            <div style="font-size:.8rem;color:var(--text-3);margin-bottom:.75rem;">Individuelles Angebot nach kostenlosem Beratungsgespräch</div>
            <a href="/kontakt/" class="btn btn-primary" style="width:100%;text-align:center;">Preis auf Anfrage</a>
          </div>
        </div>

        <!-- Full-Service -->
        <div class="sr" style="background:var(--bg-card);border:1px solid var(--border-s);border-radius:var(--radius);padding:2rem;display:flex;flex-direction:column;">
          <div style="margin-bottom:1.5rem;">
            <span class="tag-chip" style="background:var(--indigo-dim);color:var(--indigo);">Full-Service</span>
            <h3 style="font-family:var(--font-h);font-size:1.5rem;font-weight:800;margin:.75rem 0 .5rem;">Mehrere Standorte</h3>
            <p style="font-size:.9rem;color:var(--text-2);line-height:1.7;">
              Die vollständige Marketing-Betreuung für Sozietäten und Kanzleien mit mehreren Standorten.
            </p>
          </div>
          <ul style="list-style:none;padding:0;margin:0 0 auto;display:flex;flex-direction:column;gap:.6rem;">
            <?php foreach ([
              'Alles aus dem Professional-Paket',
              'Social Media Management',
              'Call Tracking & Anrufanalyse',
              'KI-Anrufbeantworter (24/7)',
              'Persönlicher Key-Account-Manager',
              'Multi-Standort-Strategie',
              'Quartals-Strategie-Workshop',
            ] as $feat): ?>
            <li style="display:flex;align-items:flex-start;gap:.6rem;font-size:.9rem;color:var(--text-2);">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;flex-shrink:0;margin-top:.15rem;color:var(--indigo);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <?= htmlspecialchars($feat) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div style="margin-top:1.75rem;padding-top:1.5rem;border-top:1px solid var(--border-s);">
            <div style="font-size:.8rem;color:var(--text-3);margin-bottom:.75rem;">Individuelles Angebot nach kostenlosem Beratungsgespräch</div>
            <a href="/kontakt/" class="btn btn-ghost" style="width:100%;text-align:center;">Preis auf Anfrage</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       FAQ
       ============================================================ -->
  <section class="content-section alt">
    <div class="container" style="max-width:800px;">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">FAQ</span>
        <h2 style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Häufig gestellte Fragen
        </h2>
      </div>

      <?php
      $faqs = [
        [
          'q' => 'Gibt es Mindestlaufzeiten?',
          'a' => 'Nein. Bei OMmatic gibt es keine Mindestlaufzeiten oder Vertragsbindungen. Sie können monatlich kündigen. Wir setzen auf Überzeugung durch Ergebnisse – nicht auf Vertragszwang.',
        ],
        [
          'q' => 'Sind die Preise für alle Kanzleigrößen geeignet?',
          'a' => 'Ja. Wir arbeiten mit Einzelanwälten genauso wie mit großen Sozietäten. In einem kostenlosen Erstgespräch analysieren wir Ihre individuelle Situation und erstellen ein maßgeschneidertes Angebot.',
        ],
        [
          'q' => 'Was kostet eine erste Beratung?',
          'a' => 'Die Erstberatung ist komplett kostenlos und unverbindlich. Wir analysieren Ihre aktuelle Online-Sichtbarkeit und zeigen konkrete Potenziale auf – ohne versteckte Folgeverpflichtungen.',
        ],
        [
          'q' => 'Wie schnell sehen wir erste Ergebnisse?',
          'a' => 'Mit Google Ads (SEA) sehen viele Kanzleien bereits innerhalb der ersten 2–4 Wochen messbare Anfragen. Bei SEO dauert es in der Regel 3–6 Monate, bis sich nachhaltige Verbesserungen zeigen. Wir kommunizieren Zeitrahmen immer transparent.',
        ],
        [
          'q' => 'Sind die Maßnahmen BRAO-konform?',
          'a' => 'Ja, vollständig. Alle Marketing-Maßnahmen werden auf die berufsrechtlichen Anforderungen der BRAO abgestimmt. Wir kennen die Besonderheiten der Anwaltskommunikation und setzen ausschließlich zulässige Werbemaßnahmen um.',
        ],
      ];
      foreach ($faqs as $i => $faq): ?>
      <div class="sr" style="border-bottom:1px solid var(--border-s);padding:1.5rem 0;">
        <button
          onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none';this.querySelector('.faq-icon').style.transform=this.nextElementSibling.style.display==='block'?'rotate(45deg)':'rotate(0deg)';"
          style="width:100%;display:flex;justify-content:space-between;align-items:center;gap:1rem;background:none;border:none;cursor:pointer;padding:0;text-align:left;color:var(--text);">
          <span style="font-weight:700;font-size:1rem;font-family:var(--font-h);"><?= htmlspecialchars($faq['q']) ?></span>
          <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.25rem;height:1.25rem;flex-shrink:0;color:var(--primary);transition:transform .25s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        </button>
        <div style="display:none;margin-top:1rem;">
          <p style="font-size:.95rem;color:var(--text-2);line-height:1.75;margin:0;"><?= htmlspecialchars($faq['a']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ============================================================
       CTA BANNER
       ============================================================ -->
  <section class="cta-banner">
    <div class="container">
      <div class="cta-banner-inner sr">
        <h2 class="cta-banner-title">Kostenloses Angebot anfragen</h2>
        <p class="cta-banner-sub">
          Kein passendes Paket dabei oder Fragen zu den Preisen? Sprechen Sie mit uns – wir erstellen Ihnen ein individuelles, BRAO-konformes Angebot für Ihre Kanzlei.
        </p>
        <div class="cta-banner-btns">
          <a href="/kontakt/" class="btn btn-primary btn-lg">Jetzt kostenlos beraten lassen</a>
          <a href="/erfolge/" class="btn btn-ghost btn-lg">Erfolge unserer Kunden</a>
        </div>
      </div>
    </div>
  </section>

</main>
<?php require_once '../includes/footer.php'; ?>
