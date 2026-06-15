<?php
/*
 * Template Name: Acumatica Payments
 */
get_header();
?>
<div class="acu-page">

<section class="hero">
  <div class="hero-inner">
    <div class="hero-left">
      <div class="module-badge"><div class="mb-dot"></div><span class="mb-text">Acumatica · Integrated Payments</span></div>
      <h1>Get paid faster.<br>Reconcile in minutes.<br><em>Not days.</em></h1>
      <p class="hero-sub">Every payment processed outside your ERP creates manual work on the way back in. <strong>Acumatica Payments eliminates that gap entirely.</strong></p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Book a Free Assessment →</a>
        <a href="#highlights" class="btn-ghost">See All Features ↓</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-img-card">
        <div class="hero-stats">
          <div class="hero-stat"><div class="hs-icon">💳</div><div><div class="hs-title">All major payment types accepted</div><div class="hs-body">Credit cards, debit cards, checks, and ACH from Visa, Mastercard, AmEx, and Discover — all in one integrated system</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🔗</div><div><div class="hs-title">Click-to-pay links from invoices</div><div class="hs-body">Send payment links directly from invoices, sales orders, debit memos, and overdue charges — manually or on a schedule</div></div></div>
          <div class="hero-stat"><div class="hs-icon">🛡️</div><div><div class="hs-title">PCI compliance built in</div><div class="hs-body">Card data stored in the payment network via secure tokens — never locally. Minimizes PCI compliance burden and eliminates card handling by employees</div></div></div>
          <div class="hero-stat"><div class="hs-icon">📱</div><div><div class="hs-title">Mobile payments anywhere</div><div class="hs-body">Accept payments in the field via iOS or Android with a Bluetooth card reader. Collect balances during service calls or on-site at customer locations</div></div></div>
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
  <a href="<?php echo esc_url(home_url('/solutions/acumatica')); ?>">Acumatica Cloud ERP</a><span class="bc-sep">/</span>
  <span class="bc-cur">Payments</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Available across all Acumatica editions:</div>
    <div class="er-tags">
      <span class="er-tag">🏭 Manufacturing</span><span class="er-tag">📦 Distribution</span><span class="er-tag">📊 General Business</span><span class="er-tag">🏗️ Construction</span><span class="er-tag">💼 Professional Services</span><span class="er-tag">🛍️ Retail</span>
    </div>
  </div>
</div>

<div class="acquisition-strip">
  <div class="acq-inner">
    <span class="acq-icon">📢</span>
    <div class="acq-text"><strong>Acumatica has acquired CoreChain Technologies</strong>, an embedded B2B payments orchestration provider, and partnered with <strong>BILL</strong> for AP automation. Together these strengthen Acumatica's AP payments capabilities — complementing Acumatica Payments, which handles AR collections and customer-facing payment processing.</div>
  </div>
</div>

