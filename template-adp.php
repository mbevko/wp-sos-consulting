<?php
/*
 * Template Name: ADP Workforce Now
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot"></div><span class="mb-text">SOS · ADP Partner</span></div>
      <h1>Your HR, payroll, and ERP<br>should share the same data.<br><em>Not the same spreadsheet.</em></h1>
      <p class="hero-sub">Every time payroll runs outside your ERP, someone re-enters it. <strong>ADP Workforce Now eliminates that</strong>, with certified integrations to both Acumatica and Sage Intacct.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#integrations" class="btn-ghost">See the Integrations ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">👥</div><div><div class="hs-title">All-in-one HCM for mid-sized businesses</div><div class="hs-body">HR, payroll, time and attendance, benefits administration, talent management, and workforce analytics — one platform, one login</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🔗</div><div><div class="hs-title">Certified integrations, Acumatica &amp; Sage Intacct</div><div class="hs-body">Payroll journal entries post directly to your GL. Employee data syncs automatically. No manual re-entry, no reconciliation lag.</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🏆</div><div><div class="hs-title">Forrester Wave Leader, HCM Q4 2025</div><div class="hs-body">Recognized as a Leader in The Forrester Wave Human Capital Management Solutions evaluation. Trusted by 18 million+ mobile users.</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤝</div><div><div class="hs-title">Implemented by SOS, an authorized ADP partner</div><div class="hs-body">SOS configures the full connected solution — ADP Workforce Now plus your ERP integration — so HR and finance speak the same language from day one</div></div></div>
        </div>
      </div>
      <div class="hero-cta-strip">
        <div class="hcs-text">See the connected HR + ERP solution</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="hcs-btn">Book Free Assessment →</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions')); ?>">Solutions</a><span class="bc-sep">/</span>
  <span class="bc-cur">ADP Workforce Now</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Certified integrations with:</div>
    <div class="er-tags">
      <span class="er-tag">🏭 Acumatica — Certified Application</span>
      <span class="er-tag">📊 Sage Intacct — Certified Integration</span>
      <span class="er-tag">👥 All Acumatica Editions</span>
      <span class="er-tag">💼 All Sage Intacct Verticals</span>
    </div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey">Platform Capabilities</div>
    <h2 class="sec-title">Everything your HR and payroll team needs.<br><em>Connected to everything finance needs.</em></h2>
    <p class="tc-desc">ADP Workforce Now is an AI-powered all-in-one HCM platform built for mid-sized businesses. Payroll, HR, time and attendance, benefits, talent management, and analytics — all connected to your ERP through certified integrations that SOS configures and supports.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'payroll')"><span class="tab-btn-icon">💰</span><span>Payroll &amp; Tax</span></button>
      <button class="tab-btn" onclick="switchTab(this,'hr')"><span class="tab-btn-icon">👥</span><span>HR &amp; Talent</span></button>
      <button class="tab-btn" onclick="switchTab(this,'benefits')"><span class="tab-btn-icon">🏥</span><span>Benefits &amp; Time</span></button>
      <button class="tab-btn" onclick="switchTab(this,'analytics')"><span class="tab-btn-icon">📊</span><span>Analytics &amp; Insights</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-payroll">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Payroll &amp; Tax</div>
            <h3 class="tp-title">Payroll that calculates continuously.<br>Tax that stays current automatically.</h3>
            <p class="tp-body">ADP Workforce Now calculates payroll continuously, not just when you run it. AI-powered anomaly detection flags issues before payroll finalizes. Tax compliance updated automatically across federal, state, and local requirements.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Continuous payroll calculation with AI anomaly detection</strong> — Payroll runs accurately the first time. AI flags discrepancies before finalization so errors are caught before they become problems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Federal, state, and local tax compliance</strong> — Tax tables updated automatically. Payroll tax filings, deposits, and year-end W-2 processing handled within the platform.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Payroll journal entries to your ERP automatically</strong> — When payroll runs, GL entries post directly to Acumatica or Sage Intacct. No manual import, no re-entry, no lag between payroll and financials.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Single sign-on across HR, payroll, time, and benefits</strong> — One login for every workforce function. Data entered in one module reflects across all others — no reconciliation between systems.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">💸</div><div class="tp-stat-title">Half a day saved per payroll run</div><div class="tp-stat-body">D&amp;L, Inc., an HVAC company using the ADP-Acumatica integration, reported saving half a day of time versus their manual process — approximately $8,000 in annual savings — from automatic GL entries as soon as payroll runs.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">AI catches errors before they post</div><div class="tp-stat-body">AI-powered anomaly detection reviews every payroll run and flags unusual entries before they finalize. Errors caught before posting, not discovered during reconciliation or audit.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📋</div><div class="tp-stat-title">Workers' comp pay-as-you-go</div><div class="tp-stat-body">Pay-by-Pay workers' compensation administration bases premiums on actual payrolls rather than estimates, eliminating large upfront deposits and improving cash flow.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-hr">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">HR &amp; Talent Management</div>
            <h3 class="tp-title">From hire to retire.<br>In one connected system.</h3>
            <p class="tp-body">ADP Workforce Now connects the full employee lifecycle — recruitment, onboarding, performance, compensation, and offboarding — to the same payroll and benefits data. Employee master data syncs automatically to your ERP so HR and finance always see the same records.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Employee and talent profiles</strong> — Direct connections to payroll, performance management, compensation, and other Workforce Now capabilities from a single employee record.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Onboarding with paperless Form I-9</strong> — New hire onboarding with policy acknowledgment and paperless I-9 administration. New hire data captured once and flows to payroll, HR, and benefits automatically.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Employee data sync to Acumatica and Sage Intacct</strong> — New hires, terminations, department changes, and job title updates push from ADP to your ERP automatically. No manual updates in two systems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Compliance tracking and reporting</strong> — Track and report on compliance requirements across the employee lifecycle. Salary structures, pay grades, and policy acknowledgments managed within the platform.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">18 million+ mobile users</div><div class="tp-stat-body">The ADP Mobile app is the most downloaded HR mobile application in the industry. Employees access pay, time, benefits, and more. Managers approve time off and manage schedules from mobile.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🤝</div><div class="tp-stat-title">One record, no double entry</div><div class="tp-stat-body">When an employee is hired, their record created in ADP flows to your ERP automatically. When they leave, the termination syncs. No HR team manually updating two systems after every workforce change.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Compensation benchmarking included</div><div class="tp-stat-body">ADP Workforce Now includes compensation benchmarking data from ADP's data pool to help organizations set competitive pay structures without a separate benchmarking subscription.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-benefits">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Benefits &amp; Time and Attendance</div>
            <h3 class="tp-title">Benefits your employees use.<br>Time tracking that posts automatically.</h3>
            <p class="tp-body">ADP Workforce Now integrates with 900+ insurance carriers for real-time benefits updates. Time and attendance data flows directly to payroll — no manual import, no timesheet reconciliation. Employees manage everything through self-service on desktop or mobile.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>900+ insurance carrier integrations</strong> — Benefits enrollment changes sync directly with carriers in real time. Eliminates data lag, reduces errors, and removes manual carrier file management.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Automated time and attendance to payroll</strong> — Time data flows from time tracking directly to payroll processing. No manual timesheet imports, no reconciliation between time and payroll systems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Time data to Acumatica and Sage Intacct</strong> — Time and labor data including project and task fields sync to your ERP for accurate labor cost allocation and project accounting.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Employee self-service on any device</strong> — Employees enroll in benefits, view pay stubs, request time off, and access retirement information through the ADP Mobile app or employee portal.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🏥</div><div class="tp-stat-title">Benefits enrollment without the paperwork</div><div class="tp-stat-body">Employees compare and select benefit plans through an intuitive self-service experience. Elections sync to carriers in real time. Open enrollment that previously required HR team involvement for every change runs without it.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⏱️</div><div class="tp-stat-title">Time to payroll, automatically</div><div class="tp-stat-body">When time and attendance data flows directly to payroll, the manual step of exporting, reviewing, and importing timesheets disappears. Payroll is based on actual recorded time — always current, always accurate.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Labor costs to your ERP in real time</div><div class="tp-stat-body">Project and task fields in ADP time data pass directly to Acumatica or Sage Intacct GL entries. Labor costs allocated to the right projects and cost centers automatically — no manual allocation at month-end.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-analytics">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Analytics &amp; Workforce Insights</div>
            <h3 class="tp-title">Workforce data that informs<br>financial decisions.</h3>
            <p class="tp-body">ADP Workforce Now's analytics powered by ADP DataCloud give HR and finance teams insight into workforce trends, labor costs, turnover, and compensation — drawn from ADP's unmatched data pool. When connected to Acumatica or Sage Intacct, workforce data and financial data tell the same story.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Workforce analytics powered by ADP DataCloud</strong> — See and monitor trends over time. Measure workforce metrics against industry benchmarks. People analytics drawn from ADP's broad data pool.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI-enhanced manager insights</strong> — Managers use AI-enhanced insights to improve operations, manage schedules, and approve time off from any device. Operational decisions grounded in workforce data.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Unified workforce and financial reporting</strong> — When ADP Workforce Now is connected to your ERP, HR and finance report from the same data. Labor costs, headcount, and payroll liabilities visible alongside financial performance.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Compliance reporting across HR, payroll, and benefits</strong> — Generate compliance reports across the full employee lifecycle. ACA, EEOC, and other regulatory reporting managed without manual data pulls.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">HR and finance, same data, same decisions</div><div class="tp-stat-body">When payroll journals post to the ERP automatically and employee data syncs in real time, HR and finance stop reconciling between systems. Every workforce decision and every financial decision draws from the same source of truth.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏆</div><div class="tp-stat-title">Forrester Wave Leader, HCM Q4 2025</div><div class="tp-stat-body">ADP Workforce Now was recognized as a Leader in The Forrester Wave Human Capital Management Solutions Q4 2025 evaluation — assessed across strategy, current offering, and customer feedback alongside 11 other vendors.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔍</div><div class="tp-stat-title">Benchmark your workforce against your industry</div><div class="tp-stat-body">ADP DataCloud provides access to aggregated, anonymized workforce data from across ADP's client base. See how your turnover, compensation, and workforce metrics compare to others in your industry.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="int-section" id="integrations">
  <div class="inner">
    <div class="sec-ey">ERP Integrations</div>
    <h2 class="sec-title">The integrations that make<br><em>HR and finance one connected system.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Both integrations are certified and bi-directional. Data flows automatically between ADP Workforce Now and your ERP — no manual intervention required.</p>
    <div class="int-grid">
      <div class="int-card acu">
        <div class="int-card-badge acu">✓ Acumatica-Certified Application</div>
        <div class="int-card-icon">🏭</div>
        <div class="int-card-title">ADP Workforce Now<br>for Acumatica</div>
        <div class="int-card-body">ADP Workforce Now is an officially recognized Acumatica-Certified Application. Payroll data flows directly to your GL and HR data syncs automatically — with no manual re-entry between systems.</div>
        <div class="int-feats">
          <div class="int-feat"><span class="int-check acu">✓</span>Payroll journal entries post to Acumatica GL automatically when payroll runs</div>
          <div class="int-feat"><span class="int-check acu">✓</span>Employee data — new hires, terminations, and changes — sync from ADP to Acumatica</div>
          <div class="int-feat"><span class="int-check acu">✓</span>Time and attendance data with project and task fields passed to Acumatica</div>
          <div class="int-feat"><span class="int-check acu">✓</span>Real-time visibility across HR and accounting workflows</div>
          <div class="int-feat"><span class="int-check acu">✓</span>Works across all Acumatica editions: Manufacturing, Distribution, General Business, and more</div>
        </div>
      </div>
      <div class="int-card si">
        <div class="int-card-badge si">✓ Sage Intacct Certified Integration</div>
        <div class="int-card-icon">📊</div>
        <div class="int-card-title">ADP Workforce Now<br>for Sage Intacct</div>
        <div class="int-card-body">ADP and Sage Intacct have a certified integration that flows employee data, payroll journal entries, time, and expense reimbursements directly into Sage Intacct's GL. Data shared securely between systems with no manual re-keying required.</div>
        <div class="int-feats">
          <div class="int-feat"><span class="int-check si">✓</span>Payroll journal entries pushed from ADP GL Interface to Sage Intacct GL automatically</div>
          <div class="int-feat"><span class="int-check si">✓</span>Employee data changes — new hires and terminations — pushed to Sage Intacct records</div>
          <div class="int-feat"><span class="int-check si">✓</span>Expense reimbursements synced for complete visibility</div>
          <div class="int-feat"><span class="int-check si">✓</span>Dimensions including Project and Task supported for accurate labor cost allocation</div>
          <div class="int-feat"><span class="int-check si">✓</span>Works across all Sage Intacct verticals: Professional Services, Nonprofits, Healthcare, and more</div>
        </div>
      </div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:24px">
      <div style="background:var(--white);border:1px solid var(--stone-mid);border-radius:12px;padding:22px;text-align:center"><div style="font-family:var(--serif);font-size:38px;font-weight:400;color:var(--teal);line-height:1;margin-bottom:6px">2.5–3%</div><div style="font-size:12px;font-weight:600;color:var(--ink);margin-bottom:4px">Reduction in payroll error rate</div><div style="font-size:12px;color:var(--muted);font-weight:300;line-height:1.55">From integrating time and attendance with payroll</div></div>
      <div style="background:var(--white);border:1px solid var(--stone-mid);border-radius:12px;padding:22px;text-align:center"><div style="font-family:var(--serif);font-size:38px;font-weight:400;color:var(--teal);line-height:1;margin-bottom:6px">4–5 hrs</div><div style="font-size:12px;font-weight:600;color:var(--ink);margin-bottom:4px">Saved per manager per week</div><div style="font-size:12px;color:var(--muted);font-weight:300;line-height:1.55">By automating scheduling systems</div></div>
      <div style="background:var(--white);border:1px solid var(--stone-mid);border-radius:12px;padding:22px;text-align:center"><div style="font-family:var(--serif);font-size:38px;font-weight:400;color:var(--teal);line-height:1;margin-bottom:6px">12–13%</div><div style="font-size:12px;font-weight:600;color:var(--ink);margin-bottom:4px">HR time saved on leave management</div><div style="font-size:12px;color:var(--muted);font-weight:300;line-height:1.55">By automating leave management processes</div></div>
    </div>
  </div>
</section>

<section class="who-section">
  <div class="inner">
    <div class="sec-ey">Who It's For</div>
    <h2 class="sec-title">Mid-sized businesses that need<br><em>HR, payroll, and ERP connected.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">ADP Workforce Now is built for organizations with 50 to 999 employees. Any business running Acumatica or Sage Intacct that also needs a best-in-class HCM platform is the right fit.</p>
    <div class="who-grid">
      <div class="who-card"><div class="who-card-icon">🏭</div><div class="who-card-title">Manufacturers &amp; Distributors</div><div class="who-card-body">Running Acumatica for operations and needing payroll, time tracking, and benefits to connect directly to the GL and project accounting — without a separate HR system that doesn't talk to the ERP.</div></div>
      <div class="who-card"><div class="who-card-icon">💼</div><div class="who-card-title">Professional Services Firms</div><div class="who-card-body">Using Sage Intacct for financial management and needing labor costs, time data, and expense reimbursements to flow to project accounting automatically — not through a manual import at month-end.</div></div>
      <div class="who-card"><div class="who-card-icon">🤝</div><div class="who-card-title">Nonprofits</div><div class="who-card-body">Managing headcount, benefits, and payroll across programs and locations on Sage Intacct. Labor costs allocated to the right funds and grants automatically when the ADP integration is configured correctly.</div></div>
      <div class="who-card"><div class="who-card-icon">🏥</div><div class="who-card-title">Healthcare Organizations</div><div class="who-card-body">Multi-location healthcare organizations needing a compliant HR and payroll platform that connects to Sage Intacct financial management — with employee data and payroll costs flowing to the right entities and locations.</div></div>
      <div class="who-card"><div class="who-card-icon">🏗️</div><div class="who-card-title">Construction &amp; Field Service</div><div class="who-card-body">Running Acumatica for job costing and field operations. Labor costs from ADP payroll flow directly to Acumatica job cost records — project and task fields passed automatically with every payroll run.</div></div>
      <div class="who-card"><div class="who-card-icon">💻</div><div class="who-card-title">SaaS &amp; Technology Companies</div><div class="who-card-body">Growing companies on Sage Intacct managing headcount costs against ARR and burn. ADP Workforce Now connects payroll and benefits to the financial data investors and boards need to see together.</div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why Talk to SOS About ADP</div>
      <h2 class="wc-title">One partner.<br><em>Both sides of the connection.</em></h2>
      <p class="wc-body">SOS is an authorized ADP Workforce Now partner and your Acumatica or Sage Intacct implementation expert. <strong>One firm for your HR and payroll platform, your ERP, and everything that connects them.</strong></p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Authorized ADP Workforce Now partner</div>
        <div class="wc-point"><span class="wc-check">✓</span>We configure the Acumatica or Sage Intacct side of the integration</div>
        <div class="wc-point"><span class="wc-check">✓</span>GL mappings and dimensions matched to your chart of accounts</div>
        <div class="wc-point"><span class="wc-check">✓</span>Testing and validation before go-live — so the first payroll run posts correctly</div>
        <div class="wc-point"><span class="wc-check">✓</span>One call for anything that falls between ADP and your ERP</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See the connected HR + ERP solution.</div>
        <div class="wcc-body">We'll show you how ADP Workforce Now connects to your specific ERP setup and what it takes to get the integration right.</div>
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
      <div class="rescue-ey">Already using ADP Workforce Now?</div>
      <h3 class="rescue-title">Live but payroll still posts manually to your ERP — that's fixable.</h3>
      <p class="rescue-body">Many organizations have ADP Workforce Now running alongside Acumatica or Sage Intacct without the integration ever being properly configured. Every payroll run is still a manual GL import. Employee data is still updated in two places. The integration exists — it just wasn't set up. A No-Cost Assessment tells you what's missing and what it takes to connect them properly.</p>
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
      <div class="final-ey">Ready to connect HR and finance?</div>
      <h2 class="final-title">ADP Workforce Now,<br><em>configured with your ERP.</em></h2>
      <p class="final-body">Whether you're evaluating ADP Workforce Now for the first time or need the integration to your ERP properly configured, SOS has the expertise on both sides of the connection.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/solutions/acumatica')); ?>" class="btn-out">Explore Acumatica →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your HR, payroll, and ERP setup — and what a connected solution would look like for your organization.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current HR and payroll workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> ERP integration gap assessment</div>
        <div class="ac-item"><span class="ac-check">✓</span> ADP Workforce Now fit and configuration scope</div>
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
