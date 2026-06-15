<?php
/*
 * Template Name: Service - Custom Development
 */
get_header();
?>
<div class="svc-page">

<!-- HERO -->
<section class="svc-hero">
  <div class="svc-hero-inner">
    <div class="svc-hero-left">
      <div class="svc-hero-badge"><div class="svc-hero-badge-dot"></div><span class="svc-hero-badge-text">Services &middot; Custom Software Development</span></div>
      <h1 class="svc-hero-h1">We build what the platform<br>does not, for your exact<br><em>industry and workflow.</em></h1>
      <p class="svc-hero-sub">Most ERP consultancies configure software. SOS also builds it. <strong>Custom applications, integrations, desktop utilities, and AI-connected tools</strong> built specifically for how your business operates, on top of the ERP you already run.</p>
      <div class="svc-hero-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-red">Talk to Us About Your Project &rarr;</a>
        <a href="#what-we-build" class="btn-ghost">See What We Build &darr;</a>
      </div>
    </div>
    <div class="svc-hero-right">
      <div class="svc-hero-card">
        <div class="shc-label">Why SOS</div>
        <div class="shc-stats">
          <div class="shc-stat">
            <div class="shc-num">25+</div>
            <div class="shc-text"><strong>Years building on ERP platforms</strong><span>Acumatica, Sage Intacct, Sage 300</span></div>
          </div>
          <div class="shc-stat">
            <div class="shc-num">10.5yr</div>
            <div class="shc-text"><strong>Average client relationship</strong><span>We maintain what we build</span></div>
          </div>
          <div class="shc-stat">
            <div class="shc-num">99.5%</div>
            <div class="shc-text"><strong>Implementation success rate</strong><span>The same team builds and supports your custom work</span></div>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="shc-cta-btn">Talk to Us About Your Project &rarr;</a>
        <a href="tel:18442448869" class="shc-cta-phone">&#x1F4DE; +1 (844) 244-8869</a>
      </div>
    </div>
  </div>
</section>

<div class="bc"><div class="bc-inner">
  <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span class="bc-sep">/</span>
  <a href="<?php echo esc_url(home_url('/services')); ?>">Services</a><span class="bc-sep">/</span>
  <span class="bc-cur">Custom Software Development</span>
</div></div>

<div class="editions-row">
  <div class="er-inner">
    <div class="er-label">Platforms we build on:</div>
    <div class="er-tags">
      <span class="er-tag">&#x1F3ED; Acumatica</span>
      <span class="er-tag">&#x1F4CA; Sage Intacct</span>
      <span class="er-tag">&#x1F4BB; Sage 300</span>
    </div>
  </div>
</div>