<section class="tabbed-caps" id="what-it-does">
  <div class="inner">
    <div class="sec-ey acu">Core Capabilities</div>
    <h2 class="sec-title">Integrated payment processing<br><em>for every business scenario.</em></h2>
    <p class="tc-desc">Acumatica Payments eliminates the cost and hassle of maintaining external payment systems. Secure, compliant, and cost-effective — connected directly to your AR, sales orders, invoices, and financial reporting.</p>
    <div class="tab-nav" role="tablist">
      <button class="tab-btn active" onclick="switchTab(this,'collect')"><span class="tab-btn-icon">💰</span><span>Collecting Payments</span></button>
      <button class="tab-btn" onclick="switchTab(this,'selfservice')"><span class="tab-btn-icon">💻</span><span>Customer Self-Service</span></button>
      <button class="tab-btn" onclick="switchTab(this,'reconcile')"><span class="tab-btn-icon">📊</span><span>Settlement &amp; Reconciliation</span></button>
      <button class="tab-btn" onclick="switchTab(this,'security')"><span class="tab-btn-icon">🛡️</span><span>Security &amp; Compliance</span></button>
    </div>
    <div class="tab-panels">

      <div class="tab-panel active" id="panel-collect">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Collecting Payments</div>
            <h3 class="tp-title">Accept every payment type.<br>Everywhere your business operates.</h3>
            <p class="tp-body">Accept credit cards, debit cards, checks, and ACH payments from all major banks and card networks. Send click-to-pay links directly from invoices. Collect payments in the field. Process recurring payments automatically.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Credit cards, debit, checks, and ACH</strong> — Visa, Mastercard, AmEx, and Discover accepted. All payment types processed through a single integrated workflow — no separate terminal software.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Click-to-pay links from invoices and orders</strong> — Send payment request links directly from invoices, sales orders, debit memos, and overdue charges. Manually or as a scheduled routine.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Mobile payments via Bluetooth card reader</strong> — Accept payments anywhere using a Bluetooth card reader on iOS or Android. EMV-compliant transactions processed instantly from the Acumatica mobile app.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Recurring payments and subscription billing</strong> — Automatically issue invoices, collect recurring payments, and manage expiring credit cards. No manual follow-up on subscription renewals.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🔗</div><div class="tp-stat-title">Payment links sent from inside Acumatica</div><div class="tp-stat-body">No third-party invoicing tool. No copy-paste into an email. Send a secure payment link directly from the invoice or sales order — the customer clicks, pays, and the AR record updates automatically.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">Collect at the point of service</div><div class="tp-stat-body">Field service technicians collect payment on-site via the Acumatica mobile app with a Bluetooth card reader. Cash flow doesn't wait for the office to process an invoice.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💳</div><div class="tp-stat-title">Integrated card readers for in-person payments</div><div class="tp-stat-body">Industry-standard card readers support magnetic stripe, smart card, and contactless payments including Google Pay and Apple Pay — all processing directly from Acumatica screens.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-selfservice">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Customer Self-Service</div>
            <h3 class="tp-title">Your customers pay themselves.<br>Your team stops chasing.</h3>
            <p class="tp-body">Provide a simple and secure way for customers to view invoices, manage their account, and pay balances through a self-service portal. Customers securely store their preferred payment method and pay on their schedule.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Customer self-service payment portal</strong> — Customers view invoices, pay balances, make partial payments, and pay multiple invoices simultaneously through a secure portal accessible on any device.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Saved payment methods</strong> — Customers securely store their preferred card or ACH payment method for faster future payments. Stored via secure tokens in the payment network — never locally in your system.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>QR code payments</strong> — Customers scan a QR code on an invoice or statement to access the payment portal instantly. Eliminates manual link lookup and accelerates payment.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Gift cards for loyalty and refunds</strong> — Offer physical or electronic gift cards for holiday promotions, refunds, or loyalty programs. Automatically account for expiring cards and benefit from unused balances.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">👥</div><div class="tp-stat-title">AR collections that run without your team</div><div class="tp-stat-body">When customers can pay through a portal at any time on any device, collection calls drop. Your AR team shifts from chasing payments to managing exceptions.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">📱</div><div class="tp-stat-title">Pay by QR code on any invoice</div><div class="tp-stat-body">QR codes on paper invoices, PDFs, or statements give customers a one-scan path to the payment portal. No login required — no friction between receiving the invoice and paying it.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">🎁</div><div class="tp-stat-title">Gift cards for retention and refunds</div><div class="tp-stat-body">Physical or electronic gift cards managed directly in Acumatica. Issue as refunds, promotional instruments, or loyalty rewards. Expiring balances tracked and accounted for automatically.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-reconcile">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Settlement &amp; Reconciliation</div>
            <h3 class="tp-title">Daily deposits. Automatic reconciliation.<br>No manual batch work.</h3>
            <p class="tp-body">Receive daily bank deposits to improve cash flow. Track and reconcile EFT payment batches alongside credit card and other batches with immediate visibility into successful and rejected payments.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Daily bank deposits</strong> — Payments settle daily directly to your bank account. Cash flow visibility in Acumatica reflects actual balances — not estimated or delayed settlement.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Automatic merchant fee reconciliation</strong> — Electronic files detailing merchant fees and deductions imported automatically — eliminating the manual work of reconciling processing costs against your bank statement.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>EFT batch tracking alongside all other payments</strong> — Track ACH, credit card, and other payment batches in one view. Immediate visibility into successful and rejected payments.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Partial shipments and future delivery reserves</strong> — Reserve amounts on credit cards for scheduled services or partial shipments. Automatically capture the correct amount when delivery or service completes.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">📊</div><div class="tp-stat-title">Reconciliation that happens automatically</div><div class="tp-stat-body">No manual import of bank files, no cross-referencing payment processor reports with AR records. Settlement data flows into Acumatica automatically — your close is faster because the reconciliation was already done.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💸</div><div class="tp-stat-title">True processing cost visibility</div><div class="tp-stat-body">Merchant fees and deductions imported and matched against transactions automatically. You see your true net collection amount — not just gross payments.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">✅</div><div class="tp-stat-title">Proof of payment receipts sent automatically</div><div class="tp-stat-body">Send proof of purchase receipts to customers after successfully processing a payment — manually or automatically. Reduces inbound payment confirmation requests.</div></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-panel" id="panel-security">
        <div class="tp-grid">
          <div class="tp-left">
            <div class="tp-eyebrow">Security &amp; Compliance</div>
            <h3 class="tp-title">Your card data never touches<br>your servers.</h3>
            <p class="tp-body">Securely store credit card information in the payment network with strict limitations on access through secure tokens. Reduce the effort needed to achieve PCI compliance. Card data is stored in the network, not locally.</p>
            <div class="tp-features">
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Secure token storage — no local card data</strong> — Card information stored in the payment network via secure tokens. Your employees never handle raw card numbers. Risk of fraud and identity theft is significantly reduced.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Reduced PCI compliance burden</strong> — Because no card data is stored locally, your PCI compliance scope is dramatically reduced — fewer audits, lower compliance costs, and simpler annual assessments.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Flexible routing and processing center control</strong> — Set default processing centers for specific branch and payment method combinations. The system automatically selects the correct processor. New in 2025 R2.</div></div>
              <div class="tp-feat"><span class="tp-check">✓</span><div><strong>Level 3 data for lower processing fees</strong> — Increase discounts on commercial and government card payments by transmitting Level 3 data. Reduces interchange fees on qualifying transactions.</div></div>
            </div>
          </div>
          <div class="tp-right">
            <div class="tp-stat-stack">
              <div class="tp-stat-card highlight"><div class="tp-stat-icon">🛡️</div><div class="tp-stat-title">PCI scope reduced by design</div><div class="tp-stat-body">Card data stored in the payment network — not in Acumatica, not on your servers. Your PCI audit scope shrinks because there's simply no local card data to protect.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">💹</div><div class="tp-stat-title">Level 3 data cuts your processing fees</div><div class="tp-stat-body">For businesses that process commercial or government cards, transmitting Level 3 line-item data qualifies transactions for lower interchange rates. The savings compound across high-volume payment processing.</div></div>
              <div class="tp-stat-card"><div class="tp-stat-icon">⚙️</div><div class="tp-stat-title">Flexible routing by branch and method</div><div class="tp-stat-body">Multi-location businesses set default processing centers per branch and per payment method. Payments route correctly automatically — no manual selection, no routing errors between entities.</div></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="highlights-section" id="highlights">
  <div class="inner">
    <div class="sec-ey acu">All 10 Featured Highlights</div>
    <h2 class="sec-title">Every payment scenario.<br><em>One integrated solution.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:4px">Directly from Acumatica's official Payments page — these are all the capabilities included in Acumatica Payments.</p>
    <div class="hl-grid">
      <div class="hl-card"><div class="hl-num">01</div><div><div class="hl-title">Accept All Major Forms of Payment</div><div class="hl-body">Credit cards, debit cards, checks, and ACH from Visa, Mastercard, AmEx, and Discover. All processed through a single integrated workflow.</div></div></div>
      <div class="hl-card"><div class="hl-num">02</div><div><div class="hl-title">Send Payment Links for Easy Payment</div><div class="hl-body">Send click-to-pay links from invoices, sales orders, debit memos, and overdue charges. Pay in full, partial, or multiple invoices at once. Manual or scheduled.</div></div></div>
      <div class="hl-card"><div class="hl-num">03</div><div><div class="hl-title">Enable Customer Self-Service</div><div class="hl-body">Customers pay invoices through a secure self-service portal on any device. Preferred payment methods stored securely via tokens for faster future payments.</div></div></div>
      <div class="hl-card"><div class="hl-num">04</div><div><div class="hl-title">Improve Loyalty with Gift Cards</div><div class="hl-body">Physical or electronic gift cards for promotions, refunds, or loyalty programs. Expiring balances tracked and accounted for automatically.</div></div></div>
      <div class="hl-card"><div class="hl-num">05</div><div><div class="hl-title">Accelerate Settlement and Reconciliation</div><div class="hl-body">Daily bank deposits. EFT batch tracking. Automatic import of merchant fees and deductions. Immediate visibility into successful and rejected payments.</div></div></div>
      <div class="hl-card"><div class="hl-num">06</div><div><div class="hl-title">Collect Payments on Mobile Phones and Devices</div><div class="hl-body">Bluetooth card reader on iOS and Android for EMV-compliant field payments. Collect balances during service calls or on-site from customer locations.</div></div></div>
      <div class="hl-card"><div class="hl-num">07</div><div><div class="hl-title">Reduce Your Risk with Built-In Security</div><div class="hl-body">Card data stored via secure tokens in the payment network — never locally. Reduces PCI compliance scope, minimizes fraud risk, eliminates card handling by staff.</div></div></div>
      <div class="hl-card"><div class="hl-num">08</div><div><div class="hl-title">Process Recurring Payments</div><div class="hl-body">Automatically issue invoices, collect recurring payments, and manage expiring credit cards. No manual follow-up on subscriptions or service contracts.</div></div></div>
      <div class="hl-card"><div class="hl-num">09</div><div><div class="hl-title">Manage Partial Shipments and Future Deliveries</div><div class="hl-body">Reserve amounts on customer cards for scheduled services or partial shipments. Auto-capture the correct amount on delivery. Seamless reauthorization for delays.</div></div></div>
      <div class="hl-card"><div class="hl-num">10</div><div><div class="hl-title">Integrated Card Readers</div><div class="hl-body">Industry-standard terminals for in-person payments from Acumatica screens. Magnetic stripe, smart card, and contactless including Google Pay and Apple Pay.</div></div></div>
    </div>
  </div>
