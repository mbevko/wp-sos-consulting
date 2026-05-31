<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://sosconsultingservices.net/wp-content/uploads/2025/09/faviconLogo.png" sizes="32x32" />
  <link rel="apple-touch-icon" href="https://sosconsultingservices.net/wp-content/uploads/2025/09/faviconLogo.png" />

  <!-- MindMatrix tracking -->
  <a href='http://www.mindmatrix.net' title='Marketing Automation' onclick='window.open(this.href);return(false);'>
    <script type='text/javascript' src='https://map.acumatica.com/track/f1ek5d1tl7m/payload.js' async></script>
  </a>

  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7RS9SLW8MF"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-7RS9SLW8MF');
  </script>

  <!-- Google Ads -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16534323270"></script>
  <script>
    gtag('config', 'AW-16534323270');
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5X8KBD9X');</script>
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X8KBD9X" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- ANNOUNCEMENT BAR -->
<div class="ann-bar" id="annBar">
  <span class="ann-pill">New</span>
  <span class="ann-dot"></span>
  <span>SOS is now an ADP-certified integration partner.</span>
  <a href="<?php echo esc_url( home_url('/acumatica') ); ?>">See what this means for your Acumatica implementation →</a>
  <button class="ann-close" onclick="dismissAnn()" aria-label="Dismiss">✕</button>
</div>

