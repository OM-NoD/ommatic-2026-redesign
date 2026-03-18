<?php
$page_title       = 'Legal Business Forum 2026 – OMmatic | Das Event für Kanzleiinhaber';
$page_description = 'Das Legal Business Forum 2026: Das exklusive Netzwerk-Event für Kanzleiinhaber und Rechtsanwälte in Kaiserslautern. Expertvorträge, Workshops, Networking & Live-Demos. Jetzt anmelden.';
$page_canonical   = 'https://ommatic.de/legal-business-forum/';
$hide_contact_section = true;

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "Legal Business Forum 2026",
  "description": "Das exklusive Netzwerk-Event für Kanzleiinhaber und Rechtsanwälte – Expertvorträge, Workshops & Networking in Kaiserslautern.",
  "organizer": {
    "@type": "Organization",
    "name": "OMmatic GmbH",
    "url": "https://ommatic.de"
  },
  "location": {
    "@type": "Place",
    "name": "Kaiserslautern",
    "address": { "@type": "PostalAddress", "addressLocality": "Kaiserslautern", "addressCountry": "DE" }
  },
  "url": "https://ommatic.de/legal-business-forum/"
}';

require_once '../includes/header.php';
?>

<style>
/* ── LBF Page-specific styles ─────────────────────────────── */

