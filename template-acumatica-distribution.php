<?php
/*
 * Template Name: Acumatica Distribution
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag"><div class="hero-tag-dot"></div><span class="hero-tag-text">Acumatica · Distribution Edition</span></div>
      <h1>Your warehouse and your<br>financials should be<br><em>telling the same story.</em></h1>
      <p class="hero-sub">Most distributors run the same wall: <strong>inventory data lives in one place, orders in another, and nobody has an accurate picture until something goes wrong.</strong> Acumatica Distribution Edition connects them — so every purchase order, shipment, and inventory movement hits your financials in real time.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#capabilities" class="btn-ghost">See the Capabilities ↓</a>
      </div>
      <div class="hero-calc-link">Not ready for a demo? <a href="#calc-section">Run the numbers first →</a></div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">📦</div><div><div class="hs-title">Multi-warehouse inventory management</div><div class="hs-body">Real-time stock visibility across all locations, with automated replenishment and demand forecasting</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📊</div><div><div class="hs-title">Embedded WMS — no separate system</div><div class="hs-body">Barcode scanning, wave and batch picking, guided receiving and put-away — all native, all connected to financials</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🤖</div><div><div class="hs-title">AI Cross-Sell Assistant — 2025 R2</div><div class="hs-body">AI-powered cross-sell suggestions at order entry, based on historical buying patterns. Live now.</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🛒</div><div><div class="hs-title">Omnichannel — Amazon, Shopify, BigCommerce</div><div class="hs-body">Native connectors sync orders, inventory, and shipments across every sales channel automatically</div></div></div>
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
  <span class="bc-nolink">Solutions</span><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/solutions/acumatica')); ?>">Acumatica Cloud ERP</a><span class="bc-sep">/</span>
  <span class="bc-cur">Distribution Edition</span>
</div></div>

<section class="tabbed-caps" id="capabilities">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">Built for the complexity<br><em>of real distribution operations.</em></h2>
    <p class="tc-desc">Every capability below is native to the Distribution Edition — built to work together and share the same data. Click any tab to explore.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'inventory')"><span class="tab-btn-icon">📦</span><span>Inventory Management</span></button>
      <button class="tab-btn" onclick="switchTab(this,'warehouse')"><span class="tab-btn-icon">🏭</span><span>Warehouse Management</span></button>
      <button class="tab-btn" onclick="switchTab(this,'purchasing')"><span class="tab-btn-icon">📋</span><span>Purchasing &amp; Procurement</span></button>
      <button class="tab-btn" onclick="switchTab(this,'sales')"><span class="tab-btn-icon">💰</span><span>Sales &amp; Omnichannel</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-inventory">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Inventory Management</div>
            <h3 class="tp-title">Know exactly what you have.<br>Where. Right now.</h3>
            <p class="tp-body">Real-time inventory visibility across all warehouse locations, with automated replenishment that keeps the right stock in the right place. From matrix items and lot tracking to demand forecasting and flexible pricing rules — built for distributors who can't afford to guess.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Multi-warehouse inventory control</strong> — Track stock and non-stock items across all locations with real-time visibility, transfer management, and site-level cost tracking</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Matrix items and lot/serial tracking</strong> — Manage size/color/style variants with matrix attributes, track items by lot or serial number, and link serial numbers to item-specific valuation</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Demand forecasting and automated replenishment</strong> — Distribution Requirements Planning (DRP) calculates replenishment by considering on-hand quantities, sales orders, and existing POs within user-defined periods</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Flexible pricing and valuation methods</strong> — Standard cost, FIFO, LIFO, average cost. Complex customer and vendor pricing rules by warehouse, UOM, volume, and quantity</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Live inventory across every location</div><div class="tp-stat-body">Every receipt, shipment, transfer, and adjustment updates inventory in real time — no batch syncs, no end-of-day reconciliations, no wondering what's actually on hand.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🔄</div><div class="tp-stat-title">Automated replenishment that works</div><div class="tp-stat-body">DRP calculates what to order, when, and from which supplier — based on actual demand, current stock, and open purchase orders. Tuned to your reorder rules, not generic defaults.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🧩</div><div class="tp-stat-title">Kit assembly and disassembly</div><div class="tp-stat-body">Assemble and disassemble kits directly in inventory — components consumed, finished goods updated, costs tracked. Useful for bundling, promotional packs, and value-added distribution.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-warehouse">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Warehouse Management</div>
            <h3 class="tp-title">Run your warehouse<br>without a separate WMS.</h3>
            <p class="tp-body">Acumatica's embedded WMS connects every scan, pick, and shipment directly to your inventory and financials — no third-party system, no integration to maintain. Guided, paperless workflows from receiving through shipping. Mobile-first. Barcode-native.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Barcode scanning and mobile-first operations</strong> — iOS and Android support for receiving, put-away, picking, packing, and shipping — every scan updates inventory in real time</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Wave and batch picking</strong> — Group orders into waves or batches for efficient multi-order picking. Paperless, directed workflows with pick priority by warehouse location</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Order Orchestration — 2025 R2</strong> — Automatically selects the optimal warehouse to fulfill each order using Destination Priority or Warehouse Priority</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Carrier integrations and automated shipping</strong> — Direct carrier integrations eliminate data entry errors, auto-generate shipping labels, and update order status from dispatch through delivery</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">No separate WMS license or integration</div><div class="tp-stat-body">Most distributors pay for a WMS separately and maintain an integration to their ERP. Acumatica's WMS is embedded — one system, one data set, no reconciliation between the two.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🛣️</div><div class="tp-stat-title">Order Orchestration — new in 2025 R2</div><div class="tp-stat-body">When you run multiple warehouses, deciding which one to fulfill from used to be manual. Order Orchestration automates the decision based on rules you define.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">✅</div><div class="tp-stat-title">Quality control built into the workflow</div><div class="tp-stat-body">Define and perform quality tests during receiving, shipping, kitting, or returns. Quality certificates generated automatically. Non-conforming items flagged before they reach the customer.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-purchasing">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Purchasing &amp; Procurement</div>
            <h3 class="tp-title">Procure-to-pay.<br>Automated end to end.</h3>
            <p class="tp-body">Automate every step from purchase requisition through vendor payment. Real-time visibility into every supplier transaction, with approval workflows that keep purchasing under control without slowing it down.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Purchase order management</strong> — Blanket orders, drop-ship from vendor to customer, prepayments, partial receipts, and consolidated billing across multiple POs</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Requisition management</strong> — Internal purchase requests routed through configurable approval workflows before becoming purchase orders. Eliminates rogue purchasing and enforces policy.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Drop-ship management</strong> — Create drop-ship POs directly from sales order entry. Vendor ships to customer, costs flow back to the order. Full traceability from customer order to vendor shipment.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AP automation and vendor payments</strong> — AP Document Recognition streamlines invoice entry. Vendor payments automation (new in 2025 R2) eliminates manual payment runs and reduces errors</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card"><div class="tp-stat-icon">📄</div><div class="tp-stat-title">From requisition to receipt in one system</div><div class="tp-stat-body">Purchase requests, approvals, PO creation, receiving, and vendor billing all connected in one workflow. No spreadsheet tracking, no approval emails, no reconciliation between systems.</div></div>
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🚚</div><div class="tp-stat-title">Drop-ship without the coordination headache</div><div class="tp-stat-body">Sales order entry creates the drop-ship PO automatically. The vendor ships direct to your customer. Costs and margins tracked on the original order. No manual hand-off between sales and purchasing.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💳</div><div class="tp-stat-title">Vendor payments automation — 2025 R2</div><div class="tp-stat-body">Automated vendor payment runs eliminate manual processes, reduce errors, and give finance teams time back. New in 2025 R2 across all Distribution Edition deployments.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-sales">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Sales &amp; Omnichannel</div>
            <h3 class="tp-title">Every channel.<br>One source of truth.</h3>
            <p class="tp-body">Quote-to-cash across every sales channel — direct sales, Amazon, Shopify, BigCommerce, EDI, and field reps — all connected to the same inventory, pricing, and financial data. No more channel-specific spreadsheets or inventory mismatches.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Sales order management</strong> — Multi-warehouse fulfillment, credit limit verification, backorder management, RMA processing, and complex pricing rules — all on a single sales order</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>AI Cross-Sell Assistant — 2025 R2</strong> — AI-powered cross-sell and upsell suggestions at order entry, based on historical customer buying patterns. Learns from feedback over time.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Native Amazon, Shopify, and BigCommerce connectors</strong> — Orders, inventory, payments, and shipments sync automatically. BigCommerce multi-location inventory sync new in 2025 R2.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>CRM integration</strong> — Convert CRM opportunities to sales orders without re-entering data. Customer history, pricing, and credit information visible to sales at order entry.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🤖</div><div class="tp-stat-title">AI Cross-Sell Assistant — live in 2025 R2</div><div class="tp-stat-body">At order entry, the system surfaces products that historically sell together based on that customer's buying pattern. Suggestions improve as the system learns from your team's feedback.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🛒</div><div class="tp-stat-title">Channel inventory stays in sync — automatically</div><div class="tp-stat-body">Every order from Amazon, Shopify, or BigCommerce pulls from the same Acumatica inventory. Customers see accurate stock levels. Overselling becomes a non-issue.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💰</div><div class="tp-stat-title">Margin visibility at order entry</div><div class="tp-stat-body">Estimated margin percentages and amounts visible on every order line during creation — so sales can catch margin problems before they ship, not after they invoice.</div></div>
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
        <div class="calc-eyebrow">Free Tool for Distributors</div>
        <h2 class="calc-title">What are your manual processes <em>actually costing you?</em></h2>
        <p class="calc-body">Most distributors know they have inefficiency. Very few have put a dollar figure on it. This tool does that in under 3 minutes — using your own numbers, not industry averages.</p>
        <div class="calc-proof">
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Inventory reconciliation and cycle counting</strong> — how many hours does your team spend manually counting, adjusting, and researching discrepancies every week?</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Manual order entry and processing</strong> — keying orders from email, fax, or phone into your system. Every hour here is a cost that automation eliminates.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Warehouse data entry</strong> — paper-based receiving, pick lists, and shipping documents. Barcode scanning eliminates most of this immediately.</div></div>
          <div class="calc-proof-item"><span class="calc-proof-check">✓</span><div><strong>Customer order status calls</strong> — time spent answering "where is my order?" because sales and customers can't see live shipment status themselves.</div></div>
        </div>
      </div>
      <div>
        <div class="calc-card">
          <span class="calc-card-icon">🧮</span>
          <div class="calc-card-label">ERP Cost of Inaction Calculator</div>
          <div class="calc-card-title">See your estimated savings <em>before you talk to anyone.</em></div>
          <div class="calc-card-body">Eight sliders. Three minutes. A specific dollar figure — based on your hours, your team, your operation.</div>
          <a href="<?php echo esc_url(home_url('/roi-calculator-distribution')); ?>" class="calc-card-btn">🧮 Run the Calculator →</a>
          <div class="calc-card-note">Free · No spreadsheet required · Results emailed to you instantly</div>
        </div>
      </div>
    </div>
    <div class="calc-stats">
      <div class="cs-stat"><div class="cs-stat-num">90%</div><div class="cs-stat-label">Reduction in order processing times</div><div class="cs-stat-sub">Reported by Acumatica customers after implementing automated order and warehouse workflows</div></div>
      <div class="cs-stat"><div class="cs-stat-num">20h</div><div class="cs-stat-label">Saved per week on average</div><div class="cs-stat-sub">By automating manual processes across inventory, warehouse, and purchasing operations</div></div>
      <div class="cs-stat"><div class="cs-stat-num">65%</div><div class="cs-stat-label">Reduction in inventory reconciliation time</div><div class="cs-stat-sub">When real-time barcode scanning replaces manual counting and end-of-day inventory entry</div></div>
    </div>
  </div>
</section>

<section class="video-section">
  <div class="video-inner">
    <div class="video-left">
      <div class="vid-ey">See it in action</div>
      <h2 class="vid-title">Acumatica Distribution — <em>a look inside the platform.</em></h2>
      <p class="vid-body">Watch the official Acumatica distribution overview — inventory management, warehouse operations, purchasing, and omnichannel sales in one connected system.</p>
      <div class="vid-links">
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Distribution Edition Overview</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Inventory Management Video</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Purchasing Video</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Sales Order Video</span></div>
        <div class="vid-link"><span class="vid-link-icon">▶️</span><span class="vid-link-text">Warehouse Management Video</span></div>
      </div>
    </div>
    <div>
      <div class="video-placeholder">
        <div class="vp-play">▶</div>
        <div class="vp-title">Acumatica Distribution Edition Overview</div>
        <div class="vp-label">Contact SOS to see a live demo configured for your operation</div>
      </div>
      <div style="margin-top:10px;font-size:11px;color:rgba(255,255,255,.35);text-align:center">Want a demo built for your operation? <a href="<?php echo esc_url(home_url('/assessment')); ?>" style="color:rgba(255,255,255,.55);text-decoration:underline">Talk to SOS →</a></div>
    </div>
  </div>
</section>

<section class="mfg-expertise">
  <div class="inner">
    <div class="mfg-exp-header">
      <div>
        <div class="sec-ey" style="color:rgba(255,255,255,.5)">Why SOS for Distribution</div>
        <h2 class="mfg-exp-title">We know what a distribution<br>implementation actually takes.</h2>
        <p class="mfg-exp-sub">Not every Acumatica partner has worked inside a distribution operation. Our team has — which changes how we configure, what we anticipate, and what we never skip.</p>
      </div>
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="mfg-exp-cta-btn">Book a Free Assessment →</a>
    </div>
    <div class="mfg-exp-grid">
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">01</div><div class="mfg-exp-card-icon">📦</div><div class="mfg-exp-card-title">Inventory setup that reflects how you actually stock</div><div class="mfg-exp-card-body">Valuation methods, reorder rules, safety stock, matrix items, lot tracking — configured for your product mix and supplier lead times, not textbook defaults.</div><div class="mfg-exp-card-tag">Inventory &amp; Replenishment</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">02</div><div class="mfg-exp-card-icon">🏭</div><div class="mfg-exp-card-title">Warehouse workflows your team will actually follow</div><div class="mfg-exp-card-body">If the pick, pack, and receive workflows aren't built for your floor layout and team size, they'll be worked around. We configure for how your warehouse actually operates.</div><div class="mfg-exp-card-tag">Warehouse &amp; WMS</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">03</div><div class="mfg-exp-card-icon">💰</div><div class="mfg-exp-card-title">Pricing and discount rules that protect your margins</div><div class="mfg-exp-card-body">Customer-specific pricing, volume discounts, promotional rules, and UOM conversions — set up so your sales team quotes accurately and your margins don't erode by accident.</div><div class="mfg-exp-card-tag">Pricing &amp; Sales</div></div>
      <div class="mfg-exp-card"><div class="mfg-exp-card-num">04</div><div class="mfg-exp-card-icon">📊</div><div class="mfg-exp-card-title">Dashboards that tell you what needs action today</div><div class="mfg-exp-card-body">Inventory turns, open orders, backorders, fill rate, and margin by customer — built for the people who make decisions, not one-size-fits-all reports nobody opens.</div><div class="mfg-exp-card-tag">Reporting &amp; Visibility</div></div>
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
    <div class="sec-ey acu">Distribution Models Supported</div>
    <h2 class="sec-title">One platform. <em>Every way distributors actually operate.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:600px;margin-top:4px;margin-bottom:40px">Select your distribution model below.</p>
    <div class="mfg-type-nav">
      <button class="mtype-btn active" onclick="switchType(this,'wholesale')"><span class="mtype-icon">📦</span><span>Wholesale Distribution</span></button>
      <button class="mtype-btn" onclick="switchType(this,'b2c')"><span class="mtype-icon">🛒</span><span>B2C / DTC</span></button>
      <button class="mtype-btn" onclick="switchType(this,'dropship')"><span class="mtype-icon">🚚</span><span>Drop-Ship</span></button>
      <button class="mtype-btn" onclick="switchType(this,'multiwarehouse')"><span class="mtype-icon">🏭</span><span>Multi-Warehouse</span></button>
      <button class="mtype-btn" onclick="switchType(this,'omnichannel')"><span class="mtype-icon">💻</span><span>Omnichannel</span></button>
    </div>
    <div class="mtype-panels">

      <div class="mtype-panel active" id="mtype-wholesale">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Wholesale Distribution</div>
            <h3 class="mtype-title">Buy low, add value,<br>sell to business customers.</h3>
            <p class="mtype-body">You buy in bulk from manufacturers or importers and sell to retailers, contractors, or other businesses. Volume pricing, credit terms, multi-location inventory, and procurement discipline define your operation.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where wholesale distributors typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Customer-specific pricing that sales reps have to look up manually — or memorize</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Inventory spread across multiple locations with no unified real-time view</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Purchasing and AP running in a separate system from inventory and sales</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Customer-specific pricing and discount rules</div><div class="mtype-cap-body">Complex pricing by customer, volume, UOM, and product group — applied automatically at order entry so sales quotes accurately every time.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Multi-site inventory with real-time visibility</div><div class="mtype-cap-body">Every warehouse location visible in one system — stock levels, transfers, and replenishment managed centrally.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Unified procure-to-pay and order-to-cash</div><div class="mtype-cap-body">Purchasing, receiving, inventory, sales, and financials in one platform — no manual reconciliation between systems.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-b2c">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">B2C / Direct-to-Consumer</div>
            <h3 class="mtype-title">Sell direct to consumers<br>at volume and speed.</h3>
            <p class="mtype-body">You sell directly to end consumers — through your own channels, online, or both. High order volume, fast fulfillment expectations, and returns management define your day-to-day operations.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where B2C/DTC distributors typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>High order volume that overwhelms manual entry and processing</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Returns management that takes more time than it should</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>No real-time inventory visibility for the customer-facing team</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Automated order processing and fulfillment</div><div class="mtype-cap-body">Orders from any channel processed automatically — inventory allocated, shipment scheduled, warehouse notified. No manual hand-off.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">RMA and returns management</div><div class="mtype-cap-body">Return Merchandise Authorization with reason codes, credit or replacement processing, and inventory restocking — all on a single returns workflow.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Available-to-promise at order entry</div><div class="mtype-cap-body">Sales and customer service see live inventory across all locations — so every promise to a customer is a promise you can actually keep.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-dropship">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Drop-Ship Distribution</div>
            <h3 class="mtype-title">Sell what you don't stock.<br>Ship from your vendor.</h3>
            <p class="mtype-body">You take customer orders and fulfill them by having your supplier ship directly to your customer. Inventory risk is lower, but the coordination between sales, purchasing, and the customer is everything.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where drop-ship distributors typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Manual coordination between sales and purchasing to create drop-ship POs</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Freight costs from the vendor not flowing back to the customer order for margin tracking</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>No visibility into vendor shipment status to give customers accurate updates</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Auto-generate drop-ship POs from sales orders</div><div class="mtype-cap-body">Drop-ship purchase orders created directly from sales order entry — vendor address, items, and delivery instructions pre-filled. No manual step between sales and purchasing.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Freight and cost tracking back to the order</div><div class="mtype-cap-body">Vendor freight costs linked to the originating sales order — so your margin reporting reflects the true cost of fulfillment, not just product cost.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Vendor receipt creates customer shipment</div><div class="mtype-cap-body">When the vendor confirms shipment, the customer order updates automatically — tracking information flows to the customer without manual data entry.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-multiwarehouse">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Multi-Warehouse Distribution</div>
            <h3 class="mtype-title">Multiple locations.<br>One unified operation.</h3>
            <p class="mtype-body">You run inventory across two or more warehouse locations and need to decide which location fulfills each order, how to transfer stock between sites, and how to manage replenishment for each location independently.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where multi-warehouse distributors typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Manually deciding which warehouse to fulfill from for each order</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>No unified inventory view — each location managed separately in spreadsheets or siloed systems</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Inter-warehouse transfers that create reconciliation problems in the financials</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Order Orchestration — automated warehouse selection</div><div class="mtype-cap-body">Configurable rules automatically select the best warehouse to fulfill each order based on proximity to customer or available stock — no manual decisions.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Unified inventory across all locations</div><div class="mtype-cap-body">One view of all stock across every warehouse. Transfers between locations tracked with full cost and document trail. No spreadsheet aggregation needed.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Site-level replenishment and DRP</div><div class="mtype-cap-body">Distribution Requirements Planning runs at the site level — each location gets its own replenishment rules, reorder points, and safety stock settings.</div></div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mtype-panel" id="mtype-omnichannel">
        <div class="mtype-grid">
          <div class="mtype-left">
            <div class="mtype-tag">Omnichannel Distribution</div>
            <h3 class="mtype-title">Every channel.<br>Same inventory. Same data.</h3>
            <p class="mtype-body">You sell through multiple channels — direct sales, Amazon, Shopify, BigCommerce, EDI, or field reps — and need every channel connected to the same inventory so nothing oversells, nothing goes untracked, and every order lands in one system.</p>
            <div class="mtype-challenges">
              <div class="mtype-challenge-label">Where omnichannel distributors typically struggle</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Inventory not syncing between channels fast enough — overselling on one platform while stock sits allocated elsewhere</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Orders from different channels ending up in different systems with no unified view</div>
              <div class="mtype-challenge-item"><span class="mtype-challenge-icon">⚠️</span>Amazon settlement reconciliation that takes hours every month</div>
            </div>
          </div>
          <div class="mtype-right">
            <div class="mtype-capability-label">How Acumatica handles this</div>
            <div class="mtype-caps">
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Native Amazon, Shopify, and BigCommerce connectors</div><div class="mtype-cap-body">Orders, inventory levels, shipments, and tracking numbers sync automatically. BigCommerce multi-location inventory sync available in 2025 R2.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">Automated Amazon settlement reconciliation</div><div class="mtype-cap-body">Acumatica imports and reconciles Amazon settlement data automatically — pulling reports, validating data, and importing transactions without manual work.</div></div></div>
              <div class="mtype-cap"><div class="mtype-cap-icon">✓</div><div><div class="mtype-cap-name">One order management system for every channel</div><div class="mtype-cap-body">Every order — regardless of channel — flows into a single Acumatica sales order queue. One fulfillment workflow, one inventory pool, one financial record.</div></div></div>
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
      <div class="rescue-ey">Already on Acumatica Distribution?</div>
      <h3 class="rescue-title">Live but inventory still doesn't match what's on the shelf — that's fixable.</h3>
      <p class="rescue-body">Most Acumatica distribution problems aren't platform failures. They're inventory setups that were done generically, replenishment rules that were never tuned, or warehouse workflows the team worked around instead of through. A No-Cost Assessment tells you honestly what's wrong and what it would take to fix it.</p>
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
      <h2 class="final-title">A distribution demo<br><em>built for your operation.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific distribution model, your warehouse setup, and the problems you're actually trying to solve. You'll see Acumatica the way your team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/resources/erp-selection-guide')); ?>" class="btn-out">Take the ERP Selection Guide →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current system, your gaps, and whether Acumatica Distribution Edition is the right fit.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current system and workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Distribution edition fit recommendation</div>
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
