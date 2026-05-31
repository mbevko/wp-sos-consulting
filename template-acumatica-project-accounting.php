<?php
/*
 * Template Name: Acumatica Project Accounting
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot"></div><span class="mb-text">Acumatica · Add-On Module</span></div>
      <h1>Your projects and your<br>financials should be<br><em>telling the same story.</em></h1>
      <p class="hero-sub">By the time most businesses see a project margin problem, <strong>it's already too late to fix it.</strong> Acumatica Project Accounting shows you where you stand while there's still time to act.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#what-it-does" class="btn-ghost">See the Capabilities ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Single source of truth for every project</div><div class="hs-body">Budgets, inventory, actuals, and profitability connected to company-wide financial data — not isolated in spreadsheets</div></div></div>
          <div class="hero-stat"><div class="hs-icon">💰</div><div><div class="hs-title">Complex billing rules automated</div><div class="hs-body">Fixed-price, cost-plus, T&amp;M, percentage of completion, and milestone billing — all handled without manual calculation</div></div></div>
          <div class="hero-stat"><div class="hs-icon">⏱️</div><div><div class="hs-title">Time and expenses from anywhere</div><div class="hs-body">Remote teams submit timesheets and expenses via mobile or employee portal — billable vs. non-billable tracked automatically</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤖</div><div><div class="hs-title">AI spots patterns before you do</div><div class="hs-body">Integrated AI identifies patterns in project performance — budget variance, cost trends, and profitability forecasts updated in real time</div></div></div>
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
  <span class="bc-cur">Project Accounting</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Works with every Acumatica edition:</div>
    <div class="er-tags">
      <span class="er-tag">🏗️ Construction — included</span>
      <span class="er-tag">💼 Professional Services — included</span>
      <span class="er-tag">🏭 Manufacturing — add-on</span>
      <span class="er-tag">📦 Distribution — add-on</span>
      <span class="er-tag">📊 General Business — add-on</span>
    </div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">Complete visibility into project costs,<br><em>revenues, and budgets.</em></h2>
    <p class="tc-desc">Acumatica Project Accounting connects your project financials with company-wide data — a single source of truth for budgeting, inventory, and profitability. Manage complex billing rules, track costs in real time, and enable remote teams to submit time and expenses from anywhere.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'costing')"><span class="tab-btn-icon">📊</span><span>Project Cost Tracking</span></button>
      <button class="tab-btn" onclick="switchTab(this,'billing')"><span class="tab-btn-icon">💰</span><span>Advanced Billing</span></button>
      <button class="tab-btn" onclick="switchTab(this,'time')"><span class="tab-btn-icon">⏱️</span><span>Time &amp; Expense Management</span></button>
      <button class="tab-btn" onclick="switchTab(this,'ai')"><span class="tab-btn-icon">🤖</span><span>AI Insights &amp; Reporting</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-costing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Project Cost Tracking</div>
            <h3 class="tp-title">Gain control over<br>project profitability.</h3>
            <p class="tp-body">Monitor your project costs with precision by tracking labor, materials, and services against your original and revised budgets. Real-time reporting allows you to compare actual costs to estimates, ensuring you stay on budget and maximize profitability for every initiative.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Labor, materials, and services tracked in real time</strong> — Costs post against the project budget as they are incurred — not at month-end. Catch overruns while there is still time to act.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Original and revised budget tracking</strong> — Track costs against both the original budget and revised budgets side by side. Change orders and scope adjustments captured without losing the original baseline.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Actual vs. estimate comparison</strong> — Real-time variance reporting shows where you are running ahead or behind on every line item — by task, resource, cost type, and financial period.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Inventory allocated to projects</strong> — Materials issued from inventory post directly to the project cost record. No manual reconciliation between your warehouse system and your project accounting.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📈</div><div class="tp-stat-title">Real-time project profitability</div><div class="tp-stat-body">Project managers see budget vs. actual for every cost category as transactions happen — not after the project is already over budget. The margin problem is visible while it is still solvable.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📋</div><div class="tp-stat-title">Costs tracked by task, resource, and type</div><div class="tp-stat-body">Drill into any project from summary to transaction level — by task, cost type, employee, or date range. Understand exactly where the variance is coming from before you have the conversation.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💹</div><div class="tp-stat-title">Change orders captured, not buried</div><div class="tp-stat-body">Scope changes tracked as revised budgets — not manual adjustments that obscure the original estimate. Full audit trail from original scope to final cost.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-billing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Advanced Billing</div>
            <h3 class="tp-title">Manage complex billing<br>scenarios with ease.</h3>
            <p class="tp-body">Handle diverse billing requirements including fixed-price, cost-plus, and time-and-materials contracts with flexible billing rules. Vary billing rates by employee, customer, or project type, and automatically recognize revenue based on percentage of completion or completed tasks.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Fixed-price, cost-plus, and T&amp;M billing</strong> — All three contract types supported with flexible billing rules that reflect your actual agreements — not simplified defaults.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Billing rates by employee, customer, or project type</strong> — Different rates for different resources, different markups for different customers, different rules for different project categories — all automated.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Revenue recognition by completion or milestone</strong> — Automatically recognize revenue based on percentage of completion or completed task milestones. Compliant with your accounting policies without manual calculation.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Pro forma invoices before billing</strong> — Review draft invoices before they go to the client. Catch billing errors, adjust time entries, and confirm costs — before the invoice is issued.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📄</div><div class="tp-stat-title">No billable work slips through</div><div class="tp-stat-body">Billing rules applied automatically to every time entry, expense, and material usage on the project. If it should be billed, the system catches it — without your PM reviewing every line.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💵</div><div class="tp-stat-title">Revenue recognized per your policies</div><div class="tp-stat-body">Percentage of completion or milestone-based recognition applied automatically based on the rules you define. Month-end is a calculation the system runs — not a spreadsheet your accountant builds.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📝</div><div class="tp-stat-title">Pro forma review before invoicing</div><div class="tp-stat-body">Draft invoices reviewed before they reach the client — giving project managers a chance to verify, adjust, and approve before any billing goes out the door.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-time">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Time &amp; Expense Management</div>
            <h3 class="tp-title">Enable remote work<br>and accurate tracking.</h3>
            <p class="tp-body">Empower workers to submit work orders and timesheets remotely through a secure employee portal or mobile app. Allocate overhead and shared expenses to individual projects, including billable or nonbillable items, to ensure every cost is accounted for.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Remote timesheet submission via portal or mobile</strong> — Employees submit time from any device through a secure portal or mobile app. No paper timesheets, no end-of-week reconstruction from memory.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Billable and nonbillable time tracked separately</strong> — Every hour categorized at the point of entry as billable or nonbillable, by project and task. No manual sorting at billing time.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Overhead and shared expense allocation</strong> — Allocate overhead, shared costs, and indirect expenses to individual projects using rules you define — so project profitability reflects true cost.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Approval workflows for time and expenses</strong> — Configurable approval routing for timesheets and expense reports by project, role, or amount. Approved entries post directly to the project record and payroll.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">Time captured at the moment it happens</div><div class="tp-stat-body">Mobile time entry from any iOS or Android device means time is captured when the work is done — not reconstructed at the end of the week from calendar entries and memory.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💸</div><div class="tp-stat-title">True project cost includes overhead</div><div class="tp-stat-body">Overhead allocation rules distribute indirect costs across projects based on the methodology you define. Project P&amp;L reflects the real cost of delivery — not just what was directly charged.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">✅</div><div class="tp-stat-title">Approved and posted in one step</div><div class="tp-stat-body">Approved time entries and expense reports post automatically to both the project record and payroll. No re-entry, no lag between approval and accounting.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-ai">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">AI Insights &amp; Reporting</div>
            <h3 class="tp-title">Forecast project budgets<br>and spot trends.</h3>
            <p class="tp-body">Enter and modify project budget forecasts and compare these with actual costs and incomes for each financial period. Leverage integrated AI to identify patterns in project performance, helping you make data-driven decisions to improve future estimates and profitability.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Budget forecasts vs. actuals by period</strong> — Compare forecast to actual for each financial period as the project progresses. Identify which phases are running over and adjust forward-looking estimates before close.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI pattern identification in project performance</strong> — Integrated AI identifies patterns across projects — cost types that consistently overrun, resource types with billing leakage, project categories with margin compression.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Reporting, Dashboards, and BI</strong> — Real-time project dashboards, custom reports via Generic Inquiries, and BI integration give every stakeholder the view they need without waiting for finance to build a report.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Data-driven estimating for future projects</strong> — Historical project data feeds future estimates — so your quotes are based on what similar projects actually cost, not what you hoped they would.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">AI finds what your reports miss</div><div class="tp-stat-body">Pattern recognition across projects surfaces systemic issues — not just variances on individual jobs. If a cost type is consistently running over, AI flags it before it becomes a pricing problem.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📈</div><div class="tp-stat-title">Every stakeholder gets their view</div><div class="tp-stat-body">Project manager sees task-level cost and schedule. Operations sees resource utilization across the portfolio. Finance sees revenue, margin, and cash flow by project. All from the same live data.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🎯</div><div class="tp-stat-title">Better estimates. Every time.</div><div class="tp-stat-body">When your historical project data informs your next bid, estimates stop being optimistic guesses. They become data-backed projections — and your margins reflect that difference.</div></div>
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
    <h2 class="sec-title">If your business tracks costs by project,<br><em>Project Accounting is built for you.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Project Accounting works across every Acumatica edition. It's included in Construction and Professional Services — and available as an add-on for Manufacturing, Distribution, General Business, and Retail.</p>
    <div class="who-grid">
      <div class="who-card"><div class="who-card-icon">💼</div><div class="who-card-title">Professional services firms</div><div class="who-card-body">Consulting, engineering, IT services, and managed service providers billing by time and materials, fixed fee, or retainer. Project Accounting tracks every billable hour and expense against client budgets in real time.</div></div>
      <div class="who-card"><div class="who-card-icon">🏗️</div><div class="who-card-title">Construction companies</div><div class="who-card-body">Job costing, subcontractor costs, material usage, and change orders tracked against project budgets. Project Accounting is included standard in the Acumatica Construction Edition.</div></div>
      <div class="who-card"><div class="who-card-icon">🏭</div><div class="who-card-title">Manufacturers with project-based work</div><div class="who-card-body">Engineer-to-order, custom fabrication, and capital project manufacturers who need to track true job costs — including labor, materials, overhead, and outside processing — against quotes.</div></div>
      <div class="who-card"><div class="who-card-icon">📦</div><div class="who-card-title">Distributors with installation projects</div><div class="who-card-body">Distributors managing installation, commissioning, or service projects alongside distribution operations. Track field labor, materials, and overhead against each project for accurate margin reporting.</div></div>
      <div class="who-card"><div class="who-card-icon">🤝</div><div class="who-card-title">Nonprofits and grant-funded organizations</div><div class="who-card-body">Track costs, time, and expenses by grant, program, or fund. Ensure every dollar is allocated correctly and generate funder-ready reporting without a separate accounting layer.</div></div>
      <div class="who-card"><div class="who-card-icon">💻</div><div class="who-card-title">Software and technology companies</div><div class="who-card-body">Development projects, implementation engagements, and client onboarding tracked by project. Capitalize internal development costs, track billable vs. non-billable time, and bill clients accurately.</div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Project Accounting</div>
      <h2 class="wc-title">The configuration determines whether<br><em>the numbers are actually right.</em></h2>
      <p class="wc-body">Project Accounting is only as accurate as the rules behind it. If cost types aren't mapped correctly, overhead allocation is wrong, or billing rules don't match your contracts, the system produces numbers that look clean but aren't. We configure Project Accounting around your actual billing model, your cost structure, and the reporting your leadership team needs.</p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Cost structure and task hierarchy built around your delivery model</div>
        <div class="wc-point"><span class="wc-check">✓</span>Billing rules configured to match your actual client contracts</div>
        <div class="wc-point"><span class="wc-check">✓</span>Overhead allocation methodology set up correctly from day one</div>
        <div class="wc-point"><span class="wc-check">✓</span>Revenue recognition policies automated — not left to manual calculation</div>
        <div class="wc-point"><span class="wc-check">✓</span>Dashboards built for project managers, operations, and finance separately</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Project Accounting configured for your billing model.</div>
        <div class="wcc-body">Every SOS demo is built around your specific project types, contract structure, and reporting requirements — not a generic product tour.</div>
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
      <div class="rescue-ey">Already using Acumatica Project Accounting?</div>
      <h3 class="rescue-title">Live but your project margins still don't match what you expected — that's fixable.</h3>
      <p class="rescue-body">Most Project Accounting problems aren't platform failures. They're cost types that weren't mapped correctly, overhead allocation that was skipped, or billing rules that don't reflect actual contracts. A No-Cost Assessment tells you what's wrong and what it takes to fix it.</p>
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
      <h2 class="final-title">A Project Accounting demo<br><em>built for your billing model.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific project types, contract structure, and the reporting your leadership team actually needs. You'll see Project Accounting the way your team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/acumatica')); ?>" class="btn-out">Back to Acumatica Overview →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current setup and whether Acumatica Project Accounting is the right fit for your operation.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current project tracking and billing review</div>
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
