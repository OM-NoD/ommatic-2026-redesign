<?php
$page_title       = 'Neuigkeiten & Blog – OMmatic | Legal Marketing Insights';
$page_description = 'Aktuelle Neuigkeiten, Fachartikel und Insights aus der Welt des Kanzleimarketings. Google Ads, SEO, Legal Tech – aktuell und praxisnah.';
$page_canonical   = 'https://ommatic.de/neuigkeiten/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Blog & Neuigkeiten</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Legal Marketing<br><span class="gradient-text">Insights</span>
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:640px;margin:1.5rem auto 0;">
          Aktuelle Neuigkeiten, praxisnahe Fachartikel und Insights rund um Kanzleimarketing, Google Ads, SEO und Legal Tech.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       KATEGORIEN
       ============================================================ -->
  <section class="section" style="padding-top:1rem;padding-bottom:1rem;">
    <div class="container">
      <div class="sr" style="display:flex;gap:0.75rem;flex-wrap:wrap;justify-content:center;">
        <span class="tag-chip" style="cursor:pointer;">Alle</span>
        <span class="tag-chip" style="cursor:pointer;">Google Ads</span>
        <span class="tag-chip" style="cursor:pointer;">SEO</span>
        <span class="tag-chip" style="cursor:pointer;">Legal Tech</span>
        <span class="tag-chip" style="cursor:pointer;">Social Media</span>
        <span class="tag-chip" style="cursor:pointer;">Kanzleimanagement</span>
        <span class="tag-chip" style="cursor:pointer;">Erfolgsgeschichten</span>
      </div>
    </div>
  </section>

  <!-- ============================================================
       ARTIKEL GRID
       ============================================================ -->
  <section class="section">
    <div class="container">

      <!-- Featured Article -->
      <div class="card sr" style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center;padding:2.5rem;margin-bottom:2rem;">
        <div style="background:linear-gradient(135deg,var(--color-surface) 0%,rgba(var(--color-primary-rgb,234,179,8),0.08) 100%);border-radius:1rem;aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;">
          <span style="font-size:4rem;">📊</span>
        </div>
        <div>
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1rem;flex-wrap:wrap;">
            <span class="tag-chip">Google Ads</span>
            <span style="color:var(--color-text-muted);font-size:0.85rem;">März 2026</span>
          </div>
          <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:0.75rem;line-height:1.3;">
            Google Ads für Anwälte 2026: Was funktioniert wirklich?
          </h2>
          <p style="color:var(--color-text-muted);line-height:1.7;margin-bottom:1.5rem;">
            Wir analysieren die effektivsten Google Ads-Strategien für Rechtsanwaltskanzleien – mit konkreten Zahlen aus unseren laufenden Kampagnen.
          </p>
          <a href="/blog/" class="btn btn-outline">Artikel lesen</a>
        </div>
      </div>

      <!-- Article Grid -->
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:1.5rem;">

        <?php
        $articles = [
            [
                'tag' => 'SEO',
                'icon' => '🔍',
                'date' => 'Februar 2026',
                'title' => 'Lokale SEO für Kanzleien: Google MyBusiness optimal nutzen',
                'excerpt' => 'Mit diesen 7 Maßnahmen verbessern Sie Ihr lokales Ranking und werden von potenziellen Mandanten in Ihrer Region gefunden.',
            ],
            [
                'tag' => 'Legal Tech',
                'icon' => '🤖',
                'date' => 'Januar 2026',
                'title' => 'KI-Anrufbeantworter: Mehr Mandanten, weniger verpasste Anrufe',
                'excerpt' => 'Wie der OMmatic KI-Anrufbeantworter Kanzleien dabei hilft, keine Mandantenanfrage mehr zu verpassen – 24/7, vollautomatisch.',
            ],
            [
                'tag' => 'Erfolgsgeschichten',
                'icon' => '🏆',
                'date' => 'Januar 2026',
                'title' => 'Case Study: +340% mehr Mandantenanfragen für Fachanwalt für Strafrecht',
                'excerpt' => 'Wie wir für eine mittelständische Kanzlei in München die Mandantenanfragen durch gezieltes Performance-Marketing vervielfacht haben.',
            ],
            [
                'tag' => 'Social Media',
                'icon' => '📱',
                'date' => 'Dezember 2025',
                'title' => 'LinkedIn für Anwälte: So bauen Sie Ihre Expertise-Position auf',
                'excerpt' => 'Warum LinkedIn für Rechtsanwälte zunehmend wichtiger wird und wie Sie als Fachexperte sichtbar werden.',
            ],
            [
                'tag' => 'Kanzleimanagement',
                'icon' => '📋',
                'date' => 'Dezember 2025',
                'title' => 'Mandantengewinnung systematisieren: Der OMmatic-Ansatz',
                'excerpt' => 'Von der ersten Suchanfrage bis zur Mandatserteilung – so sieht eine funktionierende Mandantengewinnungs-Pipeline aus.',
            ],
            [
                'tag' => 'Google Ads',
                'icon' => '💰',
                'date' => 'November 2025',
                'title' => 'Google Ads Budget-Guide für Kanzleien: Wie viel ist sinnvoll?',
                'excerpt' => 'Realistische Budgetplanung für Google Ads-Kampagnen – welche Faktoren das optimale Budget bestimmen.',
            ],
        ];
        foreach ($articles as $a): ?>
        <div class="card sr" style="padding:1.75rem;display:flex;flex-direction:column;">
          <div style="background:var(--color-surface);border-radius:0.75rem;padding:2rem;text-align:center;font-size:2.5rem;margin-bottom:1.25rem;">
            <?= $a['icon'] ?>
          </div>
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.75rem;flex-wrap:wrap;">
            <span class="tag-chip"><?= htmlspecialchars($a['tag']) ?></span>
            <span style="color:var(--color-text-muted);font-size:0.8rem;"><?= htmlspecialchars($a['date']) ?></span>
          </div>
          <h3 style="font-weight:700;font-size:1.05rem;margin-bottom:0.6rem;line-height:1.4;"><?= htmlspecialchars($a['title']) ?></h3>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.6;margin-bottom:auto;"><?= htmlspecialchars($a['excerpt']) ?></p>
          <a href="/blog/" style="display:inline-flex;align-items:center;gap:0.4rem;color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-top:1.25rem;text-decoration:none;">
            Weiterlesen
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </a>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

  <!-- ============================================================
       NEWSLETTER CTA
       ============================================================ -->
  <section class="section">
    <div class="container" style="max-width:700px;">
      <div class="card sr" style="text-align:center;padding:clamp(2.5rem,5vw,3.5rem);">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.5rem,3vw,2rem);font-weight:800;margin-bottom:1rem;">
          Keine Neuigkeit verpassen
        </h2>
        <p style="color:var(--color-text-muted);margin-bottom:2rem;">
          Erhalten Sie unsere neuesten Artikel und Legal-Marketing-Insights direkt in Ihr Postfach.
        </p>
        <a href="/kontakt/" class="btn btn-primary">Newsletter abonnieren</a>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
