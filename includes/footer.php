
<?php
require_once __DIR__ . '/components.php';
if (empty($hide_contact_section)) om_contact_section();
?>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid footer-grid--5col">

      <!-- Col 1: Brand + Social -->
      <div class="footer-brand-col">
        <a href="/" class="logo f-logo">OMmatic<span class="dot">.</span></a>
        <p class="f-tagline">Deutschlands führende Performance-Marketing-Agentur für Rechtsanwaltskanzleien. Legal · Tech · Growth.</p>
        <div class="f-contact">
          <a href="tel:+4963120691820" class="f-contact-item">
            <span class="f-contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.07 1.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.16z"/></svg>
            </span>
            0631 206 9182-0
          </a>
          <a href="mailto:hallo@ommatic.de" class="f-contact-item">
            <span class="f-contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            hallo@ommatic.de
          </a>
          <div class="f-contact-item">
            <span class="f-contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </span>
            Zollamtstraße 11, 67663 Kaiserslautern
          </div>
        </div>
        <!-- Social Links -->
        <div class="f-social">
          <a href="https://www.linkedin.com/company/ommatic/" class="f-social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="https://www.facebook.com/OMmatic/" class="f-social-link" target="_blank" rel="noopener" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://wa.me/+4915161587446" class="f-social-link" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </a>
        </div>
      </div>

      <!-- Col 2: Kanzleimarketing -->
      <div>
        <div class="f-col-title">Kanzleimarketing</div>
        <div class="f-links">
          <a href="/kanzleimarketing/" class="f-link">Übersicht</a>
          <a href="/kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/" class="f-link">SEO für Rechtsanwälte</a>
          <a href="/kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/" class="f-link">SEA-Kampagnen</a>
          <a href="/kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/" class="f-link">Lokales Online-Marketing</a>
          <a href="/kanzleimarketing/social-media-fuer-rechtsanwaelte/" class="f-link">Social Media für Anwälte</a>
          <a href="/kanzleimarketing/messung-und-berichte-analytics-reporting/" class="f-link">Analytics &amp; Reporting</a>
          <a href="/kanzleimarketing/datenschutz-und-compliance-fuer-rechtsanwaelte/" class="f-link">Datenschutz &amp; Compliance</a>
          <a href="/kanzleimarketing/branchenlisting-fuer-anwaelte/" class="f-link">Branchenlisting</a>
          <a href="/kanzleimarketing/call-tracking-fuer-anwaelte/" class="f-link">Call Tracking</a>
          <a href="/kanzleimarketing/ki-anrufbeantworter-fuer-anwaelte/" class="f-link">KI-Anrufbeantworter</a>
        </div>
      </div>

      <!-- Col 3: Agentur -->
      <div>
        <div class="f-col-title">Agentur</div>
        <div class="f-links">
          <a href="/ueber-uns/" class="f-link">Über OMmatic</a>
          <a href="/ansprechpartner/" class="f-link">Ansprechpartner</a>
          <a href="/partnerschaften/" class="f-link">Partnerschaften</a>
          <a href="/karriere/" class="f-link">Karriere</a>
          <a href="/erfolge/" class="f-link">Erfolge &amp; Referenzen</a>
          <a href="/preise/" class="f-link">Preise</a>
          <a href="/legal-business-forum/" class="f-link">Legal Business Forum</a>
          <a href="/kontakt/" class="f-link">Kontakt</a>
        </div>
      </div>

      <!-- Col 4: Online Checks + Aktuelles -->
      <div>
        <div class="f-col-title">Online Checks</div>
        <div class="f-links">
          <a href="/check/" class="f-link">Website-Check</a>
          <a href="/lokale-praesenz-pruefen/" class="f-link">Online-Präsenz-Check</a>
        </div>
        <div class="f-col-title" style="margin-top:20px">Aktuelles</div>
        <div class="f-links">
          <a href="/blog/" class="f-link">Blog</a>
          <a href="/neuigkeiten/" class="f-link">Neuigkeiten</a>
        </div>
        <div class="f-col-title" style="margin-top:20px">Branchenleistungen</div>
        <div class="f-links">
          <a href="/branchenleistungen/" class="f-link">Übersicht</a>
          <a href="/branchenleistungen/lokales-online-marketing-mybusiness-fuer-handwerker/" class="f-link">Online-Marketing für Handwerker</a>
          <a href="/branchenleistungen/lokales-online-marketing-fuer-versicherungsmakler-vertreter/" class="f-link">Online-Marketing für Versicherungsmakler</a>
        </div>
      </div>

      <!-- Col 5: Rechtliches -->
      <div>
        <div class="f-col-title">Rechtliches</div>
        <div class="f-links">
          <a href="/impressum/" class="f-link">Impressum</a>
          <a href="/datenschutz/" class="f-link">Datenschutz</a>
          <a href="/agb/" class="f-link">AGB</a>
          <a href="/sitemap/" class="f-link">Sitemap</a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="f-copy">© <?= date('Y') ?> OMmatic GmbH · Alle Rechte vorbehalten.</div>
      <nav class="f-legal" aria-label="Rechtliche Links">
        <a href="/impressum/" class="f-bottom-link">Impressum</a>
        <a href="/datenschutz/" class="f-bottom-link">Datenschutz</a>
        <a href="/agb/" class="f-bottom-link">AGB</a>
      </nav>
    </div>

  </div>
</footer>

<!-- ============================================================
     CALENDLY MODAL
     ============================================================ -->
<div id="cal-modal" class="cal-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="cal-modal-title">
  <div class="cal-modal-overlay" id="cal-modal-overlay"></div>
  <div class="cal-modal-dialog">
    <div class="cal-modal-header">
      <div class="cal-modal-title" id="cal-modal-title">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;color:var(--primary)"><rect x="3" y="4" width="18" height="18" rx="2" stroke-width="1.75"/><line x1="16" y1="2" x2="16" y2="6" stroke-width="1.75"/><line x1="8" y1="2" x2="8" y2="6" stroke-width="1.75"/><line x1="3" y1="10" x2="21" y2="10" stroke-width="1.75"/></svg>
        Termin buchen
      </div>
      <button class="cal-modal-close" id="cal-modal-close" aria-label="Schließen">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="cal-modal-body">
      <iframe id="cal-iframe" src="" frameborder="0" allowfullscreen title="Termin buchen bei OMmatic"></iframe>
    </div>
  </div>
</div>

<button class="scroll-top" id="scrollTop" aria-label="Nach oben scrollen">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>

<script src="/assets/js/main.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/js/main.js') ?>"></script>
</body>
</html>