<!-- WHAT WE BUILD -->
<section class="svc-cap-section" id="what-we-build">
  <div class="svc-cap-inner">
    <div class="sec-ey">What We Build</div>
    <h2 class="sec-title">Four categories of custom work.<br><em>All built inside the ERP you already run.</em></h2>
    <p style="font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;max-width:580px;margin-top:8px">Every business has processes the standard ERP was not designed for. We build the tools that close those gaps, without replacing the system or adding platforms to maintain.</p>

    <div class="svc-cap-grid">

      <div class="svc-cap-card">
        <div class="svc-cap-icon">&#x1F5A5;&#xFE0F;</div>
        <div class="svc-cap-title">Custom Applications and User Interfaces</div>
        <div class="svc-cap-body">Bespoke screens and tools built inside your ERP, designed around your actual workflows rather than the default layout. When the standard interface requires too many steps, too much navigation, or does not match how your team actually works, we build a better one.</div>
        <div class="svc-cap-items">
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Custom screens tailored to your specific data entry and review workflows</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Batch processing tools for high-volume operations like mass price updates</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Custom grid views that surface the right data in the right format</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Preview and exception handling built into critical workflows</div>
        </div>
      </div>

      <div class="svc-cap-card">
        <div class="svc-cap-icon">&#x1F517;</div>
        <div class="svc-cap-title">ERP Integrations and Middleware</div>
        <div class="svc-cap-body">When two systems need to share data and neither speaks the other&rsquo;s language, we build the connection. API integrations, file-based middleware, conversion utilities, and data transformation tools that keep your systems in sync without manual intervention.</div>
        <div class="svc-cap-items">
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>API-based integration between your ERP and external platforms</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Conversion utilities that transform data between system formats</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>ADP Workforce Now payroll integration for Acumatica and Sage Intacct</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Validation and error handling built into every integration</div>
        </div>
      </div>

      <div class="svc-cap-card">
        <div class="svc-cap-icon">&#x1F5C4;&#xFE0F;</div>
        <div class="svc-cap-title">Data Extensions and Backend Tools</div>
        <div class="svc-cap-body">We build tools that work with your ERP data at a deeper level than the standard interface allows. For Sage 300 and Acumatica, that means working directly with the SQL backend. For Sage Intacct, it means building against the API. The approach differs by platform. The result is the same: extended capabilities without changing the ERP itself.</div>
        <div class="svc-cap-items">
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Desktop applications that read and write ERP data through safe, controlled logic</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Extended data management for records the standard ERP interface handles inefficiently</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>CSV import and export tools with validation and duplicate prevention built in</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Built to preserve the ERP&rsquo;s data integrity regardless of platform</div>
        </div>
      </div>

      <div class="svc-cap-card">
        <div class="svc-cap-icon">&#x1F916;</div>
        <div class="svc-cap-title">AI and Intelligent Data Tools</div>
        <div class="svc-cap-body">We build AI-connected tools that surface intelligence from your ERP data. Not generic AI features bolted on top of the platform, but purpose-built tools designed around the questions your business actually needs answered, connected directly to your data.</div>
        <div class="svc-cap-items">
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>AI tools connected to your ERP&rsquo;s SQL backend for natural language querying</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Intelligent reporting that surfaces anomalies and patterns in your data</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Custom AI interfaces built for how your team actually asks questions</div>
          <div class="svc-cap-item"><span class="svc-cap-check">&#10003;</span>Built and maintained by the same team that knows your ERP configuration</div>
        </div>
        <div style="margin-top:18px;padding-top:16px;border-top:1px solid var(--stone-mid)">
          <a href="https://ai.sosconsultingservices.net" target="_blank" rel="noopener" style="font-size:13px;font-weight:600;color:var(--blue);text-decoration:none;display:inline-flex;align-items:center;gap:6px">
            &#x1F916; Try our AI ERP tool live &rarr;
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CLIENT SPOTLIGHTS -->
<section class="svc-spot-section">
  <div class="svc-spot-inner">
    <div class="svc-spot-ey">Client Spotlights</div>
    <h2 class="svc-spot-title">Real problems.<br><em>Real applications we built.</em></h2>
    <p class="svc-spot-sub">These are not hypothetical examples. Each one is a custom application SOS built for a real client, solving a real operational problem that the ERP could not handle on its own.</p>

    <div class="svc-spot-grid">

      <div class="svc-spot-card">
        <div class="svc-spot-card-tag">Custom Application</div>
        <div class="svc-spot-card-title">Mass Price Update Program</div>
        <div class="svc-spot-card-industry">Cable assembly manufacturer &middot; Sage 300 / Acumatica</div>
        <div class="svc-spot-card-prob">The Problem</div>
        <div class="svc-spot-card-body">Every year, a large volume of open orders had to be updated to reflect new pricing. Manual effort, external support required every time, no way for the client to run the process themselves.</div>
        <div class="svc-spot-card-result">
          <div class="svc-spot-card-result-label">What We Built</div>
          <div class="svc-spot-card-result-text">A program that imports a spreadsheet of updated prices, shows an on-screen preview of affected orders, allows exceptions to be flagged, and executes the update in a single action. A recurring external intervention became a client-managed process.</div>
        </div>
        <a href="https://sosconsultingservices.net/2026/04/08/client-spotlight-mass-price-update/" target="_blank" rel="noopener" class="svc-spot-card-link">Read the full spotlight &rarr;</a>
      </div>

      <div class="svc-spot-card">
        <div class="svc-spot-card-tag">SQL Desktop Application</div>
        <div class="svc-spot-card-title">Extended Description Manager</div>
        <div class="svc-spot-card-industry">Contract furniture manufacturer &middot; Sage 300</div>
        <div class="svc-spot-card-prob">The Problem</div>
        <div class="svc-spot-card-body">Managing extended product descriptions for a large catalog required too much navigation inside Sage. The team was copying data to spreadsheets, editing there, and re-entering it, introducing errors and slowing down content updates.</div>
        <div class="svc-spot-card-result">
          <div class="svc-spot-card-result-label">What We Built</div>
          <div class="svc-spot-card-result-text">A desktop application reading live data from Sage&rsquo;s SQL backend, showing standard and extended descriptions side by side in a custom grid. Bulk CSV import and export, transaction-safe writes, and optional field management without changing Sage&rsquo;s structure.</div>
        </div>
        <a href="https://sosconsultingservices.net/2026/02/27/client-spotlight-extended-description/" target="_blank" rel="noopener" class="svc-spot-card-link">Read the full spotlight &rarr;</a>
      </div>

      <div class="svc-spot-card">
        <div class="svc-spot-card-tag">Integration Middleware</div>
        <div class="svc-spot-card-title">Journal Entry Conversion Utility</div>
        <div class="svc-spot-card-industry">Multi-system migration &middot; Sage 300 to Sage Intacct</div>
        <div class="svc-spot-card-prob">The Problem</div>
        <div class="svc-spot-card-body">Upstream systems produced journal entry data in Sage 300 format. Intacct required a completely different structure. Accounting staff were manually reshaping spreadsheets before every upload, with no audit trail and high error risk.</div>
        <div class="svc-spot-card-result">
          <div class="svc-spot-card-result-label">What We Built</div>
          <div class="svc-spot-card-result-text">A Windows conversion utility that reads Sage-formatted journal templates and outputs Intacct-ready CSV files, handling account string parsing, debit and credit generation, date validation, and error prevention. Upstream systems stayed unchanged.</div>
        </div>
        <a href="https://sosconsultingservices.net/2026/01/29/client-spotlight-journal-entry-conversion-middleware-sage-300-to-intacct/" target="_blank" rel="noopener" class="svc-spot-card-link">Read the full spotlight &rarr;</a>
      </div>

    </div>
  </div>