<!-- NAV WRAPPER -->
<div class="nav-wrapper" id="navWrapper">
  <nav class="nav" id="mainNav" role="navigation" aria-label="Main navigation">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="nav-logo" aria-label="SOS Consulting Services home">
      <div class="nav-logo-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/images/SOSMorseCodeVertical.png" alt="SOS Consulting Services">
      </div>
      <div>
        <div class="nav-logo-name">SOS Consulting Services</div>
        <div class="nav-logo-tagline">ERP Specialists</div>
      </div>
    </a>

    <!-- Desktop Links -->
    <div class="nav-links" role="menubar">

      <!-- SOLUTIONS -->
      <div class="nav-item" id="item-solutions" role="none">
        <button class="nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false"
                onclick="toggleMenu('solutions')" onkeydown="handleKeydown(event,'solutions')">
          Solutions
          <svg class="nav-chevron" viewBox="0 0 14 14" fill="none">
            <path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="dropdown dropdown-solutions" id="drop-solutions" role="menu">
          <div class="mega-inner">
            <!-- Column 1: By Platform -->
            <div class="mega-col">
              <div class="mega-col-header">By Platform</div>
              <a href="<?php echo esc_url( home_url('/acumatica') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#fff4ec;">⚙️</div>
                <div>
                  <div class="mega-link-name">Acumatica Cloud ERP</div>
                  <div class="mega-link-desc">Manufacturing & Distribution</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/sage-intacct') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#e8f7ee;">📊</div>
                <div>
                  <div class="mega-link-name">Sage Intacct</div>
                  <div class="mega-link-desc">Professional Services & Finance</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/sage-300') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#e8eefb;">🗄️</div>
                <div>
                  <div class="mega-link-name">Sage 300</div>
                  <div class="mega-link-desc">Optimization & Support</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/sage-hrms') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#f5f3ef;">👥</div>
                <div>
                  <div class="mega-link-name">Sage HRMS</div>
                  <div class="mega-link-desc">HR & Payroll</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="mega-link" role="menuitem"
                 style="background:rgba(26,79,160,0.04); border:1px solid rgba(26,79,160,0.12); border-radius:8px; margin-top:8px;">
                <div class="mega-link-icon" style="background:rgba(26,79,160,0.1);">🤖</div>
                <div>
                  <div class="mega-link-name" style="color:var(--blue);">AI ERP Intelligence <span class="mega-link-new">New</span></div>
                  <div class="mega-link-desc">Sage 300 live SQL queries</div>
                </div>
              </a>
            </div>

            <!-- Column 2: By Industry -->
            <div class="mega-col">
              <div class="mega-col-header">By Industry</div>
              <a href="<?php echo esc_url( home_url('/acumatica-manufacturing') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#fff4ec;">🏭</div>
                <div>
                  <div class="mega-link-name">Manufacturing</div>
                  <div class="mega-link-desc">Production, BOM, shop floor, costing</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/acumatica-distribution') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#fff4ec;">📦</div>
                <div>
                  <div class="mega-link-name">Distribution</div>
                  <div class="mega-link-desc">Warehouse, fulfillment, inventory</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/sage-intacct-professional-services') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:#e8f7ee;">💼</div>
                <div>
                  <div class="mega-link-name">Professional Services</div>
                  <div class="mega-link-desc">Project billing, multi-entity</div>
                </div>
              </a>
              <div style="margin-top:16px; padding:14px; background:var(--stone); border-radius:10px;">
                <div style="font-size:11px; font-weight:700; color:var(--muted); letter-spacing:0.06em; text-transform:uppercase; margin-bottom:8px;">Not sure which fits?</div>
                <p style="font-size:11.5px; color:var(--muted); line-height:1.55; font-weight:300; margin-bottom:10px;">Take our 5-minute ERP Selection Guide. Get a platform recommendation tailored to your business.</p>
                <a href="<?php echo esc_url( home_url('/erp-selection-guide') ); ?>" style="font-size:12px; font-weight:600; color:var(--red); text-decoration:none;">Take the assessment →</a>
              </div>
            </div>

            <!-- Column 3: Your Situation -->
            <div class="mega-col">
              <div class="mega-col-header">Your Situation</div>
              <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="mega-link" role="menuitem"
                 style="background:rgba(192,57,43,0.04); border:1px solid rgba(192,57,43,0.12); border-radius:8px; margin-bottom:8px;">
                <div class="mega-link-icon" style="background:rgba(192,57,43,0.1);">🔧</div>
                <div>
                  <div class="mega-link-name" style="color:var(--red);">ERP Rescue</div>
                  <div class="mega-link-desc">ERP live but not working right</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:var(--stone);">🔍</div>
                <div>
                  <div class="mega-link-name">Evaluating Partners</div>
                  <div class="mega-link-desc">Comparing implementation firms</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:var(--stone);">⚡</div>
                <div>
                  <div class="mega-link-name">Optimization</div>
                  <div class="mega-link-desc">Getting more from existing ERP</div>
                </div>
              </a>
              <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="mega-link" role="menuitem">
                <div class="mega-link-icon" style="background:var(--stone);">🚀</div>
                <div>
                  <div class="mega-link-name">New Implementation</div>
                  <div class="mega-link-desc">First-time ERP or replacement</div>
                </div>
              </a>
              <div style="margin-top:12px; padding:14px; background:var(--teal); border-radius:10px;">
                <div style="font-size:11px; font-weight:700; color:var(--bright); letter-spacing:0.06em; text-transform:uppercase; margin-bottom:6px;">Free · No Obligation</div>
                <div style="font-family:var(--serif); font-size:14px; color:#fff; font-weight:400; margin-bottom:8px; line-height:1.3;">Not sure where to start?</div>
                <a href="<?php echo esc_url( home_url('/assessment') ); ?>" style="font-size:12px; font-weight:700; color:#fff; text-decoration:none; background:var(--red); padding:7px 14px; border-radius:6px; display:inline-block;">Book Free Assessment →</a>
              </div>
            </div>
          </div>
          <div class="mega-footer">
            <div class="mega-footer-text"><strong>99.5% implementation rate</strong> · 10.5yr avg. client relationship · &lt;1% billing disputes</div>
            <a href="<?php echo esc_url( home_url('/about') ); ?>" class="mega-footer-link">Why SOS →</a>
          </div>
        </div>
      </div>

      <!-- SERVICES -->
      <div class="nav-item" id="item-services" role="none">
        <button class="nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false"
                onclick="toggleMenu('services')" onkeydown="handleKeydown(event,'services')">
          Services
          <svg class="nav-chevron" viewBox="0 0 14 14" fill="none">
            <path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="dropdown dropdown-services" id="drop-services" role="menu">
          <div class="svc-inner">
            <div class="svc-problems">
              <div class="svc-problems-label">What's your challenge?</div>
              <button class="svc-problem active" data-svc="implementation" onmouseenter="showSvc('implementation')">
                <div class="svc-problem-icon">⚙️</div>
                <div class="svc-problem-text">Processes slow you down</div>
              </button>
              <button class="svc-problem" data-svc="reports" onmouseenter="showSvc('reports')">
                <div class="svc-problem-icon">📊</div>
                <div class="svc-problem-text">You don't have the data you need</div>
              </button>
              <button class="svc-problem" data-svc="workflow" onmouseenter="showSvc('workflow')">
                <div class="svc-problem-icon">🔄</div>
                <div class="svc-problem-text">System changes risk disruption</div>
              </button>
              <button class="svc-problem" data-svc="training" onmouseenter="showSvc('training')">
                <div class="svc-problem-icon">🎓</div>
                <div class="svc-problem-text">Teams struggle to adopt new tools</div>
              </button>
              <button class="svc-problem" data-svc="subledger" onmouseenter="showSvc('subledger')">
                <div class="svc-problem-icon">🧾</div>
                <div class="svc-problem-text">Financials don't add up</div>
              </button>
              <button class="svc-problem" data-svc="custom" onmouseenter="showSvc('custom')">
                <div class="svc-problem-icon">🛠️</div>
                <div class="svc-problem-text">Out-of-the-box ERP isn't enough</div>
              </button>
            </div>
            <div class="svc-solutions">
              <div class="svc-solution active" id="svc-implementation">
                <div class="svc-sol-eyebrow">ERP Implementation & Migration</div>
                <div class="svc-sol-name">We keep your operations moving — before, during, and after go-live.</div>
                <div class="svc-sol-desc">We manage implementations and migrations so your teams stay productive. No disappearing after launch. We're still there when the edge cases surface 6 months later.</div>
                <a href="<?php echo esc_url( home_url('/services/implementation') ); ?>" class="svc-sol-link">See how implementation works →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Platforms we implement</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/acumatica') ); ?>" class="svc-sol-tag">Acumatica</a>
                  <a href="<?php echo esc_url( home_url('/sage-intacct') ); ?>" class="svc-sol-tag">Sage Intacct</a>
                  <a href="<?php echo esc_url( home_url('/sage-300') ); ?>" class="svc-sol-tag">Sage 300</a>
                  <a href="<?php echo esc_url( home_url('/sage-hrms') ); ?>" class="svc-sol-tag">Sage HRMS</a>
                </div>
              </div>
              <div class="svc-solution" id="svc-reports">
                <div class="svc-sol-eyebrow">Custom Reports & Dashboards</div>
                <div class="svc-sol-name">Real-time answers from your ERP — without waiting for month-end.</div>
                <div class="svc-sol-desc">We build intuitive dashboards and reports that surface the numbers that actually matter — inventory levels, project profitability, cash position — so every decision is made on live data, not last week's export.</div>
                <a href="<?php echo esc_url( home_url('/services/reports') ); ?>" class="svc-sol-link">See reporting examples →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Also consider</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="svc-sol-tag" style="background:rgba(26,79,160,0.08); color:var(--blue);">AI ERP Intelligence ✦</a>
                  <a href="<?php echo esc_url( home_url('/services/workflow') ); ?>" class="svc-sol-tag">Workflow Automation</a>
                </div>
              </div>
              <div class="svc-solution" id="svc-workflow">
                <div class="svc-sol-eyebrow">Workflow Analysis & Process Automation</div>
                <div class="svc-sol-name">We find the bottlenecks — then rebuild the workflows around how you actually work.</div>
                <div class="svc-sol-desc">Production delays, shipping errors, lost billable hours — these aren't people problems, they're process problems. We uncover where work gets stuck and redesign the workflow so the ERP drives it, not your team's memory.</div>
                <a href="<?php echo esc_url( home_url('/services/workflow') ); ?>" class="svc-sol-link">See workflow automation →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Related services</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/services/implementation') ); ?>" class="svc-sol-tag">Implementation</a>
                  <a href="<?php echo esc_url( home_url('/services/custom') ); ?>" class="svc-sol-tag">Custom Development</a>
                </div>
              </div>
              <div class="svc-solution" id="svc-training">
                <div class="svc-sol-eyebrow">ERP Training & Support</div>
                <div class="svc-sol-name">The team you paid to implement your ERP is the team that trains your staff.</div>
                <div class="svc-sol-desc">Tailored training — not generic vendor sessions — delivered by the people who configured your system. We know exactly where your team will get stuck because we built it. Ongoing support included, not sold separately.</div>
                <a href="<?php echo esc_url( home_url('/services/training') ); ?>" class="svc-sol-link">See training & support →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Related services</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/services/implementation') ); ?>" class="svc-sol-tag">Implementation</a>
                  <a href="<?php echo esc_url( home_url('/services/reports') ); ?>" class="svc-sol-tag">Custom Dashboards</a>
                </div>
              </div>
              <div class="svc-solution" id="svc-subledger">
                <div class="svc-sol-eyebrow">Subledger Reconciliation Services</div>
                <div class="svc-sol-name">When the books don't balance, we find exactly where the data broke down.</div>
                <div class="svc-sol-desc">Subledger-to-GL discrepancies, inventory valuation errors, intercompany imbalances — these problems compound quietly until they become an audit issue. We trace them to the source and fix the underlying configuration so they don't come back.</div>
                <a href="<?php echo esc_url( home_url('/services/subledger') ); ?>" class="svc-sol-link">See reconciliation services →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Related services</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/services/reports') ); ?>" class="svc-sol-tag">Custom Reports</a>
                  <a href="<?php echo esc_url( home_url('/adp') ); ?>" class="svc-sol-tag">ADP Integration</a>
                </div>
              </div>
              <div class="svc-solution" id="svc-custom">
                <div class="svc-sol-eyebrow">Custom Software Development</div>
                <div class="svc-sol-name">We build what the platform doesn't — for your exact industry and workflow.</div>
                <div class="svc-sol-desc">Every industry has edge cases the standard ERP never covers. Custom quoting tools, mass price update programs, ADP payroll integrations, industry-specific reporting modules — we build and maintain the extensions that make your ERP actually fit how your business runs.</div>
                <a href="<?php echo esc_url( home_url('/services/custom') ); ?>" class="svc-sol-link">See custom development →</a>
                <div class="svc-sol-divider"></div>
                <div class="svc-sol-also">Certified integrations</div>
                <div class="svc-sol-tags">
                  <a href="<?php echo esc_url( home_url('/adp') ); ?>" class="svc-sol-tag" style="color:var(--blue); background:rgba(26,79,160,0.08);">ADP Workforce Now ✓</a>
                  <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="svc-sol-tag" style="color:var(--blue); background:rgba(26,79,160,0.08);">AI ERP Intelligence ✦</a>
                </div>
              </div>
            </div>
          </div>
          <div class="svc-footer">
            <div class="svc-footer-left">Not sure which service you need? <strong>Start with a free assessment.</strong></div>
            <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="svc-footer-cta">Book Free Assessment →</a>
          </div>
        </div>
      </div>

      <!-- RESOURCES -->
      <div class="nav-item" id="item-resources" role="none">
        <button class="nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false"
                onclick="toggleMenu('resources')" onkeydown="handleKeydown(event,'resources')">
          Resources
          <svg class="nav-chevron" viewBox="0 0 14 14" fill="none">
            <path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="dropdown dropdown-resources" id="drop-resources" role="menu">
          <a href="<?php echo esc_url( home_url('/erp-selection-guide') ); ?>" class="drop-featured" role="menuitem">
            <div class="drop-featured-label">Free Interactive Tool</div>
            <div class="drop-featured-name">ERP Selection Guide</div>
            <div class="drop-featured-desc">10 questions. Platform recommendation + readiness score. Personalized result in 5 minutes.</div>
            <div class="drop-featured-cta">Start the assessment →</div>
          </a>
          <div class="drop-simple" style="padding-top:4px;">
            <a href="<?php echo esc_url( home_url('/category/articles/') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">Blog & Articles</span>
            </a>
            <a href="<?php echo esc_url( home_url('/client-spotlights') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">Client Spotlights</span>
            </a>
            <div class="drop-divider"></div>
            <a href="<?php echo esc_url( home_url('/erp-partner-checklist') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span>
              <span class="drop-link-name">ERP Partner Checklist <span style="font-size:9.5px; color:var(--muted);">— Free PDF</span></span>
            </a>
          </div>
        </div>
      </div>

      <!-- COMPANY -->
      <div class="nav-item" id="item-company" role="none">
        <button class="nav-link" role="menuitem" aria-haspopup="true" aria-expanded="false"
                onclick="toggleMenu('company')" onkeydown="handleKeydown(event,'company')">
          Company
          <svg class="nav-chevron" viewBox="0 0 14 14" fill="none">
            <path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="dropdown dropdown-company" id="drop-company" role="menu">
          <div class="drop-company-card">
            <div class="drop-company-card-name">SOS Consulting Services</div>
            <div class="drop-company-card-tagline">Senior-led ERP implementation for manufacturers, distributors, and professional services firms.</div>
            <div class="drop-company-stats">
              <div class="drop-company-stat">
                <div class="drop-company-stat-num">99.5%</div>
                <div class="drop-company-stat-label">Success rate</div>
              </div>
              <div class="drop-company-stat">
                <div class="drop-company-stat-num">10.5yr</div>
                <div class="drop-company-stat-label">Avg. relationship</div>
              </div>
              <div class="drop-company-stat">
                <div class="drop-company-stat-num">25+</div>
                <div class="drop-company-stat-label">Years experience</div>
              </div>
            </div>
          </div>
          <div class="drop-simple">
            <a href="<?php echo esc_url( home_url('/about') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">About SOS</span>
            </a>
            <a href="<?php echo esc_url( home_url('/meet-the-partners') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">Meet the Partners</span>
            </a>
            <a href="<?php echo esc_url( home_url('/client-spotlights') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">Client Spotlights</span>
            </a>
            <div class="drop-divider"></div>
            <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="drop-link" role="menuitem">
              <span class="drop-link-dot"></span><span class="drop-link-name">Contact</span>
            </a>
            <a href="tel:18442448869" class="drop-link" role="menuitem">
              <span class="drop-link-dot" style="background:var(--teal);"></span>
              <span class="drop-link-name" style="color:var(--teal);">+1 (844) 244-8869</span>
            </a>
          </div>
        </div>
      </div>

    </div><!-- /nav-links -->

    <!-- CTA Buttons -->
    <div class="nav-actions">
      <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="btn-nav-ai">
        <span class="ai-live-dot"></span>Try AI ERP Tool
      </a>
      <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="btn-nav-primary">
        Book Free Assessment
      </a>
    </div>

    <!-- Mobile toggle -->
    <button class="mobile-toggle" onclick="toggleMobile()" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>

  </nav>
