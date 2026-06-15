<?php
/*
 * Template Name: Sage Intacct Healthcare
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot" style="background:var(--sage-green)"></div><span class="mb-text" style="color:var(--sage-green)">Sage Intacct · Healthcare</span></div>
      <h1>Your financial system<br>should be as compliant<br><em>as the rest of your operation.</em></h1>
      <p class="hero-sub">Healthcare organizations store protected health information in their financial systems — <strong>most don't realize it until there's a problem.</strong> Sage Intacct is HIPAA and HITECH-certified, HFMA Peer Reviewed, and built for the multi-entity, multi-location financial complexity healthcare organizations operate in every day.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#what-it-does" class="btn-ghost">See the Capabilities ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">🛡️</div><div><div class="hs-title">HIPAA &amp; HITECH certified — BAA available</div><div class="hs-body">Certified by Avertium. Sage Intacct will enter into a Business Associate Agreement with eligible healthcare clients</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🏆</div><div><div class="hs-title">HFMA Peer Reviewed — AICPA preferred</div><div class="hs-body">The only AICPA-preferred financial management solution, also recognized by the Healthcare Financial Management Association</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🏥</div><div><div class="hs-title">Multi-entity consolidations in minutes</div><div class="hs-body">Consolidate hundreds of locations, clinics, and entities in minutes — not weeks. Real-time visibility by location, provider, payer, and service line</div></div></div>
          <div class="hero-stat"><div class="hs-icon">⚡</div><div><div class="hs-title">Close up to 79% faster</div><div class="hs-body">Healthcare organizations report reducing their monthly close from 10–15 days to 3–5 days with automated consolidation, AP, and reconciliation</div></div></div>
        </div>
      </div>
      <div class="hero-cta-strip">
        <div class="hcs-text">See it configured for your organization</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="hcs-btn">Schedule a Demo →</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions')); ?>">Solutions</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions/sage-intacct')); ?>">Sage Intacct</a><span class="bc-sep">/</span>
  <span class="bc-cur">Healthcare</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Built for:</div>
    <div class="er-tags">
      <span class="er-tag">🏥 Medical Groups &amp; Practices</span>
      <span class="er-tag">🧠 Behavioral Health</span>
      <span class="er-tag">🦷 Dental Groups &amp; DSOs</span>
      <span class="er-tag">🦴 Specialty Practices</span>
      <span class="er-tag">🤝 Healthcare Nonprofits</span>
      <span class="er-tag">🏠 Senior Living Organizations</span>
    </div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Core Capabilities</div>
    <h2 class="sec-title">Built for healthcare complexity.<br><em>Certified for healthcare compliance.</em></h2>
    <p class="tc-desc">Sage Intacct is the #1 rated HIPAA-compliant healthcare accounting software — HFMA Peer Reviewed, AICPA preferred, and built for the multi-entity, multi-location financial operations of growing healthcare organizations.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'compliance')"><span class="tab-btn-icon">🛡️</span><span>HIPAA Compliance</span></button>
      <button class="tab-btn" onclick="switchTab(this,'multientity')"><span class="tab-btn-icon">🏥</span><span>Multi-Entity Financials</span></button>
      <button class="tab-btn" onclick="switchTab(this,'visibility')"><span class="tab-btn-icon">📊</span><span>Financial Visibility</span></button>
      <button class="tab-btn" onclick="switchTab(this,'integrations')"><span class="tab-btn-icon">🔗</span><span>Clinical &amp; Operational Integrations</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-compliance">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">HIPAA &amp; HITECH Compliance</div>
            <h3 class="tp-title">Your financial system handles PHI.<br>It needs to be compliant.</h3>
            <p class="tp-body">Most healthcare organizations don't realize how much protected health information flows through their financial systems — patient payment data, insurance billing records, and provider-level financial data. Sage Intacct's Advanced Audit Trail has been certified as HIPAA- and HITECH-compliant by Avertium, and Sage Intacct will enter into a Business Associate Agreement with eligible healthcare clients.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>HIPAA and HITECH certified by Avertium</strong> — Security safeguards independently certified as HIPAA- and HITECH-compliant. Not a self-assessment — a third-party certification.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Business Associate Agreement (BAA) available</strong> — Sage Intacct will enter into a BAA with eligible healthcare clients — the legal agreement required for HIPAA compliance when a vendor handles PHI.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Advanced Audit Trail for PHI monitoring</strong> — Monitor and audit protected health information access in support of HIPAA requirements. Full audit trail on every financial transaction and every access event.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Role-based access controls</strong> — Secure user access with role-based permissions, encrypted data storage, and robust access controls that meet evolving privacy, payer, and regulatory requirements.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🛡️</div><div class="tp-stat-title">Third-party certified — not self-assessed</div><div class="tp-stat-body">Many financial platforms claim HIPAA compliance based on their own assessment. Sage Intacct's compliance is certified by Avertium, an independent cybersecurity firm. That's the difference between a claim and a certification.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📝</div><div class="tp-stat-title">BAA — the legal requirement, handled</div><div class="tp-stat-body">A Business Associate Agreement is required whenever a vendor handles PHI for a covered entity. Sage Intacct is prepared to sign a BAA with eligible healthcare clients — a requirement many ERP vendors cannot meet.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏆</div><div class="tp-stat-title">HFMA Peer Reviewed</div><div class="tp-stat-body">The Healthcare Financial Management Association has reviewed and recognized Sage Intacct. Combined with AICPA preferred status, this is the strongest independent endorsement of a financial management platform in healthcare.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-multientity">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Multi-Entity Financial Management</div>
            <h3 class="tp-title">Every location. Every entity.<br>One consolidated view.</h3>
            <p class="tp-body">Healthcare organizations operate across multiple entities, each with its own financials. Sage Intacct's push-button consolidations aggregate transactions across locations, clinics, and entities in minutes. Boost productivity by more than 50% on consolidation work alone.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Push-button multi-entity consolidations</strong> — Consolidate hundreds of locations, clinics, and entities in minutes — not weeks. Automated intercompany eliminations and currency handling.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Close up to 79% faster</strong> — Automated consolidation, AP, and bank reconciliation replace manual entry. Healthcare organizations report reducing monthly close from 10–15 days to 3–5 days.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Profitability by location, provider, and payer</strong> — Drill down by procedure, practice, location, provider, and payer. See which locations and service lines drive margin — and which are eroding it — in real time.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Scalable as you grow</strong> — Add new entities, locations, and service lines without re-implementing. Sage Intacct scales from a two-location practice to a multi-state healthcare network on the same platform.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">⏱️</div><div class="tp-stat-title">Close in days, not weeks</div><div class="tp-stat-body">Healthcare organizations commonly reduce close cycles from 10–15 days to 3–5 with automated consolidation and AP. When close is a scheduled process rather than a crisis, finance teams shift to analysis and planning.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📈</div><div class="tp-stat-title">50%+ productivity gain on consolidation</div><div class="tp-stat-body">Sage Intacct customers report boosting productivity by more than 50% on multi-entity consolidation work. What used to take a week of spreadsheet aggregation takes minutes of automated processing.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏥</div><div class="tp-stat-title">Built for DSOs, medical groups, and behavioral health networks</div><div class="tp-stat-body">Whether you have 3 locations or 300, Sage Intacct gives you a unified financial view without losing entity-level detail. Each location maintains its own books while consolidated reporting is always current.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-visibility">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Financial Visibility &amp; Reporting</div>
            <h3 class="tp-title">See what's driving margin.<br>Before it's too late to act.</h3>
            <p class="tp-body">Healthcare finance leaders need to see the whole picture — and the right picture for each stakeholder. CFO sees consolidated financial health. Operations sees location and service line performance. Practice managers see their P&amp;L. All from the same live data, without waiting for the monthly report to be assembled.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Dimensional reporting by any combination</strong> — Report by location, provider, payer, service line, procedure, department, or any dimension simultaneously. Drill from consolidated view to individual transaction in real time.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Combined clinical and financial data</strong> — Sage Intacct combines financial and clinical data for improved visibility. Connect financial performance to patient volume, procedure mix, and payer performance in one view.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Department reporting slashed from 10 days to real time</strong> — Healthcare organizations that previously waited 10 days for department-level financial reporting now access it in real time from Sage Intacct dashboards.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Increase efficiency up to 90%</strong> — Automated accounting workflows eliminate manual processes across AP, AR, and reporting. Healthcare finance teams report increasing efficiency by up to 90% after implementing Sage Intacct.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Profitability by provider, location, and payer</div><div class="tp-stat-body">See which providers generate the most margin. Which locations are underperforming. Which payers are most profitable. Drill into any dimension in real time — no report request needed.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🧠</div><div class="tp-stat-title">Clinical + financial in one view</div><div class="tp-stat-body">Connect financial data to clinical metrics — patient volume, procedure mix, utilization, and payer performance. The decisions that drive healthcare financial performance require both data sets together.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">AI flags issues before close</div><div class="tp-stat-body">Sage Intacct's AI scans thousands of transactions and flags anomalies automatically. Duplicate payments, miscoded procedures, and unusual variances caught before they affect financial statements.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-integrations">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Clinical &amp; Operational Integrations</div>
            <h3 class="tp-title">Connect your financial core<br>to your clinical systems.</h3>
            <p class="tp-body">Healthcare organizations run complex technology stacks — EMR, practice management, RCM, HR, payroll, and clinical procurement. Sage Intacct serves as the financial core, connected via open API and prebuilt integrations to the best-of-breed clinical and operational systems your organization already uses.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>EMRConnect — clinical and financial data unified</strong> — Sage Intacct EMRConnect (developed with Wipfli) integrates financial and clinical data. Patient volume, procedure data, and payer performance connected to financial reporting in one system.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Clinical eProcurement</strong> — Sage Intacct Clinical eProcurement (developed with Wipfli, 2025) streamlines purchasing and payables processes for healthcare providers. Purpose-built for clinical supply chain management.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>EMR, practice management, and RCM integrations</strong> — Seamlessly integrate with your patient management system, electronic health records, and revenue cycle management solutions. HIPAA-compliant financial and operational analytics across all connected systems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>HR, payroll, and benefits integrations</strong> — Connect to your HR and payroll systems for unified workforce management. Staff costs tracked and reported against financial performance by location and service line.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🧬</div><div class="tp-stat-title">2025: New clinical innovations with Wipfli</div><div class="tp-stat-body">In April 2025, Sage launched Sage Intacct Clinical eProcurement and EMRConnect in partnership with Wipfli — purpose-built solutions for healthcare finance leaders that combine clinical and financial data for deeper operational insights.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">One financial source of truth</div><div class="tp-stat-body">With one system of truth, data stays secure and accurate across all connected clinical and financial systems. Sage Intacct is the financial hub — every integration shares the same data, eliminating reconciliation between systems.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔐</div><div class="tp-stat-title">Cloud-grade security across all integrations</div><div class="tp-stat-body">All integrations maintain HIPAA-compliant data handling. Role-based access, encrypted data transfer, and audit trails extend across every connected system. Security doesn't degrade at the integration boundary.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="who-section">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Organization types we work with</div>
    <h2 class="sec-title">Built for every kind<br><em>of healthcare organization.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Sage Intacct serves healthcare organizations of all sizes and specialties. Here's how it applies to the types SOS works with most.</p>
    <div class="who-grid">
      <div class="who-card"><div class="who-card-icon">🏥</div><div class="who-card-title">Medical Groups &amp; Multi-Site Practices</div><div class="who-card-body">Medical groups with multiple locations needing consolidated financials, provider-level profitability, and payer performance visibility. Push-button consolidations and dimensional reporting replace spreadsheet aggregation across sites.</div></div>
      <div class="who-card"><div class="who-card-icon">🧠</div><div class="who-card-title">Behavioral Health Organizations</div><div class="who-card-body">Behavioral health networks with complex payer mixes, multiple program lines, and compliance reporting requirements. HIPAA-compliant financial management with program-level visibility and automated grant and funding tracking.</div></div>
      <div class="who-card"><div class="who-card-icon">🦷</div><div class="who-card-title">Dental Groups &amp; DSOs</div><div class="who-card-body">Dental support organizations running 5 to 200+ locations. Real-time P&amp;L by site, provider, and payer. Close in days not weeks. HIPAA-ready with secure user access, encrypted storage, and audit trails that meet Medicaid requirements.</div></div>
      <div class="who-card"><div class="who-card-icon">🦴</div><div class="who-card-title">Specialty Practices &amp; Surgical Centers</div><div class="who-card-body">Orthopedic, sports medicine, ASC, and other specialty practices with complex procedure-level profitability needs. Drill down by procedure, surgeon, and payer. Consolidate across ASCs and affiliated practice entities.</div></div>
      <div class="who-card"><div class="who-card-icon">🤝</div><div class="who-card-title">Healthcare Nonprofits</div><div class="who-card-body">Community health centers, nonprofit hospitals, and mission-driven healthcare organizations. HIPAA compliance and fund accounting combined. Track restricted grants and funding alongside clinical operations in one system.</div></div>
      <div class="who-card"><div class="who-card-icon">🏠</div><div class="who-card-title">Senior Living Organizations</div><div class="who-card-body">Senior living communities and long-term care networks with real-time visibility across properties and service lines. EMR and practice management integration, multi-entity consolidation, and certified HIPAA and HITECH compliance.</div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Healthcare</div>
      <h2 class="wc-title">Healthcare configuration requires<br><em>getting compliance right from day one.</em></h2>
      <p class="wc-body">HIPAA compliance isn't something you add to a financial system after go-live. BAA documentation, audit trail configuration, PHI access controls, and role-based permissions need to be set up correctly before the first transaction posts. <strong>We configure Sage Intacct for healthcare organizations with compliance built into the foundation.</strong></p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>HIPAA compliance configuration and BAA documentation handled at implementation</div>
        <div class="wc-point"><span class="wc-check">✓</span>Audit trail and PHI access controls set up correctly before go-live</div>
        <div class="wc-point"><span class="wc-check">✓</span>Multi-entity structure designed for your organization's locations and legal entities</div>
        <div class="wc-point"><span class="wc-check">✓</span>Dimensional reporting built for provider, location, payer, and service line visibility</div>
        <div class="wc-point"><span class="wc-check">✓</span>EMR, practice management, and RCM integrations configured before launch</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Sage Intacct configured for your healthcare organization.</div>
        <div class="wcc-body">Every SOS demo is built around your specific entity structure, compliance requirements, and the financial visibility your leadership needs — not a generic product walkthrough.</div>
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
      <div class="rescue-ey">Already on Sage Intacct?</div>
      <h3 class="rescue-title">Live but compliance was treated as an afterthought — that's fixable.</h3>
      <p class="rescue-body">Many healthcare Intacct implementations were done by generalist partners who configured the financial system correctly but didn't address HIPAA compliance configuration, BAA documentation, or PHI access controls. A No-Cost Assessment tells you where the gaps are.</p>
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
      <h2 class="final-title">A demo built around<br><em>your organization and your compliance needs.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific entity structure, compliance requirements, and the financial visibility your leadership needs. You'll see Sage Intacct the way your finance team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct')); ?>" class="btn-out">Back to Sage Intacct Overview →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current system, your compliance posture, and whether Sage Intacct is the right fit for your organization.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current system and HIPAA compliance review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Multi-entity structure assessment</div>
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
