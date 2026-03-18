<?php
$page_title       = 'Kontakt – OMmatic Legal Marketing | Kostenlose Erstberatung anfragen';
$page_description = 'Kontaktieren Sie OMmatic für eine kostenlose Erstberatung. Wir analysieren Ihre Kanzlei-Marketing-Situation und zeigen, wie Sie messbar mehr Mandanten gewinnen.';
$page_canonical   = 'https://ommatic.de/kontakt/';
require_once '../includes/header.php';
?>
<main>

  <!-- Hero -->
  <section class="page-hero">
    <div class="container">
      <div class="tag-chip sr">Kontakt</div>
      <h1 class="sr">Wir sind für Sie da</h1>
      <p class="page-hero-sub sr">Durch Branchenkenntnis und Kompetenz Kunden begeistern. Buchen Sie jetzt Ihren kostenlosen Beratungstermin.</p>
      <div class="page-hero-ctas sr">
        <a href="https://calendly.com/marcel-zirkel/45min" class="btn btn-primary" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          Online Termin buchen
        </a>
        <a href="tel:+4963120691820" class="btn btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          0631 206 9182-0
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Grid -->
  <section class="section">
    <div class="container">
      <div class="contact-grid">

        <!-- Left: Form -->
        <div class="contact-form-wrap">
          <h2 style="font-family:var(--font-h);font-size:clamp(22px,2.5vw,28px);font-weight:700;margin-bottom:8px;">Anfrage senden</h2>
          <p style="color:var(--text-2);font-size:15px;margin-bottom:28px;">Wir benötigen nur 10 Minuten Ihrer wertvollen Zeit und melden uns innerhalb von 24 Stunden.</p>

          <!-- Honeypot (DSGVO/Spam-Schutz) -->
          <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

          <form id="contactForm" method="post" action="/kontakt/send.php" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label for="f-name">Name <span class="req">*</span></label>
                <input type="text" id="f-name" name="name" placeholder="Ihr vollständiger Name" required>
              </div>
              <div class="form-group">
                <label for="f-kanzlei">Kanzlei</label>
                <input type="text" id="f-kanzlei" name="kanzlei" placeholder="Name Ihrer Kanzlei">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="f-email">E-Mail <span class="req">*</span></label>
                <input type="email" id="f-email" name="email" placeholder="ihre@email.de" required>
              </div>
              <div class="form-group">
                <label for="f-tel">Telefon</label>
                <input type="tel" id="f-tel" name="telefon" placeholder="+49 ...">
              </div>
            </div>
            <div class="form-group">
              <label for="f-leistung">Gewünschte Leistung</label>
              <select id="f-leistung" name="leistung">
                <option value="" disabled selected>Bitte wählen ...</option>
                <option value="google-ads">Google Ads für Kanzleien</option>
                <option value="seo">SEO für Rechtsanwälte</option>
                <option value="sea">SEA-Kampagnen</option>
                <option value="local">Lokales Online-Marketing</option>
                <option value="social">Social Media Marketing</option>
                <option value="ki">KI-Anrufbeantworter</option>
                <option value="full-service">Full-Service (alles)</option>
                <option value="beratung">Erstberatung / Analyse</option>
              </select>
            </div>
            <div class="form-group">
              <label for="f-nachricht">Nachricht</label>
              <textarea id="f-nachricht" name="nachricht" placeholder="Kurze Beschreibung Ihrer aktuellen Situation und Ihrer Ziele ..."></textarea>
            </div>
            <div class="form-divider"></div>
            <div class="form-check">
              <input type="checkbox" id="f-dsgvo" name="f-dsgvo" value="1" required>
              <label class="form-check-label" for="f-dsgvo">
                Ich habe die <a href="/datenschutz/">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anfrage zu. <span class="req">*</span>
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg form-submit">
              Anfrage kostenfrei absenden
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </button>
            <p class="form-note">Keine Weitergabe an Dritte. Antwort innerhalb von 24 Stunden.</p>
          </form>
        </div>

        <!-- Right: Kontaktdaten + Google Maps -->
        <div class="contact-info">

          <div class="contact-info-cards">
            <a href="tel:+4963120691820" class="contact-info-card">
              <span class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </span>
              <div>
                <div class="contact-info-label">Telefon</div>
                <div class="contact-info-value">0631 206 9182-0</div>
              </div>
            </a>
            <a href="mailto:hallo@ommatic.de" class="contact-info-card">
              <span class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </span>
              <div>
                <div class="contact-info-label">E-Mail</div>
                <div class="contact-info-value">hallo@ommatic.de</div>
              </div>
            </a>
            <div class="contact-info-card">
              <span class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </span>
              <div>
                <div class="contact-info-label">Adresse</div>
                <div class="contact-info-value">Zollamtstraße 11, 67663 Kaiserslautern</div>
              </div>
            </div>
            <div class="contact-info-card">
              <span class="contact-info-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
              <div>
                <div class="contact-info-label">Öffnungszeiten</div>
                <div class="contact-info-value">Mo – Fr: 09:00 – 17:00 Uhr</div>
              </div>
            </div>
            <a href="https://wa.me/+4915161587446" class="contact-info-card" target="_blank" rel="noopener">
              <span class="contact-info-icon" style="background:rgba(37,211,102,0.12);color:#25D366;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              </span>
              <div>
                <div class="contact-info-label">WhatsApp</div>
                <div class="contact-info-value">+49 151 61587446</div>
              </div>
            </a>
            <a href="https://calendly.com/marcel-zirkel/45min" class="contact-info-card" target="_blank" rel="noopener" style="border-color:var(--primary);background:var(--primary-dim);">
              <span class="contact-info-icon" style="background:var(--primary-dim);color:var(--primary);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" width="22" height="22"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              </span>
              <div>
                <div class="contact-info-label" style="color:var(--primary);">Online Termin</div>
                <div class="contact-info-value">Calendly – kostenlos buchen</div>
              </div>
            </a>
          </div>

          <!-- Google Maps -->
          <div style="margin-top:24px;border-radius:14px;overflow:hidden;border:1px solid var(--border-s);">
            <iframe
              src="https://maps.google.com/maps?q=Zollamtstra%C3%9Fe+11+67663+Kaiserslautern&output=embed&z=15"
              width="100%"
              height="320"
              style="border:0;display:block;"
              allowfullscreen
              loading="lazy"
              title="OMmatic GmbH – Zollamtstraße 11, Kaiserslautern">
            </iframe>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
