<?php
$page_title       = 'Neuigkeiten – OMmatic | Aktuelles aus dem Kanzleimarketing';
$page_description = 'Aktuelle LinkedIn-Beiträge und Neuigkeiten von OMmatic – Insights rund um Kanzleimarketing, Google Ads, SEO und Legal Tech.';
$page_canonical   = 'https://ommatic.de/neuigkeiten/';
require_once '../includes/header.php';
require_once '../includes/components.php';
?>
<main>

<?php om_page_hero([
    'tag'        => 'Aktuelles',
    'breadcrumb' => 'Neuigkeiten',
    'title'      => 'Neuigkeiten &amp; <span class="gradient-text">Updates</span>',
    'sub'        => 'Aktuelle Beiträge und Insights von OMmatic rund um Kanzleimarketing, Google Ads, SEO und Legal Tech.',
]); ?>

  <!-- ============================================================
       LINKEDIN FEEDS (2-spaltig)
       ============================================================ -->
  <style>
    /* SociableKit Widget: 2-Spalten-Layout */
    .sk-ww-linkedin-page-post    .sk-items,
    .sk-ww-linkedin-profile-post .sk-items {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 1.5rem !important;
    }
    /* Fallback für ältere Widget-Versionen */
    .sk-ww-linkedin-page-post    > div > ul,
    .sk-ww-linkedin-profile-post > div > ul {
      display: grid !important;
      grid-template-columns: 1fr 1fr !important;
      gap: 1.5rem !important;
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    @media (max-width: 680px) {
      .sk-ww-linkedin-page-post    .sk-items,
      .sk-ww-linkedin-profile-post .sk-items,
      .sk-ww-linkedin-page-post    > div > ul,
      .sk-ww-linkedin-profile-post > div > ul {
        grid-template-columns: 1fr !important;
      }
    }
  </style>

  <section class="section">
    <div class="container">

      <!-- OMmatic Company Page -->
      <div class="sr" style="margin-bottom:clamp(3rem,6vw,5rem);">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:1.5rem;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width:22px;height:22px;color:var(--primary);flex-shrink:0;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          <h2 style="font-family:var(--font-h);font-size:clamp(1.25rem,2.5vw,1.75rem);font-weight:800;margin:0;letter-spacing:-0.02em;">
            OMmatic auf <span class="gradient-text">LinkedIn</span>
          </h2>
        </div>
        <div class="sk-ww-linkedin-page-post" data-embed-id="25646199"></div>
        <script src="https://widgets.sociablekit.com/linkedin-page-posts/widget.js" defer></script>
      </div>

      <!-- Marcel Zirkel Profile Posts -->
      <div class="sr sr-d1">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:1.5rem;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width:22px;height:22px;color:var(--primary);flex-shrink:0;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          <h2 style="font-family:var(--font-h);font-size:clamp(1.25rem,2.5vw,1.75rem);font-weight:800;margin:0;letter-spacing:-0.02em;">
            Marcel Zirkel auf <span class="gradient-text">LinkedIn</span>
          </h2>
        </div>
        <div class="sk-ww-linkedin-profile-post" data-embed-id="25661987"></div>
        <script src="https://widgets.sociablekit.com/linkedin-profile-posts/widget.js" defer></script>
      </div>

    </div>
  </section>

</main>
<?php require_once '../includes/footer.php'; ?>