</section>

<section class="why-compact">
  <div class="wc-grid">
    <div class="wc-left">
      <div class="wc-ey">Why SOS for Acumatica Payments</div>
      <h2 class="wc-title">Setup determines whether payments<br><em>flow or create more work.</em></h2>
      <p class="wc-body">Acumatica Payments is included in every edition — but included doesn't mean configured. Payment methods, processing centers, self-service portal setup, recurring billing rules, and AR workflow automation all need to be set up correctly before they save your team time.</p>
      <div class="wc-points">
        <div class="wc-point"><span class="wc-check">✓</span>Payment methods and processing centers configured for your entity structure</div>
        <div class="wc-point"><span class="wc-check">✓</span>Customer portal set up and tested before go-live</div>
        <div class="wc-point"><span class="wc-check">✓</span>Recurring payment rules matched to your actual billing cadences</div>
        <div class="wc-point"><span class="wc-check">✓</span>Settlement and reconciliation workflows automated correctly from day one</div>
        <div class="wc-point"><span class="wc-check">✓</span>Level 3 data configured for qualifying commercial and government transactions</div>
      </div>
    </div>
    <div class="wc-right">
      <div class="wc-stat"><div class="wc-stat-num">99.5%</div><div class="wc-stat-label"><strong>Implementation Success Rate</strong><span>Senior-led delivery, every engagement</span></div></div>
      <div class="wc-stat"><div class="wc-stat-num">10.5</div><div class="wc-stat-label"><strong>Years Avg. Client Relationship</strong><span>We don't disappear after go-live</span></div></div>
      <div class="wc-cta-card">
        <div class="wcc-ey">No-Cost · 60 Min · Senior Partner-Led</div>
        <div class="wcc-title">See Acumatica Payments configured for your AR workflow.</div>
        <div class="wcc-body">Every SOS demo is built around your specific payment methods, customer base, and reconciliation requirements — not a generic product tour.</div>
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
      <div class="rescue-ey">Already on Acumatica but not using Payments?</div>
      <h3 class="rescue-title">If your team is still manually reconciling payments, it's already costing you — that's fixable.</h3>
      <p class="rescue-body">Many Acumatica customers are still processing payments through a disconnected gateway and manually reconciling the results. Acumatica Payments is included in your edition — you may already be paying for it. A No-Cost Assessment tells you what it would take to activate it and what you'd save.</p>
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
      <h2 class="final-title">A Payments demo built<br><em>around your AR workflow.</em></h2>
      <p class="final-body">Every SOS demo is configured around your specific payment methods, customer base, and reconciliation requirements. You'll see Acumatica Payments the way your team would use it — not a generic walkthrough.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Book a Free Assessment →</a>
        <a href="<?php echo esc_url(home_url('/solutions/acumatica')); ?>" class="btn-out">Back to Acumatica Overview →</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost · 60 Min · Senior Partner-Led</div>
      <div class="ac-title">No-Cost Technology Assessment</div>
      <div class="ac-body">Not a sales call. A genuine review of your current payment setup and what it would take to connect Acumatica Payments to your AR workflow.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">✓</span> Current payment workflow review</div>
        <div class="ac-item"><span class="ac-check">✓</span> Acumatica Payments activation assessment</div>
        <div class="ac-item"><span class="ac-check">✓</span> Honest readiness and timeline estimate</div>
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