/* Hero: full-bleed dark with gold accent */
.lbf-hero {
  position: relative;
  min-height: 92vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background: var(--bg);
  padding: 120px 0 80px;
}
.lbf-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 70% 60% at 60% 30%, rgba(139,92,246,.12) 0%, transparent 70%),
    radial-gradient(ellipse 50% 40% at 20% 80%, rgba(var(--primary-rgb,99,102,241),.10) 0%, transparent 60%);
  pointer-events: none;
}
.lbf-hero::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, transparent, #8B5CF6, var(--primary), transparent);
}
.lbf-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: .78rem;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: #8B5CF6;
  background: rgba(139,92,246,.12);
  border: 1px solid rgba(139,92,246,.3);
  border-radius: 100px;
  padding: 6px 16px;
  margin-bottom: 28px;
}
.lbf-hero-badge svg { flex-shrink: 0; }
.lbf-hero-title {
  font-family: var(--font-h);
  font-size: clamp(3rem, 8vw, 6.5rem);
  font-weight: 900;
  line-height: 1;
  letter-spacing: -.04em;
  color: var(--text);
  margin: 0 0 .25em;
}
.lbf-hero-eyeline {
  font-family: var(--font-h);
  font-size: clamp(1.1rem, 2.5vw, 1.75rem);
  font-weight: 300;
  letter-spacing: -.01em;
  color: var(--text-2);
  margin: 0 0 40px;
  line-height: 1.4;
  max-width: 680px;
}
.lbf-hero-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  margin-bottom: 48px;
}
.lbf-meta-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: .95rem;
  color: var(--text-2);
}
.lbf-meta-icon {
  width: 36px;
  height: 36px;
  border-radius: 8px;
  background: rgba(139,92,246,.1);
  border: 1px solid rgba(139,92,246,.2);
  color: #8B5CF6;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.lbf-meta-item strong { color: var(--text); }

/* LBF accent text */
.gold-text {
  background: linear-gradient(135deg, #A78BFA 0%, #8B5CF6 50%, #6D28D9 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Highlights grid */
.lbf-highlights {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 1.5rem;
}
.lbf-highlight-card {
  background: var(--bg-card);
  border: 1px solid var(--border-s);
  border-radius: var(--radius);
  padding: 2rem 1.5rem;
  text-align: center;
  transition: transform .25s, border-color .25s, box-shadow .25s;
  position: relative;
  overflow: hidden;
}
.lbf-highlight-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, transparent, #8B5CF6, #A78BFA, #8B5CF6, transparent);
  opacity: 0;
  transition: opacity .25s;
}
.lbf-highlight-card:hover { transform: translateY(-6px); border-color: rgba(139,92,246,.4); box-shadow: 0 20px 60px rgba(139,92,246,.08); }
.lbf-highlight-card:hover::before { opacity: 1; }
.lbf-highlight-icon {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  background: rgba(139,92,246,.1);
  border: 1px solid rgba(139,92,246,.2);
  color: #8B5CF6;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.25rem;
}
.lbf-highlight-title {
  font-family: var(--font-h);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--text);
  margin: 0 0 .5rem;
}
.lbf-highlight-text {
  font-size: .88rem;
  color: var(--text-2);
  line-height: 1.6;
  margin: 0;
}

/* Timeline / Programm */
.lbf-timeline {
  max-width: 780px;
  margin: 0 auto;
  position: relative;
}
.lbf-timeline::before {
  content: '';
  position: absolute;
  left: 72px;
  top: 0; bottom: 0;
  width: 2px;
  background: linear-gradient(180deg, transparent, rgba(139,92,246,.4) 10%, rgba(139,92,246,.4) 90%, transparent);
}
.lbf-timeline-item {
  display: flex;
  gap: 0;
  margin-bottom: 0;
  position: relative;
}
.lbf-timeline-time {
  flex-shrink: 0;
  width: 64px;
  padding-top: 18px;
  text-align: right;
  font-size: .8rem;
  font-weight: 700;
  color: #8B5CF6;
  letter-spacing: .04em;
  font-family: var(--font-h);
}
.lbf-timeline-dot-col {
  flex-shrink: 0;
  width: 18px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 8px;
  padding-top: 20px;
}
.lbf-timeline-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #8B5CF6;
  box-shadow: 0 0 0 4px rgba(139,92,246,.2);
  flex-shrink: 0;
}
.lbf-timeline-dot--highlight {
  background: var(--primary);
  box-shadow: 0 0 0 4px rgba(var(--primary-rgb,99,102,241),.25);
  width: 14px;
  height: 14px;
}
.lbf-timeline-content {
  flex: 1;
  background: var(--bg-card);
  border: 1px solid var(--border-s);
  border-radius: var(--radius);
  padding: 1.1rem 1.5rem;
  margin-left: 8px;
  margin-bottom: 12px;
  transition: border-color .2s;
}
.lbf-timeline-content:hover { border-color: rgba(139,92,246,.3); }
.lbf-timeline-label {
  font-family: var(--font-h);
  font-size: 1rem;
  font-weight: 700;
  color: var(--text);
  margin: 0 0 4px;
}
.lbf-timeline-sub {
  font-size: .85rem;
  color: var(--text-2);
  margin: 0;
  line-height: 1.5;
}
.lbf-timeline-tag {
  display: inline-block;
  font-size: .7rem;
  font-weight: 700;
  letter-spacing: .08em;
  text-transform: uppercase;
  border-radius: 4px;
  padding: 2px 8px;
  margin-bottom: 6px;
}
.lbf-timeline-tag--keynote { background: rgba(139,92,246,.15); color: #8B5CF6; }
.lbf-timeline-tag--workshop { background: var(--indigo-dim); color: var(--indigo); }
.lbf-timeline-tag--networking { background: var(--teal-dim); color: var(--teal); }
.lbf-timeline-tag--lunch { background: rgba(var(--primary-rgb,99,102,241),.1); color: var(--primary); }

/* Speaker cards */
.lbf-speakers {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 2rem;
}
.lbf-speaker-card {
  background: var(--bg-card);
  border: 1px solid var(--border-s);
  border-radius: var(--radius);
  padding: 2rem 1.5rem;
  text-align: center;
  transition: transform .25s, box-shadow .25s;
}
.lbf-speaker-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-glow); }
.lbf-speaker-avatar {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(139,92,246,.3), rgba(139,92,246,.1));
  border: 2px solid rgba(139,92,246,.4);
  font-family: var(--font-h);
  font-size: 1.5rem;
  font-weight: 800;
  color: #8B5CF6;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1rem;
}
.lbf-speaker-name {
  font-family: var(--font-h);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--text);
  margin: 0 0 4px;
}
.lbf-speaker-role {
  font-size: .85rem;
  color: var(--primary);
  font-weight: 600;
  margin: 0 0 8px;
}
.lbf-speaker-bio {
  font-size: .84rem;
  color: var(--text-2);
  line-height: 1.6;
  margin: 0;
}

