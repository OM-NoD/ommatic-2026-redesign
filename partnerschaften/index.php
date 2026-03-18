<?php
$page_title       = 'Partnerschaften – OMmatic | Kooperationen im Legal-Tech-Ökosystem';
$page_description = 'Entdecken Sie unsere wertvollen Partnerschaften mit führenden Legal-Tech-Unternehmen. OMmatic kooperiert mit jur|nodes, VAReNo, Actaport, Justin Legal und weiteren.';
$page_canonical   = 'https://ommatic.de/partnerschaften/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Partnerschaften</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Starke Partner für<br><span class="gradient-text">Ihre Kanzlei</span>
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:640px;margin:1.5rem auto 0;">
          Entdecken Sie unsere wertvollen Partnerschaften, die dazu beitragen, unseren Kunden umfassende und qualitativ hochwertige Dienstleistungen zu bieten. Unser Netzwerk aus Legal-Tech-Spezialisten ergänzt unser Marketing-Know-how optimal.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       PARTNER GRID
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;">
          Unsere <span class="gradient-text">Partner</span>
        </h2>
        <p style="color:var(--color-text-muted);max-width:600px;margin:1rem auto;">
          Ausgewählte Kooperationspartner aus dem Legal-Tech- und Kanzleimanagement-Umfeld.
        </p>
      </div>

      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1.25rem;" class="sr">

        <?php
        $partners = [
            ['name' => 'jur|nodes', 'desc' => 'Legal Tech Plattform'],
            ['name' => 'VAReNo', 'desc' => 'Kanzleiverwaltung'],
            ['name' => 'Flexilead', 'desc' => 'Lead-Management'],
            ['name' => 'Actaport', 'desc' => 'Kanzleisoftware'],
            ['name' => 'Silberfluss', 'desc' => 'Legal Design'],
            ['name' => 'Justin Legal', 'desc' => 'Legal Tech'],
            ['name' => 'Lawlink', 'desc' => 'Mandantenportal'],
            ['name' => 'Rawtime', 'desc' => 'Zeiterfassung'],
            ['name' => 'B2B Evolution', 'desc' => 'B2B Marketing'],
            ['name' => 'Muxom', 'desc' => 'Tech Solutions'],
            ['name' => 'Future Invest', 'desc' => 'Investitions-Beratung'],
            ['name' => 'Eurojuris', 'desc' => 'Anwaltsnetzwerk'],
            ['name' => 'stp.one', 'desc' => 'Kanzleisoftware'],
            ['name' => 'Viewfromthehill', 'desc' => 'Strategie & Beratung'],
        ];
        foreach ($partners as $p): ?>
        <div class="card" style="padding:1.5rem;text-align:center;display:flex;flex-direction:column;align-items:center;gap:0.75rem;">
          <div style="width:3rem;height:3rem;border-radius:0.75rem;background:var(--color-surface);display:flex;align-items:center;justify-content:center;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.4rem;height:1.4rem;color:var(--color-primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <div>
            <div style="font-weight:700;font-size:0.95rem;"><?= htmlspecialchars($p['name']) ?></div>
            <div style="color:var(--color-text-muted);font-size:0.8rem;"><?= htmlspecialchars($p['desc']) ?></div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- ============================================================
       PARTNER WERDEN
       ============================================================ -->
  <section class="section">
    <div class="container">
      <div class="card sr" style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center;padding:clamp(2.5rem,5vw,4rem);">
        <div>
          <span class="tag-chip">Partner werden</span>
          <h2 style="font-family:var(--font-heading);font-size:clamp(1.75rem,4vw,2.5rem);font-weight:800;margin:1rem 0;">
            Partnerschaft mit OMmatic?
          </h2>
          <p style="color:var(--color-text-muted);line-height:1.8;margin-bottom:1.5rem;">
            Sie bieten Lösungen für Rechtsanwaltskanzleien an und möchten gemeinsam mit OMmatic wachsen? Wir freuen uns über Kooperationsanfragen aus dem Legal-Tech- und Kanzleimanagement-Umfeld.
          </p>
          <p style="color:var(--color-text-muted);line-height:1.8;margin-bottom:2rem;">
            Als Partner profitieren Sie von unserem direkten Zugang zu über 500 aktiv betreuten Kanzleien in Deutschland.
          </p>
          <a href="/kontakt/" class="btn btn-primary">Partnerschaft anfragen</a>
        </div>
        <div>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <?php
            $benefits = [
                'Direkter Zugang zu 500+ Kanzleien',
                'Co-Marketing und gemeinsame Inhalte',
                'Technische Integrationen möglich',
                'Gemeinsame Events und Webinare',
                'Empfehlungsbasiertes Netzwerk',
            ];
            foreach ($benefits as $b): ?>
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <div style="width:2rem;height:2rem;border-radius:50%;background:rgba(var(--color-primary-rgb,234,179,8),0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;color:var(--color-primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span style="color:var(--color-text-muted);"><?= htmlspecialchars($b) ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
