<?php
/*
 * Template Name: Sage Intacct Professional Services
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot" style="background:var(--sage-green)"></div><span class="mb-text" style="color:var(--sage-green)">Sage Intacct · Professional Services</span></div>
      <h1>Your firm sells expertise.<br>Every hour should<br><em>show up on an invoice.</em></h1>
      <p class="hero-sub">Revenue leakage is the professional services problem nobody talks about. <strong>Time that was worked but never captured. Expenses that slipped through. Projects that closed under margin.</strong> Sage Intacct is built to close every one of those gaps.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#what-it-does" class="btn-ghost">See the Capabilities ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">⏱️</div><div><div class="hs-title">Sage Intelligent Time — AI time entry</div><div class="hs-body">AI builds timesheets from calendars, emails, and work activity. Staff review and approve — not reconstruct from memory</div></div></div>
          <div class="hero-stat"><div class="hs-icon">💰</div><div><div class="hs-title">Every billing model supported</div><div class="hs-body">Time and materials, fixed fee, milestone, retainer, subscription, and hybrid — all in one system with automated billing schedules</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Real-time project margin visibility</div><div class="hs-body">Budget vs. actuals, billed vs. unbilled, billable vs. non-billable — visible by project, manager, client, and service line</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🔗</div><div><div class="hs-title">Salesforce, PSA, and CRM connected</div><div class="hs-body">Native Salesforce integration. Prebuilt connectors to Kimble, BigTime, Expensify, and more. Open API for everything else.</div></div></div>
        </div>
      </div>
      <div class="hero-cta-strip">
        <div class="hcs-text">See it configured for your firm</div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="hcs-btn">Schedule a Demo →</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <span class="bc-nolink">Solutions</span><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions/sage-intacct')); ?>">Sage Intacct</a><span class="bc-sep">/</span>
  <span class="bc-cur">Professional Services</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Built for:</div>
    <div class="er-tags">
      <span class="er-tag">💼 Consulting Firms</span>
      <span class="er-tag">🖥️ IT Services</span>
      <span class="er-tag">🎨 Marketing &amp; Creative Agencies</span>
      <span class="er-tag">⚙️ Engineering Companies</span>
      <span class="er-tag">👥 HR &amp; Staffing</span>
      <span class="er-tag">🔧 Managed Service Providers</span>
    </div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Core Capabilities</div>
    <h2 class="sec-title">Own the dollar.<br><em>From kick-off to final invoice.</em></h2>
    <p class="tc-desc">Sage Intacct is the only platform that combines AI-powered time capture, flexible project billing, real-time margin reporting, and full financial management in a single cloud system. Professional services firms use it to stop revenue leakage, close the books faster, and see exactly where they're making money.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'time')"><span class="tab-btn-icon">⏱️</span><span>Intelligent Time &amp; Expense</span></button>
      <button class="tab-btn" onclick="switchTab(this,'billing')"><span class="tab-btn-icon">💰</span><span>Project Billing</span></button>
      <button class="tab-btn" onclick="switchTab(this,'visibility')"><span class="tab-btn-icon">📊</span><span>Project Visibility</span></button>
      <button class="tab-btn" onclick="switchTab(this,'financials')"><span class="tab-btn-icon">🏦</span><span>Financial Management</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-time">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Sage Intelligent Time &amp; Expense</div>
            <h3 class="tp-title">Stop rebuilding your week<br>from memory every Friday.</h3>
            <p class="tp-body">Most professional services firms lose 5–15% of billable revenue to leakage — time that was worked but never captured, expenses that slipped through, and invoices that went out with incorrect hours. Sage Intelligent Time is the only AI-powered time entry system built into a full-featured ERP. It reconstructs your team's work week from calendars, emails, and activity.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI-powered timesheet reconstruction</strong> — The Intelligent Time agent pulls from calendars, emails, and work activity to pre-populate timesheets. Accurate project costing and complete billable time capture without manual entry.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Billable vs. non-billable tracked at entry</strong> — Every hour categorized at the point of entry. No sorting at billing time, no disputes about what was chargeable.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Expense management with approval workflows</strong> — Employees submit expenses from any device. Approval routing by project, role, or amount. Billable expenses post directly to the project and the client invoice.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Anomaly detection in time patterns</strong> — AI identifies unusual time entry patterns — missing hours, outlier allocations, and data entry errors — before they affect billing accuracy or project profitability.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">💸</div><div class="tp-stat-title">The only AI time system built into an ERP</div><div class="tp-stat-body">Most time tracking tools are standalone apps that export to billing. Intelligent Time is native to Sage Intacct — time entries post directly to projects, payroll, and client invoices without re-entry or reconciliation.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📋</div><div class="tp-stat-title">Timesheets built from actual activity</div><div class="tp-stat-body">Meetings from the calendar. Emails to clients. Documents worked on. The AI time assistant reconstructs the week and suggests project allocations — professionals review and confirm rather than build from scratch.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">Submit from anywhere</div><div class="tp-stat-body">Time and expenses submitted via mobile app, employee portal, or desktop. Approved entries post automatically to the project and payroll. No lag between approval and accounting.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-billing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Project Billing</div>
            <h3 class="tp-title">Bill the way your clients<br>expect. Every time.</h3>
            <p class="tp-body">Professional services firms deal with a more diverse mix of clients and billing terms than any other industry. Time and materials, fixed fee, milestone, retainer, subscription, not-to-exceed, hybrid models — Sage Intacct handles all of them in a single system with automated schedules, pro forma review, and correct invoice formats every time.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>All billing models in one system</strong> — T&amp;M, fixed fee, milestone, retainer, subscription, cost-plus, and hybrid. Billing rules configured per contract — not simplified to what the system can handle.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Pro forma invoice review</strong> — Review draft invoices before they go to the client. Catch errors, adjust time entries, confirm costs. No billing mistakes after the fact.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Not-to-exceed and change order tracking</strong> — Set budget caps by project or task. System flags when actuals approach NTE limits. Change orders tracked against original scope without losing the baseline.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Revenue recognition automated</strong> — ASC 606 and IFRS 15 compliant revenue recognition run automatically. Billing schedule and revenue schedule maintained separately so you bill correctly and recognize correctly.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📄</div><div class="tp-stat-title">No billable work slips through</div><div class="tp-stat-body">Billing rules applied automatically to every time entry, expense, and material usage on the project. If it should be billed, the system captures it — without your PM reviewing every line manually.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💵</div><div class="tp-stat-title">Bill in the format each client requires</div><div class="tp-stat-body">Different clients require different invoice formats, different levels of detail, and different data fields. Sage Intacct generates invoices in the correct format for each client automatically — no manual formatting.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔄</div><div class="tp-stat-title">Quote-to-cash in one connected system</div><div class="tp-stat-body">CRM opportunity converts to a project. Time and expenses post against the project. Invoice generates from actuals. Revenue recognizes per contract rules. No re-entry between systems at any step.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-visibility">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Project Visibility &amp; Reporting</div>
            <h3 class="tp-title">Know which projects are profitable<br>while you can still act on it.</h3>
            <p class="tp-body">Most professional services firms discover a project margin problem after the engagement closes. By then it's a lesson learned, not a problem solved. Sage Intacct's real-time project dashboards show budget vs. actuals, billed vs. unbilled, utilization, and margin — as transactions happen, not at month-end.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Real-time budget vs. actuals by project</strong> — Labor, expenses, and materials tracked against original and revised budgets as they are incurred. Catch overruns while there is still time to adjust scope or resources.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Utilization tracking by employee and team</strong> — Billable vs. non-billable hours tracked in real time by person, team, and service line. Identify underutilization before it becomes a profitability problem.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Billed vs. unbilled visibility</strong> — See exactly what has been earned but not yet invoiced across all projects. Reduce WIP backlog and accelerate cash flow by keeping billing current with delivery.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Dimensional reporting by any combination</strong> — P&amp;L by client, project, manager, service line, region, or any dimension you define — in real time, drillable to the transaction. No spreadsheet assembly required.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Margin visibility in real time</div><div class="tp-stat-body">Project managers see cost and margin as it happens — not after the month closes. Leadership sees portfolio performance without waiting for finance to build a report.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🎯</div><div class="tp-stat-title">Bid smarter on the next engagement</div><div class="tp-stat-body">Historical project data informs future estimates. When your next bid is based on what similar projects actually cost — not what you hoped they would — your margins reflect that discipline.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">👥</div><div class="tp-stat-title">Resource management built in</div><div class="tp-stat-body">Track resource allocation across the portfolio. See who is over-allocated and who has capacity. Sage Intacct PSA extends this with AI-powered resource optimization and project planning for complex firms.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-financials">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Financial Management</div>
            <h3 class="tp-title">Close 66% faster.<br>Report from any angle.</h3>
            <p class="tp-body">Sage Intacct's financial foundation — the Intelligent GL, AP, AR, and multi-entity consolidations — is what makes the project layer so powerful. Every project transaction posts to the same GL that drives your financial statements, your board reports, and your audit. One system. One source of truth.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Dimensional General Ledger</strong> — Tag every transaction across department, client, project, service line, region, and any other dimension simultaneously. Report any way you need without restructuring your chart of accounts.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Accounts Receivable and collections</strong> — Automated billing, payment processing, dunning, and collections workflows. Cut collections time and improve cash flow without your team manually tracking overdue invoices.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Multi-entity consolidations</strong> — Push-button consolidations for firms with multiple entities, divisions, or international offices. Automated intercompany eliminations and currency conversions in minutes.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Close 66% faster</strong> — Automated posting, AI anomaly detection, workflow-driven approvals, and real-time reconciliation replace the manual steps that make month-end close a crisis event.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🧠</div><div class="tp-stat-title">One system from project to P&amp;L</div><div class="tp-stat-body">Time entries post to projects. Projects post to the GL. The GL drives financial statements. No reconciliation between a time system, a billing system, and an accounting system. One connected workflow.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🏆</div><div class="tp-stat-title">AICPA preferred — the only endorsed platform</div><div class="tp-stat-body">For professional services firms where financial integrity matters — auditors, board reporting, investor requirements — the AICPA endorsement is the signal that the platform meets the standard.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">5x ROI — payback in 6 months</div><div class="tp-stat-body">Sage customers report measurable return driven by close acceleration, revenue leakage elimination, and reduced manual overhead. Professional services firms typically see the fastest payback because the leakage problem is solved immediately.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="who-section">
  <div class="inner">
    <div class="sec-ey" style="color:var(--sage-green)">Firm types we work with</div>
    <h2 class="sec-title">If your revenue comes from<br><em>expertise and time, this is your system.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Sage Intacct is purpose-built for service organizations. Here's how it applies to the firm types SOS works with most.</p>
    <div class="who-grid">
      <div class="who-card"><div class="who-card-icon">💼</div><div class="who-card-title">Management &amp; Strategy Consulting</div><div class="who-card-body">Project-based billing, multiple engagement types, and senior staff whose time is expensive. Intelligent Time captures every billable hour. Margin reporting by client and engagement keeps pricing discipline sharp.</div></div>
      <div class="who-card"><div class="who-card-icon">🖥️</div><div class="who-card-title">IT Services &amp; MSPs</div><div class="who-card-body">Mix of retainer contracts, T&amp;M engagements, and recurring managed services. Sage Intacct handles all billing models simultaneously and connects to PSA tools like BigTime and Kimble via prebuilt integration.</div></div>
      <div class="who-card"><div class="who-card-icon">🎨</div><div class="who-card-title">Marketing &amp; Creative Agencies</div><div class="who-card-body">Multiple client projects running simultaneously, complex retainer structures, and creative staff whose utilization directly drives profitability. Real-time dashboard by client and team keeps margins visible.</div></div>
      <div class="who-card"><div class="who-card-icon">⚙️</div><div class="who-card-title">Engineering &amp; Technical Firms</div><div class="who-card-body">Government contracts, cost-plus billing, not-to-exceed caps, and compliance reporting. Sage Intacct's project costing and change order tracking handles the complexity that spreadsheets can't.</div></div>
      <div class="who-card"><div class="who-card-icon">👥</div><div class="who-card-title">HR, Staffing &amp; PEO Organizations</div><div class="who-card-body">High transaction volume, complex payroll relationships, and margin management across a large workforce. Sage Intacct's payroll integration and dimensional reporting bring clarity to a naturally complex financial picture.</div></div>
      <div class="who-card"><div class="who-card-icon">🔧</div><div class="who-card-title">Managed Service Providers</div><div class="who-card-body">Recurring revenue, SLA-based contracts, and a mix of project and support work billed differently. Subscription billing, revenue recognition, and real-time utilization visibility built for the MSP model.</div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Professional Services</div>
      <h2 class="wc-title">Professional services configuration<br><em>is where most implementations go wrong.</em></h2>
      <p class="wc-body">Dimensions mapped generically. Billing rules that don't match your actual contracts. Intelligent Time set up without being tuned to how your team actually works. <strong>The platform is capable. The configuration determines whether it actually solves the problem.</strong></p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Dimension structure built around how your firm actually reports — by client, service line, team, or region</div>
        <div class="wc-point"><span class="wc-check">✓</span>Billing rules configured to match your actual client contracts — not simplified to what the default setup handles</div>
        <div class="wc-point"><span class="wc-check">✓</span>Intelligent Time tuned to your staff's actual work patterns before go-live</div>
        <div class="wc-point"><span class="wc-check">✓</span>Revenue recognition policies automated per your contract models from day one</div>
        <div class="wc-point"><span class="wc-check">✓</span>Salesforce, PSA, or payroll integration configured and tested before launch</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Sage Intacct configured for your firm.</div>
        <div class="wcc-body">Every SOS demo is built around your specific billing model, engagement structure, and reporting requirements — not a generic product walkthrough.</div>
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
      <h3 class="rescue-title">Live but still losing billable hours and closing in two weeks — that's fixable.</h3>
      <p class="rescue-body">Most professional services Intacct problems aren't platform failures. They're Intelligent Time that was never properly configured, billing rules that don't match contracts, or dimensions that were set up generically. The platform is capable of solving every one of those problems. A No-Cost Assessment tells you what's wrong and what it takes to fix it.</p>
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
      <h2 class="final-title">A demo built around<br><em>how your firm actually bills.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific billing model, engagement structure, and the margin visibility your leadership actually needs. You'll see Sage Intacct the way your firm would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/solutions/sage-intacct')); ?>" class="btn-out">Back to Sage Intacct Overview →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current system and whether Sage Intacct is the right fit for your firm.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current billing and project tracking review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Revenue leakage assessment</div>
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
