<?php
$page_title       = 'Kontakt – OMmatic Legal Marketing | Kostenlose Erstberatung anfragen';
$page_description = 'Kontaktieren Sie OMmatic für eine kostenlose Erstberatung. Wir analysieren Ihre Kanzlei-Marketing-Situation und zeigen, wie Sie messbar mehr Mandanten gewinnen.';
$page_canonical   = 'https://ommatic.de/kontakt/';
$hide_contact_section = true; // Seite hat eigenes Kontaktformular
require_once '../includes/header.php';
require_once '../includes/components.php';
?>
<main>

<?php om_page_hero([
    'tag'        => 'Kontakt aufnehmen',
    'breadcrumb' => 'Kontakt',
    'title'      => 'Bereit für messbar mehr<br><span class="gradient-text">Mandanten?</span>',
    'sub'        => 'Fordern Sie jetzt Ihre kostenlose Erstberatung an. Wir analysieren Ihre Situation und melden uns innerhalb von 24 Stunden.',
    'ctas'       => [
        ['label' => 'Jetzt Anfrage senden',  'href' => '#kontakt-formular',                     'class' => 'btn-primary'],
        ['label' => 'Termin online buchen',  'href' => 'https://calendly.com/marcel-zirkel/45min', 'class' => 'btn-ghost'],
    ],
]); ?>


  <!-- ============================================================
       ZWEI-SPALTEN: KONTAKTINFO LINKS · FORMULAR RECHTS
       ============================================================ -->
  <section class="content-section" id="kontakt-formular">
    <div class="container">
      <div class="two-col" style="align-items:flex-start;gap:clamp(32px,5vw,80px);">

        <!-- ── LINKE SPALTE: Info ── -->
        <div class="prose sr" style="max-width:480px;">
          <span class="tag-chip" style="margin-bottom:20px;display:inline-flex;">Kontakt aufnehmen</span>
          <h2 class="section-h2">Bereit für messbar mehr<br><span class="gradient-text">Mandanten?</span></h2>
          <p style="margin-bottom:2rem;">Nutzen Sie unser kostenloses Erstgespräch – wir analysieren Ihre aktuelle Online-Präsenz und zeigen Ihnen konkret, welche Maßnahmen sofort wirken.</p>

          <!-- Kontaktpunkte -->
          <div style="display:flex;flex-direction:column;gap:16px;margin-bottom:2rem;">

            <a href="tel:+4963120691820" style="display:flex;align-items:center;gap:16px;text-decoration:none;padding:16px 20px;border-radius:var(--radius);background:var(--bg-card);border:1px solid var(--border-s);transition:border-color .2s;" class="contact-item-row">
              <span style="width:40px;height:40px;border-radius:10px;background:rgba(0,194,255,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </span>
              <div>
                <div style="font-size:12px;color:var(--text-3);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:2px;">Telefon</div>
                <div style="font-size:16px;font-weight:600;color:var(--text-1);">+49 631 206918-20</div>
              </div>
            </a>

            <a href="mailto:info@ommatic.de" style="display:flex;align-items:center;gap:16px;text-decoration:none;padding:16px 20px;border-radius:var(--radius);background:var(--bg-card);border:1px solid var(--border-s);transition:border-color .2s;" class="contact-item-row">
              <span style="width:40px;height:40px;border-radius:10px;background:rgba(124,115,230,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--indigo);"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </span>
              <div>
                <div style="font-size:12px;color:var(--text-3);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:2px;">E-Mail</div>
                <div style="font-size:16px;font-weight:600;color:var(--text-1);">info@ommatic.de</div>
              </div>
            </a>

            <div style="display:flex;align-items:center;gap:16px;padding:16px 20px;border-radius:var(--radius);background:var(--bg-card);border:1px solid var(--border-s);">
              <span style="width:40px;height:40px;border-radius:10px;background:rgba(0,212,170,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75" style="width:20px;height:20px;color:var(--teal);"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
              <div>
                <div style="font-size:12px;color:var(--text-3);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:2px;">Erreichbarkeit</div>
                <div style="font-size:16px;font-weight:600;color:var(--text-1);">Mo – So: 09:00 – 17:00 Uhr</div>
              </div>
            </div>

            <a href="https://wa.me/+4915161587446" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:16px;text-decoration:none;padding:16px 20px;border-radius:var(--radius);background:var(--bg-card);border:1px solid var(--border-s);transition:border-color .2s;" class="contact-item-row">
              <span style="width:40px;height:40px;border-radius:10px;background:rgba(37,211,102,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#25D366" style="width:20px;height:20px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              </span>
              <div>
                <div style="font-size:12px;color:var(--text-3);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:2px;">WhatsApp</div>
                <div style="font-size:16px;font-weight:600;color:var(--text-1);">+49 151 61587446</div>
              </div>
            </a>

          </div>

          <!-- Trust Badge -->
          <div style="display:inline-flex;align-items:center;gap:10px;padding:12px 20px;border-radius:var(--radius);border:1px solid rgba(0,194,255,.25);background:rgba(0,194,255,.06);">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--primary);flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            <span style="font-size:14px;font-weight:600;color:var(--text-1);">Kostenlos &amp; unverbindlich – kein Verkaufsdruck</span>
          </div>
        </div>

        <!-- ── RECHTE SPALTE: Formular-Karte ── -->
        <div class="contact-form-wrap sr sr-d1" style="flex:1;position:relative;">
          <form method="post" action="/kontakt/send.php" class="contact-form" novalidate>
            <input type="text" name="honeypot" style="display:none;" tabindex="-1" autocomplete="off">

            <h3 style="font-family:var(--font-h);font-size:clamp(20px,2.2vw,26px);font-weight:700;margin:0 0 6px;">Anfrage senden</h3>
            <p style="font-size:14px;color:var(--text-2);margin:0 0 28px;line-height:1.6;">Wir benötigen nur wenige Angaben und melden uns innerhalb von 24 Stunden.</p>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="k-name">Ihr Name <span style="color:var(--primary)">*</span></label>
                <input type="text" id="k-name" name="name" class="form-input" placeholder="Dr. Max Mustermann" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="k-kanzlei">Kanzlei</label>
                <input type="text" id="k-kanzlei" name="kanzlei" class="form-input" placeholder="Mustermann &amp; Partner">
              </div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="k-email">E-Mail <span style="color:var(--primary)">*</span></label>
                <input type="email" id="k-email" name="email" class="form-input" placeholder="kanzlei@beispiel.de" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="k-tel">Telefon <span style="color:var(--text-3);font-weight:400;">(optional)</span></label>
                <input type="tel" id="k-tel" name="telefon" class="form-input" placeholder="+49 631 ...">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="k-leistung">Gewünschte Leistung</label>
              <select id="k-leistung" name="leistung" class="form-input">
                <option value="" disabled selected>Bitte wählen ...</option>
                <option value="seo">SEO für Rechtsanwälte</option>
                <option value="google-ads">Google Ads für Kanzleien</option>
                <option value="sea">SEA-Kampagnen</option>
                <option value="local">Lokales Online-Marketing</option>
                <option value="social">Social Media Marketing</option>
                <option value="ki">KI-Anrufbeantworter</option>
                <option value="website">Website / Kanzlei-Homepage</option>
                <option value="full-service">Full-Service (alles)</option>
                <option value="beratung">Erstberatung / Analyse</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="k-nachricht">Nachricht</label>
              <textarea id="k-nachricht" name="nachricht" class="form-input" rows="4"
                        placeholder="Kurze Beschreibung Ihrer aktuellen Situation und Ihrer Ziele ..." style="resize:vertical;"></textarea>
            </div>

            <div class="form-group" style="display:flex;align-items:flex-start;gap:12px;margin-bottom:4px;">
              <input type="checkbox" id="k-dsgvo" name="dsgvo" required
                     style="width:18px;height:18px;margin-top:3px;flex-shrink:0;accent-color:var(--primary);">
              <label for="k-dsgvo" style="font-size:13px;color:var(--text-2);line-height:1.6;">
                Ich habe die <a href="/datenschutz/" style="color:var(--primary);">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anfrage zu. <span style="color:var(--primary)">*</span>
              </label>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;margin-top:16px;">
              Anfrage kostenfrei absenden
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </button>
            <p style="text-align:center;font-size:13px;color:var(--text-3);margin-top:12px;margin-bottom:0;">
              Keine Weitergabe an Dritte · Antwort innerhalb von 24 Stunden
            </p>
          </form>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       ONLINE TERMIN BUCHEN
       ============================================================ -->
  <section class="content-section alt">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:clamp(28px,3vw,44px);">
        <span class="tag-chip">Lieber direkt sprechen?</span>
        <h2 class="section-h2" style="text-align:center;">Online-Termin in 60 Sekunden buchen</h2>
        <p class="section-sub">Wählen Sie einfach einen freien Slot – wir sind da.</p>
      </div>
      <div class="feature-grid" style="grid-template-columns:repeat(3,1fr);">

        <article class="feature-card sr sr-d1">
          <div class="feature-icon ic-cyan">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="feature-title">Erstgespräch buchen</h3>
          <p class="feature-text">45-minütiges kostenloses Strategiegespräch direkt mit Marcel Zirkel – unverbindlich, ohne Verkaufsdruck.</p>
          <a href="https://calendly.com/marcel-zirkel/45min" class="btn btn-ghost btn-sm" style="margin-top:auto;display:inline-flex;align-items:center;gap:6px;">
            Termin buchen →
          </a>
        </article>

        <article class="feature-card sr sr-d2">
          <div class="feature-icon ic-indigo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          </div>
          <h3 class="feature-title">Direkt anrufen</h3>
          <p class="feature-text">Mo – So von 09:00 bis 17:00 Uhr erreichbar. Wir nehmen uns Zeit für Ihre Fragen.</p>
          <a href="tel:+4963120691820" class="btn btn-ghost btn-sm" style="margin-top:auto;display:inline-flex;align-items:center;gap:6px;">
            +49 631 206918-20 →
          </a>
        </article>

        <article class="feature-card sr sr-d3">
          <div class="feature-icon ic-teal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width:24px;height:24px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </div>
          <h3 class="feature-title">WhatsApp</h3>
          <p class="feature-text">Schnelle Fragen, schnelle Antworten – schreiben Sie uns auf WhatsApp, wir antworten prompt.</p>
          <a href="https://wa.me/+4915161587446" target="_blank" rel="noopener" class="btn btn-ghost btn-sm" style="margin-top:auto;display:inline-flex;align-items:center;gap:6px;">
            WhatsApp öffnen →
          </a>
        </article>

      </div>
    </div>
  </section>


<?php om_cta_banner([
    'tag'           => 'Bereit loszulegen?',
    'title'         => 'Kostenlose Erstberatung in 24h',
    'sub'           => 'Kein Verkaufsgespräch, keine Verpflichtung – nur echte Insights für Ihre Kanzlei.',
    'primary_btn'   => ['label' => 'Jetzt Anfrage senden',   'href' => '#kontakt-formular'],
    'secondary_btn' => ['label' => 'Alle Leistungen ansehen', 'href' => '/kanzleimarketing/'],
]); ?>

</main>

<?php require_once '../includes/footer.php'; ?>
