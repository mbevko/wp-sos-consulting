<?php
/*
 * Template Name: Acumatica General Business
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag"><div class="hero-tag-dot"></div><span class="hero-tag-text">Acumatica · General Business Edition</span></div>
      <h1>Your financials and your<br>operations should be<br><em>working from the same data.</em></h1>
      <p class="hero-sub">Most growing businesses hit the same wall: <strong>accounting lives in one system, customer data in another, and nobody has a clear picture until month-end.</strong> Acumatica General Business Edition connects them — financials, CRM, project accounting, and reporting in one cloud platform.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#capabilities" class="btn-ghost">See the Capabilities ↓</a>
      </div>
      <div class="hero-calc-link">Not ready for a demo? <a href="#calc-section">Run the numbers first →</a></div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Full financial management suite</div><div class="hs-body">GL, AP, AR, cash management, fixed assets, multi-currency, multi-entity — all native, all connected</div></div></div>
          <div class="hero-stat"><div class="hs-icon">👥</div><div><div class="hs-title">Native CRM — connected to your financials</div><div class="hs-body">Leads, opportunities, cases, and customer history connected to the same data as your invoices and collections</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📋</div><div><div class="hs-title">Project accounting built in</div><div class="hs-body">Track costs, budgets, and profitability by project — not just by department or cost center</div></div></div>
          <div class="hero-stat"><div class="hs-icon">👥</div><div><div class="hs-title">Unlimited users — no per-seat cost</div><div class="hs-body">Every employee accesses the system without adding to your annual software bill</div></div></div>
        </div>
      </div>
      <div class="hero-cta-strip">
        <div class="hcs-text">See it configured for your business</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="hcs-btn">Schedule a Demo →</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions')); ?>">Solutions</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions/acumatica')); ?>">Acumatica Cloud ERP</a><span class="bc-sep">/</span>
  <span class="bc-cur">General Business Edition</span>
</div></div>

<section class="tabbed-caps" id="capabilities">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">One platform for your finances,<br><em>your customers, and your projects.</em></h2>
    <p class="tc-desc">The General Business Edition gives growing organizations a complete financial and operational foundation — without the complexity of industry-specific production or warehouse modules. Click any tab to explore.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'financials')"><span class="tab-btn-icon">📊</span><span>Financial Management</span></button>
      <button class="tab-btn" onclick="switchTab(this,'crm')"><span class="tab-btn-icon">👥</span><span>CRM &amp; Customer Management</span></button>
      <button class="tab-btn" onclick="switchTab(this,'projects')"><span class="tab-btn-icon">📋</span><span>Project Accounting</span></button>
      <button class="tab-btn" onclick="switchTab(this,'reporting')"><span class="tab-btn-icon">📈</span><span>Reporting &amp; AI</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-financials">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Financial Management</div>
            <h3 class="tp-title">Your complete financial foundation.<br>Automated end to end.</h3>
            <p class="tp-body">General ledger, accounts payable, accounts receivable, cash management, tax management, advanced expense management, and time management — all in one connected system. Automate the manual processes that consume your finance team's time and close the month faster.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>General Ledger with automated posting</strong> — Multi-book accounting with automated subledger posting. Multi-currency, multi-entity, and deferred/recurring revenue available as add-ons.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AP and AR automation</strong> — Accounts Payable with AP Document Recognition, Accounts Receivable with credit management and collections. Acumatica Payments included. Bank Feeds available as an add-on.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Cash Management</strong> — Track cash positions in real time across accounts and entities. Bank Feeds (automatic bank transaction sync) available as an add-on.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Fixed Assets and Tax Management</strong> — Manage asset lifecycles and depreciation schedules. Handle tax compliance with workflow-driven approvals and multi-entity support.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Month-end close that actually closes</div><div class="tp-stat-body">Automated posting, workflow-driven approvals, and real-time subledger reconciliation mean month-end is a scheduled process — not a scramble.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏢</div><div class="tp-stat-title">Multi-entity accounting in one system</div><div class="tp-stat-body">Intercompany accounting (add-on), consolidated reporting, and entity-level visibility — manage multiple legal entities without maintaining separate systems.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💳</div><div class="tp-stat-title">Collections that run themselves</div><div class="tp-stat-body">Automated dunning, credit limit enforcement, and collections dashboards reduce DSO without your team manually tracking overdue accounts.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-crm">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">CRM &amp; Customer Management</div>
            <h3 class="tp-title">Your customer data and your<br>financial data in the same system.</h3>
            <p class="tp-body">Acumatica's CRM is native — not a third-party integration to maintain. Sales Force Automation and Marketing Automation are included. Service &amp; Support Case Management, Customer Self-Service Portal, and the HubSpot Connector are available as add-ons.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Sales Force Automation</strong> — Leads, opportunities, activities, and quotes managed in the same system as your invoices. Convert opportunities to orders without re-entering data.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Marketing Automation</strong> — Campaign management with expense tracking, lead source attribution, and ROI measurement connected directly to sales outcomes.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Service &amp; Support Case Management</strong> — Track customer cases, measure response times, and manage service contracts with full visibility into customer financials. Available as an add-on.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Customer Self-Service Portal</strong> — Customers view invoices, make payments, submit support requests, and check order status without calling your team. Available as an add-on.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">Native CRM — not an integration to maintain</div><div class="tp-stat-body">Most CRM integrations break during upgrades and require manual reconciliation between systems. Acumatica's CRM is built in — same database, same data, always in sync.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">360° customer view across sales and finance</div><div class="tp-stat-body">Sales sees outstanding invoices and credit limits before quoting. Finance sees pipeline and expected cash. Both teams work from the same live data — without emailing each other.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💬</div><div class="tp-stat-title">Microsoft Teams and HubSpot connected</div><div class="tp-stat-body">Native Microsoft Teams integration keeps communication connected to CRM records. HubSpot Connector available as an add-on, syncing contacts and activities bidirectionally.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-projects">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Project Accounting</div>
            <h3 class="tp-title">Know whether your projects<br>are actually profitable.</h3>
            <p class="tp-body">Track costs, revenue, and budgets by project in real time — not just by department or cost center. From professional services firms billing by the hour to companies tracking capital projects, Project Accounting gives you the visibility to manage what's actually happening.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Real-time project cost tracking</strong> — Labor, materials, and services tracked against original and revised budgets as costs are incurred — not at month-end.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Advanced billing rules</strong> — Bill by time and materials, fixed price, milestone, cost plus, or retainer. Complex billing rules automated so no billable work slips through.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Time and expense management</strong> — Remote teams submit time and expenses from any device. Approvals routed automatically. Billable vs. non-billable tracked without manual categorization.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Revenue recognition compliance</strong> — Deferred and recurring revenue recognition automated. Contract management and compliance built in — not a separate tool.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📈</div><div class="tp-stat-title">Project profitability in real time</div><div class="tp-stat-body">Actual costs vs. budget visible as they happen — not after the project closes. Catch margin problems early enough to do something about them.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⏱️</div><div class="tp-stat-title">Time capture from anywhere</div><div class="tp-stat-body">iOS and Android time entry, with workflow-driven approvals. Billable time captured at the source — no end-of-week reconstruction from memory or calendar.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📝</div><div class="tp-stat-title">From opportunity to invoice in one system</div><div class="tp-stat-body">CRM opportunity converts to a project. Time and expenses post against the project. Invoice generates from actuals. No re-entering data between CRM, project, and billing.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-reporting">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Reporting, Dashboards &amp; AI</div>
            <h3 class="tp-title">Answers to the questions<br>you're actually asking.</h3>
            <p class="tp-body">Role-based dashboards built on live data — not exported to Excel, not refreshed nightly. Every person in your organization sees the information relevant to their role, updated as transactions happen. AI anomaly detection flags issues before they become problems.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Acumatica Reporting and Generic Inquiries</strong> — Build custom reports and inquiries without IT involvement. Financial statements, operational reports, and ad-hoc queries all accessible from the same platform.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Role-based dashboards on live data</strong> — CFO sees cash position and DSO. Sales manager sees pipeline and close rates. Operations sees project status and capacity. All live, all accurate.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI Assistant and anomaly detection</strong> — Ask questions in plain language and get answers from your data directly. AI flags unusual transactions and patterns before your team discovers them manually.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Microsoft Teams integration</strong> — Alerts, approvals, and financial summaries delivered directly in Teams. Approvals completed without logging into Acumatica.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">Ask your ERP a question in plain language</div><div class="tp-stat-body">Acumatica's AI Assistant answers operational questions directly from your data — no SQL, no custom reports, no waiting for IT. Available in 2026 R1.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">No more Excel as the reporting layer</div><div class="tp-stat-body">When your ERP requires exporting to Excel to understand what's happening, you're always working with yesterday's data. Acumatica's dashboards run on live transactions.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⚠️</div><div class="tp-stat-title">AI anomaly detection — live in 2026 R1</div><div class="tp-stat-body">Unusual transactions, variance spikes, and pattern breaks flagged automatically — so your team investigates the right things instead of reviewing everything manually.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="calc-section" id="calc-section">
  <div class="calc-sec-inner">
    <div class="calc-top">
      <div class="calc-left">
        <div class="calc-eyebrow">Free Tool for Growing Businesses</div>
        <h2 class="calc-title">What are your manual processes <em>actually costing you?</em></h2>
        <p class="calc-body">Most growing businesses know they have inefficiency. Very few have put a dollar figure on it. This tool does that in under 3 minutes — using your own numbers, not industry averages.</p>
        <div class="calc-proof">
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Manual accounting and reconciliation</strong> — how many hours does your finance team spend on journal entries, reconciliations, and corrections that an automated system would eliminate?</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Excel-based reporting</strong> — pulling data, building reports, and emailing spreadsheets to management when live dashboards would give them self-service access.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Month-end close extra time</strong> — the manual reconciliations, corrections, and subledger tie-outs that slow your close compared to an integrated system.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>CRM data entry and maintenance</strong> — keeping customer records updated manually, reconciling between your CRM and your accounting system, chasing data from sales for forecasts.</div></div>
        </div>
      </div>
      <div>
        <div class="calc-card">
          <span class="calc-card-icon">🧮</span>
          <div class="calc-card-label">ERP Cost of Inaction Calculator</div>
          <div class="calc-card-title">See your estimated savings <em>before you talk to anyone.</em></div>
          <div class="calc-card-body">Eight sliders. Three minutes. A specific dollar figure — based on your hours, your team, your operation.</div>
          <a href="<?php echo esc_url(home_url('/roi-calculator-general-business')); ?>" class="calc-card-btn">🧮 Run the Calculator →</a>
          <div class="calc-card-note">Free · No spreadsheet required · Results emailed to you instantly</div>
        </div>
      </div>
    </div>
    <div class="calc-stats">
      <div class="cs-stat"><div class="cs-stat-num">20h</div><div class="cs-stat-label">Saved per week on average</div><div class="cs-stat-sub">By automating manual processes across accounting, reporting, and operations</div></div>
      <div class="cs-stat"><div class="cs-stat-num">70%</div><div class="cs-stat-label">Reduction in month-end close time</div><div class="cs-stat-sub">When automated posting and workflow-driven approvals replace manual reconciliation</div></div>
      <div class="cs-stat"><div class="cs-stat-num">65%</div><div class="cs-stat-label">Reduction in reporting time</div><div class="cs-stat-sub">When live dashboards replace exported spreadsheets for management reporting</div></div>
    </div>
  </div>
</section>

<section class="video-section">
  <div class="video-inner">
    <div class="video-left">
      <div class="vid-ey">See it in action</div>
      <h2 class="vid-title">Acumatica Financial Management — <em>a look inside the platform.</em></h2>
      <p class="vid-body">Watch the official Acumatica financial management overview — GL, AP, AR, cash management, project accounting, and reporting in one connected system.</p>
      <div class="vid-links">
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">GL and Financial Reporting</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Multicompany Financials</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Revenue Management</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Accounts Payable</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Cash Management</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Project Accounting</span></div>
      </div>
    </div>
    <div>
      <div class="video-placeholder">
        <div class="vp-play">▶</div>
        <div class="vp-title">Acumatica Financial Management Overview</div>
        <div class="vp-label">Contact SOS to see a live demo configured for your business</div>
      </div>
      <div style="margin-top:10px;font-size:11px;color:rgba(255,255,255,.35);text-align:center">Want a demo built for your business? <a href="<?php echo esc_url(home_url('/assessment')); ?>" style="color:rgba(255,255,255,.55);text-decoration:underline">Talk to SOS →</a></div>
    </div>
  </div>
</section>

<section class="mfg-expertise">
  <div class="inner">
    <div class="mfg-exp-header">
      <div>
        <div class="sec-ey" style="color:rgba(255,255,255,.5)">Why SOS for General Business</div>
        <h2 class="mfg-exp-title">We configure Acumatica around<br>how your business actually runs.</h2>
        <p class="mfg-exp-sub">The General Business Edition is the most flexible edition Acumatica offers. That flexibility is only valuable if the system is configured correctly — which means understanding your chart of accounts, your billing model, your reporting needs, and your team's workflows before touching a setting.</p>
      </div>
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="mfg-exp-cta-btn">Book a Free Assessment →</a>
    </div>
    <div class="mfg-exp-grid">
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">01</div><div class="mfg-exp-card-icon">📊</div><div class="mfg-exp-card-title">Chart of accounts and financial structure that makes sense</div><div class="mfg-exp-card-body">A generic COA from a textbook doesn't reflect how your business is actually organized. We build it around your entities, cost centers, and reporting needs from day one.</div><div class="mfg-exp-card-tag">Financial Structure</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">02</div><div class="mfg-exp-card-icon">📝</div><div class="mfg-exp-card-title">Billing and revenue recognition configured for your model</div><div class="mfg-exp-card-body">Time and materials, fixed fee, milestone, retainer, or subscription — billing rules configured around how you actually charge clients, not how the demo shows it.</div><div class="mfg-exp-card-tag">Billing &amp; Revenue</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">03</div><div class="mfg-exp-card-icon">👥</div><div class="mfg-exp-card-title">CRM that your sales team will actually use</div><div class="mfg-exp-card-body">CRM adoption fails when the system isn't configured for your sales process. We build pipelines, stages, and workflows around how your team actually sells.</div><div class="mfg-exp-card-tag">CRM &amp; Sales</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">04</div><div class="mfg-exp-card-icon">📈</div><div class="mfg-exp-card-title">Dashboards your leadership team will open every morning</div><div class="mfg-exp-card-body">Cash position, AR aging, pipeline, project margin — built for the decisions your leadership team actually makes, not one-size-fits-all reports nobody opens.</div><div class="mfg-exp-card-tag">Reporting &amp; Visibility</div></div>
    </div>
    <div class="mfg-exp-stats">
      <div class="mfg-exp-stat"><div class="mfg-exp-stat-num">99.5%</div><div class="mfg-exp-stat-label">Implementation success rate</div></div>
      <div class="mfg-exp-stat-div"></div>
      <div class="mfg-exp-stat"><div class="mfg-exp-stat-num">10.5yr</div><div class="mfg-exp-stat-label">Average client relationship</div></div>
      <div class="mfg-exp-stat-div"></div>
      <div class="mfg-exp-stat"><div class="mfg-exp-stat-num">&lt;1%</div><div class="mfg-exp-stat-label">Billing disputes</div></div>
      <div class="mfg-exp-stat-div"></div>
      <div class="mfg-exp-stat" style="flex:2;text-align:left;padding-left:40px"><div style="font-size:13px;color:rgba(255,255,255,.55);font-weight:300;line-height:1.65;max-width:400px">Senior partners on every engagement. The people who scope your project configure it, migrate your data, and train your team.</div></div>
    </div>
  </div>
</section>

<section class="mfg-types">
  <div class="inner">
    <div class="sec-ey acu">Who it's built for</div>
    <h2 class="sec-title">One edition. <em>Many kinds of growing businesses.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:600px;margin-top:4px;margin-bottom:40px">Select your business type below.</p>
    <div class="mfg-type-nav">
      <button class="mtype-btn active" onclick="switchType(this,'services')"><span class="mtype-icon">💼</span><span>Professional Services</span></button>
      <button class="mtype-btn" onclick="switchType(this,'nonprofit')"><span class="mtype-icon">🤝</span><span>Nonprofit &amp; Mission-Driven</span></button>
      <button class="mtype-btn" onclick="switchType(this,'multientity')"><span class="mtype-icon">🏢</span><span>Multi-Entity</span></button>
      <button class="mtype-btn" onclick="switchType(this,'software')"><span class="mtype-icon">💻</span><span>Software &amp; Tech</span></button>
      <button class="mtype-btn" onclick="switchType(this,'growing')"><span class="mtype-icon">📈</span><span>Growing SMBs</span></button>
    </div>
    <div class="mtype-panels">

      <div class="mtype-panel active" id="mtype-services">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Professional Services</div>
            <h3 class="mtype-title">You sell expertise and time.<br>Every hour needs to count.</h3>
            <p class="mtype-body">Consulting firms, agencies, engineering companies, and managed service providers. Your revenue is project-based, your costs are primarily labor, and your profitability depends on billing accurately and capturing every billable hour.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where professional services firms typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Billable hours that slip through because time isn't captured at the moment it's spent</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Project profitability only visible after the engagement closes — when it's too late to act</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Revenue recognition done manually in spreadsheets — creating month-end delays and compliance risk</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Mobile time capture with automated approvals</div><div class="mtype-cap-body">Time entered from any device, approved automatically by project and role. Billable vs. non-billable tracked at source — no end-of-week reconstruction.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Real-time project cost vs. budget visibility</div><div class="mtype-cap-body">Actual hours and costs tracked against budget as they happen. Project managers see margin in real time — not after the engagement is already over budget.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Automated revenue recognition</div><div class="mtype-cap-body">Deferred and recurring revenue recognition available as add-ons. When configured, revenue recognizes per your contract rules — no manual calculation at month-end.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-nonprofit">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Nonprofit &amp; Mission-Driven Organizations</div>
            <h3 class="mtype-title">Accountable to your mission.<br>And to your board.</h3>
            <p class="mtype-body">Nonprofits, foundations, arts organizations, and mission-driven businesses. Your financial reporting requirements are unique — fund accounting, grant tracking, donor management, and board-ready reporting all at once.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where nonprofits typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Fund and grant accounting that requires tracking restricted vs. unrestricted revenue separately</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Board and funder reporting that takes days to prepare manually each quarter</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Expense approvals without workflow — every check requires a manual review chain</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Multi-entity and fund accounting</div><div class="mtype-cap-body">Track restricted and unrestricted funds separately with sub-accounts and project codes — reporting by fund, program, and grant without maintaining separate books.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Board-ready financial reporting</div><div class="mtype-cap-body">Custom financial statements, budget vs. actual by fund, and program-level profitability — generated from live data without a manual assembly process.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Workflow-driven expense approvals</div><div class="mtype-cap-body">Configurable approval workflows by amount, department, or fund. Advanced Expense Management automates the entire process from submission through payment.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-multientity">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Multi-Entity Organizations</div>
            <h3 class="mtype-title">Multiple entities.<br>One consolidated view.</h3>
            <p class="mtype-body">Holding companies, franchise groups, private equity-backed businesses, and any organization running two or more legal entities. You need consolidated reporting without maintaining separate systems or manually reconciling between them.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where multi-entity organizations typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Consolidated financial statements that require manually aggregating data from multiple systems</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Intercompany transactions that create reconciliation work at every period close</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Each entity on a different system — creating data silos and no unified view of performance</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Multi-entity accounting in a single platform</div><div class="mtype-cap-body">All entities in one Acumatica instance. Each entity maintains its own books, chart of accounts, and reporting — while consolidated statements are available in real time.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Automated intercompany accounting</div><div class="mtype-cap-body">Intercompany transactions generate the corresponding entries in both entities automatically — no manual journal entries, no period-end reconciliation between systems.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Multi-currency and global financials</div><div class="mtype-cap-body">Multi-currency transactions with automated exchange rate management. Acumatica Global Financials supports multi-national operations from the same platform.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-software">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Software &amp; Technology Companies</div>
            <h3 class="mtype-title">Recurring revenue. Complex billing.<br>Fast growth.</h3>
            <p class="mtype-body">SaaS companies, software publishers, and technology service providers. Subscription billing, deferred revenue recognition, usage-based pricing, and rapid scaling create financial complexity that outgrows basic accounting systems quickly.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where software companies typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Deferred revenue tracked in spreadsheets — creating audit risk and month-end delays</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Subscription billing that doesn't match actual customer agreements</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Scaling to new markets or business models on a system that wasn't built for flexibility</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Deferred and recurring revenue automation</div><div class="mtype-cap-body">Revenue recognition schedules automated through the Deferred Revenue add-on. Waterfall visible in real time — no spreadsheet, no manual calculation.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Subscription and contract management</div><div class="mtype-cap-body">Recurring billing, renewal management, and contract-level reporting available through the Recurring Revenue Management add-on module. Designed for subscription businesses with complex billing needs.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Scales without re-implementation</div><div class="mtype-cap-body">Add entities, currencies, users, or business lines without a new implementation. Acumatica's consumption-based pricing means growth doesn't trigger a licensing crisis.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-growing">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Growing Small &amp; Mid-Size Businesses</div>
            <h3 class="mtype-title">You've outgrown QuickBooks.<br>You're not ready for SAP.</h3>
            <p class="mtype-body">Companies between $5M and $100M in revenue that have hit the ceiling of their current accounting system. You need more than basic bookkeeping but less than a full enterprise ERP — and you need it to grow with you.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where growing SMBs typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Outgrown QuickBooks or Sage 50 but intimidated by the complexity and cost of enterprise ERP</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Running too many disconnected systems — accounting, CRM, project management, and payroll all separate</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Month-end close that takes two weeks because data lives in too many places</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Right-sized for where you are and where you're going</div><div class="mtype-cap-body">Full financial management, CRM, and project accounting in one system — without the complexity or cost of SAP or Oracle. Scales as you grow without re-implementation.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">One system replaces five</div><div class="mtype-cap-body">Accounting, CRM, project tracking, expense management, and payroll connected in one platform. No more reconciling data between disconnected tools.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Unlimited users — no per-seat surprises</div><div class="mtype-cap-body">Every new hire accesses the system without adding to your software bill. Acumatica's consumption-based pricing means your cost doesn't spike every time you grow.</div></div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="process">
  <div class="inner">
    <div class="sec-ey">How We Work</div>
    <h2 class="sec-title">What to expect <em>from first call to long after go-live.</em></h2>
    <div style="font-size:14px;color:var(--muted);font-weight:300;margin-top:4px;max-width:520px">Every SOS engagement follows the same sequence. No surprises, no hand-offs.</div>
    <div class="process-steps">
      <div class="ps"><div class="ps-num">1</div><div class="ps-title">No-Cost Assessment</div><div class="ps-desc">60 minutes. We review your current system, workflows, and gaps — and give you an honest recommendation.</div></div>
      <div class="ps"><div class="ps-num">2</div><div class="ps-title">Project Scoping</div><div class="ps-desc">Full scope before pricing. Deliverables, timeline, and team defined before you sign.</div></div>
      <div class="ps"><div class="ps-num">3</div><div class="ps-title">Implementation</div><div class="ps-desc">Senior-led configuration, data migration, and training. Same team from scoping to go-live.</div></div>
      <div class="ps"><div class="ps-num">4</div><div class="ps-title">Ongoing Support</div><div class="ps-desc">Still there when the edge cases appear. Support and optimization long after go-live.</div></div>
    </div>
  </div>
</section>

<section class="rescue">
  <div class="rescue-inner">
    <div class="rescue-icon">🔧</div>
    <div class="rescue-content">
      <div class="rescue-ey">Already on Acumatica General Business?</div>
      <h3 class="rescue-title">Live but month-end still feels like a crisis — that's fixable.</h3>
      <p class="rescue-body">Most Acumatica General Business problems aren't platform failures. They're chart of accounts that were set up generically, billing rules that don't match how you actually charge, or workflows that were never configured properly. A No-Cost Assessment tells you what's wrong and what it would take to fix it.</p>
    </div>
    <div class="rescue-cta">
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="rescue-btn">Get a Free Diagnosis →</a>
      <div class="rescue-note">60 min · Senior partner-led · No pitch</div>
      <a href="#calc-section" class="rescue-calc-link">Or run the Cost of Inaction Calculator first →</a>
    </div>
  </div>
</section>

<section class="final">
  <div class="final-grid">
    <div>
      <div class="final-ey">Ready to see it?</div>
      <h2 class="final-title">A demo built around<br><em>your business model.</em></h2>
      <p class="final-body">Every SOS demo is configured around how your business actually operates — your billing model, your entities, your reporting needs. You'll see Acumatica the way your team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/resources/erp-selection-guide')); ?>" class="btn-out">Take the ERP Selection Guide →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current system, your gaps, and whether Acumatica General Business Edition is the right fit.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current system and workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Edition fit recommendation for your business</div>
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
function switchType(btn,typeId){document.querySelectorAll('.mtype-btn').forEach(b=>b.classList.remove('active'));btn.classList.add('active');document.querySelectorAll('.mtype-panel').forEach(p=>p.classList.remove('active'));document.getElementById('mtype-'+typeId).classList.add('active');}
</script>
<?php get_footer(); ?>
