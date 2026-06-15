<?php
/*
 * Template Name: Sage Intacct
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag"><div class="hero-tag-dot"></div><span class="hero-tag-text">Sage Intacct · Cloud Financial Management</span></div>
      <h1>Your financial data should<br>tell the whole story.<br><em>Not just the books.</em></h1>
      <p class="hero-sub">Most finance teams spend their time on the books. <strong>Sage Intacct gives them their time back</strong> — and the real-time visibility to actually use it.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#capabilities" class="btn-ghost">See the Capabilities ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">🏆</div><div><div class="hs-title">#1 in customer satisfaction — G2, 9 years running</div><div class="hs-body">Rated #1 in 11 categories and leader in over 41 categories on G2. The only AICPA preferred financial management solution.</div></div></div>
          <div class="hero-stat"><div class="hs-icon">⚡</div><div><div class="hs-title">Close up to 90% faster with automation</div><div class="hs-body">Time-saving automation eliminates manual reconciliations, journal entries, and spreadsheet-based close processes</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Multi-dimensional reporting — no Excel required</div><div class="hs-body">Real-time visibility by department, location, project, fund, or any dimension you define — without building a spreadsheet</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤖</div><div><div class="hs-title">AI built for finance teams</div><div class="hs-body">Intelligent GL scans thousands of transactions in minutes to detect anomalies. AI Time agent auto-populates timesheets from calendars and emails.</div></div></div>
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
  <span class="bc-cur">Sage Intacct</span>
</div></div>

<div class="si-stats">
  <div class="si-stats-inner">
    <div class="si-stat"><div class="si-stat-num">90%</div><div class="si-stat-label">Faster monthly close</div><div class="si-stat-sub">With time-saving automation</div></div>
    <div class="si-stat"><div class="si-stat-num">30,000+</div><div class="si-stat-label">Finance teams trust Sage Intacct</div><div class="si-stat-sub">Across industries and geographies</div></div>
    <div class="si-stat"><div class="si-stat-num">#1</div><div class="si-stat-label">Customer satisfaction — G2</div><div class="si-stat-sub">9 consecutive years</div></div>
    <div class="si-stat"><div class="si-stat-num">AICPA</div><div class="si-stat-label">Only preferred solution</div><div class="si-stat-sub">First and only AICPA-endorsed FM platform</div></div>
  </div>
</div>

<section class="tabbed-caps" id="capabilities">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Core Capabilities</div>
    <h2 class="sec-title">Built for finance.<br><em>Designed to give your team their time back.</em></h2>
    <p class="tc-desc">Sage Intacct starts with a powerful financial foundation and extends across every function your finance team needs — from the Intelligent GL through to multi-entity consolidations, revenue recognition, and real-time reporting.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'financials')"><span class="tab-btn-icon">📊</span><span>Core Financials</span></button>
      <button class="tab-btn" onclick="switchTab(this,'reporting')"><span class="tab-btn-icon">📈</span><span>Reporting &amp; Dashboards</span></button>
      <button class="tab-btn" onclick="switchTab(this,'projects')"><span class="tab-btn-icon">📋</span><span>Project Accounting</span></button>
      <button class="tab-btn" onclick="switchTab(this,'ai')"><span class="tab-btn-icon">🤖</span><span>AI &amp; Automation</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-financials">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Core Financials</div>
            <h3 class="tp-title">The Intelligent General Ledger.<br>The foundation everything is built on.</h3>
            <p class="tp-body">Sage Intacct's dimensional GL is what separates it from every other accounting system. Instead of a rigid chart of accounts, you define the dimensions that matter to your business — department, location, project, fund, entity, region — and every transaction is tagged across all of them simultaneously.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Dimensional General Ledger</strong> — Tag every transaction across multiple dimensions simultaneously. Report any way you need without restructuring your chart of accounts.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Accounts Payable with AI automation</strong> — AI-driven bill entry and payment processing automation. AP Document Recognition reduces manual entry. Exception management replaces manual review of every invoice.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Accounts Receivable</strong> — Eliminate AR inefficiencies, accelerate collections, and improve cash flow. Automated dunning, payment processing, and collections workflows built in.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Multi-entity consolidations</strong> — Push-button consolidations across multiple entities, currencies, and locations in minutes. Automated currency conversions, intercompany eliminations, and local tax reporting.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🧠</div><div class="tp-stat-title">Dimensions — the heart of Intacct</div><div class="tp-stat-body">Most ERPs require you to restructure your chart of accounts every time your reporting needs change. Intacct's dimensions let you report across any combination of attributes without touching your COA.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Close 66% faster</div><div class="tp-stat-body">Automated posting, workflow-driven approvals, AI anomaly detection, and real-time reconciliation replace the manual steps that make month-end close a crisis. It becomes a scheduled event.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏢</div><div class="tp-stat-title">Multi-entity in minutes, not days</div><div class="tp-stat-body">Organizations with multiple entities get push-button consolidations with automated intercompany eliminations. What used to take a week of spreadsheet work takes minutes.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-reporting">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Reporting, Dashboards &amp; BI</div>
            <h3 class="tp-title">Real-time visibility.<br>From any angle. Without Excel.</h3>
            <p class="tp-body">Sage Intacct's reporting is built on the dimensional GL — which means every report you run is live, multi-dimensional, and drillable to the source transaction. No export. No pivot table. No waiting for finance to build it.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Real-time dashboards on live data</strong> — Role-based dashboards for executives, controllers, project managers, and operations — all updating in real time as transactions post.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Interactive Visual Explorer</strong> — Drill into financial data visually with point-and-click exploration. Spot trends, investigate variances, and answer questions without waiting for a custom report.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Collaborate</strong> — Communicate directly within financial reports and dashboards. Annotate, question, and resolve issues in context — without sending reports to email and losing the thread.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Budget and Planning integration</strong> — Budget vs. actual visible in real time across every dimension. Forecasts updated as the business moves. Scenario planning without rebuilding spreadsheets.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">See your business from any angle</div><div class="tp-stat-body">P&amp;L by service line, project, manager, region, customer type, fund, or entity — all in real time, all drillable to the transaction. The dimension system means the answer to any financial question is already in the system.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔍</div><div class="tp-stat-title">Interactive Visual Explorer</div><div class="tp-stat-body">Point-and-click financial exploration built for non-accountants. Leadership can investigate their own questions without asking finance to build a new report. Finance gets their time back.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💬</div><div class="tp-stat-title">Collaborate inside the numbers</div><div class="tp-stat-body">Questions, annotations, and approvals happen inside the report — not in a separate email chain. The discussion stays connected to the data so context is never lost.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-projects">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Project Accounting &amp; Billing</div>
            <h3 class="tp-title">Own the dollar.<br>From project kick-off to final invoice.</h3>
            <p class="tp-body">Sage Intacct's project accounting is purpose-built for service organizations. Project budgeting, billing, time and expense, resource management, and vendor management — all connected to the same financial data. Revenue leakage becomes visible before it happens.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Project budgeting and cost tracking</strong> — Track labor, materials, and services against original and revised budgets in real time. Catch margin problems while there's still time to act.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Flexible project billing</strong> — Fixed-price, time and materials, cost-plus, milestone, and retainer billing. Billing rates by employee, project, or customer.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Sage Intelligent Time — AI time entry</strong> — AI agent builds accurate timesheets from calendars, emails, and work activity. Reduces manual time entry, stops revenue leakage, and improves project cost accuracy.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Salesforce and PSA integration</strong> — Prebuilt Salesforce CRM integration streamlines quote-to-cash. Open API connects to PSA, resource management, and any other system in your stack.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">💸</div><div class="tp-stat-title">Stop revenue leakage before it happens</div><div class="tp-stat-body">Most professional services firms lose 5–15% of billable time to leakage. Intelligent Time's AI builds timesheets from actual activity so nothing falls through.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⏱️</div><div class="tp-stat-title">Intelligent Time — AI-powered timesheets</div><div class="tp-stat-body">The AI agent pulls from calendars, emails, and work activity to pre-populate timesheets. Staff review and approve rather than reconstruct from memory.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">Quote-to-cash in one connected system</div><div class="tp-stat-body">CRM opportunity converts to a project. Time and expenses post against the project. Invoice generates from actuals with correct terms, amounts, and required data. No re-entry between systems.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-ai">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">AI &amp; Automation</div>
            <h3 class="tp-title">Authentic AI.<br>Built specifically for finance teams.</h3>
            <p class="tp-body">Sage calls it Authentic Intelligence — AI that automates 50–90% of manual work, surfaces anomalies your team would never find manually, and helps finance leaders spend less time on transactions and more time on strategy.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Intelligent GL — AI outlier detection</strong> — Scans thousands of transactions in minutes to identify and flag anomalies for specific action. Continuously audits your numbers so exceptions surface before they become problems.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AP Automation powered by AI</strong> — AI-driven bill entry and exception management. Automate 50–90% of manual AP work — review exceptions rather than every invoice.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Sage Intelligent Time</strong> — AI agent builds accurate timesheets from calendars, emails, and work activity. Designed to stop revenue leakage by capturing billable time that would otherwise go unrecorded.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI accounting assistant</strong> — Ask questions of your financial data in plain language and get answers directly. Automate routine work, uncover insights faster, and spend more time driving performance.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">Automate 50–90% of manual finance work</div><div class="tp-stat-body">Sage's Authentic AI is purpose-built for finance — not a general-purpose AI bolted onto an accounting system. Anomaly detection, AP automation, time capture, and natural language reporting all trained on financial workflows specifically.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⚠️</div><div class="tp-stat-title">Outlier detection that never sleeps</div><div class="tp-stat-body">The Intelligent GL scans every transaction automatically and flags anomalies for review. Duplicate payments, unusual amounts, miscoded entries — caught before close, not during audit.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💬</div><div class="tp-stat-title">Ask your financial data a question</div><div class="tp-stat-body">The AI accounting assistant answers operational and financial questions from your live data in plain language — without SQL, custom reports, or waiting for finance to pull the numbers.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="industries-section">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Industries</div>
    <h2 class="sec-title">Purpose-built for the industries<br><em>SOS serves.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Sage Intacct isn't a generic ERP. It's built with industry-specific functionality, metrics, and reporting for the verticals that need it most.</p>
    <div class="ind-grid">
      <div class="ind-card primary">
        <div class="ind-card-badge">★ Primary Vertical</div>
        <div class="ind-card-icon">💼</div>
        <div class="ind-card-title">Professional Services</div>
        <div class="ind-card-body">Consulting, IT services, agencies, engineering, staffing, and MSPs. Purpose-built for firms that sell expertise and time — AI-powered time capture, flexible project billing, and real-time margin visibility.</div>
        <div class="ind-card-tags"><span class="ind-tag">Project Billing</span><span class="ind-tag">Intelligent Time</span><span class="ind-tag">PSA Integration</span></div>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct/professional-services')); ?>" style="display:inline-flex;align-items:center;gap:5px;margin-top:14px;font-size:13px;font-weight:600;color:var(--teal);text-decoration:none">Learn more →</a>
      </div>
      <div class="ind-card">
        <div class="ind-card-icon">🤝</div>
        <div class="ind-card-title">Nonprofits</div>
        <div class="ind-card-body">The AICPA's only preferred nonprofit accounting platform. Native fund accounting, grant tracking, FASB-compliant financial statements, and dimensional reporting by program, fund, and location.</div>
        <div class="ind-card-tags"><span class="ind-tag">Fund Accounting</span><span class="ind-tag">Grant Tracking</span><span class="ind-tag">FASB Compliant</span></div>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct/nonprofits')); ?>" style="display:inline-flex;align-items:center;gap:5px;margin-top:14px;font-size:13px;font-weight:600;color:var(--teal);text-decoration:none">Learn more →</a>
      </div>
      <div class="ind-card">
        <div class="ind-card-icon">💻</div>
        <div class="ind-card-title">SaaS &amp; Subscription</div>
        <div class="ind-card-body">The only mid-market platform combining subscription billing, revenue recognition, and financial management in one system. 500+ billing models, ASC 606 and IFRS 15 compliance, and 200+ real-time SaaS metrics.</div>
        <div class="ind-card-tags"><span class="ind-tag">ASC 606</span><span class="ind-tag">MRR / ARR</span><span class="ind-tag">500+ Billing Models</span></div>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct/saas')); ?>" style="display:inline-flex;align-items:center;gap:5px;margin-top:14px;font-size:13px;font-weight:600;color:var(--teal);text-decoration:none">Learn more →</a>
      </div>
      <div class="ind-card">
        <div class="ind-card-icon">🏥</div>
        <div class="ind-card-title">Healthcare</div>
        <div class="ind-card-body">HIPAA-compliant financial management for healthcare organizations, medical groups, behavioral health, and specialty practices. Multi-entity consolidations, compliance reporting, and real-time visibility across locations.</div>
        <div class="ind-card-tags"><span class="ind-tag">HIPAA Compliant</span><span class="ind-tag">Multi-Entity</span><span class="ind-tag">Compliance Reporting</span></div>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct/healthcare')); ?>" style="display:inline-flex;align-items:center;gap:5px;margin-top:14px;font-size:13px;font-weight:600;color:var(--teal);text-decoration:none">Learn more →</a>
      </div>
      <div class="ind-card">
        <div class="ind-card-icon">💰</div>
        <div class="ind-card-title">Financial Services</div>
        <div class="ind-card-body">RIAs, family offices, financial planning firms, and insurance organizations. Multi-entity management, fund accounting, complex revenue recognition, and the compliance reporting that financial organizations require.</div>
        <div class="ind-card-tags"><span class="ind-tag">Multi-Entity</span><span class="ind-tag">Fund Accounting</span><span class="ind-tag">Compliance</span></div>
      </div>
    </div>
  </div>
</section>

<section class="vs-section">
  <div class="vs-inner">
    <div class="sec-ey" style="color:var(--sage-green)">Why Sage Intacct</div>
    <h2 class="sec-title">What makes Intacct different<br><em>from every other financial system.</em></h2>
    <div class="vs-grid">
      <div class="vs-left">
        <h3>Built for the CFO<br><em>and the Controller.</em></h3>
        <p>Most ERP systems are built for operations with finance bolted on. Sage Intacct is the opposite — a financial management platform first. That's why the AICPA endorses it. That's why G2 has ranked it #1 in customer satisfaction for nine consecutive years.</p>
        <div class="vs-points">
          <div class="vs-point"><span class="vs-check">✓</span><div><strong>Only AICPA-preferred financial management solution</strong> — The American Institute of CPAs endorses one platform. This is it.</div></div>
          <div class="vs-point"><span class="vs-check">✓</span><div><strong>True cloud — not legacy software on a cloud server</strong> — Born in the cloud. Quarterly updates delivered automatically. No upgrades, no downtime, no IT projects.</div></div>
          <div class="vs-point"><span class="vs-check">✓</span><div><strong>Best-of-breed architecture</strong> — Intacct is designed to be the financial core of your tech stack, connected via open API to best-in-class solutions for CRM, payroll, HR, and operations.</div></div>
          <div class="vs-point"><span class="vs-check">✓</span><div><strong>#1 in customer satisfaction for 9 straight years</strong> — Not a one-year award. A sustained record across 11 categories on G2.</div></div>
          <div class="vs-point"><span class="vs-check">✓</span><div><strong>5x ROI with payback in as little as 6 months</strong> — Customers report measurable return driven by close acceleration, automation, and reduced manual overhead.</div></div>
        </div>
      </div>
      <div class="vs-right">
        <div class="vs-card"><div class="vs-card-icon">🧠</div><div><div class="vs-card-title">Dimensional GL — no other system does this</div><div class="vs-card-body">Tag every transaction across unlimited dimensions simultaneously. Report any way you need without restructuring your chart of accounts. This is the single feature that makes Intacct's reporting better than every competitor.</div></div></div>
        <div class="vs-card"><div class="vs-card-icon">🏆</div><div><div class="vs-card-title">AICPA preferred — the only endorsed platform</div><div class="vs-card-body">The American Institute of CPAs reviewed the market and chose one platform to endorse. For organizations where financial integrity and compliance matter most, this is the signal.</div></div></div>
        <div class="vs-card"><div class="vs-card-icon">🔗</div><div><div class="vs-card-title">Open API — connect everything you use</div><div class="vs-card-body">Native Salesforce integration. Hundreds of pre-built connectors. Open API for everything else. Intacct is the financial hub of your stack — not another silo.</div></div></div>
        <div class="vs-card"><div class="vs-card-icon">📊</div><div><div class="vs-card-title">Industry-specific — not generic ERP</div><div class="vs-card-body">Purpose-built functionality for Professional Services, Nonprofits, SaaS, Healthcare, and more. Not a generic platform trying to serve everyone. Industry-specific metrics, reports, and workflows built in.</div></div></div>
      </div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Sage Intacct</div>
      <h2 class="wc-title">Intacct's power only shows up<br><em>when it's configured correctly.</em></h2>
      <p class="wc-body">Intacct is one of the most powerful financial platforms available — and one of the easiest to underutilize. <strong>We configure it from day one around how your organization actually works.</strong></p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Dimension structure designed around how you actually report</div>
        <div class="wc-point"><span class="wc-check">✓</span>Revenue recognition rules configured for your actual contract models</div>
        <div class="wc-point"><span class="wc-check">✓</span>Project billing setup that reflects how you actually charge clients</div>
        <div class="wc-point"><span class="wc-check">✓</span>Dashboards built for the decisions your leadership team makes</div>
        <div class="wc-point"><span class="wc-check">✓</span>Integration with Salesforce, PSA, or payroll configured before go-live</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Sage Intacct configured for your business.</div>
        <div class="wcc-body">Every SOS demo is built around your specific reporting needs, billing model, and organizational structure — not a generic product walkthrough.</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="wcc-btn">Book Free Assessment →</a>
        <a href="tel:18442448869" class="wcc-phone">📞 +1 (844) 244-8869</a>
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
      <div class="rescue-ey">Already on Sage Intacct?</div>
      <h3 class="rescue-title">Live but still closing in two weeks and reporting in Excel — that's fixable.</h3>
      <p class="rescue-body">Most Sage Intacct underperformance problems aren't platform failures. They're dimensions that were set up generically, revenue recognition rules that were skipped, or dashboards that were never built. The platform is capable. The configuration just wasn't finished. A No-Cost Assessment tells you what's wrong and what it takes to fix it.</p>
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
      <h2 class="final-title">A Sage Intacct demo built<br><em>around your business.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific reporting structure, billing model, and organizational complexity. You'll see Sage Intacct the way your finance team would actually use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/resources/erp-selection-guide')); ?>" class="btn-out">Take the ERP Selection Guide →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current financial system, your gaps, and whether Sage Intacct is the right fit for your organization.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current system and workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Sage Intacct fit and edition recommendation</div>
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
