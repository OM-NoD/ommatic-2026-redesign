<?php
$page_title       = 'Website-Check für Kanzleien – OMmatic | Kostenlose Analyse';
$page_description = 'Lassen Sie Ihre Kanzlei-Website kostenlos analysieren. OMmatic prüft Ihre Online-Sichtbarkeit, Google Ads-Performance und Potenziale für mehr Mandantenanfragen.';
$page_canonical   = 'https://ommatic.de/check/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Kostenlose Analyse</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Wie gut ist Ihr<br><span class="gradient-text">Kanzlei-Marketing</span>?
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:640px;margin:1.5rem auto 2.5rem;">
          Unser kostenloser Website-Check zeigt Ihnen, wo Ihre Kanzlei online steht und wo das größte Potenzial für mehr Mandantenanfragen schlummert.
        </p>
        <a href="#check-starten" class="btn btn-primary" style="font-size:1.05rem;padding:1rem 2.5rem;">
          Jetzt kostenlos checken
        </a>
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
          Was wir für Sie <span class="gradient-text">analysieren</span>
        </h2>
        <p style="color:var(--color-text-muted);max-width:560px;margin:1rem auto;">
          In unserem kostenlosen Check analysieren wir alle relevanten Bereiche Ihrer Online-Präsenz.
        </p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem;">

        <?php
        $checks = [
            ['icon' => '🔍', 'title' => 'Google-Sichtbarkeit', 'desc' => 'Wo ranken Sie bei relevanten Suchanfragen? Welche Keywords werden von Mandanten genutzt?'],
            ['icon' => '📊', 'title' => 'Google Ads-Performance', 'desc' => 'Sind Ihre Anzeigen optimal aufgestellt? Wo verlieren Sie Budget ohne Wirkung?'],
            ['icon' => '📍', 'title' => 'Lokale Präsenz', 'desc' => 'Wie gut ist Ihr Google MyBusiness-Profil? Werden Sie lokal gefunden?'],
            ['icon' => '💻', 'title' => 'Website-Performance', 'desc' => 'Lädt Ihre Website schnell? Ist sie mobiloptimiert und conversion-stark?'],
            ['icon' => '📱', 'title' => 'Social Media', 'desc' => 'Wie präsentiert sich Ihre Kanzlei auf LinkedIn, Facebook und Instagram?'],
            ['icon' => '⭐', 'title' => 'Online-Reputation', 'desc' => 'Wie viele Bewertungen haben Sie? Wie ist Ihre durchschnittliche Bewertung?'],
        ];
        foreach ($checks as $c): ?>
        <div class="card sr" style="padding:2rem;">
          <div style="font-size:2.5rem;margin-bottom:1rem;"><?= $c['icon'] ?></div>
          <h3 style="font-weight:700;margin-bottom:0.5rem;"><?= htmlspecialchars($c['title']) ?></h3>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;"><?= htmlspecialchars($c['desc']) ?></p>
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
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;">
          Kundenstimmen
        </h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;">
        <?php
        $testimonials = [
            [
                'text' => 'Der Website-Check war sehr aufschlussreich. In 30 Minuten haben wir mehr über unsere Online-Präsenz erfahren als in den letzten zwei Jahren.',
                'name' => 'RA Andreas M.',
                'role' => 'Fachanwalt für Arbeitsrecht, München',
            ],
            [
                'text' => 'Ich war skeptisch, aber die Analyse war wirklich kostenlos und ohne Verkaufsdruck. Die Ergebnisse haben uns klar gezeigt, wo wir ansetzen müssen.',
                'name' => 'RA Dr. Sabine K.',
                'role' => 'Kanzlei für Familienrecht, Hamburg',
            ],
            [
                'text' => 'Innerhalb von wenigen Wochen nach Umsetzung der Empfehlungen haben wir deutlich mehr Anfragen erhalten. Sehr empfehlenswert!',
                'name' => 'RA Thomas B.',
                'role' => 'Strafverteidiger, Berlin',
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
       CTA / CHECK STARTEN
       ============================================================ -->
  <section class="section" id="check-starten">
    <div class="container" style="max-width:800px;">
      <div class="card sr" style="background:linear-gradient(135deg,var(--color-primary) 0%,#7c3aed 100%);text-align:center;padding:clamp(2.5rem,6vw,4rem);">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;color:#fff;margin-bottom:1rem;">
          Jetzt kostenlosen Check starten
        </h2>
        <p style="color:rgba(255,255,255,0.85);max-width:520px;margin:0 auto 2rem;font-size:1.05rem;">
          Innerhalb von 48 Stunden erhalten Sie Ihre persönliche Analyse mit konkreten Handlungsempfehlungen.
        </p>
        <a href="/kontakt/" class="btn" style="background:#fff;color:#000;font-weight:700;padding:0.875rem 2.5rem;">
          Kostenlose Analyse anfragen
        </a>
        <p style="color:rgba(255,255,255,0.7);font-size:0.85rem;margin-top:1rem;">
          Keine Verpflichtung. Kein Verkaufsgespräch.
        </p>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