</div>

<!-- Backdrop -->
<div class="nav-backdrop" id="navBackdrop" onclick="closeAll()"></div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Mobile navigation">
  <div class="mobile-menu-header">
    <div style="font-family:var(--serif); font-size:15px; color:var(--teal); font-weight:600;">SOS Consulting Services</div>
    <button class="mobile-menu-close" onclick="toggleMobile()">✕</button>
  </div>
  <div class="mobile-section">
    <div class="mobile-section-title">Solutions</div>
    <a href="<?php echo esc_url( home_url('/acumatica') ); ?>" class="mobile-link">Acumatica — Manufacturing & Distribution</a>
    <a href="<?php echo esc_url( home_url('/sage-intacct') ); ?>" class="mobile-link">Sage Intacct — Professional Services</a>
    <a href="<?php echo esc_url( home_url('/sage-300') ); ?>" class="mobile-link">Sage 300 — Optimization & Support</a>
    <a href="<?php echo esc_url( home_url('/sage-hrms') ); ?>" class="mobile-link">Sage HRMS — HR & Payroll</a>
    <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="mobile-link" style="color:var(--blue); font-weight:600;">AI ERP Intelligence ✦ New</a>
  </div>
  <div class="mobile-section">
    <div class="mobile-section-title">Services</div>
    <a href="<?php echo esc_url( home_url('/services/implementation') ); ?>" class="mobile-link">ERP Implementation & Migration</a>
    <a href="<?php echo esc_url( home_url('/services/workflow') ); ?>" class="mobile-link">Workflow Automation</a>
    <a href="<?php echo esc_url( home_url('/services/reports') ); ?>" class="mobile-link">Custom Reports & Dashboards</a>
    <a href="<?php echo esc_url( home_url('/services/training') ); ?>" class="mobile-link">Training & Support</a>
    <a href="<?php echo esc_url( home_url('/adp') ); ?>" class="mobile-link">ADP Integration</a>
  </div>
  <div class="mobile-section">
    <div class="mobile-section-title">Resources</div>
    <a href="<?php echo esc_url( home_url('/erp-selection-guide') ); ?>" class="mobile-link">ERP Selection Guide — Free Tool</a>
    <a href="<?php echo esc_url( home_url('/category/articles/') ); ?>" class="mobile-link">Blog & Articles</a>
    <a href="<?php echo esc_url( home_url('/client-spotlights') ); ?>" class="mobile-link">Client Spotlights</a>
    <a href="<?php echo esc_url( home_url('/erp-partner-checklist') ); ?>" class="mobile-link">ERP Partner Checklist</a>
  </div>
  <div class="mobile-section">
    <div class="mobile-section-title">Company</div>
    <a href="<?php echo esc_url( home_url('/about') ); ?>" class="mobile-link">About SOS</a>
    <a href="<?php echo esc_url( home_url('/meet-the-partners') ); ?>" class="mobile-link">Meet the Partners</a>
    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="mobile-link">Contact</a>
  </div>
  <div class="mobile-ctas">
    <a href="<?php echo esc_url( home_url('/ai-erp-tool') ); ?>" class="mobile-cta-ai">Try AI ERP Tool</a>
    <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="mobile-cta-primary">Book Free Assessment</a>
  </div>
</div>