</section>

<!-- WHAT MAKES SOS DIFFERENT -->
<section class="apart-section">
  <div class="inner">
    <div class="sec-ey">What Makes SOS Different</div>
    <h2 class="sec-title">We are an ERP firm that<br><em>also builds software.</em></h2>
    <div class="apart-grid">

      <div class="apart-card">
        <div class="apart-icon">&#x1F527;</div>
        <div class="apart-title">We know the platform we are building on</div>
        <div class="apart-body">Most custom development firms learn your ERP during the engagement. SOS has been implementing and supporting Acumatica, Sage Intacct, and Sage 300 for over 25 years. We know the APIs, the data structures, and exactly where custom development fits cleanly versus where it creates future problems.</div>
      </div>

      <div class="apart-card">
        <div class="apart-icon">&#x1F4BB;</div>
        <div class="apart-title">We build full applications, not just configurations</div>
        <div class="apart-body">There is a meaningful difference between configuring an ERP module and building a custom application. SOS does both. Desktop utilities, conversion middleware, AI-connected tools, batch processing programs. Purpose-built software that solves problems the platform was never designed to handle.</div>
      </div>

      <div class="apart-card">
        <div class="apart-icon">&#x1F91D;</div>
        <div class="apart-title">One team for the ERP and the custom work</div>
        <div class="apart-body">When your ERP and your custom applications are maintained by the same team, platform updates do not break your custom work without warning and the people who built it understand how your business actually uses it. We manage both sides of the relationship.</div>
      </div>

    </div>
  </div>
</section>

<!-- RESCUE -->
<section class="rescue">
  <div class="rescue-inner">
    <div class="rescue-icon">&#x1F9F0;</div>
    <div class="rescue-content">
      <div class="rescue-ey">Have custom work that is breaking or impossible to maintain?</div>
      <h3 class="rescue-title">Custom development that was built without knowing the platform creates more problems over time than it solves.</h3>
      <p class="rescue-body">We frequently take over custom development that was built quickly by someone who did not understand the ERP architecture. The result is code that breaks on platform updates, is hard to extend, and nobody wants to touch. If you are in that situation, a conversation with us can give you an honest picture of what you have and what it would take to get it right.</p>
    </div>
    <div class="rescue-cta">
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="rescue-btn">Talk to Us &rarr;</a>
      <div class="rescue-note">Senior partner-led &middot; No pitch</div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="final">
  <div class="final-grid">
    <div>
      <div class="final-ey">Have something in mind?</div>
      <h2 class="final-title">Tell us what your ERP<br><em>cannot do. We will build it.</em></h2>
      <p class="final-body">Whether it is a custom integration, a desktop application, a batch processing tool, or something that connects your ERP data to an AI interface, the conversation starts with understanding what you actually need.</p>
      <div class="final-actions">
        <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="btn-white">Talk to Us About Your Project &rarr;</a>
        <a href="<?php echo esc_url(home_url('/adp')); ?>" class="btn-out">See ADP Integration &rarr;</a>
      </div>
    </div>
    <div class="ac">
      <div class="ac-ey">No-Cost &middot; Senior Partner-Led</div>
      <div class="ac-title">Start With a Conversation</div>
      <div class="ac-body">Not a sales call. An honest conversation about what you need built, whether the platform supports it natively, and what custom development would actually involve.</div>
      <div class="ac-list">
        <div class="ac-item"><span class="ac-check">&#10003;</span> Review of your current ERP setup and gaps</div>
        <div class="ac-item"><span class="ac-check">&#10003;</span> Assessment of what configuration vs custom development solves</div>
        <div class="ac-item"><span class="ac-check">&#10003;</span> Honest recommendation on approach and scope</div>
        <div class="ac-item"><span class="ac-check">&#10003;</span> No obligation to move forward</div>
      </div>
      <a href="<?php echo esc_url(home_url('/assessment')); ?>" class="ac-btn">Book Free Assessment &rarr;</a>
      <a href="tel:18442448869" class="ac-phone">&#x1F4DE; +1 (844) 244-8869</a>
    </div>
  </div>
</section>

</div><!-- .svc-page -->
<?php get_footer(); ?>
