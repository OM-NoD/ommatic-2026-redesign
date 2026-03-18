/**
 * OMmatic 2026 — main.js
 * Konzept 6 "Brutalist Clean"
 * Version: 1.0.0 | Build: 2026-03-18
 */
'use strict';

/* ==========================================================
   THEME TOGGLE
   ========================================================== */
const html = document.documentElement;
const saved = localStorage.getItem('om-theme') || 'dark';
html.setAttribute('data-theme', saved);

const themeToggle = document.getElementById('themeToggle');
if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    html.setAttribute('data-theme', next);
    localStorage.setItem('om-theme', next);
  });
}

/* ==========================================================
   HAMBURGER MENU
   ========================================================== */
const hamburger = document.getElementById('hamburger');
const mobileNav = document.getElementById('mobileNav');
let navOpen = false;

const setNav = open => {
  navOpen = open;
  if (mobileNav) mobileNav.classList.toggle('open', open);
  if (hamburger) {
    const s = hamburger.querySelectorAll('span');
    if (open) {
      s[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
      s[1].style.opacity = '0';
      s[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
    } else {
      s[0].style.transform = s[2].style.transform = '';
      s[1].style.opacity = '';
    }
  }
};

if (hamburger) hamburger.addEventListener('click', () => setNav(!navOpen));
if (mobileNav) mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setNav(false)));

/* ==========================================================
   HEADER SCROLL
   ========================================================== */
const header = document.getElementById('header');
if (header) {
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });
}

/* ==========================================================
   SCROLL REVEAL
   ========================================================== */
if ('IntersectionObserver' in window) {
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        ro.unobserve(e.target);
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });
  document.querySelectorAll('.sr').forEach(el => ro.observe(el));
}

/* ==========================================================
   COUNTER ANIMATION
   ========================================================== */
function countUp(el) {
  const target = parseInt(el.dataset.count);
  const suffix = el.dataset.suffix || '';
  const dur = 1800;
  const t0 = performance.now();
  (function tick(now) {
    const p = Math.min((now - t0) / dur, 1);
    const ep = 1 - Math.pow(1 - p, 3); // ease-out-cubic
    el.textContent = Math.round(ep * target) + suffix;
    if (p < 1) requestAnimationFrame(tick);
  })(t0);
}

if ('IntersectionObserver' in window) {
  const co = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting && e.target.dataset.count) {
        countUp(e.target);
        co.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-count]').forEach(el => co.observe(el));
}

/* ==========================================================
   ACTIVE NAV
   ========================================================== */
