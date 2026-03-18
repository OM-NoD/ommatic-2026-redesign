<?php
$page_title       = 'Unser Team – Ansprechpartner bei OMmatic';
$page_description = 'Lernen Sie das OMmatic-Team kennen: Marcel Zirkel, Alex Börsig und Cornelia Day – Ihre persönlichen Ansprechpartner für erfolgreiches Kanzleimarketing.';
$page_canonical   = 'https://ommatic.de/ansprechpartner/';
require_once '../includes/header.php';
require_once '../includes/components.php';
?>
<main>

<?php om_page_hero([
    'tag'        => 'Team',
    'breadcrumb' => 'Ansprechpartner',
    'title'      => 'Ihr persönliches<br><span class="gradient-text">Experten-Team</span>',
    'sub'        => 'Drei Experten. Ein Ziel: messbare Mandantengewinnung für Ihre Kanzlei. Lernen Sie die Menschen kennen, die täglich für Ihren Erfolg arbeiten.',
    'ctas'       => [
        ['label' => 'Beratungsgespräch anfragen', 'href' => '/kontakt/', 'class' => 'btn-primary'],
        ['label' => 'Über OMmatic',               'href' => '/ueber-uns/', 'class' => 'btn-ghost'],
    ],
]); ?>

  <!-- ============================================================
       TEAM CARDS
       ============================================================ -->
  <section class="section" style="padding-top:0;padding-bottom:var(--py);">
    <div class="container">

      <div class="team-grid">

        <!-- Marcel Zirkel -->
        <article class="team-card sr">
          <img
            src="/assets/img/team/Marcel-Zirkel_Ommatic.jpg"
            alt="Marcel Zirkel – Geschäftsführer OMmatic"
            class="team-card-img"
          >
          <div class="team-card-body">
            <div class="team-card-name">Marcel Zirkel</div>
            <div class="team-card-role">Geschäftsführer &amp; Co-Founder</div>
            <p class="team-card-bio">
              Als Geschäftsführer und Co-Founder der OMmatic GmbH verantwortet Marcel Strategie, Produktentwicklung und die Weiterentwicklung der Software-Plattform Trailblazer. Er bringt über 10 Jahre Erfahrung in SEO, SEA und Social Media mit und betreut mit seinem Team alle Kundenbelange.
            </p>
            <div class="team-card-actions">
              <a href="/ansprechpartner/marcel-zirkel/" class="btn btn-primary">Profil ansehen</a>
              <a href="/kontakt/" class="btn btn-ghost">Kontaktieren</a>
            </div>
          </div>
        </article>

        <!-- Alex Börsig -->
        <article class="team-card sr sr-d1">
          <img
            src="/assets/img/team/alex-boersig-ommatic.jpg"
            alt="Alex Börsig – Chief Sales Officer OMmatic"
            class="team-card-img"
          >
          <div class="team-card-body">
            <div class="team-card-name">Alex Börsig</div>
            <div class="team-card-role">Chief Sales Officer (CSO)</div>
            <p class="team-card-bio">
              Alex verantwortet die strategische Ausrichtung des Vertriebs, den Aufbau skalierbarer Sales-Prozesse und die Entwicklung neuer Angebote für Kanzleien und Beratungsunternehmen. Sein Fokus liegt auf strukturierten Go-to-Market-Konzepten und klarer Positionierung.
            </p>
            <div class="team-card-actions">
              <a href="/ansprechpartner/alex-boersig/" class="btn btn-primary">Profil ansehen</a>
              <a href="/kontakt/" class="btn btn-ghost">Kontaktieren</a>
            </div>
          </div>
        </article>

        <!-- Cornelia Day -->
        <article class="team-card sr sr-d2">
          <img
            src="/assets/img/team/ommatic-conny.jpg"
            alt="Cornelia Day – Senior Account Managerin OMmatic"
            class="team-card-img"
          >
          <div class="team-card-body">
            <div class="team-card-name">Cornelia Day</div>
            <div class="team-card-role">Senior Account Managerin</div>
            <p class="team-card-bio">
              Cornelia betreut und entwickelt Bestandskunden mit analytischer
              Präzision und pragmatischem Blick. Ihr Schwerpunkt: Potenziale
              frühzeitig erkennen, Prozesse abstimmen und digitale
              Marketingmaßnahmen dauerhaft erfolgreich umsetzen.
            </p>
            <div class="team-card-actions">
              <a href="/ansprechpartner/cornelia-day/" class="btn btn-primary">Profil ansehen</a>
              <a href="/kontakt/" class="btn btn-ghost">Kontaktieren</a>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section cta-section sr">
    <div class="container" style="text-align:center;">
      <div class="tag-chip" style="margin:0 auto 20px;">Erstberatung</div>
      <h2 style="font-family:var(--font-h);font-size:clamp(26px,4vw,42px);font-weight:800;margin-bottom:16px;">
        Bereit für den nächsten Schritt?
      </h2>
      <p style="color:var(--text-2);font-size:clamp(15px,1.8vw,18px);max-width:520px;margin:0 auto 32px;line-height:1.7;">
        Sprechen Sie direkt mit einem unserer Experten – kostenlos und unverbindlich.
      </p>
      <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
        <a href="/kontakt/" class="btn btn-primary btn-lg">Jetzt Beratung anfragen</a>
        <a href="tel:+4963120691820" class="btn btn-ghost btn-lg">+49 631 206 9182-0</a>
      </div>
    </div>
  </section>

</main>
<?php require_once '../includes/footer.php'; ?>