/* FAQ accordion */
.lbf-faq {
  max-width: 760px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.lbf-faq-item {
  background: var(--bg-card);
  border: 1px solid var(--border-s);
  border-radius: var(--radius);
  overflow: hidden;
  transition: border-color .2s;
}
.lbf-faq-item.is-open { border-color: rgba(139,92,246,.35); }
.lbf-faq-toggle {
  width: 100%;
  background: none;
  border: none;
  cursor: pointer;
  padding: 1.2rem 1.5rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  text-align: left;
}
.lbf-faq-question {
  font-family: var(--font-h);
  font-size: 1rem;
  font-weight: 700;
  color: var(--text);
  line-height: 1.4;
}
.lbf-faq-icon {
  flex-shrink: 0;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: rgba(139,92,246,.1);
  color: #8B5CF6;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform .25s, background .2s;
}
.lbf-faq-item.is-open .lbf-faq-icon { transform: rotate(45deg); background: rgba(139,92,246,.2); }
.lbf-faq-answer {
  display: none;
  padding: 0 1.5rem 1.25rem;
  font-size: .92rem;
  color: var(--text-2);
  line-height: 1.7;
}
.lbf-faq-item.is-open .lbf-faq-answer { display: block; }

/* Registration form section */
.lbf-anmeldung-wrap {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 3rem;
  align-items: start;
  max-width: 980px;
  margin: 0 auto;
}
@media (max-width: 860px) {
  .lbf-anmeldung-wrap { grid-template-columns: 1fr; }
  .lbf-timeline::before { left: 54px; }
  .lbf-timeline-time { width: 48px; font-size: .72rem; }
}
@media (max-width: 600px) {
  .lbf-hero-title { font-size: clamp(2.4rem, 12vw, 3.5rem); }
  .lbf-highlights { grid-template-columns: 1fr 1fr; }
  .lbf-timeline { padding-left: 0; }
}

/* Info aside */
.lbf-info-aside {
  background: var(--bg-card);
  border: 1px solid rgba(139,92,246,.25);
  border-radius: var(--radius);
  padding: 2rem;
  position: sticky;
  top: 90px;
}
.lbf-info-aside-title {
  font-family: var(--font-h);
  font-size: 1.15rem;
  font-weight: 800;
  color: var(--text);
  margin: 0 0 1.25rem;
}
.lbf-info-row {
  display: flex;
  gap: 10px;
  align-items: flex-start;
  margin-bottom: 14px;
  font-size: .88rem;
  color: var(--text-2);
}
.lbf-info-row svg { flex-shrink: 0; margin-top: 1px; color: #8B5CF6; }
.lbf-info-row strong { color: var(--text); display: block; font-size: .8rem; text-transform: uppercase; letter-spacing: .06em; margin-bottom: 2px; }
.lbf-divider { height: 1px; background: var(--border-s); margin: 1.25rem 0; }

/* Subtle grid BG */
.lbf-grid-bg {
  position: absolute;
  inset: 0;
  background-image: linear-gradient(rgba(139,92,246,.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(139,92,246,.03) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none;
}
</style>

<main>

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="lbf-hero" aria-labelledby="lbf-hero-h1">
    <div class="lbf-grid-bg" aria-hidden="true"></div>
    <div class="hero-mesh" aria-hidden="true">
      <div class="mesh-blob mesh-1" style="filter:blur(120px);opacity:.35;"></div>
      <div class="mesh-blob mesh-2" style="filter:blur(100px);opacity:.25;"></div>
    </div>

    <div class="container">
      <nav class="breadcrumb sr" aria-label="Breadcrumb">
        <a href="/">OMmatic</a>
        <span class="breadcrumb-sep" aria-hidden="true">/</span>
        <span>Legal Business Forum</span>
      </nav>

      <div class="lbf-hero-badge sr sr-d1" aria-label="Exklusive Veranstaltung">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
        Flagship Event 2026
      </div>

      <h1 class="lbf-hero-title sr sr-d1" id="lbf-hero-h1">
        Legal Business<br><span class="gold-text">Forum</span>
      </h1>

      <p class="lbf-hero-eyeline sr sr-d2">
        Das exklusive Netzwerk-Event für Kanzleiinhaber und Rechtsanwälte
      </p>

      <div class="lbf-hero-meta sr sr-d2">
        <div class="lbf-meta-item">
          <span class="lbf-meta-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </span>
          <div><strong>[DATUM 2026]</strong><br>Ganztagesveranstaltung</div>
        </div>
        <div class="lbf-meta-item">
          <span class="lbf-meta-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </span>
          <div><strong>Kaiserslautern</strong><br>Venue wird noch bekannt gegeben</div>
        </div>
        <div class="lbf-meta-item">
          <span class="lbf-meta-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </span>
          <div><strong>Limitierte Plätze</strong><br>Nur für Kanzleiinhaber &amp; Anwälte</div>
        </div>
      </div>

      <div class="page-hero-ctas sr sr-d3">
        <a href="#anmeldung" class="btn btn-primary btn-lg" style="background:linear-gradient(135deg,#8B5CF6,#6D28D9);border-color:transparent;color:#fff;font-weight:800;">
          Jetzt anmelden
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="#programm" class="btn btn-ghost btn-lg">Programm ansehen</a>
      </div>
    </div>
  </section>


  <!-- ============================================================
       EVENT-HIGHLIGHTS
       ============================================================ -->
  <section class="content-section" aria-labelledby="highlights-h">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Was Sie erwartet</span>
        <h2 id="highlights-h" style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Ein Tag voller <span class="gradient-text">Inspiration & Vernetzung</span>
        </h2>
        <p style="color:var(--text-2);max-width:580px;margin:1rem auto 0;line-height:1.7;">
          Das Legal Business Forum vereint das Beste aus Expertenwissen, praxisnahen Workshops und exklusivem Networking – alles unter einem Dach.
        </p>
      </div>

      <div class="lbf-highlights sr">

        <div class="lbf-highlight-card">
          <div class="lbf-highlight-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="lbf-highlight-title">Networking</h3>
          <p class="lbf-highlight-text">Knüpfen Sie wertvolle Kontakte zu Gleichgesinnten – Kanzleiinhaber und Anwälte aus ganz Deutschland unter einem Dach.</p>
        </div>

        <div class="lbf-highlight-card">
          <div class="lbf-highlight-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <h3 class="lbf-highlight-title">Expertvorträge</h3>
          <p class="lbf-highlight-text">Top-Referenten aus Legal Marketing, Legal Tech und Kanzleimanagement liefern praxisnahe Keynotes und Insights.</p>
        </div>

        <div class="lbf-highlight-card">
          <div class="lbf-highlight-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
          </div>
          <h3 class="lbf-highlight-title">Workshops</h3>
          <p class="lbf-highlight-text">Interaktive Workshop-Sessions in Kleingruppen – direkt anwendbares Wissen zu Marketing, Kanzleistrategie und mehr.</p>
        </div>

        <div class="lbf-highlight-card">
          <div class="lbf-highlight-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="lbf-highlight-title">Live-Demos</h3>
          <p class="lbf-highlight-text">Erleben Sie die neuesten Legal-Tech-Tools und Marketing-Lösungen in Action – live demonstriert von unseren Experten.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       PROGRAMM / AGENDA
       ============================================================ -->
  <section class="content-section alt" id="programm" aria-labelledby="programm-h">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3.5rem;">
        <span class="tag-chip">Tagesablauf</span>
        <h2 id="programm-h" style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Das <span class="gradient-text">Programm</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;line-height:1.7;">
          Ein vollgepackter Tag – von der Registrierung bis zum Networking-Apéro.
        </p>
      </div>

      <div class="lbf-timeline sr">

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">09:00</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot lbf-timeline-dot--highlight"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--networking">Ankommen</span>
            <div class="lbf-timeline-label">Registrierung &amp; Welcome Coffee</div>
            <p class="lbf-timeline-sub">Check-in, Willkommenskaffee und erste Gespräche in entspannter Atmosphäre.</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">10:00</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--keynote">Keynote</span>
            <div class="lbf-timeline-label">Zukunft der Kanzlei: Strategien für 2026 und darüber hinaus</div>
            <p class="lbf-timeline-sub">Eröffnungskennote mit Marktanalyse, Trends und konkreten Handlungsempfehlungen für zukunftsorientierte Kanzleiinhaber.</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">11:30</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--workshop">Workshop</span>
            <div class="lbf-timeline-label">Workshop-Sessions (parallele Tracks)</div>
            <p class="lbf-timeline-sub">Track A: Sichtbarkeit &amp; Mandantengewinnung — Track B: Legal Tech &amp; Kanzleisoftware — Track C: Kanzleiführung &amp; Team.</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">13:00</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot lbf-timeline-dot--highlight"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--lunch">Pause</span>
            <div class="lbf-timeline-label">Networking Lunch</div>
            <p class="lbf-timeline-sub">Gemeinsames Mittagessen – die perfekte Gelegenheit, die Gespräche aus dem Vormittag zu vertiefen.</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">14:30</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--keynote">Vorträge</span>
            <div class="lbf-timeline-label">Praxisvorträge &amp; Case Studies</div>
            <p class="lbf-timeline-sub">Konkrete Erfolgsstories aus echten Kanzleien: Was hat funktioniert, was nicht – und welche Learnings lassen sich direkt übertragen?</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">16:00</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--workshop">Round Tables</span>
            <div class="lbf-timeline-label">Round Tables &amp; Diskussionsrunden</div>
            <p class="lbf-timeline-sub">Kleingruppengespräche zu spezifischen Themen – offener Austausch, direkte Fragen, echte Antworten.</p>
          </div>
        </div>

        <div class="lbf-timeline-item">
          <div class="lbf-timeline-time">17:30</div>
          <div class="lbf-timeline-dot-col"><div class="lbf-timeline-dot lbf-timeline-dot--highlight"></div></div>
          <div class="lbf-timeline-content">
            <span class="lbf-timeline-tag lbf-timeline-tag--networking">Ausklang</span>
            <div class="lbf-timeline-label">Networking Apéro &amp; Ausklang</div>
            <p class="lbf-timeline-sub">Anstoßen auf einen erfolgreichen Tag – bei Getränken, Snacks und besten Gesprächen in entspannter Atmosphäre.</p>
          </div>
        </div>

      </div>

      <div class="sr" style="text-align:center;margin-top:3rem;">
        <p style="color:var(--text-3);font-size:.88rem;">Das detaillierte Programm wird nach Anmeldung bekannt gegeben. Änderungen vorbehalten.</p>
      </div>
    </div>
  </section>


  <!-- ============================================================
       SPEAKERS
       ============================================================ -->
  <section class="content-section" aria-labelledby="speakers-h">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Referenten</span>
        <h2 id="speakers-h" style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Unsere <span class="gradient-text">Speaker</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;line-height:1.7;">
          Hochkarätige Referenten aus Legal Marketing, Legal Tech und Kanzleimanagement.
        </p>
      </div>

      <div class="lbf-speakers sr">

        <div class="lbf-speaker-card">
          <div class="lbf-speaker-avatar" aria-hidden="true">MK</div>
          <div class="lbf-speaker-name">Markus K.</div>
          <div class="lbf-speaker-role">Legal Marketing Expert</div>
          <p class="lbf-speaker-bio">15+ Jahre Erfahrung in der Vermarktung von Kanzleien. Bekannt für seine direkten, umsetzungsorientierten Vorträge zu digitaler Mandantengewinnung.</p>
        </div>

        <div class="lbf-speaker-card">
          <div class="lbf-speaker-avatar" aria-hidden="true">SB</div>
          <div class="lbf-speaker-name">Sandra B.</div>
          <div class="lbf-speaker-role">Kanzleiinhaberin &amp; Speakerin</div>
          <p class="lbf-speaker-bio">Inhaberin einer erfolgreichen Boutique-Kanzlei und Speakerin für Kanzleiorganisation. Teilt ehrliche Einblicke in die Praxis moderner Kanzleiführung.</p>
        </div>

        <div class="lbf-speaker-card">
          <div class="lbf-speaker-avatar" aria-hidden="true">TR</div>
          <div class="lbf-speaker-name">Thomas R.</div>
          <div class="lbf-speaker-role">Legal Tech Stratege</div>
          <p class="lbf-speaker-bio">Berät führende Kanzleien bei der Einführung von KI-Tools und Kanzleisoftware. Zeigt auf, was wirklich funktioniert und was nur Hype ist.</p>
        </div>

      </div>

      <div class="sr" style="text-align:center;margin-top:2.5rem;">
        <p style="color:var(--text-3);font-size:.88rem;">Weitere Speaker werden in Kürze bekannt gegeben.</p>
      </div>
    </div>
  </section>


  <!-- ============================================================
       CTA INTERSTITIAL
       ============================================================ -->
  <section class="cta-banner" style="background:linear-gradient(135deg,rgba(139,92,246,.08) 0%,var(--bg-2) 50%,rgba(var(--primary-rgb,99,102,241),.05) 100%);">
    <div class="container">
      <div class="cta-banner-inner sr">
        <span class="tag-chip" style="background:rgba(139,92,246,.12);color:#8B5CF6;border-color:rgba(139,92,246,.3);margin-bottom:24px;">Limitierte Plätze</span>
        <h2 class="cta-banner-title">
          Sichern Sie sich<br><span class="gold-text">Ihren Platz</span>
        </h2>
        <p class="cta-banner-sub">
          Die Teilnehmerzahl ist bewusst limitiert – für einen hochwertigen Austausch auf Augenhöhe. Melden Sie sich jetzt an und sichern Sie sich einen der exklusiven Plätze.
        </p>
        <div class="cta-banner-btns">
          <a href="#anmeldung" class="btn btn-lg" style="background:linear-gradient(135deg,#8B5CF6,#6D28D9);color:#fff;font-weight:800;border:none;">
            Jetzt anmelden
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#faq" class="btn btn-ghost btn-lg">Häufige Fragen</a>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================================
       ANMELDUNG
       ============================================================ -->
  <section class="content-section alt" id="anmeldung" aria-labelledby="anmeldung-h">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">Verbindliche Anmeldung</span>
        <h2 id="anmeldung-h" style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Jetzt <span class="gradient-text">anmelden</span>
        </h2>
        <p style="color:var(--text-2);max-width:560px;margin:1rem auto 0;line-height:1.7;">
          Füllen Sie das Formular aus – wir bestätigen Ihre Anmeldung innerhalb von 24 Stunden.
        </p>
      </div>

      <div class="lbf-anmeldung-wrap">

        <!-- Info Aside -->
        <div class="lbf-info-aside sr">
          <div class="lbf-info-aside-title">Event-Details</div>

          <div class="lbf-info-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <div><strong>Datum</strong>[DATUM 2026]</div>
          </div>
          <div class="lbf-info-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <div><strong>Zeit</strong>09:00 – ca. 20:00 Uhr</div>
          </div>
          <div class="lbf-info-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            <div><strong>Ort</strong>Kaiserslautern<br><span style="font-size:.8rem;color:var(--text-3);">Venue wird nach Anmeldung mitgeteilt</span></div>
          </div>

          <div class="lbf-divider"></div>

          <div style="font-size:.82rem;color:var(--text-2);line-height:1.7;">
            <div style="font-weight:700;color:var(--text);margin-bottom:.5rem;">Im Ticket enthalten:</div>
            <?php foreach ([
              'Ganztages-Teilnahme',
              'Welcome Coffee &amp; Networking Lunch',
              'Alle Workshops &amp; Vorträge',
              'Networking Apéro am Abend',
              'Exklusive Unterlagen',
            ] as $item): ?>
            <div style="display:flex;gap:8px;align-items:center;margin-bottom:6px;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14" style="color:#8B5CF6;flex-shrink:0;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <?= $item ?>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="lbf-divider"></div>

          <div style="font-size:.8rem;color:var(--text-3);line-height:1.6;">
            Fragen? <a href="mailto:hallo@ommatic.de" style="color:var(--primary);">hallo@ommatic.de</a> oder
            <a href="tel:+4963120691820" style="color:var(--primary);">0631 206 9182-0</a>
          </div>
        </div>

        <!-- Registration Form -->
        <div class="contact-form-wrap sr sr-d1">
          <form method="post" action="/kontakt/send.php" class="contact-form" novalidate>
            <!-- Honeypot -->
            <input type="text" name="honeypot" style="display:none;" tabindex="-1" autocomplete="off">
            <!-- Form type identifier -->
            <input type="hidden" name="form_type" value="lbf_anmeldung">

            <h3 style="font-family:var(--font-h);font-size:clamp(1.2rem,2.2vw,1.5rem);font-weight:700;margin:0 0 6px;">Ihre Anmeldung zum LBF 2026</h3>
            <p style="font-size:14px;color:var(--text-2);margin:0 0 28px;line-height:1.6;">Alle mit <span style="color:var(--primary);">*</span> markierten Felder sind Pflichtfelder.</p>

            <!-- Row 1: Vorname / Nachname -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="lbf-vorname">Vorname <span style="color:var(--primary)">*</span></label>
                <input type="text" id="lbf-vorname" name="vorname" class="form-input" placeholder="Ihr Vorname" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="lbf-nachname">Nachname <span style="color:var(--primary)">*</span></label>
                <input type="text" id="lbf-nachname" name="nachname" class="form-input" placeholder="Ihr Nachname" required>
              </div>
            </div>

            <!-- Row 2: E-Mail / Telefon -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="lbf-email">E-Mail-Adresse <span style="color:var(--primary)">*</span></label>
                <input type="email" id="lbf-email" name="email" class="form-input" placeholder="ihre@email.de" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="lbf-telefon">Telefonnummer <span style="color:var(--text-3);font-weight:400;">(optional)</span></label>
                <input type="tel" id="lbf-telefon" name="telefon" class="form-input" placeholder="+49 ...">
              </div>
            </div>

            <!-- Row 3: Kanzlei / Anzahl Tickets -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
              <div class="form-group">
                <label class="form-label" for="lbf-kanzlei">Kanzlei / Unternehmen <span style="color:var(--primary)">*</span></label>
                <input type="text" id="lbf-kanzlei" name="kanzlei" class="form-input" placeholder="Name Ihrer Kanzlei" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="lbf-tickets">Anzahl Tickets <span style="color:var(--primary)">*</span></label>
                <select id="lbf-tickets" name="tickets" class="form-input" required>
                  <option value="" disabled selected>Bitte wählen ...</option>
                  <option value="1">1 Ticket</option>
                  <option value="2">2 Tickets</option>
                  <option value="3">3 Tickets</option>
                  <option value="4+">4 oder mehr Tickets</option>
                </select>
              </div>
            </div>

            <!-- Nachricht / Fragen (optional) -->
            <div class="form-group">
              <label class="form-label" for="lbf-nachricht">Nachricht oder Fragen <span style="color:var(--text-3);font-weight:400;">(optional)</span></label>
              <textarea id="lbf-nachricht" name="nachricht" class="form-input" rows="4"
                        placeholder="Gibt es besondere Anforderungen, Fragen zum Event oder möchten Sie etwas mitteilen?" style="resize:vertical;"></textarea>
            </div>

            <!-- DSGVO -->
            <div class="form-group" style="display:flex;align-items:flex-start;gap:12px;margin-bottom:4px;">
              <input type="checkbox" id="lbf-dsgvo" name="dsgvo" required
                     style="width:18px;height:18px;margin-top:3px;flex-shrink:0;accent-color:var(--primary);">
              <label for="lbf-dsgvo" style="font-size:13px;color:var(--text-2);line-height:1.6;">
                Ich habe die <a href="/datenschutz/" style="color:var(--primary);">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zur Bearbeitung meiner Anmeldung zu. <span style="color:var(--primary)">*</span>
              </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-lg" style="width:100%;justify-content:center;margin-top:24px;background:linear-gradient(135deg,#8B5CF6,#6D28D9);border:none;color:#fff;font-weight:800;">
              Jetzt verbindlich anmelden
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </button>

            <!-- Trust -->
            <p style="text-align:center;font-size:13px;color:var(--text-3);margin-top:14px;margin-bottom:0;display:flex;align-items:center;justify-content:center;gap:8px;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="width:15px;height:15px;flex-shrink:0;color:#8B5CF6;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              Ihre Daten werden vertraulich behandelt.
            </p>

          </form>
        </div>

      </div>
    </div>
  </section>


  <!-- ============================================================
       FAQ
       ============================================================ -->
  <section class="content-section" id="faq" aria-labelledby="faq-h">
    <div class="container">
      <div class="sr" style="text-align:center;margin-bottom:3rem;">
        <span class="tag-chip">FAQ</span>
        <h2 id="faq-h" style="font-family:var(--font-h);font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-top:1rem;">
          Häufig gestellte <span class="gradient-text">Fragen</span>
        </h2>
      </div>

      <div class="lbf-faq sr">

        <div class="lbf-faq-item">
          <button class="lbf-faq-toggle" aria-expanded="false">
            <span class="lbf-faq-question">Für wen ist das Legal Business Forum geeignet?</span>
            <span class="lbf-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            </span>
          </button>
          <div class="lbf-faq-answer">
            Das Legal Business Forum richtet sich exklusiv an Kanzleiinhaber, Partner und leitende Rechtsanwälte, die ihre Kanzlei strategisch weiterentwickeln möchten. Ob Einzelanwalt, Boutique-Kanzlei oder mittelgroßes Haus – das Event bietet Mehrwert für alle, die aktiv an der Zukunft ihrer Kanzlei arbeiten.
          </div>
        </div>

        <div class="lbf-faq-item">
          <button class="lbf-faq-toggle" aria-expanded="false">
            <span class="lbf-faq-question">Was kostet die Teilnahme am Legal Business Forum?</span>
            <span class="lbf-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            </span>
          </button>
          <div class="lbf-faq-answer">
            Die genauen Ticketpreise werden in Kürze bekannt gegeben. Frühbucher profitieren von exklusiven Konditionen. Melden Sie sich jetzt an, um als Erste über Preise und Frühbucherrabatte informiert zu werden.
          </div>
        </div>

        <div class="lbf-faq-item">
          <button class="lbf-faq-toggle" aria-expanded="false">
            <span class="lbf-faq-question">Wo findet das Event statt und wie komme ich hin?</span>
            <span class="lbf-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            </span>
          </button>
          <div class="lbf-faq-answer">
            Das Legal Business Forum 2026 findet in Kaiserslautern statt. Die genaue Venue wird nach der Anmeldung bekannt gegeben. Kaiserslautern ist per Bahn und Auto gut erreichbar – Informationen zu Anreise und Übernachtungsmöglichkeiten erhalten alle Angemeldeten rechtzeitig vorab.
          </div>
        </div>

        <div class="lbf-faq-item">
          <button class="lbf-faq-toggle" aria-expanded="false">
            <span class="lbf-faq-question">Kann ich mehrere Tickets für mein Team buchen?</span>
            <span class="lbf-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            </span>
          </button>
          <div class="lbf-faq-answer">
            Ja, Sie können mehrere Tickets im Anmeldeformular auswählen. Bei Gruppenanmeldungen ab 3 Personen aus derselben Kanzlei kontaktieren Sie uns bitte direkt unter hallo@ommatic.de – wir besprechen gerne Gruppenkonditionen.
          </div>
        </div>

        <div class="lbf-faq-item">
          <button class="lbf-faq-toggle" aria-expanded="false">
            <span class="lbf-faq-question">Was passiert nach meiner Anmeldung?</span>
            <span class="lbf-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="14" height="14"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            </span>
          </button>
          <div class="lbf-faq-answer">
            Nach Eingang Ihrer Anmeldung erhalten Sie innerhalb von 24 Stunden eine Bestätigungs-E-Mail. Sobald alle Details zum Event feststehen, informieren wir Sie über Programm, Venue, Anreiseinformationen und alle weiteren Details. Bei Fragen steht Ihnen unser Team unter hallo@ommatic.de jederzeit zur Verfügung.
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
// LBF FAQ Accordion
(function () {
  var items = document.querySelectorAll('.lbf-faq-item');
  items.forEach(function (item) {
    var btn = item.querySelector('.lbf-faq-toggle');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var isOpen = item.classList.contains('is-open');
      // close all
      items.forEach(function (i) {
        i.classList.remove('is-open');
        var b = i.querySelector('.lbf-faq-toggle');
        if (b) b.setAttribute('aria-expanded', 'false');
      });
      // toggle clicked
      if (!isOpen) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();
</script>

<?php require_once '../includes/footer.php'; ?>