const navLinks = document.querySelectorAll('.nav-desktop .nav-link');
if (navLinks.length && 'IntersectionObserver' in window) {
  const no = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(l => l.classList.remove('active'));
        const a = document.querySelector(`.nav-desktop .nav-link[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
      }
    });
  }, { threshold: 0.35 });
  document.querySelectorAll('section[id]').forEach(s => no.observe(s));
}

/* ==========================================================
   SCROLL TO TOP
   ========================================================== */
const stt = document.getElementById('scrollTop');
if (stt) {
  window.addEventListener('scroll', () => {
    stt.classList.toggle('show', window.scrollY > 400);
  }, { passive: true });
  stt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

/* ==========================================================
   HERO CHART ANIMATION
   ========================================================== */
const bars = document.querySelectorAll('#heroChart .bar');
if (bars.length) {
  bars.forEach(b => {
    const h = b.style.height;
    b.style.height = '0%';
    setTimeout(() => { b.style.height = h; }, 500);
  });
}

/* ==========================================================
   CONTACT FORM (Demo + Validation)
   ========================================================== */
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('.form-submit');
    const orig = btn.innerHTML;
    btn.innerHTML = 'Wird gesendet\u2026';
    btn.style.opacity = '.7';
    btn.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width:18px;height:18px"><polyline points="20 6 9 17 4 12" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg> Anfrage erfolgreich gesendet!';
      btn.style.opacity = '1';
      btn.disabled = false;
    }, 1200);
  });
}

/* ==========================================================
   NAV DROPDOWNS
   ========================================================== */
document.querySelectorAll('.nav-dropdown-toggle').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.stopPropagation();
    const menu = this.nextElementSibling;
    const isOpen = menu.classList.contains('open');
    // Close all dropdowns first
    document.querySelectorAll('.nav-dropdown-menu.open').forEach(m => m.classList.remove('open'));
    document.querySelectorAll('.nav-dropdown-toggle.active').forEach(b => b.classList.remove('active'));
    if (!isOpen) {
      menu.classList.add('open');
      this.classList.add('active');
      this.setAttribute('aria-expanded', 'true');
    } else {
      this.setAttribute('aria-expanded', 'false');
    }
  });
});
// Close dropdowns on outside click
document.addEventListener('click', () => {
  document.querySelectorAll('.nav-dropdown-menu.open').forEach(m => m.classList.remove('open'));
  document.querySelectorAll('.nav-dropdown-toggle.active').forEach(b => {
    b.classList.remove('active');
    b.setAttribute('aria-expanded', 'false');
  });
});

/* ==========================================================
   CALENDLY MODAL – Intercept + Tracking
   Alle Links mit href*="calendly.com" öffnen das modale Fenster.
   Buchungs-Conversions werden via GA4 + GTM dataLayer getrackt.
   ========================================================== */
(function() {
  const modal   = document.getElementById('cal-modal');
  const iframe  = document.getElementById('cal-iframe');
  const overlay = document.getElementById('cal-modal-overlay');
  const closeBtn= document.getElementById('cal-modal-close');
  if (!modal || !iframe) return;

  // Calendly-URL: Dunkel-Styling-Parameter anhängen
  function buildCalUrl(href) {
    const base = href.split('?')[0];
    return base +
      '?embed_type=Inline' +
      '&hide_gdpr_banner=1' +
      '&background_color=0d0d0f' +
      '&text_color=e8eaf0' +
      '&primary_color=00c2ff';
  }

  function openModal(calUrl) {
    iframe.src = buildCalUrl(calUrl);
    modal.classList.add('open');
    modal.removeAttribute('aria-hidden');
    document.body.style.overflow = 'hidden';
    closeBtn.focus();
    // Tracking: Modal geöffnet
    trackCalendly('calendly_modal_open', { url: calUrl });
  }

  function closeModal() {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    // Iframe src nach Animation leeren (500ms)
    setTimeout(() => { iframe.src = ''; }, 300);
  }

  // Intercept aller Calendly-Links auf der Seite
  document.addEventListener('click', function(e) {
    const link = e.target.closest('a[href*="calendly.com"]');
    if (!link) return;
    e.preventDefault();
    openModal(link.getAttribute('href'));
  });

  // Schließen via Button oder Overlay
  if (closeBtn)  closeBtn.addEventListener('click', closeModal);
  if (overlay)   overlay.addEventListener('click', closeModal);

  // Schließen via ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
  });

  // Calendly postMessage Events für Conversion-Tracking
  window.addEventListener('message', function(e) {
    if (!e.data || !e.data.event) return;
    switch (e.data.event) {
      case 'calendly.event_type_viewed':
        trackCalendly('calendly_view', { step: 'event_type' });
        break;
      case 'calendly.date_and_time_selected':
        trackCalendly('calendly_step', { step: 'datetime_selected' });
        break;
      case 'calendly.event_scheduled':
        // Buchung abgeschlossen – Haupt-Conversion!
        trackCalendly('calendly_booking_complete', {
          event_name: e.data.payload?.event?.name || '',
          invitee:    e.data.payload?.invitee?.name || ''
        });
        // Optional: Seite kurz nach Buchung schließen
        setTimeout(closeModal, 3000);
        break;
    }
  });

  // Einheitliche Tracking-Funktion: GA4 + GTM dataLayer
  function trackCalendly(eventName, params) {
    // GA4 via gtag
    if (typeof gtag === 'function') {
      gtag('event', eventName, Object.assign({ event_category: 'Calendly' }, params));
    }
    // GTM dataLayer
    if (window.dataLayer) {
      window.dataLayer.push(Object.assign({ event: eventName }, params));
    }
  }
})();
