<?php
$page_lang = 'en';
$page_title = 'Contact OMmatic – Law Firm Marketing Consultation';
$page_description = "Contact OMmatic – Germany's leading law firm marketing agency. We are here for you. Phone: +49 631 206 9182-0, Email: hallo@ommatic.de";
$page_canonical = 'https://ommatic.de/en/contact/';
$page_hreflang_en = 'https://ommatic.de/en/contact/';
$page_hreflang_de = 'https://ommatic.de/kontakt/';
require_once '../../includes/header.php';
?>
<main>

  <section class="section" style="padding-top:6rem;padding-bottom:4rem;background:var(--bg-1)">
    <div class="container">
      <span class="tag-chip">Contact</span>
      <h1 class="sr" style="margin-top:1rem">We are here for you</h1>
      <p class="hero-sub" style="max-width:700px">Inspire customers through industry knowledge and expertise. Contact us for a free initial consultation about your law firm's online marketing.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:start">
        <div>
          <h2 class="sr-d2">Your contact to us</h2>
          <div style="margin-top:2rem;display:grid;gap:1.5rem">
            <div style="display:flex;gap:1rem;align-items:flex-start">
              <span style="font-size:1.5rem">📍</span>
              <div>
                <strong>Address</strong><br>
                Zollamtstraße 11<br>
                67663 Kaiserslautern<br>
                Germany
              </div>
            </div>
            <div style="display:flex;gap:1rem;align-items:flex-start">
              <span style="font-size:1.5rem">📞</span>
              <div>
                <strong>Phone</strong><br>
                <a href="tel:+4963120691820">+49 631 206 9182-0</a>
              </div>
            </div>
            <div style="display:flex;gap:1rem;align-items:flex-start">
              <span style="font-size:1.5rem">✉️</span>
              <div>
                <strong>Email</strong><br>
                <a href="mailto:hallo@ommatic.de">hallo@ommatic.de</a>
              </div>
            </div>
            <div style="display:flex;gap:1rem;align-items:flex-start">
              <span style="font-size:1.5rem">🕐</span>
              <div>
                <strong>Office Hours</strong><br>
                Mon–Fri: 09:00–17:00
              </div>
            </div>
          </div>
        </div>
        <div>
          <h2 class="sr-d2">Send us a message</h2>
          <form action="/kontakt/send.php" method="post" style="margin-top:2rem;display:grid;gap:1rem">
            <input type="hidden" name="lang" value="en">
            <div>
              <label style="display:block;margin-bottom:.5rem;font-weight:500">Your name</label>
              <input type="text" name="name" required style="width:100%;padding:.75rem 1rem;border:1px solid var(--border);border-radius:.5rem;background:var(--bg-2);color:var(--text)">
            </div>
            <div>
              <label style="display:block;margin-bottom:.5rem;font-weight:500">Email address</label>
              <input type="email" name="email" required style="width:100%;padding:.75rem 1rem;border:1px solid var(--border);border-radius:.5rem;background:var(--bg-2);color:var(--text)">
            </div>
            <div>
              <label style="display:block;margin-bottom:.5rem;font-weight:500">Phone (optional)</label>
              <input type="tel" name="phone" style="width:100%;padding:.75rem 1rem;border:1px solid var(--border);border-radius:.5rem;background:var(--bg-2);color:var(--text)">
            </div>
            <div>
              <label style="display:block;margin-bottom:.5rem;font-weight:500">Your message</label>
              <textarea name="message" rows="5" required style="width:100%;padding:.75rem 1rem;border:1px solid var(--border);border-radius:.5rem;background:var(--bg-2);color:var(--text);resize:vertical"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>
<?php require_once '../../includes/footer.php'; ?>
