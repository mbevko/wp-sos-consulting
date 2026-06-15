<?php
/*
 * Template Name: Contact
 */
get_header();
?>

<!-- HERO -->
<section class="c-hero">
  <div class="c-hero-left">
    <div class="c-hero-eyebrow"><span class="c-hero-eyebrow-dot"></span>Contact</div>
    <h1 class="c-hero-h1">Start the conversation<br>with someone who has<br><em>done this before.</em></h1>
    <p class="c-hero-sub">Whether you are evaluating a new ERP, planning a migration, or working through a problem in your current system, the conversation starts here. <strong>Tell us what you are running and what is getting in the way.</strong></p>
  </div>
  <div class="c-hero-right">
    <div class="c-hero-right-label">Reach us directly</div>
    <a href="tel:18442448869" class="c-channel">
      <div class="c-channel-icon">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M14.5 11.5v2a1.3 1.3 0 01-1.4 1.3 13.2 13.2 0 01-5.8-2 13 13 0 01-4-4A13.2 13.2 0 011.2 3 1.3 1.3 0 012.5 1.5h2a1.3 1.3 0 011.3 1.2c.1.7.3 1.4.5 2a1.3 1.3 0 01-.3 1.4l-.9.9a10.7 10.7 0 004 4l.9-.9a1.3 1.3 0 011.4-.3c.6.2 1.3.4 2 .5a1.3 1.3 0 011.1 1.2z" stroke="#7ecfea" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div>
        <div class="c-channel-label">Call</div>
        <div class="c-channel-value">+1 (844) 244-8869</div>
      </div>
    </a>
    <a href="mailto:info@sosconsultingservices.net" class="c-channel">
      <div class="c-channel-icon">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="#7ecfea" stroke-width="1.3"/><path d="M1.5 4.5L8 9l6.5-4.5" stroke="#7ecfea" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div>
        <div class="c-channel-label">Email</div>
        <div class="c-channel-value">info@sosconsultingservices.net</div>
      </div>
    </a>
    <a href="https://www.linkedin.com/company/sos-consulting-services-inc-" target="_blank" rel="noopener" class="c-channel">
      <div class="c-channel-icon">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="1.5" width="13" height="13" rx="2" stroke="#7ecfea" stroke-width="1.3"/><path d="M4.8 7v4.2M4.8 4.8v.01M7.5 11.2V8.8c0-1 .7-1.8 1.7-1.8s1.7.8 1.7 1.8v2.4" stroke="#7ecfea" stroke-width="1.3" stroke-linecap="round"/></svg>
      </div>
      <div>
        <div class="c-channel-label">LinkedIn</div>
        <div class="c-channel-value">SOS Consulting Services</div>
      </div>
    </a>
  </div>
</section>

<!-- MAIN: FORM + RAIL -->
<section class="c-main">

  <!-- Form card -->
  <div class="c-form-card">
    <div class="c-form-eyebrow">Send Us a Message</div>
    <h2 class="c-form-title">Tell us where things stand. We&rsquo;ll take it from there.</h2>
    <p class="c-form-desc">The more context you share about your systems and what is not working, the more useful our first conversation will be.</p>

    <!-- HubSpot: Website Contact Us form -->
    <div id="sos-hs-form">
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
      <script>
        window.addEventListener('load', function() {
          if (typeof hbspt !== 'undefined') {
            hbspt.forms.create({
              portalId: "45057611",
              formId: "af3805f1-bf73-41ad-b69a-b803e4578b0b",
              region: "na1",
              target: "#sos-hs-form"
            });
          }
        });
      </script>
    </div>
  </div>

  <!-- Right rail -->
  <div class="c-rail">
    <div class="c-rail-card">
      <div class="c-rail-title">Our offices</div>
      <p class="c-rail-desc">Five locations across the East Coast and the South, serving clients nationwide.</p>
      <div class="c-office">
        <div class="c-office-city">Albany, New York</div>
        <div class="c-office-region">Capital Region</div>
      </div>
      <div class="c-office">
        <div class="c-office-city">Long Island, New York</div>
        <div class="c-office-region">Greater New York Metro</div>
      </div>
      <div class="c-office">
        <div class="c-office-city">Ft. Lauderdale, Florida</div>
        <div class="c-office-region">South Florida</div>
      </div>
      <div class="c-office">
        <div class="c-office-city">Nashville, Tennessee</div>
        <div class="c-office-region">Middle Tennessee</div>
      </div>
      <div class="c-office">
        <div class="c-office-city">Mooresville, North Carolina</div>
        <div class="c-office-region">Greater Charlotte</div>
      </div>
    </div>

    <div class="c-rail-card c-rail-assess">
      <div class="c-rail-ey">Free &middot; No obligation</div>
      <div class="c-rail-title">Not ready to fill out a form?</div>
      <p class="c-rail-desc">Book a free 30-minute technology assessment directly with a senior partner. No sales pitch, no follow-up pressure.</p>
      <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="c-rail-cta">Book Free Assessment &rarr;</a>
    </div>
  </div>

</section>

<!-- MAP -->
<section class="c-map-section">
  <div class="c-map-head">
    <div class="c-map-eyebrow">Where We Are</div>
    <h2 class="c-map-headline">Local presence, <em>national reach.</em></h2>
    <p class="c-map-sub">Our partners and consultants work from five offices, and our clients run their businesses everywhere in between.</p>
  </div>
  <div id="sos-map-contact"></div>
</section>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
window.addEventListener('load', function() {
  if (typeof L === 'undefined') return;
  var map = L.map('sos-map-contact', { scrollWheelZoom: false }).setView([35.8, -80.5], 5);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    maxZoom: 18
  }).addTo(map);

  var icon = L.divIcon({
    className: '',
    html: '<div style="width:16px;height:16px;background:#c0392b;border-radius:50%;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,.3)"></div>',
    iconSize: [16, 16],
    iconAnchor: [8, 8]
  });

  var offices = [
    { lat: 42.6518, lng: -73.7545, name: 'Albany, NY' },
    { lat: 40.7891, lng: -73.1350, name: 'Long Island, NY' },
    { lat: 26.1224, lng: -80.1373, name: 'Ft. Lauderdale, FL' },
    { lat: 36.1627, lng: -86.7816, name: 'Nashville, TN' },
    { lat: 35.5849, lng: -80.8101, name: 'Mooresville, NC' }
  ];

  offices.forEach(function(o) {
    L.marker([o.lat, o.lng], { icon: icon })
      .bindPopup('<strong style="font-family:Georgia,serif;font-size:14px;color:#0d3d4f">' + o.name + '</strong><br><span style="font-size:12px;color:#6b7a82">SOS Consulting Services</span>')
      .addTo(map);
  });
});
</script>

<?php get_footer(); ?>
