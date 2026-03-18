<?php
$page_title       = 'Neuigkeiten – OMmatic | Aktuelles aus dem Kanzleimarketing';
$page_description = 'Aktuelle LinkedIn-Beiträge und Neuigkeiten von OMmatic – Insights rund um Kanzleimarketing, Google Ads, SEO und Legal Tech.';
$page_canonical   = 'https://ommatic.de/neuigkeiten/';
require_once '../includes/header.php';
?>
<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);padding-bottom:clamp(2rem,4vw,3rem);">
    <div class="container" style="text-align:center;max-width:800px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Aktuelles</span>
        <h1 style="font-family:var(--font-h);font-size:clamp(2.5rem,6vw,4rem);font-weight:900;line-height:1.1;margin-top:1rem;letter-spacing:-0.02em;">
          Neuigkeiten &amp; <span class="gradient-text">Updates</span>
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.2rem);color:var(--text-2);max-width:580px;margin:1.25rem auto 0;line-height:1.7;">
          Folgen Sie uns auf LinkedIn für tägliche Insights rund um Kanzleimarketing, Google Ads und Legal Tech.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       LINKEDIN FEED (OMmatic Company Page)
       ============================================================ -->
  <section class="section" style="padding-top:clamp(1rem,3vw,2rem);">
    <div class="container">

      <div class="sk-ww-linkedin-page-post" data-embed-id="25646199"></div>
      <script src="https://widgets.sociablekit.com/linkedin-page-posts/widget.js" defer></script>

    </div>
  </section>

</main>
<?php require_once '../includes/footer.php'; ?>
