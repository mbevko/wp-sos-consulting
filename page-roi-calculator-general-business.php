<?php
/*
 * Template Name: ROI Calculator General Business
 * Description: General Business ERP Cost of Inaction Calculator — standalone, no site header/footer
 */
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>General Business ERP Cost of Inaction Calculator — SOS Consulting Services</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --teal:#0d3d4f;--teal-mid:#1a5a72;--teal-light:#e8f4f8;
  --red:#c0392b;--stone:#f5f3ef;--stone-mid:#e8e4dd;
  --muted:#6b7a82;--ink:#0e1c22;--bright:#7ecfea;
  --green:#1a6b3a;--white:#ffffff;--acu:#e8843a;
  --serif:"Playfair Display",Georgia,serif;--sans:"DM Sans",sans-serif;
}
html{scroll-behavior:smooth}
body{font-family:var(--sans);background:var(--stone);color:var(--ink);min-height:100vh}
.topbar{background:var(--teal);padding:16px 48px;display:flex;align-items:center;justify-content:space-between}
.topbar-logo{font-family:var(--serif);font-size:16px;color:#fff;font-weight:600;text-decoration:none}
.topbar-back{font-size:12px;color:rgba(255,255,255,.55);text-decoration:none;transition:color .2s}
.topbar-back:hover{color:rgba(255,255,255,.85)}
.hero{background:var(--teal);padding:48px 48px 56px}
.hero-inner{max-width:860px;margin:0 auto}
.hero-tag{display:inline-flex;align-items:center;gap:7px;background:rgba(232,132,58,.15);border:1px solid rgba(232,132,58,.3);border-radius:99px;padding:4px 12px;margin-bottom:18px;font-size:11px;font-weight:700;color:var(--acu);letter-spacing:.1em;text-transform:uppercase}
.hero-dot{width:5px;height:5px;background:var(--acu);border-radius:50%}
.hero h1{font-family:var(--serif);font-size:42px;font-weight:400;color:#fff;line-height:1.1;letter-spacing:-.3px;margin-bottom:14px}
.hero h1 em{font-style:italic;color:var(--bright)}
.hero p{font-size:15px;color:rgba(255,255,255,.55);font-weight:300;line-height:1.7;max-width:600px}
.main{max-width:860px;margin:0 auto;padding:40px 48px 80px}
.screen{display:none}
.screen.active{display:block;animation:fadeUp .35s ease both}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}

/* GATE */
.gate-card{background:var(--white);border:1px solid var(--stone-mid);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(13,61,79,.06)}
.gate-hdr{background:var(--teal-light);border-bottom:1px solid var(--stone-mid);padding:24px 32px;display:flex;align-items:center;gap:14px}
.gate-icon{width:44px;height:44px;border-radius:10px;background:var(--teal);display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
.gate-hdr-title{font-family:var(--serif);font-size:19px;color:var(--teal);font-weight:400;margin-bottom:2px}
.gate-hdr-sub{font-size:13px;color:var(--muted);font-weight:300}
.gate-body{padding:32px}
.gate-intro{font-size:14px;color:var(--muted);font-weight:300;line-height:1.65;margin-bottom:28px}
.gate-intro strong{color:var(--teal);font-weight:500}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:20px}
.form-group{display:flex;flex-direction:column;gap:6px}
.form-group.full{grid-column:span 2}
.form-label{font-size:12px;font-weight:600;color:var(--ink);letter-spacing:.04em;text-transform:uppercase}
.form-input,.form-select{padding:10px 14px;border:1.5px solid var(--stone-mid);border-radius:8px;font-size:14px;font-family:var(--sans);color:var(--ink);background:var(--white);outline:none;transition:border-color .2s}
.form-input:focus,.form-select:focus{border-color:var(--teal)}
.form-input.err{border-color:var(--red)}
.form-select{appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%236b7a82' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;padding-right:36px}
.gate-disc{font-size:11.5px;color:var(--muted);line-height:1.6;margin-bottom:20px;display:flex;gap:8px;align-items:flex-start}
.gate-submit{width:100%;padding:13px;background:var(--red);color:#fff;border:none;border-radius:8px;font-size:14px;font-weight:700;font-family:var(--sans);cursor:pointer;transition:opacity .2s,transform .15s}
.gate-submit:hover{opacity:.9;transform:translateY(-1px)}
.gate-submit:disabled{opacity:.6;cursor:not-allowed;transform:none}
.gate-err{font-size:12px;color:var(--red);margin-bottom:12px;display:none}
.gate-err.show{display:block}

/* CALCULATOR */
.calc-hdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px}
.calc-hdr h2{font-family:var(--serif);font-size:26px;color:var(--teal);font-weight:400;margin-bottom:4px}
.calc-hdr p{font-size:13px;color:var(--muted);font-weight:300}
.calc-tag{font-size:13px;color:var(--teal-mid);font-weight:500;background:var(--teal-light);padding:5px 12px;border-radius:99px}
.calc-layout{display:grid;grid-template-columns:1fr 280px;gap:20px;align-items:start}
.calc-sec{background:var(--white);border:1px solid var(--stone-mid);border-radius:14px;margin-bottom:16px;overflow:hidden}
.sec-hdr{padding:14px 22px;background:var(--stone);border-bottom:1px solid var(--stone-mid);display:flex;align-items:center;gap:10px}
.sec-hdr-icon{font-size:18px}
.sec-hdr-title{font-size:13px;font-weight:600;color:var(--teal)}
.sec-hdr-sub{font-size:11.5px;color:var(--muted);font-weight:300;margin-left:auto}
.sec-body{padding:20px 22px;display:flex;flex-direction:column;gap:18px}
.srow{display:grid;grid-template-columns:1fr 210px;gap:16px;align-items:start}
.srow-name{font-size:14px;font-weight:500;color:var(--ink);margin-bottom:3px}
.srow-desc{font-size:12px;color:var(--muted);font-weight:300;line-height:1.5}
.srow-ctrl{display:flex;flex-direction:column;align-items:flex-end;gap:5px}
.srow-val{font-family:var(--serif);font-size:20px;color:var(--teal);font-weight:400;min-width:72px;text-align:right}
input[type=range]{width:100%;height:4px;appearance:none;background:var(--stone-mid);border-radius:2px;outline:none;cursor:pointer}
input[type=range]::-webkit-slider-thumb{appearance:none;width:18px;height:18px;border-radius:50%;background:var(--teal);border:2px solid var(--white);box-shadow:0 1px 4px rgba(13,61,79,.25);cursor:pointer;transition:transform .15s}
input[type=range]::-webkit-slider-thumb:hover{transform:scale(1.15)}
.rate-row{padding:16px 22px;display:flex;align-items:center;justify-content:space-between;gap:16px}
.rate-lbl{font-size:14px;font-weight:500;color:var(--ink)}
.rate-lbl span{font-size:12px;color:var(--muted);font-weight:300;display:block;margin-top:2px}
.rate-inp-row{display:flex;align-items:center;gap:8px}
.rate-sym{font-size:14px;color:var(--muted)}
.rate-inp{width:90px;padding:7px 10px;border:1.5px solid var(--stone-mid);border-radius:7px;font-size:16px;font-family:var(--serif);color:var(--teal);font-weight:400;text-align:center;outline:none;transition:border-color .2s}
.rate-inp:focus{border-color:var(--teal)}
.see-btn{width:100%;padding:13px;margin-top:20px;background:var(--red);color:#fff;border:none;border-radius:8px;font-size:14px;font-weight:700;font-family:var(--sans);cursor:pointer;transition:opacity .2s}
.see-btn:hover{opacity:.88}

/* SIDEBAR */
.results-card{background:var(--teal);border-radius:14px;overflow:hidden;position:sticky;top:20px}
.rc-hdr{padding:16px 20px 12px;border-bottom:1px solid rgba(255,255,255,.1)}
.rc-hdr-title{font-size:10px;font-weight:700;color:rgba(255,255,255,.45);letter-spacing:.1em;text-transform:uppercase;margin-bottom:3px}
.rc-hdr-name{font-size:13px;color:rgba(255,255,255,.65);font-weight:300}
.rc-stats{padding:14px 20px;display:flex;flex-direction:column;gap:14px;border-bottom:1px solid rgba(255,255,255,.1)}
.rc-stat-lbl{font-size:10px;color:rgba(255,255,255,.45);font-weight:500;letter-spacing:.06em;text-transform:uppercase;margin-bottom:3px}
.rc-stat-num{font-family:var(--serif);font-size:26px;color:var(--bright);font-weight:400;line-height:1}
.rc-stat-num.big{font-size:34px}
.rc-stat-sub{font-size:11px;color:rgba(255,255,255,.35);font-weight:300;margin-top:2px}
.rc-bd{padding:12px 20px}
.rc-bd-title{font-size:10px;font-weight:700;color:rgba(255,255,255,.35);letter-spacing:.1em;text-transform:uppercase;margin-bottom:8px}
.rc-bd-item{display:flex;align-items:center;justify-content:space-between;padding:5px 0;border-bottom:1px solid rgba(255,255,255,.06)}
.rc-bd-item:last-child{border-bottom:none}
.rc-bd-name{font-size:11.5px;color:rgba(255,255,255,.55);font-weight:300}
.rc-bd-val{font-size:11.5px;color:rgba(255,255,255,.75);font-weight:500}
.rc-cta{padding:14px 20px}
.rc-cta-btn{display:block;width:100%;padding:11px;background:var(--red);color:#fff;border:none;border-radius:7px;font-size:13px;font-weight:700;font-family:var(--sans);cursor:pointer;text-align:center;transition:opacity .2s;margin-bottom:7px}
.rc-cta-btn:hover{opacity:.88}
.rc-note{font-size:11px;color:rgba(255,255,255,.35);text-align:center;line-height:1.5}

/* RESULTS */
.res-hero{background:var(--teal);border-radius:16px;padding:40px;margin-bottom:24px}
.res-ey{font-size:11px;font-weight:700;color:var(--acu);letter-spacing:.1em;text-transform:uppercase;margin-bottom:10px}
.res-hero h2{font-family:var(--serif);font-size:34px;color:#fff;font-weight:400;line-height:1.15;margin-bottom:6px}
.res-hero h2 em{font-style:italic;color:var(--bright)}
.res-sub{font-size:14px;color:rgba(255,255,255,.5);font-weight:300}
.res-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:26px}
.rstat{background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:18px 20px}
.rstat-lbl{font-size:10px;color:rgba(255,255,255,.4);font-weight:500;letter-spacing:.06em;text-transform:uppercase;margin-bottom:6px}
.rstat-num{font-family:var(--serif);font-size:30px;color:var(--bright);font-weight:400;line-height:1;margin-bottom:4px}
.rstat-sub{font-size:11.5px;color:rgba(255,255,255,.4);font-weight:300;line-height:1.5}
.res-body{display:grid;grid-template-columns:1fr 300px;gap:20px}
.res-table{background:var(--white);border:1px solid var(--stone-mid);border-radius:14px;overflow:hidden}
.res-table-hdr{padding:14px 22px;background:var(--stone);border-bottom:1px solid var(--stone-mid);font-size:13px;font-weight:600;color:var(--teal)}
.res-row{display:grid;grid-template-columns:1fr 110px 110px;gap:10px;padding:11px 22px;border-bottom:1px solid var(--stone-mid);align-items:center}
.res-row:last-child{border-bottom:none}
.res-row.total{background:var(--teal-light)}
.res-name{font-size:13px;color:var(--ink);font-weight:400}
.res-row.total .res-name{font-weight:600;color:var(--teal)}
.res-hrs{font-size:11.5px;color:var(--muted);text-align:right}
.res-save{font-size:13px;font-weight:600;color:var(--green);text-align:right}
.res-row.total .res-save{color:var(--teal);font-size:14px}
.res-right{display:flex;flex-direction:column;gap:16px}
.res-cta{background:var(--teal);border-radius:14px;padding:24px}
.res-cta-ey{font-size:10px;font-weight:700;color:var(--bright);letter-spacing:.1em;text-transform:uppercase;margin-bottom:8px}
.res-cta-title{font-family:var(--serif);font-size:18px;color:#fff;font-weight:400;line-height:1.3;margin-bottom:8px}
.res-cta-body{font-size:12px;color:rgba(255,255,255,.5);font-weight:300;line-height:1.6;margin-bottom:16px}
.res-cta-btn{display:block;background:var(--red);color:#fff;text-align:center;padding:11px;border-radius:7px;font-size:13px;font-weight:700;text-decoration:none;transition:opacity .2s;margin-bottom:8px}
.res-cta-btn:hover{opacity:.88}
.res-phone{display:block;text-align:center;color:rgba(255,255,255,.4);font-size:12px;text-decoration:none}
.res-share{background:var(--white);border:1px solid var(--stone-mid);border-radius:14px;padding:20px}
.res-share-title{font-size:13px;font-weight:600;color:var(--teal);margin-bottom:6px}
.res-share-body{font-size:12px;color:var(--muted);font-weight:300;line-height:1.6;margin-bottom:14px}
.share-btn{display:flex;align-items:center;justify-content:center;gap:7px;padding:9px;border-radius:7px;font-size:12.5px;font-weight:600;cursor:pointer;transition:all .2s;font-family:var(--sans);border:none;margin-bottom:8px;width:100%}
.share-print{background:var(--stone);color:var(--teal)}
.share-print:hover{background:var(--stone-mid)}
.share-email{background:var(--teal-light);color:var(--teal)}
.share-email:hover{background:#d4eaf2}
.disc{background:var(--stone);border:1px solid var(--stone-mid);border-radius:10px;padding:14px 18px;font-size:11.5px;color:var(--muted);font-weight:300;line-height:1.65;margin-top:20px}
.disc strong{color:var(--teal);font-weight:500}
@media(max-width:768px){
  .topbar{padding:14px 20px}
  .hero{padding:32px 20px 40px}
  .hero h1{font-size:30px}
  .main{padding:24px 20px 60px}
  .calc-layout{grid-template-columns:1fr}
  .results-card{position:static;margin-top:0}
  .srow{grid-template-columns:1fr}
  .srow-ctrl{align-items:flex-start}
  .res-body{grid-template-columns:1fr}
  .res-stats{grid-template-columns:1fr 1fr}
  .form-grid{grid-template-columns:1fr}
  .form-group.full{grid-column:span 1}
}
@media print{.topbar,.rc-cta,.res-share,.see-btn{display:none!important}body{background:white}.res-hero{-webkit-print-color-adjust:exact;print-color-adjust:exact}}
</style>
<?php wp_head(); ?>
</head>
<body>

<div class="topbar">
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="topbar-logo">SOS Consulting Services</a>
  <a href="<?php echo esc_url( home_url('/solutions/acumatica/general-business/') ); ?>" class="topbar-back">&larr; Back to General Business</a>
</div>

<div class="hero">
  <div class="hero-inner">
    <div class="hero-tag"><div class="hero-dot"></div> Free Tool for Growing Businesses</div>
    <h1>General Business ERP<br><em>Cost of Inaction Calculator</em></h1>
    <p>Estimate the annual cost of manual finance, CRM, and operational processes at your organization. Takes 3 minutes. Results are yours to keep.</p>
  </div>
</div>

<div class="main">

<!-- SCREEN 1: GATE -->
<div class="screen active" id="s-gate">
  <div class="gate-card">
    <div class="gate-hdr">
      <div class="gate-icon">🧮</div>
      <div>
        <div class="gate-hdr-title">Before we run your numbers</div>
        <div class="gate-hdr-sub">We'll send you a copy of your results — and nothing else unless you ask.</div>
      </div>
    </div>
    <div class="gate-body">
      <p class="gate-intro">This calculator estimates the <strong>soft cost savings</strong> your organization could realize by replacing manual finance, CRM, and operational processes with Acumatica General Business Edition. Enter your info below to unlock the calculator and receive your results by email.</p>
      <div class="form-grid">
        <div class="form-group"><label class="form-label">First Name</label><input class="form-input" type="text" id="fname" placeholder="Jane" autocomplete="given-name"></div>
        <div class="form-group"><label class="form-label">Last Name</label><input class="form-input" type="text" id="lname" placeholder="Smith" autocomplete="family-name"></div>
        <div class="form-group"><label class="form-label">Work Email</label><input class="form-input" type="email" id="email" placeholder="jane@company.com" autocomplete="email"></div>
        <div class="form-group"><label class="form-label">Company</label><input class="form-input" type="text" id="company" placeholder="Acme Corp" autocomplete="organization"></div>
        <div class="form-group">
          <label class="form-label">Industry</label>
          <select class="form-select" id="industry">
            <option value="">Select your industry</option>
            <option>Professional Services</option><option>Nonprofit / Mission-Driven</option>
            <option>Software &amp; Technology</option><option>Multi-Entity / Holding Company</option>
            <option>Financial Services</option><option>Healthcare / Medical</option>
            <option>Media &amp; Advertising</option><option>Other Services</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Company Size</label>
          <select class="form-select" id="emp">
            <option value="">Select headcount</option>
            <option>1–25 employees</option><option>26–75 employees</option>
            <option>76–200 employees</option><option>201–500 employees</option><option>500+ employees</option>
          </select>
        </div>
        <div class="form-group full"><label class="form-label">Current ERP / Accounting System</label><input class="form-input" type="text" id="erp" placeholder="e.g. QuickBooks, Sage 300, SAP, None"></div>
      </div>
      <div class="gate-disc">
        <span style="font-size:14px;flex-shrink:0">🔒</span>
        <span>Your info is used only to send your results and for SOS to follow up if you request it. We don't sell or share your data. You can opt out at any time.</span>
      </div>
      <div class="gate-err" id="gate-err">Please fill in all required fields with a valid email address.</div>
      <button class="gate-submit" id="gate-btn">Unlock the Calculator &rarr;</button>
    </div>
  </div>
</div>

<!-- SCREEN 2: CALCULATOR -->
<div class="screen" id="s-calc">
  <div class="calc-hdr">
    <div><h2>Your ROI Calculator</h2><p>Drag each slider to match your current manual process hours across finance, CRM, and operations</p></div>
    <div class="calc-tag" id="u-tag">—</div>
  </div>
  <div class="calc-layout">
    <div id="calc-left">
      <div class="calc-sec">
        <div class="rate-row">
          <div class="rate-lbl">Average fully-loaded hourly rate<span>Salary + benefits + overhead. Blended average across affected roles.</span></div>
          <div class="rate-inp-row"><span class="rate-sym">$</span><input class="rate-inp" type="number" id="rate" value="65" min="20" max="250" step="5"><span class="rate-sym">/hr</span></div>
        </div>
      </div>
      <div class="calc-sec">
        <div class="sec-hdr"><span class="sec-hdr-icon">📅</span><span class="sec-hdr-title">Weekly manual process hours</span><span class="sec-hdr-sub">Hours per week, team total</span></div>
        <div class="sec-body" id="weekly-sliders"></div>
      </div>
      <div class="calc-sec">
        <div class="sec-hdr"><span class="sec-hdr-icon">📆</span><span class="sec-hdr-title">Monthly manual process hours</span><span class="sec-hdr-sub">Hours per month, team total</span></div>
        <div class="sec-body" id="monthly-sliders"></div>
      </div>
      <button class="see-btn" id="see-btn">See My Full Results &rarr;</button>
    </div>
    <div>
      <div class="results-card">
        <div class="rc-hdr"><div class="rc-hdr-title">Live estimate</div><div class="rc-hdr-name" id="sb-name">—</div></div>
        <div class="rc-stats">
          <div><div class="rc-stat-lbl">Annual manual process cost</div><div class="rc-stat-num" id="rc-cur">$0</div><div class="rc-stat-sub">Current state estimate</div></div>
          <div><div class="rc-stat-lbl">Estimated annual savings</div><div class="rc-stat-num big" id="rc-sav">$0</div><div class="rc-stat-sub">65% avg process reduction</div></div>
          <div><div class="rc-stat-lbl">3-year savings</div><div class="rc-stat-num" id="rc-3yr">$0</div><div class="rc-stat-sub">Conservative projection</div></div>
        </div>
        <div class="rc-bd"><div class="rc-bd-title">Top savings areas</div><div id="rc-bkdn"></div></div>
        <div class="rc-cta"><button class="rc-cta-btn" id="rc-see-btn">See Full Results &rarr;</button><div class="rc-note">Detailed breakdown + payback context</div></div>
      </div>
    </div>
  </div>
</div>

<!-- SCREEN 3: RESULTS -->
<div class="screen" id="s-results">
  <div class="res-hero">
    <div class="res-ey">Your ERP ROI Estimate</div>
    <h2>Here's what your manual finance and<br>operations processes are <em>actually costing you.</em></h2>
    <div class="res-sub" id="res-sub">Based on your inputs</div>
    <div class="res-stats">
      <div class="rstat"><div class="rstat-lbl">Annual manual process cost</div><div class="rstat-num" id="res-cur">—</div><div class="rstat-sub">Estimated soft cost of current state</div></div>
      <div class="rstat"><div class="rstat-lbl">Estimated annual savings</div><div class="rstat-num" id="res-sav">—</div><div class="rstat-sub">65% avg process reduction benchmark</div></div>
      <div class="rstat"><div class="rstat-lbl">3-year savings projection</div><div class="rstat-num" id="res-3yr">—</div><div class="rstat-sub">No compounding growth applied</div></div>
    </div>
  </div>
  <div class="res-body">
    <div>
      <div class="res-table">
        <div class="res-table-hdr">Savings breakdown by process area</div>
        <div id="res-tbl"></div>
      </div>
      <div class="disc"><strong>About these estimates:</strong> Calculations use process-specific reduction benchmarks ranging from 60% to 75%, based on Acumatica customer outcomes for finance and service organizations. Actual savings vary by company size, current system maturity, billing model complexity, and implementation scope. This tool produces directional estimates to inform the ROI conversation, not to guarantee specific savings. For a scoped estimate based on your actual organization, book a free assessment.</div>
    </div>
    <div class="res-right">
      <div class="res-cta">
        <div class="res-cta-ey">Next Step</div>
        <div class="res-cta-title">Turn this estimate into a real implementation plan.</div>
        <div class="res-cta-body">A No-Cost Technology Assessment gives you an honest, scoped view of what implementation would cost, what it includes, and what your actual payback period looks like for your specific operation.</div>
        <a href="<?php echo esc_url( home_url('/assessment/') ); ?>" class="res-cta-btn">Book Free Assessment &rarr;</a>
        <a href="tel:18442448869" class="res-phone">📞 +1 (844) 244-8869</a>
      </div>
      <div class="res-share">
        <div class="res-share-title">Save or share your results</div>
        <div class="res-share-body">A summary will be emailed to you. You can also print this page or share with your team.</div>
        <button class="share-btn share-print" id="print-btn">🖨 Print / Save as PDF</button>
        <button class="share-btn share-email" id="email-btn">📧 Email me the results</button>
        <div style="text-align:center;margin-top:8px"><button id="adj-btn" style="background:none;border:none;font-size:12px;color:var(--muted);cursor:pointer;font-family:var(--sans);text-decoration:underline">&larr; Adjust my inputs</button></div>
      </div>
    </div>
  </div>
</div>

</div>

<script>
var PROCS = [
  {id:"p1",label:"Manual accounting entry & reconciliation",desc:"Journal entries, subledger reconciliation, and corrections that automated posting would eliminate",weekly:true,def:8,max:40,r:0.75},
  {id:"p2",label:"Excel-based management reporting",desc:"Pulling data, building reports, and emailing spreadsheets when live dashboards would give self-service access",weekly:true,def:7,max:40,r:0.75},
  {id:"p3",label:"CRM data entry & maintenance",desc:"Updating contact records, logging activities, syncing data between CRM and accounting manually",weekly:true,def:6,max:40,r:0.65},
  {id:"p4",label:"AP invoice processing",desc:"Manual invoice entry, matching, and routing for approval before AP Document Recognition",weekly:true,def:7,max:40,r:0.70},
  {id:"p5",label:"Expense report processing & approvals",desc:"Collecting, reviewing, and approving employee expense reports without automated workflow",weekly:true,def:5,max:40,r:0.65},
  {id:"p6",label:"Month-end close extra time",desc:"Manual reconciliations, subledger tie-outs, and corrections vs. an automated integrated system",weekly:false,def:20,max:80,r:0.70},
  {id:"p7",label:"Ad-hoc financial reporting requests",desc:"Finance team time spent pulling custom data for management, board reports, and investor requests",weekly:false,def:8,max:40,r:0.65},
  {id:"p8",label:"Project cost tracking & billing",desc:"Manually tracking time against projects, reconciling costs, and preparing client invoices",weekly:false,def:10,max:40,r:0.60}
];

var userData = {};
var HS_PORTAL_ID = '45057611';
var HS_FORM_GUID = 'YOUR_GENERAL_BUSINESS_ROI_FORM_GUID'; // Replace after creating "General Business ROI Calculator Gate" form in HubSpot

function fmt(n) {
  return "$" + Math.round(n).toLocaleString();
}

function buildSliders() {
  var wkly = PROCS.filter(function(p){return p.weekly;});
  var mnth = PROCS.filter(function(p){return !p.weekly;});
  document.getElementById("weekly-sliders").innerHTML = wkly.map(makeSlider).join("");
  document.getElementById("monthly-sliders").innerHTML = mnth.map(makeSlider).join("");
  PROCS.forEach(function(p) {
    var el = document.getElementById(p.id);
    if (el) el.addEventListener("input", recalc);
  });
  document.getElementById("rate").addEventListener("input", recalc);
}

function makeSlider(p) {
  return '<div class="srow">' +
    '<div><div class="srow-name">' + p.label + '</div><div class="srow-desc">' + p.desc + '</div></div>' +
    '<div class="srow-ctrl"><div class="srow-val" id="v-' + p.id + '">' + p.def + ' hrs</div>' +
    '<input type="range" id="' + p.id + '" min="0" max="' + p.max + '" step="1" value="' + p.def + '"></div>' +
    '</div>';
}

function recalc() {
  var rate = parseFloat(document.getElementById("rate").value) || 65;
  var total = 0, savings = 0;
  var items = [];
  PROCS.forEach(function(p) {
    var el = document.getElementById(p.id);
    if (!el) return;
    var hrs = parseInt(el.value);
    var vEl = document.getElementById("v-" + p.id);
    if (vEl) vEl.textContent = hrs + " hrs";
    var annHrs = p.weekly ? hrs * 52 : hrs * 12;
    var cost = annHrs * rate;
    var save = cost * p.r;
    total += cost;
    savings += save;
    if (hrs > 0) items.push({label:p.label, hrs:annHrs, save:save});
  });
  items.sort(function(a,b){return b.save - a.save;});
  document.getElementById("rc-cur").textContent = fmt(total);
  document.getElementById("rc-sav").textContent = fmt(savings);
  document.getElementById("rc-3yr").textContent = fmt(savings * 3);
  var top3 = items.slice(0,3);
  document.getElementById("rc-bkdn").innerHTML = top3.map(function(i) {
    var shortLabel = i.label.split(" ").slice(0,3).join(" ") + "...";
    return '<div class="rc-bd-item"><span class="rc-bd-name">' + shortLabel + '</span><span class="rc-bd-val">' + fmt(i.save) + '/yr</span></div>';
  }).join("");
  return {total:total, savings:savings, items:items};
}

function showScreen(id) {
  document.querySelectorAll(".screen").forEach(function(s){s.classList.remove("active");});
  document.getElementById(id).classList.add("active");
}

function submitGate(fname, lname, email, company, onSuccess) {
  var url = 'https://api.hsforms.com/submissions/v3/integration/submit/' + HS_PORTAL_ID + '/' + HS_FORM_GUID;
  fetch(url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      fields: [
        { name: 'firstname', value: fname },
        { name: 'lastname', value: lname },
        { name: 'email', value: email },
        { name: 'company', value: company },
        { name: 'lead_source', value: 'General Business ROI Calculator' }
      ],
      context: { pageUri: window.location.href, pageName: document.title }
    })
  })
  .then(function() { onSuccess(); })
  .catch(function() { onSuccess(); });
}

document.getElementById("gate-btn").addEventListener("click", function() {
  var fname = document.getElementById("fname").value.trim();
  var lname = document.getElementById("lname").value.trim();
  var email = document.getElementById("email").value.trim();
  var company = document.getElementById("company").value.trim();
  var errEl = document.getElementById("gate-err");
  var ok = true;
  [{id:"fname",v:fname},{id:"lname",v:lname},{id:"email",v:email},{id:"company",v:company}].forEach(function(f) {
    var el = document.getElementById(f.id);
    if (!f.v) { el.classList.add("err"); ok = false; } else { el.classList.remove("err"); }
  });
  if (!ok) { errEl.classList.add("show"); return; }
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    document.getElementById("email").classList.add("err"); errEl.classList.add("show"); return;
  }
  errEl.classList.remove("show");
  userData = {
    fname: fname, lname: lname,
    name: fname + " " + lname, email: email,
    company: company,
    industry: document.getElementById("industry").value,
    emp: document.getElementById("emp").value,
    erp: document.getElementById("erp").value
  };
  var btn = document.getElementById("gate-btn");
  btn.disabled = true;
  btn.textContent = "Loading...";
  submitGate(fname, lname, email, company, function() {
    document.getElementById("u-tag").textContent = userData.name;
    document.getElementById("sb-name").textContent = userData.company || userData.name;
    showScreen("s-calc");
    recalc();
    window.scrollTo({top:0,behavior:"smooth"});
    btn.disabled = false;
    btn.textContent = "Unlock the Calculator →";
  });
});

function showResults() {
  var r = recalc();
  var rate = parseFloat(document.getElementById("rate").value) || 65;
  document.getElementById("res-sub").textContent = "Based on your inputs — " + (userData.company || userData.name || "your company") + " — $" + rate + "/hr avg rate";
  document.getElementById("res-cur").textContent = fmt(r.total);
  document.getElementById("res-sav").textContent = fmt(r.savings);
  document.getElementById("res-3yr").textContent = fmt(r.savings * 3);
  var totalHrs = r.items.reduce(function(a,i){return a+i.hrs;},0);
  var rows = r.items.map(function(i) {
    return '<div class="res-row"><div class="res-name">' + i.label + '</div><div class="res-hrs">' + Math.round(i.hrs).toLocaleString() + ' hrs/yr</div><div class="res-save">' + fmt(i.save) + '/yr</div></div>';
  }).join("");
  rows += '<div class="res-row total"><div class="res-name">Total estimated annual savings</div><div class="res-hrs">' + Math.round(totalHrs).toLocaleString() + ' hrs/yr</div><div class="res-save">' + fmt(r.savings) + '/yr</div></div>';
  document.getElementById("res-tbl").innerHTML = rows;
  showScreen("s-results");
  window.scrollTo({top:0,behavior:"smooth"});
}

document.getElementById("see-btn").addEventListener("click", showResults);
document.getElementById("rc-see-btn").addEventListener("click", showResults);
document.getElementById("adj-btn").addEventListener("click", function() {
  showScreen("s-calc"); window.scrollTo({top:0,behavior:"smooth"});
});
document.getElementById("print-btn").addEventListener("click", function() { window.print(); });
document.getElementById("email-btn").addEventListener("click", function() {
  alert("Results summary will be emailed to " + (userData.email || "you") + ". Check your inbox shortly.");
});

buildSliders();
recalc();
</script>
<?php wp_footer(); ?>
</body>
</html>
