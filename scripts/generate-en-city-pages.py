#!/usr/bin/env python3
"""
Generate EN city pages under /en/law-firm-marketing/[city]/
Mirrors the DE city pages under /kanzleimarketing/[city]/
"""

import os

BASE_DIR = '/Users/normendaunderer/Projects/ommatic-2026-redesign'

# All cities with English names/descriptions
CITIES = [
    ('aachen', 'Aachen', 'in Aachen', 'one of Germany\'s westernmost cities, known for its historic cathedral and RWTH Aachen University'),
    ('augsburg', 'Augsburg', 'in Augsburg', 'one of Bavaria\'s oldest cities, a major business hub between Munich and Stuttgart'),
    ('bergisch-gladbach', 'Bergisch Gladbach', 'in Bergisch Gladbach', 'a prosperous city in the Cologne/Bonn metropolitan region'),
    ('berlin', 'Berlin', 'in Berlin', 'Germany\'s capital and largest city, home to one of the country\'s most active legal markets'),
    ('bielefeld', 'Bielefeld', 'in Bielefeld', 'a major city in North Rhine-Westphalia with a strong economy'),
    ('bochum', 'Bochum', 'in Bochum', 'a vibrant city in the Ruhr area with a large university and growing service sector'),
    ('bonn', 'Bonn', 'in Bonn', 'the former German capital, still home to numerous federal agencies and international organizations'),
    ('bottrop', 'Bottrop', 'in Bottrop', 'a city in the Ruhr area known for its transformation from coal to modern industries'),
    ('braunschweig', 'Braunschweig', 'in Braunschweig', 'a city in Lower Saxony with strong connections to the automotive and tech industries'),
    ('bremen', 'Bremen', 'in Bremen', 'Germany\'s oldest maritime trading city, home to major international companies'),
    ('bremerhaven', 'Bremerhaven', 'in Bremerhaven', 'Germany\'s most important seaport city'),
    ('chemnitz', 'Chemnitz', 'in Chemnitz', 'Saxony\'s third-largest city, known as the "City of Manufacturers"'),
    ('cottbus', 'Cottbus', 'in Cottbus', 'Brandenburg\'s second-largest city, undergoing major transformation'),
    ('darmstadt', 'Darmstadt', 'in Darmstadt', 'the "City of Science" in the Rhine-Main region, home to numerous research institutions'),
    ('dortmund', 'Dortmund', 'in Dortmund', 'the largest city in the Ruhr area, a major logistics and technology hub'),
    ('dresden', 'Dresden', 'in Dresden', 'Saxony\'s capital, known as the "Florence of the Elbe"'),
    ('dueren', 'Düren', 'in Düren', 'a city between Cologne and Aachen with a strong industrial base'),
    ('duesseldorf', 'Düsseldorf', 'in Düsseldorf', 'North Rhine-Westphalia\'s capital, Germany\'s fashion and advertising capital'),
    ('duisburg', 'Duisburg', 'in Duisburg', 'home to the world\'s largest inland port, a major logistics hub'),
    ('erfurt', 'Erfurt', 'in Erfurt', 'Thuringia\'s capital, a rapidly growing city in central Germany'),
    ('erlangen', 'Erlangen', 'in Erlangen', 'a university and technology city in the Nuremberg metropolitan region'),
    ('essen', 'Essen', 'in Essen', 'the former "Capital of Coal" transformed into a culture and service hub'),
    ('esslingen-am-neckar', 'Esslingen am Neckar', 'in Esslingen am Neckar', 'a historic city near Stuttgart in the heart of Baden-Württemberg'),
    ('flensburg', 'Flensburg', 'in Flensburg', 'Germany\'s northernmost city, located on the Danish border'),
    ('frankfurt-am-main', 'Frankfurt am Main', 'in Frankfurt', 'Germany\'s financial center and home to the European Central Bank'),
    ('freiburg-im-breisgau', 'Freiburg im Breisgau', 'in Freiburg', 'the "Sunny City" in the Black Forest, known for its university and sustainability'),
    ('fuerth', 'Fürth', 'in Fürth', 'a historic city adjacent to Nuremberg in Bavaria'),
    ('gelsenkirchen', 'Gelsenkirchen', 'in Gelsenkirchen', 'a city in the Ruhr area reinventing itself through solar energy and culture'),
    ('gera', 'Gera', 'in Gera', 'Thuringia\'s third-largest city'),
    ('giessen', 'Gießen', 'in Gießen', 'a university city in central Hesse'),
    ('goettingen', 'Göttingen', 'in Göttingen', 'a renowned university city in Lower Saxony'),
    ('guetersloh', 'Gütersloh', 'in Gütersloh', 'a prosperous city in East Westphalia known for Bertelsmann and Miele'),
    ('hagen', 'Hagen', 'in Hagen', 'the southern gateway to the Ruhr area'),
    ('halle-saale', 'Halle (Saale)', 'in Halle', 'Saxony-Anhalt\'s largest city, a cultural and scientific center'),
    ('hamburg', 'Hamburg', 'in Hamburg', 'Germany\'s second-largest city and most important port'),
    ('hamm', 'Hamm', 'in Hamm', 'a city in the eastern Ruhr area'),
    ('hanau', 'Hanau', 'in Hanau', 'the birthplace of the Brothers Grimm in the Rhine-Main region'),
    ('hannover', 'Hannover', 'in Hannover', 'Lower Saxony\'s capital, famous for its trade fairs including Hannover Messe'),
    ('heidelberg', 'Heidelberg', 'in Heidelberg', 'home to Germany\'s oldest university, a romantic city on the Neckar'),
    ('heilbronn', 'Heilbronn', 'in Heilbronn', 'the economic heart of northern Baden-Württemberg'),
    ('herne', 'Herne', 'in Herne', 'a compact city in the heart of the Ruhr area'),
    ('hildesheim', 'Hildesheim', 'in Hildesheim', 'a UNESCO World Heritage city in Lower Saxony'),
    ('ingolstadt', 'Ingolstadt', 'in Ingolstadt', 'Bavaria\'s automotive city, home to Audi headquarters'),
    ('iserlohn', 'Iserlohn', 'in Iserlohn', 'the largest city in the Märkisches Sauerland district'),
    ('jena', 'Jena', 'in Jena', 'Thuringia\'s city of science and optics, home to Carl Zeiss'),
    ('kaiserslautern', 'Kaiserslautern', 'in Kaiserslautern', 'a vibrant city in Rhineland-Palatinate – and OMmatic\'s hometown'),
    ('karlsruhe', 'Karlsruhe', 'in Karlsruhe', 'Baden-Württemberg\'s tech capital, home to Germany\'s supreme courts'),
    ('kassel', 'Kassel', 'in Kassel', 'the heart of Germany, known for documenta and its UNESCO World Heritage parks'),
    ('kiel', 'Kiel', 'in Kiel', 'Schleswig-Holstein\'s capital on the Baltic Sea'),
    ('koblenz', 'Koblenz', 'in Koblenz', 'the city at the confluence of Rhine and Moselle'),
    ('koeln', 'Cologne', 'in Cologne', 'Germany\'s fourth-largest city, a major media and business metropolis'),
    ('konstanz', 'Konstanz', 'in Constance', 'the only German city that borders Lake Constance on both sides'),
    ('krefeld', 'Krefeld', 'in Krefeld', 'the "City of Velvet and Silk" on the Lower Rhine'),
    ('leipzig', 'Leipzig', 'in Leipzig', 'Saxony\'s largest city, one of Germany\'s fastest-growing metropolises'),
    ('leverkusen', 'Leverkusen', 'in Leverkusen', 'home to Bayer AG and positioned between Cologne and Düsseldorf'),
    ('ludwigsburg', 'Ludwigsburg', 'in Ludwigsburg', 'the "Baroque City" north of Stuttgart'),
    ('ludwigshafen-am-rhein', 'Ludwigshafen am Rhein', 'in Ludwigshafen', 'home to BASF, the world\'s largest chemical company'),
    ('luebeck', 'Lübeck', 'in Lübeck', 'the "Queen of the Hanseatic League", a UNESCO World Heritage city'),
    ('luenen', 'Lünen', 'in Lünen', 'a city north of Dortmund on the Lippe River'),
    ('magdeburg', 'Magdeburg', 'in Magdeburg', 'Saxony-Anhalt\'s capital, a growing economic center on the Elbe'),
    ('mainz', 'Mainz', 'in Mainz', 'Rhineland-Palatinate\'s capital, home to ZDF and numerous major companies'),
    ('mannheim', 'Mannheim', 'in Mannheim', 'Baden-Württemberg\'s second-largest city and a major economic hub'),
    ('marl', 'Marl', 'in Marl', 'a city in the northern Ruhr area'),
    ('moenchengladbach', 'Mönchengladbach', 'in Mönchengladbach', 'a city in the Lower Rhine region known for textiles and technology'),
    ('moers', 'Moers', 'in Moers', 'a city on the Lower Rhine between Duisburg and Krefeld'),
    ('muelheim-an-der-ruhr', 'Mülheim an der Ruhr', 'in Mülheim', 'a city on the Ruhr River between Essen and Duisburg'),
    ('muenchen', 'Munich', 'in Munich', 'Bavaria\'s capital and Germany\'s third-largest city, a global business hub'),
    ('muenster', 'Münster', 'in Münster', 'the "City of Bicycles", a major university and administrative center'),
    ('neuss', 'Neuss', 'in Neuss', 'a city across the Rhine from Düsseldorf'),
    ('nuernberg', 'Nuremberg', 'in Nuremberg', 'Bavaria\'s second-largest city, a major logistics and tech hub'),
    ('oberhausen', 'Oberhausen', 'in Oberhausen', 'a city in the northern Ruhr area, known for the CentrO mall'),
    ('offenbach-am-main', 'Offenbach am Main', 'in Offenbach', 'part of the Frankfurt metropolitan region'),
    ('oldenburg', 'Oldenburg', 'in Oldenburg', 'the economic center of north-western Lower Saxony'),
    ('osnabrueck', 'Osnabrück', 'in Osnabrück', 'the City of Peace in Lower Saxony'),
    ('paderborn', 'Paderborn', 'in Paderborn', 'an IT and university city in East Westphalia'),
    ('pforzheim', 'Pforzheim', 'in Pforzheim', 'the "Gold City" at the gateway to the Black Forest'),
    ('potsdam', 'Potsdam', 'in Potsdam', 'Brandenburg\'s capital, a UNESCO World Heritage city near Berlin'),
    ('ratingen', 'Ratingen', 'in Ratingen', 'a prosperous city in the Düsseldorf metropolitan area'),
    ('recklinghausen', 'Recklinghausen', 'in Recklinghausen', 'the northernmost Ruhr area city, known for the Ruhrfestspiele'),
    ('regensburg', 'Regensburg', 'in Regensburg', 'a UNESCO World Heritage city on the Danube, one of Bavaria\'s oldest cities'),
    ('remscheid', 'Remscheid', 'in Remscheid', 'the "City of Tools" in the Bergisches Land'),
    ('reutlingen', 'Reutlingen', 'in Reutlingen', 'a city at the foot of the Swabian Alb near Stuttgart'),
    ('rostock', 'Rostock', 'in Rostock', 'Mecklenburg-Vorpommern\'s largest city on the Baltic Sea'),
    ('saarbruecken', 'Saarbrücken', 'in Saarbrücken', 'Saarland\'s capital and economic center'),
    ('salzgitter', 'Salzgitter', 'in Salzgitter', 'a steel and automotive city in Lower Saxony'),
    ('schwerin', 'Schwerin', 'in Schwerin', 'Mecklenburg-Vorpommern\'s beautiful capital'),
    ('siegen', 'Siegen', 'in Siegen', 'the center of the Siegerland region in North Rhine-Westphalia'),
    ('solingen', 'Solingen', 'in Solingen', 'the "City of Blades" in the Bergisches Land'),
    ('stuttgart', 'Stuttgart', 'in Stuttgart', 'Baden-Württemberg\'s capital and Germany\'s automotive hub'),
    ('trier', 'Trier', 'in Trier', 'Germany\'s oldest city and a UNESCO World Heritage site'),
    ('tuebingen', 'Tübingen', 'in Tübingen', 'a famous university city on the Neckar River'),
    ('ulm', 'Ulm', 'in Ulm', 'home to the world\'s tallest church steeple, a growing tech city'),
    ('villingen-schwenningen', 'Villingen-Schwenningen', 'in Villingen-Schwenningen', 'the watchmaking city in the southern Black Forest'),
    ('wiesbaden', 'Wiesbaden', 'in Wiesbaden', 'Hesse\'s capital, known for its spa culture and high quality of life'),
    ('witten', 'Witten', 'in Witten', 'a university city in the southern Ruhr area'),
    ('wolfsburg', 'Wolfsburg', 'in Wolfsburg', 'Volkswagen\'s hometown, one of Germany\'s youngest and wealthiest cities'),
    ('worms', 'Worms', 'in Worms', 'one of Germany\'s oldest cities, famous for the Diet of Worms'),
    ('wuerzburg', 'Würzburg', 'in Würzburg', 'Bavaria\'s wine city, home to a UNESCO World Heritage Residence'),
    ('wuppertal', 'Wuppertal', 'in Wuppertal', 'the city of the famous Schwebebahn, a cultural hub in the Bergisches Land'),
    ('zwickau', 'Zwickau', 'in Zwickau', 'the birthplace of Robert Schumann and the Trabant'),
]

