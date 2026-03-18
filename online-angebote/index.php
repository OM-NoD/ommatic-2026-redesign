<?php
$page_title       = 'Online-Angebote – OMmatic | Tools und Analysen für Kanzleien';
$page_description = 'Online-Angebote von OMmatic: Potenzialanalyse, kostenlose Checks und digitale Tools speziell für Rechtsanwaltskanzleien. Genau das, was Sie brauchen!';
$page_canonical   = 'https://ommatic.de/online-angebote/';
require_once '../includes/header.php';
?>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="section hero" style="padding-top:clamp(6rem,12vw,10rem);">
    <div class="container" style="text-align:center;max-width:900px;margin:0 auto;">
      <div class="sr">
        <span class="tag-chip">Online-Angebote</span>
        <h1 style="font-family:var(--font-heading);font-size:clamp(2.5rem,6vw,4.5rem);font-weight:900;line-height:1.1;margin-top:1rem;">
          Genau das, was<br><span class="gradient-text">Sie brauchen!</span>
        </h1>
        <p style="font-size:clamp(1rem,2vw,1.25rem);color:var(--color-text-muted);max-width:640px;margin:1.5rem auto 0;">
          Digitale Werkzeuge, Analysen und Angebote speziell entwickelt für Rechtsanwaltskanzleien – kostenlos und sofort nutzbar.
        </p>
      </div>
    </div>
  </section>

  <!-- ============================================================
       ANGEBOTE GRID
       ============================================================ -->
  <section class="section">
    <div class="container">

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.75rem;">

        <!-- Potenzialanalyse -->
        <a href="/online-angebote/online-marketing-potenzialanalyse-fuer-rechtsanwaelte/" class="card sr" style="padding:2.5rem;text-decoration:none;color:inherit;display:flex;flex-direction:column;border:1px solid rgba(var(--color-primary-rgb,234,179,8),0.2);transition:transform 0.2s,border-color 0.2s;">
          <div style="width:3.5rem;height:3.5rem;background:linear-gradient(135deg,var(--color-primary),#7c3aed);border-radius:1rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <span class="tag-chip" style="margin-bottom:0.75rem;align-self:flex-start;">Analyse</span>
          <h2 style="font-weight:800;font-size:1.3rem;margin-bottom:0.75rem;line-height:1.3;">Online Marketing Potenzialanalyse für Rechtsanwälte</h2>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:auto;">
            Unser strukturierter Fragebogen hilft uns, das volle Marketing-Potenzial Ihrer Kanzlei zu ermitteln. Kostenlos und unverbindlich.
          </p>
          <div style="display:flex;align-items:center;gap:0.5rem;color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-top:1.5rem;">
            Zur Analyse
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </div>
        </a>

        <!-- Website Check -->
        <a href="/check/" class="card sr" style="padding:2.5rem;text-decoration:none;color:inherit;display:flex;flex-direction:column;transition:transform 0.2s;">
          <div style="width:3.5rem;height:3.5rem;background:var(--color-surface);border-radius:1rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.75rem;height:1.75rem;color:var(--color-primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <span class="tag-chip" style="margin-bottom:0.75rem;align-self:flex-start;">Kostenlos</span>
          <h2 style="font-weight:800;font-size:1.3rem;margin-bottom:0.75rem;line-height:1.3;">Website-Check für Ihre Kanzlei</h2>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:auto;">
            Wir analysieren Ihre Website kostenlos auf Stärken, Schwächen und Optimierungspotenziale für mehr Mandantenanfragen.
          </p>
          <div style="display:flex;align-items:center;gap:0.5rem;color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-top:1.5rem;">
            Zum Check
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </div>
        </a>

        <!-- Lokale Präsenz -->
        <a href="/lokale-praesenz-pruefen/" class="card sr" style="padding:2.5rem;text-decoration:none;color:inherit;display:flex;flex-direction:column;transition:transform 0.2s;">
          <div style="width:3.5rem;height:3.5rem;background:var(--color-surface);border-radius:1rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.75rem;height:1.75rem;color:var(--color-primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <span class="tag-chip" style="margin-bottom:0.75rem;align-self:flex-start;">Kostenlos</span>
          <h2 style="font-weight:800;font-size:1.3rem;margin-bottom:0.75rem;line-height:1.3;">Lokale Präsenz prüfen</h2>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:auto;">
            Werden Sie in Ihrer Region gefunden? Wir prüfen Ihre lokale Online-Sichtbarkeit, Google MyBusiness und Ihre Bewertungssituation.
          </p>
          <div style="display:flex;align-items:center;gap:0.5rem;color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-top:1.5rem;">
            Jetzt prüfen
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </div>
        </a>

        <!-- Legal Business Forum -->
        <a href="/legal-business-forum/" class="card sr" style="padding:2.5rem;text-decoration:none;color:inherit;display:flex;flex-direction:column;transition:transform 0.2s;">
          <div style="width:3.5rem;height:3.5rem;background:var(--color-surface);border-radius:1rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1.75rem;height:1.75rem;color:var(--color-primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <span class="tag-chip" style="margin-bottom:0.75rem;align-self:flex-start;">Community</span>
          <h2 style="font-weight:800;font-size:1.3rem;margin-bottom:0.75rem;line-height:1.3;">Legal Business Forum</h2>
          <p style="color:var(--color-text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:auto;">
            Fachlicher Austausch, Impulse und unternehmerisches Denken für Kanzleien. Kostenlos, unverbindlich, online.
          </p>
          <div style="display:flex;align-items:center;gap:0.5rem;color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-top:1.5rem;">
            Mehr erfahren
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </div>
        </a>

      </div>

    </div>
  </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section">
    <div class="container" style="max-width:700px;">
      <div class="card sr" style="text-align:center;padding:clamp(2.5rem,5vw,3.5rem);">
        <h2 style="font-family:var(--font-heading);font-size:clamp(1.5rem,3vw,2rem);font-weight:800;margin-bottom:1rem;">
          Nicht sicher, wo Sie anfangen sollen?
        </h2>
        <p style="color:var(--color-text-muted);margin-bottom:2rem;max-width:500px;margin-left:auto;margin-right:auto;">
          Sprechen Sie einfach mit uns. Wir helfen Ihnen kostenlos dabei, den richtigen nächsten Schritt für Ihre Kanzlei zu finden.
        </p>
        <a href="/kontakt/" class="btn btn-primary">Kostenloses Erstgespräch anfragen</a>
      </div>
    </div>
  </section>

</main>

<?php require_once '../includes/footer.php'; ?>
