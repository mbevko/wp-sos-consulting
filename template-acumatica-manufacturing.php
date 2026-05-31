<?php
/*
 * Template Name: Acumatica Manufacturing
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag"><div class="hero-tag-dot"></div><span class="hero-tag-text">Acumatica · Manufacturing Edition</span></div>
      <h1>Your shop floor and your<br>financials should be<br><em>telling the same story.</em></h1>
      <p class="hero-sub">Most manufacturers run into the same wall: <strong>production data lives in one place, financials in another, and nobody has the full picture until month-end.</strong> Acumatica Manufacturing Edition connects them — so every production order, cost variance, and inventory movement hits your financials in real time.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#capabilities" class="btn-ghost">See the Capabilities ↓</a>
      </div>
      <div class="hero-calc-link">Not ready for a demo? <a href="#calc-section">Run the numbers first →</a></div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">🏭</div><div><div class="hs-title">Multi-modal manufacturing support</div><div class="hs-body">Make-to-stock, make-to-order, engineer-to-order, job shop, repetitive, and process manufacturing</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Real-time cost tracking</div><div class="hs-body">Labor, material, and machine costs captured as production happens — not reconciled at month-end</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤖</div><div><div class="hs-title">AI Shop Floor Kiosk — 2026 R1</div><div class="hs-body">Real-time production data capture from the shop floor — live now, not a roadmap item</div></div></div>
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
  <span class="bc-cur">Manufacturing Edition</span>
</div></div>

<section class="tabbed-caps" id="capabilities">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">Built for the complexity<br><em>of real manufacturing operations.</em></h2>
    <p class="tc-desc">Every capability below is native to the Manufacturing Edition — built to work together and share the same data. Click any tab to explore.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'production')"><span class="tab-btn-icon">📋</span><span>Production Planning</span></button>
      <button class="tab-btn" onclick="switchTab(this,'shopfloor')"><span class="tab-btn-icon">🏭</span><span>Shop Floor</span></button>
      <button class="tab-btn" onclick="switchTab(this,'costing')"><span class="tab-btn-icon">💰</span><span>Costing &amp; Financials</span></button>
      <button class="tab-btn" onclick="switchTab(this,'sales')"><span class="tab-btn-icon">🔧</span><span>Sales &amp; Configurator</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-production">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Production Planning &amp; Control</div>
            <h3 class="tp-title">Plan accurately.<br>Schedule around reality.</h3>
            <p class="tp-body">MRP and APS that plan against actual demand, real inventory positions, and finite resource availability — not spreadsheet estimates. BOMs connect product design directly to production planning, costing, and execution.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Bill of Materials &amp; Routing</strong> — Multi-level BOMs with revision control, work center definitions, and labor and overhead rates</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Material Requirements Planning (MRP)</strong> — Plan production and purchasing against actual demand with automated replenishment signals</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Advanced Planning &amp; Scheduling (APS)</strong> — Finite capacity scheduling by work center so delivery dates are based on real availability</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Engineering Change Control</strong> — Manage BOM revisions with structured approval workflows, ECRs, ECOs, and full audit history</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card"><div class="tp-stat-icon">📅</div><div class="tp-stat-title">Plan to reality, not to estimates</div><div class="tp-stat-body">MRP tuned to your actual demand patterns, safety stock levels, and supplier lead times — not generic defaults set at implementation.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔁</div><div class="tp-stat-title">Engineering changes without production surprises</div><div class="tp-stat-body">BOM revisions move through configurable approval workflows before they hit the shop floor. No more unauthorized changes causing production issues.</div></div>
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">Connected to the PTC Arena PLM system</div><div class="tp-stat-body">Native PTC Arena connector keeps engineering and production BOMs in sync — no manual re-entry between systems.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-shopfloor">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Shop Floor Control</div>
            <h3 class="tp-title">Capture what's happening<br>as it happens.</h3>
            <p class="tp-body">Labor, material, and machine transactions captured in real time — via the AI-powered kiosk, mobile app, or barcode scanner. Complete visibility into WIP, outside processes, and production order status from anywhere.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI Shop Floor Kiosk — 2026 R1</strong> — Touch-screen kiosk for real-time labor and material capture directly on the production floor</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Manufacturing Data Collection (MDC)</strong> — Mobile app for iOS and Android — clock in/out, record materials, and close orders from the floor</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Production Order Management</strong> — Release, track, and close production orders with full WIP visibility and outside process tracking</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Barcode Scanning</strong> — Scan materials, labor, and inventory transactions to eliminate manual entry and transcription errors</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">AI Shop Floor Kiosk — live in 2026 R1</div><div class="tp-stat-body">The new kiosk brings real-time production data capture directly to the floor. Workers clock in, record materials, and close orders without leaving the work center.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">Full functionality on any device</div><div class="tp-stat-body">The Manufacturing Data Collection mobile app gives shop floor workers access to production orders, materials, and labor tracking from iOS or Android.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">👁️</div><div class="tp-stat-title">No more paper travelers</div><div class="tp-stat-body">Every labor transaction, material issue, and move is captured digitally — in real time. WIP is visible the moment something happens, not at end of shift.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-costing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Production Costing &amp; Financials</div>
            <h3 class="tp-title">See what jobs actually cost —<br>not what they were estimated to cost.</h3>
            <p class="tp-body">Standard and actual costing with real-time variance tracking. Every production close immediately updates the GL — so your financial picture is never more than one transaction behind the shop floor.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Standard &amp; Actual Costing</strong> — Choose the costing method that fits your operation. Track variances by job, work center, and cost element</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Real-Time Variance Tracking</strong> — Identify labor, material, and overhead variances as they occur — not at month-end reconciliation</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Scrap, Rework &amp; Outside Processing</strong> — Capture all cost elements including scrap, rework, and subcontract operations against the production order</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Immediate GL Integration</strong> — Production order closes post directly to the general ledger — no manual journal entries, no batch processing</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Job margins you can trust</div><div class="tp-stat-body">When costing is set up correctly and shop floor transactions are captured in real time, your job margins reflect what actually happened — not accounting estimates from last quarter.</div></div>
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Production close = GL update. Immediately.</div><div class="tp-stat-body">No end-of-month journal entries. No manual cost roll-ups. When a production order closes in Acumatica, the financial impact hits the GL in real time.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">ADP-certified payroll integration</div><div class="tp-stat-body">SOS connects Acumatica labor data directly to ADP Workforce Now — eliminating manual payroll entry and keeping HR and manufacturing costs in sync.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-sales">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Sales, CRM &amp; Product Configurator</div>
            <h3 class="tp-title">From customer inquiry<br>to production order — in one system.</h3>
            <p class="tp-body">Let sales build accurate quotes for custom products — with pricing, lead times, and BOM implications calculated automatically. No more spreadsheet estimates passed between sales and production.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Rules-Based Product Configurator</strong> — Sales configures custom products using defined rules — the system generates the BOM, routing, and pricing automatically</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Manufacturing Estimates</strong> — Build accurate cost estimates with CRM integration — convert winning estimates to production orders in one click</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Native CRM Integration</strong> — Opportunities, quotes, and customer history connected to production — sales and operations working from the same data</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Customer Self-Service Portal</strong> — Customers can place orders, check status, and access documents directly — reducing sales admin burden</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🛠️</div><div class="tp-stat-title">Custom products. Accurate quotes. Automatically.</div><div class="tp-stat-body">The Product Configurator lets sales build custom product configurations in CRM — pricing, lead times, and BOM requirements are calculated by the system, not guessed by a salesperson.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📋</div><div class="tp-stat-title">Estimate to production order in one click</div><div class="tp-stat-body">When a customer accepts a quote, the winning estimate converts directly to a production order — no re-entering data between sales and the shop floor.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">👥</div><div class="tp-stat-title">Sales and production working from the same data</div><div class="tp-stat-body">Native CRM means sales can see real inventory, actual lead times, and current job status — without calling the plant or checking a separate system.</div></div>
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
        <div class="calc-eyebrow">Free Tool for Manufacturers</div>
        <h2 class="calc-title">What are your manual processes <em>actually costing you?</em></h2>
        <p class="calc-body">Most manufacturers know they have inefficiency. Very few have put a dollar figure on it. This tool does that in under 3 minutes — using your own numbers, not industry averages.</p>
        <div class="calc-proof">
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Production scheduling and planning</strong> — how many hours does your team spend manually building schedules, expediting, and chasing material?</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Shop floor data entry</strong> — paper travelers, manual labor recording, end-of-shift data entry. It adds up fast.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Inventory reconciliation</strong> — cycle counts, adjustments, and the discrepancy research that follows every variance.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Month-end close extra time</strong> — the manual reconciliations and journal entries that wouldn't exist in an integrated system.</div></div>
        </div>
      </div>
      <div>
        <div class="calc-card">
          <span class="calc-card-icon">🧮</span>
          <div class="calc-card-label">ERP Cost of Inaction Calculator</div>
          <div class="calc-card-title">See your estimated savings <em>before you talk to anyone.</em></div>
          <div class="calc-card-body">Eight sliders. Three minutes. A specific dollar figure — based on your hours, your team, your operation.</div>
          <a href="<?php echo esc_url(home_url('/roi-calculator')); ?>" class="calc-card-btn">🧮 Run the Calculator →</a>
          <div class="calc-card-note">Free · No spreadsheet required · Results emailed to you instantly</div>
        </div>
      </div>
    </div>
    <div class="calc-stats">
      <div class="cs-stat"><div class="cs-stat-num">80%</div><div class="cs-stat-label">Reduction in shop floor data entry</div><div class="cs-stat-sub">Benchmark based on Acumatica customer outcomes after implementing kiosk and barcode capture</div></div>
      <div class="cs-stat"><div class="cs-stat-num">20h</div><div class="cs-stat-label">Saved per week on average</div><div class="cs-stat-sub">Reported by Acumatica customers after automating manual processes across production and finance</div></div>
      <div class="cs-stat"><div class="cs-stat-num">70%</div><div class="cs-stat-label">Reduction in month-end close time</div><div class="cs-stat-sub">When production orders close directly to the GL — no manual journal entries, no batch reconciliation</div></div>
    </div>
  </div>
</section>

<section class="video-section">
  <div class="video-inner">
    <div class="video-left">
      <div class="vid-ey">See it in action</div>
      <h2 class="vid-title">Acumatica Manufacturing — <em>a look inside the platform.</em></h2>
      <p class="vid-body">Watch the official Acumatica manufacturing overview — production planning, shop floor execution, costing, and reporting in one connected system. Or choose a specific demo below.</p>
      <div class="vid-links">
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Manufacturing Edition Overview</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Production Management Deep Dive</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Advanced Planning &amp; Scheduling</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Product Configurator Demo</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Demand Planning Video</span></div>
      </div>
    </div>
    <div>
      <div class="video-embed">
        <iframe src="https://www.youtube.com/embed/vy6qJDbB6xo" title="Acumatica Manufacturing Management Software Overview" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div style="margin-top:10px;font-size:11px;color:rgba(255,255,255,.35);text-align:center">Official Acumatica overview · September 2024 · Want a demo built for your operation? <a href="<?php echo esc_url(home_url('/assessment')); ?>" style="color:rgba(255,255,255,.55);text-decoration:underline">Talk to SOS →</a></div>
    </div>
  </div>
</section>

<section class="mfg-expertise">
  <div class="inner">
    <div class="mfg-exp-header">
      <div>
        <div class="sec-ey" style="color:rgba(255,255,255,.5)">Why SOS for Manufacturing</div>
        <h2 class="mfg-exp-title">We know what a manufacturing<br>implementation actually takes.</h2>
        <p class="mfg-exp-sub">Not every Acumatica partner has worked inside a plant. Our team has — which changes how we configure, what we anticipate, and what we never skip.</p>
      </div>
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="mfg-exp-cta-btn">Book a Free Assessment →</a>
    </div>
    <div class="mfg-exp-grid">
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">01</div><div class="mfg-exp-card-icon">💰</div><div class="mfg-exp-card-title">Costing that reflects what jobs actually cost</div><div class="mfg-exp-card-body">Standard vs. actual, overhead allocation, scrap and rework — configured for your operation, not the training manual.</div><div class="mfg-exp-card-tag">Production Costing &amp; Financials</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">02</div><div class="mfg-exp-card-icon">📅</div><div class="mfg-exp-card-title">MRP that your planners will actually trust</div><div class="mfg-exp-card-body">MRP tuned to your actual supply chain — so it surfaces the right signals and your planners stop overriding everything.</div><div class="mfg-exp-card-tag">Planning &amp; Scheduling</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">03</div><div class="mfg-exp-card-icon">🏭</div><div class="mfg-exp-card-title">Shop floor workflows operators will use</div><div class="mfg-exp-card-body">Kiosk, barcode, and MDC workflows built around your floor — because if it doesn't fit how operators work, they'll work around it.</div><div class="mfg-exp-card-tag">Shop Floor &amp; WIP</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">04</div><div class="mfg-exp-card-icon">📊</div><div class="mfg-exp-card-title">Dashboards built for who needs to act on the data</div><div class="mfg-exp-card-body">Role-based dashboards built for the people who act on the data — not one-size-fits-all reports nobody opens.</div><div class="mfg-exp-card-tag">Reporting &amp; Visibility</div></div>
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
    <div class="sec-ey acu">Manufacturing Types Supported</div>
    <h2 class="sec-title">One platform. <em>Every way manufacturers actually operate.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:600px;margin-top:4px;margin-bottom:40px">Select your manufacturing model below and see exactly how Acumatica handles it.</p>
    <div class="mfg-type-nav">
      <button class="mtype-btn active" onclick="switchType(this,'mts')"><span class="mtype-icon">📦</span><span>Make-to-Stock</span></button>
      <button class="mtype-btn" onclick="switchType(this,'mto')"><span class="mtype-icon">📋</span><span>Make-to-Order</span></button>
      <button class="mtype-btn" onclick="switchType(this,'eto')"><span class="mtype-icon">📐</span><span>Engineer-to-Order</span></button>
      <button class="mtype-btn" onclick="switchType(this,'jobshop')"><span class="mtype-icon">🔧</span><span>Job Shop</span></button>
      <button class="mtype-btn" onclick="switchType(this,'process')"><span class="mtype-icon">🧪</span><span>Process &amp; Batch</span></button>
    </div>
    <div class="mtype-panels">

      <div class="mtype-panel active" id="mtype-mts">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Make-to-Stock</div>
            <h3 class="mtype-title">Produce to inventory.<br>Replenish before you run out.</h3>
            <p class="mtype-body">You build products to stock based on forecasted demand and sell from inventory. The challenge: balancing production runs against inventory carrying costs while keeping service levels high.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where manufacturers in this model typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>MRP suggesting builds when inventory is already overstocked — or staying silent when stockouts are imminent</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Standard costs that haven't been updated in 18 months, making gross margin by SKU meaningless</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>No real-time visibility into what's in production vs. what's available to promise</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">MRP with configurable reorder rules</div><div class="mtype-cap-body">Set safety stock, reorder points, and lot sizing rules by item and location. MRP generates actionable production suggestions — not noise.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Demand forecasting and replenishment automation</div><div class="mtype-cap-body">Feed historical sales data into forecasting, smooth seasonal demand, and automate replenishment orders when thresholds are hit.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Real-time ATP (Available to Promise)</div><div class="mtype-cap-body">Sales sees what's in stock, what's in production, and when it'll be available — so every promise is a promise you can keep.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-mto">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Make-to-Order</div>
            <h3 class="mtype-title">Every order triggers<br>a production run.</h3>
            <p class="mtype-body">You don't produce until a customer order exists. Production is tied directly to sales orders — materials are purchased and scheduled around confirmed demand, not forecasts.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where manufacturers in this model typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Quoting lead times without visibility into current work center loads and material availability</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Sales promising delivery dates that production can't hit because nobody checked the schedule</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Job costs that don't get captured until the order ships — by which point there's nothing to do about overruns</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Sales order → production order in one step</div><div class="mtype-cap-body">Customer orders drive production orders automatically. Materials are allocated, work center time is reserved, and purchasing is triggered — all connected.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">APS with finite capacity scheduling</div><div class="mtype-cap-body">Schedule production against real work center availability. Sales gets delivery dates based on what production can actually commit to, not optimistic estimates.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Real-time job cost tracking</div><div class="mtype-cap-body">Labor, materials, and overhead captured as they happen. Variance alerts flag jobs that are trending over budget before they're complete.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-eto">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Engineer-to-Order</div>
            <h3 class="mtype-title">Every product is custom.<br>Every order starts from scratch.</h3>
            <p class="mtype-body">Each order requires custom engineering before production begins. BOMs are built per order, lead times include design time, and pricing must account for engineering labor — all before a single part is cut.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where manufacturers in this model typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Estimating projects accurately enough to quote profitably when every job is different</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Managing engineering changes after production has started — and tracking their cost impact</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Connecting CAD/PLM systems to ERP so engineering BOMs don't have to be re-entered manually</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Manufacturing Estimates with CRM</div><div class="mtype-cap-body">Build detailed cost estimates with labor, materials, and overhead. Estimates live in CRM alongside the opportunity — won estimates convert to production orders in one click.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Engineering Change Control with approval workflows</div><div class="mtype-cap-body">Mid-project changes move through structured ECR/ECO workflows. Every revision is tracked, approved, and costed — no more informal changes that erode margins.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">PTC Arena native connector</div><div class="mtype-cap-body">Engineering BOMs sync directly from PTC Arena into Acumatica. No manual re-entry between PLM and ERP — engineering changes propagate automatically.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-jobshop">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Job Shop</div>
            <h3 class="mtype-title">High mix, low volume.<br>Every job is its own puzzle.</h3>
            <p class="mtype-body">You run many different jobs simultaneously across shared work centers. Scheduling is complex, jobs compete for the same resources, and profitability varies wildly by job. The shop floor is the business.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where manufacturers in this model typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>No real-time WIP visibility — supervisors don't know job status without walking the floor</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Labor time recorded at end of shift or end of week — cost data is always stale</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Unable to identify which jobs are profitable and which are quietly losing money</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">AI Shop Floor Kiosk — real-time labor capture</div><div class="mtype-cap-body">Workers clock in and out of jobs at the kiosk. Labor hits the job record immediately — supervisors see real-time WIP without leaving their desk.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Job-level profitability reporting</div><div class="mtype-cap-body">See margin by job, by customer, by product line. Know which work you should be quoting aggressively and which you should be pricing higher — or walking away from.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Work center scheduling and load balancing</div><div class="mtype-cap-body">APS schedules operations across work centers based on finite capacity. See bottlenecks before they cause late deliveries, not after.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-process">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Process &amp; Batch Manufacturing</div>
            <h3 class="mtype-title">Formula-based production.<br>Traceability at every step.</h3>
            <p class="mtype-body">You produce by formula or recipe — food, beverage, chemicals, pharmaceuticals. Lot traceability, expiration dates, yield management, and compliance documentation are operational requirements, not optional features.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where manufacturers in this model typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Lot traceability that breaks down somewhere between the supplier and the finished goods label</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Yield variances that nobody catches until a batch is already complete — and the loss is already locked in</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Recall preparedness: not being able to trace a lot forward or backward quickly under pressure</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Formula and recipe management</div><div class="mtype-cap-body">Manage recipes with revision control, scaling, and substitution rules. Formula changes move through approval workflows before they reach production.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">End-to-end lot and serial traceability</div><div class="mtype-cap-body">Track every lot from raw material receipt through production and shipping. Forward and backward trace in seconds — not hours of manual research.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Expiration date and shelf-life management</div><div class="mtype-cap-body">Expiration dates tracked at the lot level. FEFO (first expired, first out) picking rules enforced automatically in the warehouse.</div></div></div>
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
      <div class="ps"><div class="ps-num">1</div><div class="ps-title">No-Cost Assessment</div><div class="ps-desc">60 minutes. We review your operation, current system, and gaps — and give you an honest recommendation.</div></div>
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
      <div class="rescue-ey">Already on Acumatica Manufacturing?</div>
      <h3 class="rescue-title">Live but the shop floor still doesn't trust the system — that's fixable.</h3>
      <p class="rescue-body">Most Acumatica manufacturing problems aren't platform failures. They're BOM structures that were never finished, costing that was set up generically, or shop floor workflows the team worked around instead of through. A No-Cost Assessment tells you honestly what's wrong and what it would take to fix it.</p>
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
      <h2 class="final-title">A manufacturing demo<br><em>built for your operation.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific production model, your manufacturing type, and the problems you're actually trying to solve. You'll see Acumatica the way your team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/erp-selection-guide')); ?>" class="btn-out">Take the ERP Selection Guide →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current system, your gaps, and whether Acumatica Manufacturing Edition is the right fit.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current system and workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Manufacturing edition fit recommendation</div>
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