def make_city_page(slug, city, city_in, city_desc):
    return f"""<?php
$page_lang = 'en';
$page_title = 'Law Firm Marketing {city} – Google Ads & SEO for Lawyers | OMmatic';
$page_description = 'OMmatic: Performance marketing for law firms {city_in}. Google Ads, SEO, local marketing. Measurably more clients. Free initial consultation.';
$page_canonical = 'https://ommatic.de/en/law-firm-marketing/{slug}/';
$page_hreflang_en = 'https://ommatic.de/en/law-firm-marketing/{slug}/';
$page_hreflang_de = 'https://ommatic.de/kanzleimarketing/{slug}/';
require_once '../../../includes/header.php';
?>
<main>

  <section class="section" style="padding-top:6rem;padding-bottom:4rem;background:var(--bg-1)">
    <div class="container">
      <nav aria-label="Breadcrumb" style="font-size:.875rem;color:var(--text-muted);margin-bottom:1.5rem">
        <a href="/en/">Home</a> <span style="margin:0 .5rem">›</span>
        <a href="/en/law-firm-marketing/">Law Firm Marketing</a> <span style="margin:0 .5rem">›</span>
        <span>{city}</span>
      </nav>
      <span class="tag-chip">{city} · Law Firm Marketing</span>
      <h1 class="sr" style="margin-top:1rem">Law Firm Marketing {city}<br><span class="gradient-text">Measurably More Clients.</span></h1>
      <p class="hero-sub" style="max-width:700px">OMmatic is your specialized performance marketing agency for law firms {city_in}. We connect your practice with the right clients through Google Ads, SEO, and local online marketing. {city.title()} is {city_desc}.</p>
      <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap">
        <a href="/en/contact/" class="btn btn-primary">Request free consultation</a>
        <a href="/en/law-firm-marketing/" class="btn btn-outline">All services</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:start">
        <div>
          <h2 class="sr-d1">Law firm marketing {city_in} – Your market in focus</h2>
          <p style="margin-top:1.5rem">Daily, dozens of people {city_in} search online for legal support. A strong digital presence is essential for law firms that want to stand out from the competition and win the right clients.</p>
          <p style="margin-top:1rem">With OMmatic as your specialized performance marketing agency, you tap this potential systematically and measurably.</p>
        </div>
        <div class="card" style="border:2px solid var(--accent)">
          <h3>Use local strengths</h3>
          <ul style="list-style:none;padding:0;display:grid;gap:.75rem;margin-top:1rem">
            <li style="display:flex;gap:.75rem"><span style="color:var(--accent)">✓</span> Target local neighborhoods and districts</li>
            <li style="display:flex;gap:.75rem"><span style="color:var(--accent)">✓</span> Convert local search queries</li>
            <li style="display:flex;gap:.75rem"><span style="color:var(--accent)">✓</span> Google My Business optimization</li>
            <li style="display:flex;gap:.75rem"><span style="color:var(--accent)">✓</span> Practice area-specific client acquisition</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--bg-2)">
    <div class="container">
      <h2 class="sr-d1">Online marketing for law firms {city_in}</h2>
      <p style="max-width:720px;margin:1.5rem 0 2.5rem">Our specialized services for lawyers and law firms {city_in} – from the first search query to the signed retainer.</p>
      <div class="card-grid" style="--cols:3">
        <div class="card">
          <h3>Google Ads for Lawyers</h3>
          <p>Immediate visibility for searches like "lawyer {city}". Measurable leads from day 1 – you only pay when someone clicks.</p>
          <a href="/kanzleimarketing/google-ads-fuer-anwaelte/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
        <div class="card">
          <h3>SEO for Lawyers</h3>
          <p>Long-term organic visibility for relevant legal queries {city_in} – without paying per click.</p>
          <a href="/kanzleimarketing/suchmaschinenoptimierung-seo-fuer-rechtsanwaelte/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
        <div class="card">
          <h3>Local Online Marketing</h3>
          <p>Google My Business, local citations and review management for maximum local visibility {city_in}.</p>
          <a href="/kanzleimarketing/lokales-online-marketing-mybusiness-fuer-rechtsanwaelte/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
        <div class="card">
          <h3>Social Media</h3>
          <p>Professional social media presence to build your reputation {city_in} and attract new clients.</p>
          <a href="/kanzleimarketing/social-media-fuer-rechtsanwaelte/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
        <div class="card">
          <h3>Search Campaigns (SEA)</h3>
          <p>Targeted search ads for your practice areas – reaching people who need legal help right now {city_in}.</p>
          <a href="/kanzleimarketing/suchanzeigen-kampagnen-sea-fuer-rechtsanwaelte-und-kanzleien/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
        <div class="card">
          <h3>Analytics & Reporting</h3>
          <p>Transparent performance reports so you always know what results your marketing is generating {city_in}.</p>
          <a href="/en/contact/" class="btn btn-outline" style="margin-top:1rem">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-number gradient-text">1 week</div>
          <div class="stat-label">until go-live</div>
        </div>
        <div class="stat-item">
          <div class="stat-number gradient-text">+150%</div>
          <div class="stat-label">average increase in inquiries</div>
        </div>
        <div class="stat-item">
          <div class="stat-number gradient-text">4.8★</div>
          <div class="stat-label">client satisfaction</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--accent-gradient);text-align:center">
    <div class="container">
      <h2 class="sr-d1" style="color:#fff">Ready for more clients from {city}?</h2>
      <p style="color:rgba(255,255,255,0.85);max-width:600px;margin:1.5rem auto 2.5rem">Request your free initial consultation now – we'll show you exactly what's possible for your law firm {city_in}.</p>
      <a href="/en/contact/" class="btn" style="background:#fff;color:var(--accent)">Request free consultation</a>
    </div>
  </section>

</main>
<?php require_once '../../../includes/footer.php'; ?>
"""

created = []
for slug, city, city_in, city_desc in CITIES:
    dirpath = os.path.join(BASE_DIR, 'en', 'law-firm-marketing', slug)
    os.makedirs(dirpath, exist_ok=True)
    filepath = os.path.join(dirpath, 'index.php')
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(make_city_page(slug, city, city_in, city_desc))
    created.append(filepath)

print(f"Created {len(created)} EN city pages")
for f in created[:5]:
    print(f"  {f}")
print("  ...")
for f in created[-3:]:
    print(f"  {f}")
