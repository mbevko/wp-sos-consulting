<?php
/*
 * Template Name: Acumatica Field Service
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot"></div><span class="mb-text">Acumatica · Add-On Module</span></div>
      <h1>Your field team and your<br>back office should be<br><em>talking to each other.</em></h1>
      <p class="hero-sub">When the field and the back office aren't connected, <strong>everyone loses time fixing what the other couldn't see.</strong> Acumatica Field Service closes that gap.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#what-it-does" class="btn-ghost">See the Capabilities ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">📅</div><div><div class="hs-title">Drag-and-drop scheduling calendar</div><div class="hs-body">Schedule by technician skill, severity, and availability — with a live map view of every open appointment</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📱</div><div><div class="hs-title">Mobile-first — iOS and Android</div><div class="hs-body">Technicians start tasks, capture signatures, issue inventory, record expenses, and close work orders from the field</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤖</div><div><div class="hs-title">AI-embedded customer insights</div><div class="hs-body">AI captures and surfaces customer data — service history, sales history, open cases, and related activities in one view</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🔗</div><div><div class="hs-title">Runs on any Acumatica edition</div><div class="hs-body">Add Field Service to Manufacturing, Distribution, General Business, Construction, or Retail — no separate system</div></div></div>
        </div>
      </div>
      <div class="hero-cta-strip">
        <div class="hcs-text">See it configured for your operation</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="hcs-btn">Schedule a Demo →</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions')); ?>">Solutions</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/acumatica')); ?>">Acumatica Cloud ERP</a><span class="bc-sep">/</span>
  <span class="bc-cur">Field Service Management</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Works with every Acumatica edition:</div>
    <div class="er-tags">
      <span class="er-tag">🏭 Manufacturing</span>
      <span class="er-tag">📦 Distribution</span>
      <span class="er-tag">📊 General Business</span>
      <span class="er-tag">🏗️ Construction</span>
      <span class="er-tag">💼 Professional Services</span>
      <span class="er-tag">🛍️ Retail</span>
    </div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">Everything your service operation needs.<br><em>Connected to everything else.</em></h2>
    <p class="tc-desc">Acumatica Field Service is a fully integrated module — not a standalone tool. Every work order, time entry, and expense connects directly to your ERP inventory, purchasing, projects, and financials.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'scheduling')"><span class="tab-btn-icon">📅</span><span>Scheduling &amp; Dispatch</span></button>
      <button class="tab-btn" onclick="switchTab(this,'billing')"><span class="tab-btn-icon">💰</span><span>Billing &amp; Contracts</span></button>
      <button class="tab-btn" onclick="switchTab(this,'ai')"><span class="tab-btn-icon">🤖</span><span>AI Customer Insights</span></button>
      <button class="tab-btn" onclick="switchTab(this,'integration')"><span class="tab-btn-icon">🔗</span><span>ERP Integration</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-scheduling">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Appointment &amp; Resource Scheduling</div>
            <h3 class="tp-title">Optimize schedules.<br>Maximize efficiency.</h3>
            <p class="tp-body">Identify technicians, equipment, and materials required for each service order. Schedule appointments using the drag-and-drop calendar based on severity, technician skill level, and real-time availability.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Drag-and-drop calendar board</strong> — Visual scheduling with a live map view of open appointments, technician locations, and service zones. Schedule by severity, skill, and availability.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Mobile-first field access</strong> — iOS and Android app lets technicians start tasks, capture signatures, issue inventory, record expenses, and close work orders from the field in real time.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Service order management</strong> — Create, assign, and track service orders from creation through completion. Capture labor, materials, and equipment against every order.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Equipment management</strong> — Track customer equipment by serial number with full service history, warranty status, and scheduled maintenance intervals.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🗺️</div><div class="tp-stat-title">Schedule board with live map</div><div class="tp-stat-body">The Acumatica Calendar Board gives dispatchers a real-time view of every open appointment, technician location, and job status — drag and drop to reschedule without picking up the phone.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">✏️</div><div class="tp-stat-title">Signatures captured in the field</div><div class="tp-stat-body">Technicians capture customer signatures on-site via the mobile app. Work orders close immediately. No paper, no scanning, no follow-up calls to confirm completion.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔧</div><div class="tp-stat-title">Equipment history at a glance</div><div class="tp-stat-body">Every piece of customer equipment tracked by serial number — full service history, installed parts, warranty expiration, and next scheduled maintenance available before the technician arrives.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-billing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Billing &amp; Contracts</div>
            <h3 class="tp-title">Accurate invoicing.<br>Every time.</h3>
            <p class="tp-body">Benefit from flexible billing options and create invoices based on estimates or actuals. Oversee contracts and renewals through automated workflows. Schedule contract billing with various timeframes to meet your specific business needs.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Flexible billing from estimates or actuals</strong> — Bill customers based on fixed estimates, time and materials actuals, or a combination. No manual reconciliation between field data and billing.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Service contracts and renewals</strong> — Manage service level agreements, preventive maintenance contracts, and warranty agreements with automated renewal workflows and billing schedules.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Contract billing schedules</strong> — Schedule contract billing on any timeframe — monthly, quarterly, annually, or per event. Invoices generate automatically without manual intervention.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Direct connection to AR</strong> — Work order billing posts directly to Accounts Receivable in Acumatica — no manual re-entry, no lag between service completion and invoice creation.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📄</div><div class="tp-stat-title">Work order to invoice automatically</div><div class="tp-stat-body">When a technician closes a work order in the field, the billing data flows directly to AR. No manual data entry, no lag, no missed billable items.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔄</div><div class="tp-stat-title">Contract renewals that run themselves</div><div class="tp-stat-body">Automated renewal workflows notify the right people at the right time — and generate renewal invoices on the schedule you define. No manual tracking in spreadsheets.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Profitability by job, tech, and contract</div><div class="tp-stat-body">With labor, parts, and travel all captured against the work order, you can see margin by job type, technician, and customer — and make pricing decisions based on real data.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-ai">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">AI-Embedded Customer Insights</div>
            <h3 class="tp-title">Understand your customers<br>like never before.</h3>
            <p class="tp-body">Improve the customer experience with AI that captures and uses customer data. Provide access to service and sales history, support cases, and related activities — so every person who touches a customer account has the full picture.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI-powered customer data capture</strong> — AI captures customer data and activity automatically — reducing manual entry and keeping customer records current.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>360° customer view</strong> — Service history, sales history, open cases, related activities, installed equipment, and contract status — all visible in one place.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Case management integration</strong> — Field service cases connected to CRM cases — so support, sales, and field teams all see the same customer history without switching systems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI anomaly detection</strong> — Unusual patterns in service frequency, equipment failure rates, or billing discrepancies flagged automatically — before they escalate into customer problems.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">Every customer visit better informed</div><div class="tp-stat-body">Before a technician arrives, they see the full service history for that equipment, any open support cases, the customer's contract status, and notes from the last visit.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Service data informs sales</div><div class="tp-stat-body">When service history is connected to CRM, sales can see which customers are due for equipment upgrades, contract renewals, or have had recurring issues — and reach out at the right time.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⚠️</div><div class="tp-stat-title">Problems caught before customers call</div><div class="tp-stat-body">AI anomaly detection flags equipment with abnormal service frequency or recurring failure patterns — so your team can proactively schedule maintenance instead of reacting to breakdowns.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-integration">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Enterprise-Wide Integration</div>
            <h3 class="tp-title">Connect your business.<br>End to end.</h3>
            <p class="tp-body">Convert CRM opportunities into service orders and create appointments directly from those opportunities. Allocate stock items to service orders and create purchase orders from the field. Field Service is not a standalone tool — it's a connected layer of your ERP.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>CRM opportunity to service order</strong> — Convert CRM opportunities directly into service orders and schedule appointments without re-entering customer or job data.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Inventory allocated from the field</strong> — Technicians issue parts against work orders from the mobile app. Inventory updates in real time — no warehouse reconciliation needed.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Purchase orders created on-site</strong> — When a technician needs a part not in stock, they create a purchase order from the field. It routes through normal approval workflows and posts to AP automatically.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Project accounting connection</strong> — Link service orders to projects for full cost and revenue tracking by project. Time, materials, and expenses post to the project record in real time.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📦</div><div class="tp-stat-title">No separate inventory system for field</div><div class="tp-stat-body">Parts issued in the field pull from Acumatica inventory directly. Stock levels update the moment a technician scans a part. No separate system, no end-of-day reconciliation.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Field costs hit financials immediately</div><div class="tp-stat-body">Labor, parts, and expenses captured on a work order post to the GL when the order closes. Your financial picture is never more than one closed work order behind the field.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🤝</div><div class="tp-stat-title">Sales, service, and finance aligned</div><div class="tp-stat-body">CRM, Field Service, Inventory, Purchasing, and Financials all connected in one platform. Your teams work from the same data — without emailing each other.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="who-section">
  <div class="inner">
    <div class="sec-ey acu">Who it's built for</div>
    <h2 class="sec-title">If your business puts people in the field,<br><em>Field Service is built for you.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Field Service works across every Acumatica edition — it's not industry-specific. Here's how it applies to the businesses we work with most.</p>
    <div class="who-grid">
      <div class="who-card"><div class="who-card-icon">🏭</div><div class="who-card-title">Manufacturers with service divisions</div><div class="who-card-body">You manufacture equipment and also service it. Field Service connects install, maintenance, and repair operations directly to production, inventory, and project accounting in your Manufacturing Edition.</div></div>
      <div class="who-card"><div class="who-card-icon">📦</div><div class="who-card-title">Distributors with installation or delivery teams</div><div class="who-card-body">You distribute products that require installation, commissioning, or ongoing service. Field Service connects your field team to distribution inventory and customer accounts in real time.</div></div>
      <div class="who-card"><div class="who-card-icon">🔧</div><div class="who-card-title">Dedicated field service companies</div><div class="who-card-body">HVAC, electrical, plumbing, facilities management, IT services, and equipment maintenance businesses running on Acumatica General Business Edition.</div></div>
      <div class="who-card"><div class="who-card-icon">🏗️</div><div class="who-card-title">Construction with service and maintenance</div><div class="who-card-body">Construction companies managing warranty service, post-project maintenance contracts, or ongoing facility management alongside their core construction operations.</div></div>
      <div class="who-card"><div class="who-card-icon">💼</div><div class="who-card-title">Professional services with field components</div><div class="who-card-body">Consulting, engineering, or inspection firms that put people on-site and need to connect field time and expenses directly to project accounting and client billing.</div></div>
      <div class="who-card"><div class="who-card-icon">🛍️</div><div class="who-card-title">Retail with installation or repair services</div><div class="who-card-body">Retail businesses that sell products requiring installation, delivery service, or ongoing repair — connecting field operations to retail inventory and customer accounts.</div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Field Service</div>
      <h2 class="wc-title">Field Service is only as good as<br><em>the configuration behind it.</em></h2>
      <p class="wc-body">A scheduling calendar that doesn't match how your dispatch team actually works won't get used. Work order workflows that don't match your service types create workarounds. Billing rules that don't match your contracts produce errors. We configure Field Service around how your operation actually runs.</p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Dispatch and scheduling configured for your territory and team structure</div>
        <div class="wc-point"><span class="wc-check">✓</span>Work order types and workflows built around your actual service offerings</div>
        <div class="wc-point"><span class="wc-check">✓</span>Billing rules that match your contract models — not generic defaults</div>
        <div class="wc-point"><span class="wc-check">✓</span>Inventory integration tuned to how your techs actually use parts</div>
        <div class="wc-point"><span class="wc-check">✓</span>Mobile app setup that your field team will actually use on day one</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Field Service configured for your operation.</div>
        <div class="wcc-body">Every SOS demo is built around your specific service workflows, dispatch model, and billing requirements — not a generic product tour.</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="wcc-btn">Book Free Assessment →</a>
        <a href="tel:18442448869" class="wcc-phone">📞 +1 (844) 244-8869</a>
      </div>
    </div>
  </div>
</section>

<section class="rescue">
  <div class="rescue-inner">
    <div class="rescue-icon">🔧</div>
    <div class="rescue-content">
      <div class="rescue-ey">Already using Acumatica Field Service?</div>
      <h3 class="rescue-title">Live but your team is still working around the system — that's fixable.</h3>
      <p class="rescue-body">Most Field Service problems aren't platform failures. They're scheduling workflows that weren't configured for your dispatch model, billing rules that don't match your contracts, or a mobile setup the field team never adopted. A No-Cost Assessment tells you what's wrong and what it takes to fix it.</p>
    </div>
    <div class="rescue-cta">
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="rescue-btn">Get a Free Diagnosis →</a>
      <div class="rescue-note">60 min · Senior partner-led · No pitch</div>
    </div>
  </div>
</section>

<section class="final">
  <div class="final-grid">
    <div>
      <div class="final-ey">Ready to see it?</div>
      <h2 class="final-title">A Field Service demo<br><em>built for your workflows.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific dispatch model, service types, and billing requirements. You'll see Field Service the way your team would use it — not a prebuilt script.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/acumatica')); ?>" class="btn-out">Back to Acumatica Overview →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current setup and whether Acumatica Field Service is the right fit for your operation.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current field service workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Module fit recommendation for your edition</div>
        <div class="ac-item"><span class="ac-check">✓</span> Honest readiness and timeline assessment</div>
        <div class="ac-item"><span class="ac-check">✓</span> Written summary within 48 hours</div>
      </div>
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="ac-btn">Book Free Assessment →</a>
      <a href="tel:18442448869" class="ac-phone">📞 +1 (844) 244-8869</a>
    </div>
  </div>
</section>

</div><!-- /.acu-page -->
<script>
function switchTab(btn,tabId){document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('active'));btn.classList.add('active');document.querySelectorAll('.tab-panel').forEach(p=>p.classList.remove('active'));document.getElementById('panel-'+tabId).classList.add('active');}
</script>
<?php get_footer(); ?>
