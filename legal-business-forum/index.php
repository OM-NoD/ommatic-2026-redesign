<?php
$page_title       = 'Legal Business Forum – OMmatic | Wissen & Austausch für Kanzleien';
$page_description = 'Das Legal Business Forum: Fachlicher Austausch, Impulse und unternehmerisches Denken für Rechtsanwältinnen und Rechtsanwälte. Kein Verkaufsformat – echte Praxis.';
$page_canonical   = 'https://ommatic.de/legal-business-forum/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Community & Wissen</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Legal Business<br><span class="gradient-text">Forum</span>
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:680px;margin:1.5rem auto 2.5rem;">
          Kein klassisches Webinar, kein Verkaufsformat und kein standardisierter Workshop. Ein Ort für fachlichen Austausch, aktuelle Impulse und unternehmerisches Denken – speziell für Rechtsanwältinnen und Rechtsanwälte.
        </p>
        <a href="#anmelden" class="btn btn-primary">Kostenlos teilnehmen</a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       WARUM TEILNEHMEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="sr">
        <div>
          <span class="tag-chip">Für Anwälte</span>
          <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin:1rem 0 1.5rem;">
            Warum sollten Sie teilnehmen?
          </h2>
          <p style="color:var(--color-text-muted);line-height:1.8;margin-bottom:1.25rem;">
            Ihre juristische Expertise bildet das Fundament Ihrer Arbeit – doch um Ihre Kanzlei nachhaltig erfolgreich zu positionieren, braucht es zusätzlich unternehmerisches Denken und praxisnahes Wissen.
          </p>
          <p style="color:var(--color-text-muted);line-height:1.8;">
            Das Legal Business Forum schließt diese Lücke: mit relevanten Impulsen, ehrlichem Austausch und einer Community auf Augenhöhe.
          </p>
        </div>
        <div style="display:flex;flex-direction:column;gap:1rem;">
          <?php
          $benefits = [
              ['icon' => '📚', 'text' => 'Relevantes Fachwissen zu Digitalisierung, Marketing, Kanzleisoftware & Co.'],
              ['icon' => '💡', 'text' => 'Impulse aus der Praxis – ehrlich, konkret und umsetzbar'],
              ['icon' => '🤝', 'text' => 'Vernetzung auf Augenhöhe mit Kolleg:innen aus ganz Deutschland'],
              ['icon' => '🚀', 'text' => 'Inspirationen, wie erfolgreiche Kanzleien heute denken und arbeiten'],
          ];
          foreach ($benefits as $b): ?>
          <div class="card" style="padding:1.25rem 1.5rem;display:flex;align-items:flex-start;gap:1rem;">
            <span style="font-size:1.5rem;flex-shrink:0;"><?= $b['icon'] ?></span>
            <p style="color:var(--color-text-muted);font-size:0.95rem;line-height:1.6;margin:0;"><?= htmlspecialchars($b['text']) ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       THEMEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;">
          Was erwartet Sie <span class="gradient-text">konkret</span>?
        </h2>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;">

        <?php
        $topics = [
            ['title' => 'Kanzleimarketing & Online-Marketing', 'desc' => 'Was funktioniert wirklich? Bewährte Strategien aus der Praxis für messbar mehr Mandantenanfragen.'],
            ['title' => 'Legal Tech & KI', 'desc' => 'Welche Tools sparen wirklich Zeit? Praxisberichte und ehrliche Bewertungen moderner Kanzlei-Technologie.'],
            ['title' => 'Effizienz & Organisation', 'desc' => 'Kanzleistrukturen, Delegation und smarte Prozesse – wie erfolgreiche Kanzleien ihren Alltag organisieren.'],
            ['title' => 'Kanzleisoftware & Digitalisierung', 'desc' => 'Marktüberblick, Vergleiche und Erfahrungsberichte zu Software für moderne Kanzleien.'],
            ['title' => 'Finanzen & BWL-Basics', 'desc' => 'Betriebswirtschaftliche Grundlagen für Rechtsanwälte: Kennzahlen, Planung und Steuerung.'],
            ['title' => 'Best Practices erfolgreicher Kanzleien', 'desc' => 'Konkrete Beispiele und Fallstudien: Was machen die besten Kanzleien anders – und warum?'],
        ];
        foreach ($topics as $topic): ?>
        <div class="card sr" style="padding:2rem;">
          <h3 style="font-weight:700;font-size:1.05rem;margin-bottom:0.75rem;"><?= htmlspecialchars($topic['title']) ?></h3>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;"><?= htmlspecialchars($topic['desc']) ?></p>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- ============================================================
       WAS ES NICHT IST
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;" class="sr">

        <div class="card" style="padding:2.5rem;border:1px solid rgba(239,68,68,0.3);">
          <h2 style="font-size:1.3rem;font-weight:700;margin-bottom:1.5rem;color:#ef4444;">Was das Legal Business Forum <em>nicht</em> ist:</h2>
          <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:0.75rem;">
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:#ef4444;font-weight:700;font-size:1.1rem;">✗</span> Keine Verkaufsveranstaltung
            </li>
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:#ef4444;font-weight:700;font-size:1.1rem;">✗</span> Kein Frontalvortrag ohne Beteiligung
            </li>
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:#ef4444;font-weight:700;font-size:1.1rem;">✗</span> Kein Coaching „von der Stange"
            </li>
          </ul>
        </div>

        <div class="card" style="padding:2.5rem;border:1px solid rgba(var(--color-primary-rgb,234,179,8),0.3);">
          <h2 style="font-size:1.3rem;font-weight:700;margin-bottom:1.5rem;">Stattdessen:</h2>
          <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:0.75rem;">
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:var(--color-primary);font-weight:700;">✓</span> Offener Austausch mit echten Expert:innen – von Profis für Profis
            </li>
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:var(--color-primary);font-weight:700;">✓</span> Konkrete, umsetzbare Impulse
            </li>
            <li style="display:flex;align-items:center;gap:0.75rem;color:var(--color-text-muted);">
              <span style="color:var(--color-primary);font-weight:700;">✓</span> Echte Community auf Augenhöhe
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       AUFTAKTVERANSTALTUNG
       ============================================================ -->
  <section class="section" id="anmelden">
    <div class="container">
      <div class="card sr" style="background:linear-gradient(135deg,rgba(var(--color-primary-rgb,234,179,8),0.12) 0%,rgba(124,58,237,0.12) 100%);border:1px solid rgba(var(--color-primary-rgb,234,179,8),0.2);padding:clamp(2.5rem,6vw,4rem);text-align:center;">
        <span class="tag-chip">Nächster Termin</span>
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;margin:1rem 0;">
          Starten Sie mit uns
        </h2>
        <p style="font-size:1.1rem;font-weight:700;color:var(--color-primary);margin-bottom:0.5rem;">
          „Wie geht Legal Business heute?"
        </p>
        <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap;margin:1.5rem 0;color:var(--color-text-muted);">
          <span>📅 Dienstag, 27. Mai 2025</span>
          <span>⏰ 16:00 Uhr (ca. 45 Minuten)</span>
          <span>💻 Online via Google Meet</span>
          <span>🆓 Kostenfrei & unverbindlich</span>
        </div>
        <a href="/kontakt/" class="btn btn-primary" style="font-size:1.05rem;padding:1rem 2.5rem;">
          Jetzt kostenlos anmelden
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
