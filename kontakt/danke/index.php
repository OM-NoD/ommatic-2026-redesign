<?php
/**
 * OMmatic – Danke-Seite nach Kontaktformular-Submit
 * Google Ads Conversion-Pixel bereit
 */
require_once '../../includes/functions.php';

$page_title       = 'Danke für Ihre Anfrage – OMmatic';
$page_description = 'Wir haben Ihre Anfrage erhalten und melden uns in Kürze bei Ihnen.';
$page_canonical   = 'https://ommatic.de/kontakt/danke/';

// Sicherheit: Seite ist nur sinnvoll nach echtem Submit.
// Kein Blocker nötig – Google indexiert sie dank noindex nicht.

require_once '../../includes/header.php';
?>

<!-- ══ Google Ads Conversion-Pixel (Platzhalter) ══════════════
     Hier den echten Conversion-Tag von Google Ads einfügen.
     Label und ID aus dem Google Ads Konto kopieren.
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-XXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-XXXXXXXXX');
  gtag('event', 'conversion', {
    'send_to': 'AW-XXXXXXXXX/YYYYYYYYYYYY',
    'value': 1.0,
    'currency': 'EUR'
  });
</script>
══════════════════════════════════════════════════════════════ -->

<main class="danke-page" style="min-height: 70vh; display:flex; align-items:center; justify-content:center; padding: 4rem 1.5rem;">

    <div class="danke-inner" style="max-width: 640px; text-align: center;">

        <!-- Icon -->
        <div class="danke-icon" style="margin-bottom: 2rem;">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" aria-hidden="true">
                <circle cx="40" cy="40" r="40" fill="var(--color-primary, #1a56db)" opacity="0.1"/>
                <circle cx="40" cy="40" r="30" fill="var(--color-primary, #1a56db)" opacity="0.15"/>
                <path d="M26 41l10 10 18-20" stroke="var(--color-primary, #1a56db)"
                      stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <!-- Headline -->
        <h1 style="font-size: clamp(1.75rem, 4vw, 2.5rem); margin-bottom: 1rem;">
            Vielen Dank für Ihre Anfrage!
        </h1>

        <!-- Subtext -->
        <p style="font-size: 1.125rem; color: var(--color-text-muted, #6b7280); margin-bottom: 2rem; line-height: 1.7;">
            Wir haben Ihre Nachricht erhalten und melden uns in der Regel
            <strong>innerhalb von 24 Stunden</strong> bei Ihnen.
            Eine Bestätigung wurde an Ihre E-Mail-Adresse gesendet.
        </p>

        <!-- CTA zurück -->
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/" class="btn btn-primary">
                Zur Startseite
            </a>
            <a href="/kanzleimarketing/" class="btn btn-outline">
                Leistungen entdecken
            </a>
        </div>

    </div>

</main>

<?php require_once '../../includes/footer.php'; ?>
