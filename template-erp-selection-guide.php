<?php
/*
 * Template Name: ERP Selection Guide
 *
 * Standalone full-page template — does not use get_header()/get_footer().
 * Has its own minimal header (logo only) and full dark-themed layout.
 * Assign this template to the "ERP Selection Guide" page in wp-admin.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ERP Selection Guide — SOS Consulting Services</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --navy:       #0a1628;
  --navy-mid:   #132040;
  --navy-light: #1e3060;
  --teal:       #0d3d4f;
  --teal-mid:   #1a5a72;
  --teal-bright:#7ecfea;
  --red:        #c0392b;
  --red-light:  #fdf0ee;
  --green:      #1a6b3a;
  --green-light:#e8f5ed;
  --amber:      #b06c10;
  --amber-light:#fef3e2;
  --blue-acc:   #2563c4;
  --white:      #ffffff;
  --stone:      #f5f3ef;
  --stone-mid:  #e8e4dd;
  --muted:      #6b7a82;
  --ink:        #0e1c22;
  --serif:      'Playfair Display', Georgia, serif;
  --sans:       'DM Sans', sans-serif;
  --acu:        #e8843a;
  --acu-light:  #fff4ec;
  --intacct:    #00a651;
  --intacct-light: #e8f7ee;
  --sage300:    #1a4fa0;
  --sage300-light: #e8eefb;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--navy);
  color: var(--white);
  min-height: 100vh;
  overflow-x: hidden;
}

body::before {
  content: '';
  position: fixed; inset: 0;
  background:
    radial-gradient(ellipse at 15% 20%, rgba(29,90,115,0.35) 0%, transparent 50%),
    radial-gradient(ellipse at 85% 80%, rgba(37,99,196,0.2) 0%, transparent 50%),
    radial-gradient(ellipse at 50% 50%, rgba(10,22,40,0) 0%, var(--navy) 100%);
  pointer-events: none; z-index: 0;
}

/* ── HEADER ── */
.sos-guide-header {
  position: relative; z-index: 10;
  padding: 20px 48px;
  display: flex; align-items: center; justify-content: space-between;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.sos-guide-logo { display: flex; align-items: center; gap: 10px; text-decoration: none; }
.sos-guide-logo-icon {
  width: 34px; height: 34px;
  background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12);
  border-radius: 7px; display: flex; align-items: center; justify-content: center;
}
.sos-guide-logo-name { font-family: var(--serif); font-size: 15px; font-weight: 600; color: #fff; }
.sos-guide-logo-sub { font-size: 10px; color: rgba(255,255,255,0.35); letter-spacing: 0.08em; text-transform: uppercase; }
.sos-guide-header-label {
  font-size: 12px; font-weight: 500; color: rgba(255,255,255,0.35);
  letter-spacing: 0.06em; text-transform: uppercase;
}

/* ── INTRO ── */
.sos-intro {
  position: relative; z-index: 1;
  max-width: 680px; margin: 0 auto;
  padding: 80px 48px 48px;
  text-align: center;
  animation: fadeUp 0.6s ease both;
}
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(24px); }
  to   { opacity: 1; transform: translateY(0); }
}
.sos-intro-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
  border-radius: 99px; padding: 6px 16px; margin-bottom: 28px;
  font-size: 11px; font-weight: 600; color: var(--teal-bright);
  letter-spacing: 0.1em; text-transform: uppercase;
}
.sos-pulse { width: 6px; height: 6px; background: var(--teal-bright); border-radius: 50%; animation: pulse 2s ease-in-out infinite; }
@keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(1.4)} }
.sos-intro h1 {
  font-family: var(--serif); font-size: 52px; font-weight: 400;
  line-height: 1.08; letter-spacing: -0.5px; margin-bottom: 20px;
}
.sos-intro h1 em { font-style: italic; color: var(--teal-bright); }
.sos-intro-sub {
  font-size: 17px; color: rgba(255,255,255,0.55); font-weight: 300;
  line-height: 1.75; margin-bottom: 40px;
}
.sos-intro-features {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 12px; margin: 40px 0;
}
.sos-intro-feature {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.07);
  border-radius: 12px; padding: 20px 18px; text-align: left;
}
.sos-intro-feature-icon { font-size: 22px; margin-bottom: 10px; }
.sos-intro-feature-title { font-size: 14px; font-weight: 600; color: rgba(255,255,255,0.85); margin-bottom: 6px; }
.sos-intro-feature-desc { font-size: 12px; color: rgba(255,255,255,0.4); line-height: 1.6; font-weight: 300; }
.sos-intro-meta {
  display: flex; align-items: center; justify-content: center;
  gap: 8px; flex-wrap: wrap; margin-bottom: 44px;
}
.sos-intro-meta-chip {
  display: flex; align-items: center; gap: 6px;
  background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
  border-radius: 99px; padding: 6px 14px;
  font-size: 12px; color: rgba(255,255,255,0.55);
}
.sos-start-btn {
  display: inline-flex; align-items: center; gap: 10px;
  background: var(--red); color: #fff;
  padding: 16px 36px; border-radius: 8px;
  font-size: 16px; font-weight: 600; font-family: var(--sans);
  border: none; cursor: pointer;
  transition: transform 0.15s, opacity 0.15s;
  box-shadow: 0 8px 32px rgba(192,57,43,0.35);
}
.sos-start-btn:hover { transform: translateY(-2px); opacity: 0.92; }
.sos-start-btn svg { transition: transform 0.2s; }
.sos-start-btn:hover svg { transform: translateX(4px); }
.sos-intro-note {
  font-size: 12px; color: rgba(255,255,255,0.3);
  margin-top: 16px; line-height: 1.6;
}

/* ── QUIZ ── */
.sos-quiz {
  display: none; position: relative; z-index: 1;
  max-width: 720px; margin: 0 auto;
  padding: 48px 48px 80px;
}
.sos-quiz.active { display: block; }

.sos-q-progress { display: flex; align-items: center; gap: 16px; margin-bottom: 48px; }
.sos-q-steps { display: flex; gap: 5px; flex: 1; }
.sos-q-step {
  height: 3px; flex: 1; border-radius: 99px;
  background: rgba(255,255,255,0.1); transition: background 0.4s ease;
}
.sos-q-step.done    { background: var(--teal-bright); }
.sos-q-step.current { background: rgba(126,207,234,0.5); }
.sos-q-progress-label { font-size: 12px; color: rgba(255,255,255,0.35); white-space: nowrap; }

.sos-q-section-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
  border-radius: 99px; padding: 5px 14px; margin-bottom: 20px;
  font-size: 11px; font-weight: 600; color: rgba(255,255,255,0.5);
  letter-spacing: 0.08em; text-transform: uppercase;
}
.sos-q-section-badge.s1 { border-color: rgba(126,207,234,0.3); color: var(--teal-bright); }
.sos-q-section-badge.s2 { border-color: rgba(232,132,58,0.4); color: #f0a060; }
.sos-q-section-badge.s3 { border-color: rgba(37,99,196,0.4); color: #93b4f5; }

.sos-q-card { animation: slideIn 0.35s cubic-bezier(0.16, 1, 0.3, 1) both; }
@keyframes slideIn {
  from { opacity: 0; transform: translateX(32px); }
  to   { opacity: 1; transform: translateX(0); }
}
.sos-q-num {
  font-family: var(--serif); font-size: 72px; font-weight: 400;
  color: rgba(255,255,255,0.05); line-height: 1;
  margin-bottom: -20px; letter-spacing: -2px;
}
.sos-q-text {
  font-family: var(--serif); font-size: 34px; font-weight: 400;
  line-height: 1.2; color: #fff; margin-bottom: 12px; letter-spacing: -0.3px;
}
.sos-q-text em { font-style: italic; color: var(--teal-bright); }
.sos-q-sub {
  font-size: 15px; color: rgba(255,255,255,0.45); font-weight: 300;
  line-height: 1.65; margin-bottom: 36px; max-width: 560px;
}

.sos-q-options { display: flex; flex-direction: column; gap: 10px; }
.sos-q-option {
  background: rgba(255,255,255,0.05);
  border: 1.5px solid rgba(255,255,255,0.09);
  border-radius: 12px; padding: 18px 22px;
  display: flex; align-items: flex-start; gap: 16px;
  cursor: pointer; transition: all 0.2s; position: relative; overflow: hidden;
}
.sos-q-option:hover { border-color: rgba(255,255,255,0.2); transform: translateX(4px); }
.sos-q-option.selected { border-color: var(--teal-bright); background: rgba(126,207,234,0.08); transform: translateX(0); }
.sos-q-option-letter {
  width: 28px; height: 28px; border-radius: 50%;
  background: rgba(255,255,255,0.08); border: 1.5px solid rgba(255,255,255,0.12);
  display: flex; align-items: center; justify-content: center;
  font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.5);
  flex-shrink: 0; transition: all 0.2s;
}
.sos-q-option.selected .sos-q-option-letter { background: var(--teal-bright); border-color: var(--teal-bright); color: var(--navy); }
.sos-q-option-content { flex: 1; }
.sos-q-option-title { font-size: 15px; font-weight: 500; color: rgba(255,255,255,0.85); margin-bottom: 3px; line-height: 1.4; }
.sos-q-option.selected .sos-q-option-title { color: #fff; }
.sos-q-option-desc { font-size: 13px; color: rgba(255,255,255,0.4); font-weight: 300; line-height: 1.5; }

.sos-q-options-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.sos-q-options-grid .sos-q-option { padding: 14px 16px; }
.sos-q-options-grid .sos-q-option-desc { display: none; }

.sos-q-nav { display: flex; align-items: center; justify-content: space-between; margin-top: 32px; }
.sos-q-back {
  display: flex; align-items: center; gap: 8px;
  background: none; border: 1px solid rgba(255,255,255,0.12);
  border-radius: 7px; padding: 10px 18px;
  font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.45);
  font-family: var(--sans); cursor: pointer; transition: border-color 0.2s, color 0.2s;
}
.sos-q-back:hover { border-color: rgba(255,255,255,0.3); color: rgba(255,255,255,0.7); }
.sos-q-next {
  display: flex; align-items: center; gap: 10px;
  background: rgba(255,255,255,0.08); border: 1.5px solid rgba(255,255,255,0.15);
  border-radius: 7px; padding: 12px 24px;
  font-size: 14px; font-weight: 600; color: rgba(255,255,255,0.5);
  font-family: var(--sans); cursor: not-allowed; transition: all 0.2s;
}
.sos-q-next.ready { background: var(--red); border-color: var(--red); color: #fff; cursor: pointer; box-shadow: 0 4px 20px rgba(192,57,43,0.3); }
.sos-q-next.ready:hover { opacity: 0.9; transform: translateY(-1px); }
.sos-q-next svg { transition: transform 0.2s; }
.sos-q-next.ready:hover svg { transform: translateX(3px); }

/* ── RESULTS ── */
.sos-results { display: none; position: relative; z-index: 1; animation: fadeUp 0.5s ease both; }
.sos-results.active { display: block; }

.sos-results-hero {
  background: linear-gradient(180deg, var(--navy-mid) 0%, var(--navy) 100%);
  border-bottom: 1px solid rgba(255,255,255,0.07);
  padding: 60px 48px 72px; text-align: center;
}
.sos-results-hero-inner { max-width: 680px; margin: 0 auto; }
.sos-results-tag {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
  border-radius: 99px; padding: 5px 14px; margin-bottom: 20px;
  font-size: 11px; font-weight: 600; color: rgba(255,255,255,0.5);
  letter-spacing: 0.1em; text-transform: uppercase;
}
.sos-results-score-ring {
  width: 100px; height: 100px; border-radius: 50%;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  margin: 0 auto 20px; border: 2.5px solid; position: relative;
}
.sos-results-score-num { font-family: var(--serif); font-size: 38px; font-weight: 400; line-height: 1; }
.sos-results-score-label { font-size: 10px; color: rgba(255,255,255,0.4); margin-top: 2px; }
.sos-results-headline { font-family: var(--serif); font-size: 44px; font-weight: 400; line-height: 1.1; margin-bottom: 14px; letter-spacing: -0.3px; }
.sos-results-headline em { font-style: italic; }
.sos-results-desc { font-size: 16px; color: rgba(255,255,255,0.55); font-weight: 300; line-height: 1.75; }

.sos-results-body { max-width: 800px; margin: 0 auto; padding: 48px; }
.sos-results-grid { display: grid; grid-template-columns: 1fr 340px; gap: 28px; align-items: start; }

.sos-rec-section-title {
  font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.35);
  letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px;
}
.sos-rec-card {
  border-radius: 16px; padding: 28px; margin-bottom: 14px;
  border: 1px solid rgba(255,255,255,0.1); position: relative; overflow: hidden;
}
.sos-rec-card.platform { background: rgba(255,255,255,0.05); }
.sos-rec-card.readiness { background: rgba(255,255,255,0.03); }
.sos-rec-card-badge {
  display: inline-flex; align-items: center; gap: 7px;
  border-radius: 99px; padding: 4px 12px; margin-bottom: 14px;
  font-size: 11px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;
}
.badge-acu      { background: rgba(232,132,58,0.2);  border: 1px solid rgba(232,132,58,0.4);  color: #f0a060; }
.badge-intacct  { background: rgba(0,166,81,0.15);   border: 1px solid rgba(0,166,81,0.35);   color: #4ade80; }
.badge-sage300  { background: rgba(26,79,160,0.2);   border: 1px solid rgba(37,99,196,0.4);   color: #93b4f5; }
.badge-evaluate { background: rgba(126,207,234,0.1); border: 1px solid rgba(126,207,234,0.3); color: var(--teal-bright); }
.badge-ready    { background: rgba(26,107,58,0.2);   border: 1px solid rgba(26,107,58,0.4);   color: #4ade80; }
.badge-prep     { background: rgba(176,108,16,0.2);  border: 1px solid rgba(176,108,16,0.4);  color: #fbbf24; }
.sos-rec-card-title { font-family: var(--serif); font-size: 24px; font-weight: 400; color: #fff; margin-bottom: 10px; line-height: 1.2; }
.sos-rec-card-title em { font-style: italic; }
.sos-rec-card-desc { font-size: 14px; color: rgba(255,255,255,0.55); font-weight: 300; line-height: 1.7; margin-bottom: 16px; }
.sos-rec-card-points { display: flex; flex-direction: column; gap: 9px; }
.sos-rec-card-point { display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: rgba(255,255,255,0.6); line-height: 1.5; }
.sos-rec-point-check { flex-shrink: 0; margin-top: 1px; }

.sos-next-steps-card {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
  border-radius: 16px; padding: 28px; margin-bottom: 14px;
}
.sos-next-steps-title { font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.8); margin-bottom: 16px; }
.sos-next-step-item {
  display: flex; align-items: flex-start; gap: 12px;
  padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.06);
}
.sos-next-step-item:last-child { border-bottom: none; padding-bottom: 0; }
.sos-next-step-num {
  width: 22px; height: 22px; border-radius: 50%;
  background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12);
  display: flex; align-items: center; justify-content: center;
  font-size: 11px; font-weight: 600; color: rgba(255,255,255,0.4);
  flex-shrink: 0; margin-top: 1px;
}
.sos-next-step-text { font-size: 13px; color: rgba(255,255,255,0.6); line-height: 1.55; font-weight: 300; }
.sos-next-step-text strong { color: rgba(255,255,255,0.85); font-weight: 500; }

.sos-cta-card {
  background: var(--red); border-radius: 16px; padding: 28px;
  position: sticky; top: 80px;
}
.sos-cta-card-eyebrow { font-size: 10px; font-weight: 700; color: rgba(255,255,255,0.6); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 10px; }
.sos-cta-card-title { font-family: var(--serif); font-size: 22px; font-weight: 400; color: #fff; margin-bottom: 10px; line-height: 1.25; }
.sos-cta-card-title em { font-style: italic; }
.sos-cta-card-desc { font-size: 13px; color: rgba(255,255,255,0.7); font-weight: 300; line-height: 1.65; margin-bottom: 22px; }
.sos-cta-card-includes { display: flex; flex-direction: column; gap: 8px; margin-bottom: 22px; }
.sos-cta-card-include { display: flex; align-items: flex-start; gap: 8px; font-size: 12px; color: rgba(255,255,255,0.75); line-height: 1.4; }
.sos-cta-check { color: rgba(255,255,255,0.9); font-weight: 700; flex-shrink: 0; }
.sos-cta-btn-primary {
  display: block; background: #fff; color: var(--red);
  text-align: center; padding: 13px; border-radius: 8px;
  font-size: 14px; font-weight: 700; text-decoration: none;
  transition: opacity 0.2s; margin-bottom: 10px;
}
.sos-cta-btn-primary:hover { opacity: 0.92; }
.sos-cta-btn-phone {
  display: block; text-align: center;
  border: 1px solid rgba(255,255,255,0.25); border-radius: 8px;
  padding: 11px; color: rgba(255,255,255,0.8);
  font-size: 13px; font-weight: 500; text-decoration: none;
  transition: border-color 0.2s;
}
.sos-cta-btn-phone:hover { border-color: rgba(255,255,255,0.5); }
.sos-cta-card-note { font-size: 11px; color: rgba(255,255,255,0.45); text-align: center; margin-top: 10px; line-height: 1.55; }

.sos-email-section {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
  border-radius: 16px; padding: 28px; margin-bottom: 14px;
}
.sos-email-section-title { font-family: var(--serif); font-size: 20px; font-weight: 400; color: #fff; margin-bottom: 8px; }
.sos-email-section-title em { font-style: italic; }
.sos-email-section-desc { font-size: 13px; color: rgba(255,255,255,0.5); font-weight: 300; line-height: 1.65; margin-bottom: 18px; }
.sos-email-row { display: flex; gap: 0; border-radius: 8px; overflow: hidden; border: 1.5px solid rgba(255,255,255,0.12); }
.sos-email-input {
  flex: 1; padding: 12px 16px; background: rgba(255,255,255,0.06);
  border: none; outline: none; color: #fff; font-size: 14px; font-family: var(--sans);
}
.sos-email-input::placeholder { color: rgba(255,255,255,0.3); }
.sos-email-submit {
  background: var(--teal-mid); color: #fff; border: none;
  padding: 12px 20px; font-size: 13px; font-weight: 600; font-family: var(--sans);
  cursor: pointer; white-space: nowrap; transition: opacity 0.2s;
}
.sos-email-submit:hover { opacity: 0.88; }
.sos-email-note { font-size: 11px; color: rgba(255,255,255,0.3); margin-top: 8px; }

.sos-restart-btn {
  display: flex; align-items: center; gap: 8px; margin: 0 auto 48px;
  background: none; border: 1px solid rgba(255,255,255,0.12);
  border-radius: 7px; padding: 10px 20px;
  font-size: 13px; color: rgba(255,255,255,0.4); font-family: var(--sans);
  cursor: pointer; transition: all 0.2s;
}
.sos-restart-btn:hover { border-color: rgba(255,255,255,0.3); color: rgba(255,255,255,0.7); }

@media (max-width: 700px) {
  .sos-results-grid { grid-template-columns: 1fr; }
  .sos-cta-card { position: static; }
  .sos-intro h1 { font-size: 36px; }
  .sos-intro-features { grid-template-columns: 1fr; }
  .sos-q-text { font-size: 26px; }
  .sos-guide-header { padding: 16px 20px; }
  .sos-intro, .sos-quiz { padding-left: 20px; padding-right: 20px; }
  .sos-results-body { padding: 24px 20px; }
}
</style>
</head>
<body <?php body_class('sos-guide-page'); ?>>

<!-- MINIMAL HEADER -->
<div class="sos-guide-header">
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="sos-guide-logo">
    <div class="sos-guide-logo-icon">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <circle cx="8" cy="8" r="6" stroke="white" stroke-width="1.2"/>
        <path d="M5 8h6M8 5v6" stroke="white" stroke-width="1.2" stroke-linecap="round"/>
      </svg>
    </div>
    <div>
      <div class="sos-guide-logo-name">SOS Consulting Services</div>
      <div class="sos-guide-logo-sub">ERP Specialists</div>
    </div>
  </a>
  <div class="sos-guide-header-label">ERP Selection Guide</div>
</div>

<!-- INTRO SCREEN -->
<div class="sos-intro" id="sosIntroScreen">
  <div class="sos-intro-eyebrow"><span class="sos-pulse"></span>Free · No signup required</div>
  <h1>Find the right ERP.<br><em>Before you talk to anyone.</em></h1>
  <p class="sos-intro-sub">Answer 10 questions about your business and we'll give you a specific platform recommendation, a readiness score, and a clear next step — based on your actual situation, not a sales pitch.</p>

  <div class="sos-intro-features">
    <div class="sos-intro-feature">
      <div class="sos-intro-feature-icon">🎯</div>
      <div class="sos-intro-feature-title">Platform Recommendation</div>
      <div class="sos-intro-feature-desc">Acumatica, Sage Intacct, or Sage 300 — matched to your industry and needs</div>
    </div>
    <div class="sos-intro-feature">
      <div class="sos-intro-feature-icon">📊</div>
      <div class="sos-intro-feature-title">Readiness Score</div>
      <div class="sos-intro-feature-desc">Are you actually ready to start? Or is there internal work to do first?</div>
    </div>
    <div class="sos-intro-feature">
      <div class="sos-intro-feature-icon">🗺</div>
      <div class="sos-intro-feature-title">Clear Next Step</div>
      <div class="sos-intro-feature-desc">A specific, personalized recommendation for what to do from here</div>
    </div>
  </div>

  <div class="sos-intro-meta">
    <div class="sos-intro-meta-chip">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" stroke="currentColor" stroke-width="1.2"/><path d="M6 3.5V6l1.5 1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      5 minutes
    </div>
    <div class="sos-intro-meta-chip">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      10 questions
    </div>
    <div class="sos-intro-meta-chip">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M10 3L5 8.5 2 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      Instant personalized results
    </div>
    <div class="sos-intro-meta-chip">
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="2" y="3" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2"/><path d="M2 5h8" stroke="currentColor" stroke-width="1.2"/></svg>
      No account needed
    </div>
  </div>

  <button class="sos-start-btn" onclick="sosStartQuiz()">
    Start the assessment
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
  </button>
  <p class="sos-intro-note">Takes about 5 minutes. Results are free.</p>
</div>

<!-- QUIZ SCREEN -->
<div class="sos-quiz" id="sosQuizScreen">
  <div class="sos-q-progress">
    <div class="sos-q-steps" id="sosQSteps"></div>
    <div class="sos-q-progress-label" id="sosQProgressLabel">Question 1 of 10</div>
  </div>
  <div id="sosQContainer"></div>
  <div class="sos-q-nav">
    <button class="sos-q-back" id="sosQBackBtn" onclick="sosGoBack()">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L5 7l4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      Back
    </button>
    <button class="sos-q-next" id="sosQNextBtn" onclick="sosGoNext()">
      Continue
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
  </div>
</div>

<!-- RESULTS SCREEN -->
<div class="sos-results" id="sosResultsScreen"></div>

<script>
const SOS_QUESTIONS = [
  { id: 1, section: 1, sectionLabel: "Section 1 of 3 — Business Situation", sectionClass: "s1",
    text: "What best describes your <em>current situation</em> with ERP?",
    sub: "This helps us understand where you are in the process and tailor the right recommendation.",
    options: [
      { id: "a", title: "We don't have an ERP yet — running on QuickBooks, spreadsheets, or legacy software", desc: "Looking to implement a proper system for the first time" },
      { id: "b", title: "We have an ERP but it's not working the way it should", desc: "Live system, but the team has lost confidence or it's never been fully finished" },
      { id: "c", title: "We have an ERP and want to get more value from it", desc: "System is working, but we know we're not using it fully" },
      { id: "d", title: "We're actively evaluating and comparing ERP systems right now", desc: "In the research and shortlisting phase" }
    ]
  },
  { id: '1b', section: 1, conditional: true, sectionLabel: "Section 1 of 3 — Business Situation", sectionClass: "s1",
    text: "Which ERP system are you <em>currently running?</em>",
    sub: "This changes the recommendation significantly — we want to give you advice specific to your actual situation, not a generic answer.",
    options: [
      { id: "acumatica",  title: "Acumatica",                      desc: "Acumatica Cloud ERP" },
      { id: "sage300",    title: "Sage 300",                       desc: "Sage 300cloud / Sage 300 ERP" },
      { id: "intacct",    title: "Sage Intacct",                   desc: "Sage Intacct (cloud financials)" },
      { id: "sage50",     title: "Sage 50 / Peachtree",            desc: "Sage 50cloud, Peachtree" },
      { id: "sage_hrms",  title: "Sage HRMS / Sage 100",           desc: "Sage HRMS, Sage 100, Sage 500" },
      { id: "quickbooks", title: "QuickBooks (Desktop or Online)",  desc: "QuickBooks Enterprise, Pro, Premier, or QBO" },
      { id: "netsuite",   title: "NetSuite",                       desc: "Oracle NetSuite ERP" },
      { id: "dynamics",   title: "Microsoft Dynamics",             desc: "Dynamics GP, BC, NAV, SL, or F&O" },
      { id: "sapb1",      title: "SAP Business One",               desc: "SAP B1 or SAP Business ByDesign" },
      { id: "epicor",     title: "Epicor / Macola",                desc: "Epicor ERP, Kinetic, Macola" },
      { id: "other_erp",  title: "Another ERP system",             desc: "Odoo, Infor, Syspro, JobBOSS, or other" },
      { id: "not_sure",   title: "Not sure / Multiple systems",    desc: "We have several systems or aren't certain what we're running" }
    ]
  },
  { id: 2, section: 1, sectionLabel: "Section 1 of 3 — Business Situation", sectionClass: "s1",
    text: "What industry is your <em>business in?</em>",
    sub: "Industry determines which platform is the best fit — and which features matter most to configure correctly.",
    options: [
      { id: "a", title: "Manufacturing", desc: "Discrete, process, or mixed-mode — including food, fabrication, assembly" },
      { id: "b", title: "Distribution / Wholesale", desc: "Multi-location inventory, order fulfillment, supplier management" },
      { id: "c", title: "Professional Services", desc: "Project-based work, billing by time or milestone, multi-entity structures" },
      { id: "d", title: "Other / Multiple", desc: "Combination of the above, or a different industry entirely" }
    ]
  },
  { id: 3, section: 1, sectionLabel: "Section 1 of 3 — Business Situation", sectionClass: "s1",
    text: "How large is your <em>business?</em>",
    sub: "Company size influences which platform tier is the right fit and how complex the implementation will be.",
    options: [
      { id: "a", title: "Under $5M revenue / Under 25 employees", desc: "Early-stage or lean operation — simplicity and cost matter most" },
      { id: "b", title: "$5M–$50M revenue / 25–150 employees", desc: "Growing business — complexity is increasing faster than current systems can handle" },
      { id: "c", title: "$50M–$250M revenue / 150–500 employees", desc: "Mid-market — need enterprise capability without enterprise complexity" },
      { id: "d", title: "Over $250M revenue / 500+ employees", desc: "Large operation — multi-entity, multi-location, complex reporting requirements" }
    ]
  },
  { id: 4, section: 1, sectionLabel: "Section 1 of 3 — Business Situation", sectionClass: "s1",
    text: "What is your <em>single biggest pain point</em> with your current system?",
    sub: "The most important problems to solve — this guides which features and configuration matter most.",
    options: [
      { id: "a", title: "We can't see what's happening in real time — data is always stale", desc: "Reporting, visibility, and decision-making are suffering" },
      { id: "b", title: "Manual work is out of control — too much Excel, too many workarounds", desc: "The team is spending hours on tasks the system should automate" },
      { id: "c", title: "Inventory or production doesn't match what's in the system", desc: "Data integrity issues causing operational problems" },
      { id: "d", title: "Financial close takes too long and requires too many manual adjustments", desc: "Month-end is painful, slow, and error-prone" }
    ]
  },
  { id: 5, section: 2, sectionLabel: "Section 2 of 3 — Platform Fit", sectionClass: "s2",
    text: "How important is <em>inventory and production tracking</em> to your operation?",
    sub: "This is a key differentiator between platforms — some are built for it, others treat it as secondary.",
    options: [
      { id: "a", title: "Critical — it's the core of what we do", desc: "Production schedules, BOMs, shop floor, warehouse management are central" },
      { id: "b", title: "Important but not the primary focus", desc: "We carry inventory but it's not the most complex part of our operation" },
      { id: "c", title: "Not relevant — we're a services or knowledge business", desc: "Our work is project-based, time-based, or purely financial" },
      { id: "d", title: "We're growing into it — not complex now but will be", desc: "Currently simple but anticipating significant operational growth" }
    ]
  },
  { id: 6, section: 2, sectionLabel: "Section 2 of 3 — Platform Fit", sectionClass: "s2",
    text: "Do you operate across <em>multiple entities, locations, or currencies?</em>",
    sub: "Multi-entity and multi-currency capability is a major platform differentiator — especially for services firms.",
    options: [
      { id: "a", title: "Yes — multiple legal entities that need consolidated reporting", desc: "Intercompany transactions, eliminations, and consolidated financials" },
      { id: "b", title: "Yes — multiple locations but a single legal entity", desc: "Branch management, multi-location inventory, regional reporting" },
      { id: "c", title: "Possibly — we may expand but aren't there yet", desc: "Single entity now, but growth plans include multiple locations or entities" },
      { id: "d", title: "No — single entity, single location, single currency", desc: "Simple structure — the complexity is operational, not structural" }
    ]
  },
  { id: 7, section: 2, sectionLabel: "Section 2 of 3 — Platform Fit", sectionClass: "s2",
    text: "How do you <em>primarily bill your clients or customers?</em>",
    sub: "Billing model is one of the strongest indicators of which platform will handle your revenue recognition correctly.",
    options: [
      { id: "a", title: "Product sales — invoices tied to shipped goods or inventory", desc: "Standard commercial invoicing, purchase orders, inventory movement" },
      { id: "b", title: "Project or milestone billing — invoices tied to work delivered", desc: "Time and materials, fixed-fee projects, or milestone-based engagements" },
      { id: "c", title: "Subscription or recurring billing", desc: "Regular billing cycles, contract terms, renewal management" },
      { id: "d", title: "Multiple or complex — a combination of the above", desc: "Mixed revenue streams that require flexible billing configurations" }
    ]
  },
  { id: 8, section: 3, sectionLabel: "Section 3 of 3 — Readiness & Priorities", sectionClass: "s3",
    text: "Do you have a <em>dedicated internal owner</em> for this project?",
    sub: "ERP implementations without an internal champion have a significantly higher failure rate. This is one of the most honest questions to ask yourself.",
    options: [
      { id: "a", title: "Yes — we have a named project owner with dedicated time", desc: "A specific person who is responsible for driving this internally" },
      { id: "b", title: "Partially — someone is interested but it's not their primary job", desc: "There's an owner in name, but they're wearing other hats" },
      { id: "c", title: "Not yet — we haven't assigned internal ownership", desc: "The initiative exists but no one has been made accountable for it" },
      { id: "d", title: "We're planning to hire or assign someone for this", desc: "Recognizing the gap and planning to address it" }
    ]
  },
  { id: 9, section: 3, sectionLabel: "Section 3 of 3 — Readiness & Priorities", sectionClass: "s3",
    text: "How would you describe the quality of your <em>current data?</em>",
    sub: "Data quality is the single most underestimated factor in ERP implementations. Bad data migrated into a new system is still bad data.",
    options: [
      { id: "a", title: "Clean and well-organized — we're confident in our data", desc: "Chart of accounts is clean, item lists are current, customer records are accurate" },
      { id: "b", title: "Mostly okay — some cleanup needed but manageable", desc: "There are issues but we know what they are and have a plan" },
      { id: "c", title: "Messy — there are problems we haven't fully addressed yet", desc: "Duplicates, inconsistencies, legacy records that need significant work" },
      { id: "d", title: "We're not sure — we haven't assessed it thoroughly", desc: "The data is what it is — we haven't done a formal data audit" }
    ]
  },
  { id: 10, section: 3, sectionLabel: "Section 3 of 3 — Readiness & Priorities", sectionClass: "s3",
    text: "What matters most to you in choosing an <em>implementation partner?</em>",
    sub: "There are no wrong answers here — this helps us understand what a successful engagement looks like for you.",
    options: [
      { id: "a", title: "Industry expertise — I want a partner who has done this in my specific industry", desc: "Generic ERP experience isn't enough — I need sector-specific knowledge" },
      { id: "b", title: "Long-term relationship — I want a partner who is still there in year three", desc: "Post go-live support and continuity matter as much as the implementation itself" },
      { id: "c", title: "Senior involvement — I want experienced people running my project, not juniors", desc: "I don't want to be a training ground for a firm's less experienced staff" },
      { id: "d", title: "Fixed scope and predictable cost — no surprises", desc: "I need to know what I'm buying and trust that it won't balloon" }
    ]
  }
];

function sosGetActiveQuestions() {
  const situation = sosAnswers[1];
  const showCurrentERP = situation === 'b' || situation === 'c';
  return SOS_QUESTIONS.filter(q => {
    if (q.id === '1b') return showCurrentERP;
    return true;
  });
}

let sosCurrent = 0;
let sosAnswers = {};

function sosStartQuiz() {
  document.getElementById('sosIntroScreen').style.display = 'none';
  document.getElementById('sosQuizScreen').classList.add('active');
  sosCurrent = 0;
  sosRenderQuestion(sosCurrent);
  sosUpdateProgress();
}

function sosGoNext() {
  const btn = document.getElementById('sosQNextBtn');
  if (!btn.classList.contains('ready')) return;
  const activeQs = sosGetActiveQuestions();
  if (activeQs[sosCurrent].id === 1) {
    sosCurrent++;
    const newActiveQs = sosGetActiveQuestions();
    sosRenderQuestion(sosCurrent, newActiveQs);
    sosUpdateProgress(newActiveQs);
    window.scrollTo({ top: 0, behavior: 'smooth' });
    return;
  }
  if (sosCurrent < activeQs.length - 1) {
    sosCurrent++;
    sosRenderQuestion(sosCurrent, activeQs);
    sosUpdateProgress(activeQs);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  } else {
    sosShowResults();
  }
}

function sosGoBack() {
  if (sosCurrent > 0) {
    sosCurrent--;
    const activeQs = sosGetActiveQuestions();
    sosRenderQuestion(sosCurrent, activeQs);
    sosUpdateProgress(activeQs);
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

function sosRenderQuestion(idx, activeQs) {
  if (!activeQs) activeQs = sosGetActiveQuestions();
  const q = activeQs[idx];
  const container = document.getElementById('sosQContainer');
  const letters = ['A','B','C','D','E','F','G','H','I','J','K','L'];
  const currentAnswer = sosAnswers[q.id];
  const isLast = idx === activeQs.length - 1;
  container.innerHTML = `
    <div class="sos-q-card">
      <div class="sos-q-section-badge ${q.sectionClass}">${q.sectionLabel}</div>
      <div class="sos-q-num">${String(idx + 1).padStart(2, '0')}</div>
      <div class="sos-q-text">${q.text}</div>
      <div class="sos-q-sub">${q.sub}</div>
      <div class="sos-q-options ${q.options.length > 4 ? 'sos-q-options-grid' : ''}">
        ${q.options.map((opt, i) => `
          <div class="sos-q-option ${currentAnswer === opt.id ? 'selected' : ''}"
               onclick="sosSelectOption('${q.id}', '${opt.id}', this)">
            <div class="sos-q-option-letter">${letters[i]}</div>
            <div class="sos-q-option-content">
              <div class="sos-q-option-title">${opt.title}</div>
              <div class="sos-q-option-desc">${opt.desc}</div>
            </div>
          </div>
        `).join('')}
      </div>
    </div>
  `;
  const nextBtn = document.getElementById('sosQNextBtn');
  const arrowSVG = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
  if (currentAnswer) {
    nextBtn.classList.add('ready');
    nextBtn.innerHTML = (isLast ? 'See my results ' : 'Continue ') + arrowSVG;
  } else {
    nextBtn.classList.remove('ready');
    nextBtn.innerHTML = 'Continue ' + arrowSVG;
  }
  document.getElementById('sosQBackBtn').style.visibility = idx === 0 ? 'hidden' : 'visible';
}

function sosSelectOption(qId, optId, el) {
  sosAnswers[qId] = optId;
  el.closest('.sos-q-options').querySelectorAll('.sos-q-option').forEach(o => o.classList.remove('selected'));
  el.classList.add('selected');
  const activeQs = sosGetActiveQuestions();
  const isLast = sosCurrent === activeQs.length - 1;
  const nextBtn = document.getElementById('sosQNextBtn');
  const arrowSVG = '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
  nextBtn.classList.add('ready');
  nextBtn.innerHTML = (isLast ? 'See my results ' : 'Continue ') + arrowSVG;
  if (!isLast && qId !== '1b' && qId !== 10) {
    setTimeout(() => { if (sosAnswers[qId] === optId) sosGoNext(); }, 480);
  }
}

function sosUpdateProgress(activeQs) {
  if (!activeQs) activeQs = sosGetActiveQuestions();
  const stepsEl = document.getElementById('sosQSteps');
  stepsEl.innerHTML = activeQs.map((_, i) => {
    let cls = '';
    if (i < sosCurrent) cls = 'done';
    else if (i === sosCurrent) cls = 'current';
    return `<div class="sos-q-step ${cls}"></div>`;
  }).join('');
  document.getElementById('sosQProgressLabel').textContent = `Question ${sosCurrent + 1} of ${activeQs.length}`;
}

const SOS_SUPPORTED   = ['acumatica', 'sage300', 'intacct', 'sage_hrms'];
const BASIC_TOOLS     = ['quickbooks', 'sage50'];
const UNSUPPORTED_ERP = ['netsuite', 'dynamics', 'sapb1', 'epicor', 'other_erp'];

function sosComputeRecommendation() {
  const a = sosAnswers;
  const situation    = a[1];
  const currentERP   = a['1b'];
  const industry     = a[2];
  const inventoryImp = a[5];
  const multiEntity  = a[6];
  const billingModel = a[7];
  let readiness = 0;
  if (a[8] === 'a') readiness += 2; else if (a[8] === 'b') readiness += 1;
  if (a[9] === 'a') readiness += 2; else if (a[9] === 'b') readiness += 1;
  const priority = a[10];

  // New evaluation (no current ERP) — Manufacturing/Distribution ALWAYS get Acumatica
  if (situation === 'a' || situation === 'd' || !currentERP) {
    let platform = 'acumatica';
    const isProductIndustry = (industry === 'a' || industry === 'b');
    if (!isProductIndustry && (industry === 'c' || billingModel === 'b' || (multiEntity === 'a' && inventoryImp === 'c'))) {
      platform = 'intacct';
    }
    return { platform, readiness, priority, situation };
  }

  // Existing ERP scenarios
  if (situation === 'b' || situation === 'c') {
    if (BASIC_TOOLS.includes(currentERP)) {
      let platform = 'acumatica';
      const isProductIndustry = (industry === 'a' || industry === 'b');
      if (!isProductIndustry && (industry === 'c' || billingModel === 'b')) platform = 'intacct';
      return { platform, readiness, priority, situation: 'outgrown', currentERP };
    }
    if (SOS_SUPPORTED.includes(currentERP)) {
      const mode = situation === 'b' ? 'rescue' : 'optimize';
      return { platform: `${currentERP}_${mode}`, readiness, priority, situation, currentERP };
    }
    if (UNSUPPORTED_ERP.includes(currentERP)) {
      let suggestedPlatform = 'acumatica';
      const isProductIndustry = (industry === 'a' || industry === 'b');
      if (!isProductIndustry && (industry === 'c' || billingModel === 'b')) suggestedPlatform = 'intacct';
      return { platform: 'migration_pivot', readiness, priority, situation, currentERP, suggestedPlatform };
    }
    if (currentERP === 'not_sure') {
      return { platform: 'generic_assess', readiness, priority, situation, currentERP };
    }
  }
  return { platform: 'acumatica', readiness, priority, situation };
}

const SOS_ERP_NAMES = {
  acumatica: 'Acumatica', sage300: 'Sage 300', intacct: 'Sage Intacct',
  sage_hrms: 'Sage HRMS', quickbooks: 'QuickBooks', sage50: 'Sage 50',
  netsuite: 'NetSuite', dynamics: 'Microsoft Dynamics', sapb1: 'SAP Business One',
  epicor: 'Epicor', other_erp: 'your current ERP', not_sure: 'your current system'
};

function sosShowResults() {
  document.getElementById('sosQuizScreen').classList.remove('active');
  const resultsEl = document.getElementById('sosResultsScreen');
  resultsEl.classList.add('active');

  const { platform, readiness, priority, situation, currentERP, suggestedPlatform } = sosComputeRecommendation();
  const erpName = currentERP ? (SOS_ERP_NAMES[currentERP] || 'your current ERP') : null;
  const suggestedName = suggestedPlatform === 'intacct' ? 'Sage Intacct' : 'Acumatica';

  const platformContent = {
    acumatica: {
      badgeClass: 'badge-acu', badgeLabel: 'Recommended Platform',
      headline: 'Acumatica is <em>the right fit</em> for your business.',
      desc: 'Based on your industry, operational profile, and growth stage, Acumatica is the strongest platform match. Purpose-built for manufacturers and distributors who need real operational depth — not just financial reporting.',
      points: [
        'Native manufacturing and distribution workflows — not retrofitted modules',
        'Unlimited user pricing — no per-seat cost as your team grows',
        'True cloud with strong offline capability for shop floor and warehouse',
        'Best-in-class ADP payroll integration through SOS',
        'Strong customization for industry-specific edge cases'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'See Acumatica in action — <em>for your industry.</em>',
        desc: 'A 30-minute demo scoped to your specific industry and pain points. Not a generic product tour — a targeted walkthrough of what matters to your business.',
        btn: 'Schedule a Demo →',
        includes: ['Industry-specific workflow walkthrough', 'Your questions answered by a senior partner', 'No obligation — just a real look at the platform']
      }
    },
    intacct: {
      badgeClass: 'badge-intacct', badgeLabel: 'Recommended Platform',
      headline: 'Sage Intacct is <em>built for your business.</em>',
      desc: 'For project-based businesses, multi-entity structures, and professional services firms, Sage Intacct is the category leader. Designed from the ground up for the way services businesses actually operate.',
      points: [
        'Purpose-built for project accounting, time billing, and milestone revenue recognition',
        'Best-in-class multi-entity consolidation — intercompany eliminations are native',
        'AICPA-preferred financial management platform for services firms',
        'Dimensions-based reporting gives you slice-and-dice visibility without custom reports',
        'Strong integration ecosystem including Salesforce, HubSpot, and payroll systems'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'See Sage Intacct built for <em>how your firm works.</em>',
        desc: 'A 30-minute demo focused on project accounting, multi-entity structures, and the billing workflows that matter to your business.',
        btn: 'Schedule a Demo →',
        includes: ['Project accounting and revenue recognition walkthrough', 'Multi-entity consolidation demonstration', 'Integration options for your tech stack']
      }
    },
    acumatica_rescue: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "Your Acumatica system isn't <em>broken — it's unfinished.</em>",
      desc: "The most likely scenario: your Acumatica implementation was never fully completed. The reports that should replace Excel, the integrations that were deferred, the edge cases that got skipped. That last 20% is fixable — and faster than you think.",
      points: [
        "Most Acumatica problems are configuration gaps, not platform failures",
        "A No-Cost Assessment will tell you exactly what's missing and what it takes to fix it",
        "Rescue engagements typically run 6–10 weeks — not a full reimplementation",
        "SOS specializes in finishing what other Acumatica partners leave incomplete",
        "Your data may be 80% of the way there already"
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Find out what\'s actually wrong</em> — before you decide anything.',
        desc: "Our No-Cost Technology Assessment takes 60 minutes. We review your configuration, your data, and your workflows — and tell you honestly whether it's broken, unfinished, or just misconfigured. No sales pitch. Just a real diagnosis.",
        btn: 'Book a Free Assessment →',
        includes: ['Full review of your Acumatica configuration', 'Clear answer: broken or just unfinished?', 'Written summary of findings within 48 hours']
      }
    },
    acumatica_optimize: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "You're getting 80% from Acumatica. <em>Here's how to get the rest.</em>",
      desc: "If your team is still exporting to Excel to do analysis, the reports were never built. If processes still feel manual, the automation was never configured. The last 20% of an Acumatica implementation is where most of the ROI lives.",
      points: [
        'Custom reports and dashboards that replace your Excel dependency',
        'Workflow automation for the processes your team is still doing manually',
        "ADP payroll integration if you're not already connected",
        'AI ERP Intelligence — ask your Acumatica database anything in plain English',
        "Ongoing optimization support so the system keeps pace with your business"
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>See what your Acumatica</em> should be doing.',
        desc: "A 60-minute No-Cost Technology Assessment that maps the gap between what your system does now and what it should be doing. No obligation — just an honest look.",
        btn: 'Book a Free Assessment →',
        includes: ['Review of your current Acumatica utilization', 'Specific optimization opportunities identified', 'Clear recommendation on where to start']
      }
    },
    sage300_rescue: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "Your Sage 300 system isn't <em>broken — it's unfinished.</em>",
      desc: "Most Sage 300 problems aren't software failures — they're configuration gaps that were never addressed. The right path depends on whether your data is sound and whether the platform still fits where your business is going.",
      points: [
        'Configuration gaps are faster and cheaper to fix than a full migration',
        'Our AI ERP Intelligence tool connects directly to your Sage 300 SQL backend',
        "We'll tell you honestly if migration is the right call — but only after we've looked",
        'Many clients get 80% of the value of a new ERP for 20% of the cost through optimization',
        'SOS has deep Sage 300 expertise and long-term support relationships'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Find out what\'s actually wrong</em> before making any decisions.',
        desc: "Our No-Cost Technology Assessment covers your current Sage 300 setup, data integrity, and configuration. We'll tell you honestly whether optimization, migration, or a hybrid approach makes the most sense — with no obligation either way.",
        btn: 'Book a Free Assessment →',
        includes: ['Full Sage 300 configuration and data review', 'Optimization vs. migration recommendation', 'Demo of the AI ERP Intelligence tool for Sage 300']
      }
    },
    sage300_optimize: {
      badgeClass: 'badge-sage300', badgeLabel: 'Your Situation',
      headline: "You may not need a <em>new ERP.</em>",
      desc: "If your Sage 300 system is running but underperforming, a full platform migration may not be the right answer. The more likely path is identifying what's been left unconfigured and finishing it — faster and for a fraction of the cost.",
      points: [
        "Most Sage 300 underperformance is a configuration gap, not a platform gap",
        'AI ERP Intelligence connects directly to your Sage 300 SQL backend for real-time answers',
        'Optimization engagements are faster and lower-risk than migrations',
        "We'll tell you honestly if migration is the right call after reviewing your setup",
        'Many clients get 80% of the value of a new ERP for 20% of the cost'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'Find out what your <em>Sage 300 can really do.</em>',
        desc: "A 60-minute No-Cost Technology Assessment that looks at what's been left unconfigured and whether optimization or migration is the right path forward.",
        btn: 'Book a Free Assessment →',
        includes: ['Honest review of your current Sage 300 setup', 'Optimization vs. migration recommendation', 'Demo of the new AI ERP Intelligence tool']
      }
    },
    intacct_rescue: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "Your Sage Intacct isn't <em>the problem — the implementation is.</em>",
      desc: "Sage Intacct is the right platform for your business profile. The issues you're experiencing almost always trace back to how it was configured — not the software itself.",
      points: [
        'Sage Intacct implementation problems are almost always configuration-fixable',
        'Dimensions structure, billing rules, and multi-entity setup are the usual culprits',
        "A diagnostic will tell you whether it's a fixable configuration or a deeper data issue",
        'Finishing an incomplete Intacct implementation is faster than migrating elsewhere',
        'SOS has deep Sage Intacct implementation and rescue experience'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Get a diagnosis</em> before you make any decisions.',
        desc: "A 60-minute No-Cost Technology Assessment that covers your Intacct configuration, chart of accounts structure, and reporting setup. We'll tell you honestly what's wrong and what it takes to fix it.",
        btn: 'Book a Free Assessment →',
        includes: ['Full Sage Intacct configuration review', 'Clear answer: fixable or needs rebuild?', 'Written findings delivered within 48 hours']
      }
    },
    intacct_optimize: {
      badgeClass: 'badge-intacct', badgeLabel: 'Your Situation',
      headline: "Sage Intacct is right for you. <em>Let's make it work harder.</em>",
      desc: "Sage Intacct has significant depth most implementations never fully unlock — dimensions-based reporting, automated billing, multi-entity consolidation, and deep integrations. The gap between what it does now and what it should be doing is often larger than people realize.",
      points: [
        'Advanced dimensions reporting that replaces your Excel consolidations',
        'Automated billing rules for complex project and subscription revenue',
        'Multi-entity consolidation configured correctly — eliminations, intercompany, currency',
        'Salesforce, HubSpot, and payroll integrations to close data gaps',
        'Ongoing optimization support as your business and reporting needs evolve'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'See what <em>fully optimized Intacct</em> looks like.',
        desc: "A 60-minute No-Cost Assessment that maps where your Sage Intacct is underperforming and what it would take to close the gap.",
        btn: 'Book a Free Assessment →',
        includes: ['Current Intacct utilization review', 'Specific optimization opportunities', 'Clear prioritized recommendation']
      }
    },
    sage_hrms_rescue: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "Let's look at your <em>Sage HRMS setup</em> honestly.",
      desc: "Sage HRMS problems typically fall into three categories: configuration gaps, integration issues with your financial system, or the need for a platform upgrade. A proper diagnosis will tell you which one you're dealing with.",
      points: [
        'Most HRMS issues are configuration or integration gaps — not platform failures',
        "We'll review the connection between HRMS and your financial system",
        'Payroll processing, benefits, and reporting are the most common problem areas',
        'SOS has deep Sage HRMS experience and ADP integration capability',
        "We'll tell you honestly if an upgrade or platform change is the right call"
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Get a clear picture</em> of what\'s wrong and what it takes to fix it.',
        desc: "A 60-minute No-Cost Technology Assessment covering your current HRMS setup, integrations, and the specific issues your team is experiencing.",
        btn: 'Book a Free Assessment →',
        includes: ['Full HRMS configuration review', 'Integration gap analysis', 'Clear recommendation on path forward']
      }
    },
    sage_hrms_optimize: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "More value from <em>Sage HRMS</em> is within reach.",
      desc: "Most companies running Sage HRMS are using a fraction of its capability. Payroll automation, benefits administration, reporting, and ADP integration are the areas where we most commonly find significant untapped value.",
      points: [
        'ADP Workforce Now integration — SOS is an ADP-certified integration partner',
        'Automated payroll processing that eliminates manual steps',
        'Benefits administration and open enrollment workflows',
        'HR reporting and analytics dashboards your team will actually use',
        'Ongoing support as your workforce and compliance needs evolve'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'See what <em>optimized Sage HRMS</em> looks like for your team.',
        desc: "A 60-minute No-Cost Assessment covering your current HRMS utilization and where the biggest optimization opportunities are.",
        btn: 'Book a Free Assessment →',
        includes: ['Current HRMS utilization review', 'ADP integration opportunity assessment', 'Prioritized optimization roadmap']
      }
    },
    migration_pivot: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: `We don't work on ${erpName || 'that platform'} — <em>but that might be the point.</em>`,
      desc: `We're being straight with you: SOS doesn't implement or support ${erpName || 'that platform'}. But the problems you're describing often point to a platform that was never the right fit, not just a bad implementation. A No-Cost Assessment gives you an honest answer on whether that's the case.`,
      points: [
        `We'll review your current ${erpName || 'ERP'} situation without any agenda`,
        `If the platform is the problem, we'll tell you — and show you what ${suggestedName} would look like for your specific business`,
        "If the implementation is the problem, we'll tell you that instead — even if we can't be the ones to fix it",
        'No sales pitch. A genuine diagnostic of your actual situation.',
        `${suggestedName} is the most common landing spot for companies migrating from ${erpName || 'mid-market ERPs'} in your industry profile`
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Get an honest read</em> on your situation — before you decide anything.',
        desc: `Our No-Cost Technology Assessment is designed to answer whether your problem is the platform, the implementation, or something else — with no obligation and no predetermined conclusion.`,
        btn: 'Book a Free Assessment →',
        includes: ['Honest review of your current ERP situation', `What ${suggestedName} would look like for your business profile`, 'No pressure, no pitch — just a real diagnostic']
      }
    },
    outgrown: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: `You've outgrown ${erpName || 'your current tools'}. <em>This is actually good news.</em>`,
      desc: `${erpName || 'QuickBooks and basic accounting tools'} were the right choice when you started. They're not the right choice for where your business is now. The fact that you feel the pain means you're ready — this is the right time to move.`,
      points: [
        "The transition from basic tools to a real ERP is one of the most impactful operational decisions you'll make",
        'Your data migration is typically simpler than you think at this stage',
        'The right platform now will scale with you for 10+ years without a rip-and-replace',
        "This is the cleanest starting point — no bad configuration to undo, no burned team to rebuild trust with",
        'Companies that make this move at your stage typically see the ROI within 12–18 months'
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: 'See the right ERP for <em>where your business is going.</em>',
        desc: `A 30-minute demo showing exactly what ${suggestedName || 'the right ERP'} would look like for your industry and business size. No generic product tour — a targeted look at your specific situation.`,
        btn: 'Schedule a Demo →',
        includes: [`${suggestedName} configured for your industry`, 'Migration path from your current tools', 'What the first 90 days looks like']
      }
    },
    generic_assess: {
      badgeClass: 'badge-evaluate', badgeLabel: 'Your Situation',
      headline: "Not knowing is actually <em>the most common starting point.</em>",
      desc: "Most companies don't know whether their problem is the software, the implementation, the data, or something else entirely. That's not a bad position to be in — it just means the first step is a proper diagnostic, not a product demo.",
      points: [
        'A No-Cost Technology Assessment is designed for exactly this situation',
        "We'll review what you're running, how it's configured, and what the data looks like",
        "You'll come out with a clear answer: fix it, optimize it, or replace it",
        "No predetermined conclusion — our recommendation will be based on what we actually find",
        "If we're not the right firm for what you need, we'll tell you that too"
      ],
      cta: {
        eyebrow: 'Recommended Next Step',
        title: '<em>Find out what you\'re actually dealing with.</em>',
        desc: "A 60-minute No-Cost Technology Assessment with a senior SOS partner. We review your current system, your data, and your workflows — and give you a clear, honest picture of what's wrong and what to do about it.",
        btn: 'Book a Free Assessment →',
        includes: ['Full review of your current setup', 'Clear diagnosis: fix, optimize, or replace', 'Written findings within 48 hours']
      }
    }
  };

  const readinessContent = {
    high: {
      badge: 'badge-ready', scoreColor: '#4ade80', ringBorder: '#4ade80', ringBg: 'rgba(26,107,58,0.2)',
      headline: "You're <em>ready to move.</em>",
      desc: "You have internal ownership and data that's in reasonable shape. The conditions for a successful engagement are in place. The main risk at this stage is choosing the wrong partner — not being unprepared."
    },
    medium: {
      badge: 'badge-prep', scoreColor: '#fbbf24', ringBorder: '#fbd9a5', ringBg: 'rgba(176,108,16,0.15)',
      headline: "Almost ready — <em>a few gaps to close.</em>",
      desc: "You're close, but there are one or two internal conditions that need attention before you start. Going in without these addressed is the most common cause of engagements that stall at 80%."
    },
    low: {
      badge: 'badge-prep', scoreColor: '#f87171', ringBorder: '#f5c6c2', ringBg: 'rgba(192,57,43,0.15)',
      headline: "Some internal work to do <em>before you start.</em>",
      desc: "The recommendation is clear, but the internal conditions for a successful outcome aren't fully in place yet. The good news: these gaps are fixable — and faster to address than most people assume."
    }
  };

  const readinessKey = readiness >= 3 ? 'high' : readiness >= 1 ? 'medium' : 'low';
  const rc = readinessContent[readinessKey];
  const pc = platformContent[platform] || platformContent['generic_assess'];

  const nextStepsMap = {
    high: [
      { text: '<strong>Book a No-Cost Technology Assessment</strong> — 60 minutes with a senior partner. No pitch. A genuine review of your situation and a specific recommendation.' },
      { text: '<strong>Share this report</strong> with your internal project owner and key stakeholders before your first vendor call.' },
      { text: '<strong>Come with questions</strong> — specifically about who will run your project and what post-go-live support looks like.' }
    ],
    medium: [
      { text: '<strong>Assign a dedicated internal project owner</strong> before evaluating vendors. This single decision has the highest impact on implementation success.' },
      { text: '<strong>Start a basic data audit</strong> — chart of accounts, customer list, item master. You don\'t need perfection, but you need to know what you\'re working with.' },
      { text: '<strong>Book a No-Cost Assessment</strong> — we\'ll tell you honestly whether you\'re ready to move or what to address first.' }
    ],
    low: [
      { text: '<strong>Assign a project owner</strong> — even a partial one. Someone needs to be accountable for this initiative before any external partner can be effective.' },
      { text: '<strong>Audit your data</strong> before talking to any vendor. Most vendors won\'t surface data problems until you\'re already paying them.' },
      { text: '<strong>Book a No-Cost Assessment</strong> — we can help you understand what "ready" looks like for your situation and what the realistic timeline is.' }
    ]
  };

  const nextSteps = nextStepsMap[readinessKey];
  const cta = pc.cta;

  resultsEl.innerHTML = `
    <div class="sos-results-hero">
      <div class="sos-results-hero-inner">
        <div class="sos-results-tag">✓ Your ERP Selection Report</div>
        <div class="sos-results-score-ring" style="border-color:${rc.ringBorder};background:${rc.ringBg};">
          <div class="sos-results-score-num" style="color:${rc.scoreColor};">${readiness}/4</div>
          <div class="sos-results-score-label">Readiness</div>
        </div>
        <div class="sos-results-headline">${rc.headline}</div>
        <div class="sos-results-desc">${rc.desc}</div>
      </div>
    </div>
    <div class="sos-results-body">
      <div class="sos-results-grid">
        <div>
          <div class="sos-rec-section-title">Platform Recommendation</div>
          <div class="sos-rec-card platform">
            <div class="sos-rec-card-badge ${pc.badgeClass}">● ${pc.badgeLabel}</div>
            <div class="sos-rec-card-title">${pc.headline}</div>
            <div class="sos-rec-card-desc">${pc.desc}</div>
            <div class="sos-rec-card-points">
              ${pc.points.map(p => `<div class="sos-rec-card-point"><span class="sos-rec-point-check" style="color:var(--teal-bright);">✓</span><span>${p}</span></div>`).join('')}
            </div>
          </div>
          <div class="sos-rec-section-title" style="margin-top:28px;">Readiness Assessment</div>
          <div class="sos-rec-card readiness">
            <div class="sos-rec-card-badge ${rc.badge}">● Readiness Score: ${readiness}/4</div>
            <div class="sos-rec-card-title">${rc.headline}</div>
            <div class="sos-rec-card-desc">${rc.desc}</div>
          </div>
          <div class="sos-rec-section-title" style="margin-top:28px;">Your Next Steps</div>
          <div class="sos-next-steps-card">
            <div class="sos-next-steps-title">Based on your readiness and situation</div>
            ${nextSteps.map((s, i) => `
              <div class="sos-next-step-item">
                <div class="sos-next-step-num">${i+1}</div>
                <div class="sos-next-step-text">${s.text}</div>
              </div>
            `).join('')}
          </div>
          <div class="sos-rec-section-title" style="margin-top:28px;">Save Your Results</div>
          <div class="sos-email-section">
            <div class="sos-email-section-title">Get your <em>full report</em> by email.</div>
            <div class="sos-email-section-desc">We'll send a PDF summary of your platform recommendation, readiness score, and next steps — plus a bonus guide on what to ask any ERP vendor before you sign.</div>
            <div class="sos-email-row" id="sosEmailRow">
              <input class="sos-email-input" type="email" placeholder="Your work email address" id="sosResultEmail">
              <button class="sos-email-submit" onclick="sosSubmitEmail()">Send My Report →</button>
            </div>
            <div class="sos-email-note">No spam. One email with your report. Unsubscribe anytime.</div>
          </div>
        </div>
        <div>
          <div class="sos-cta-card">
            <div class="sos-cta-card-eyebrow">${cta.eyebrow}</div>
            <div class="sos-cta-card-title">${cta.title}</div>
            <div class="sos-cta-card-desc">${cta.desc}</div>
            <div class="sos-cta-card-includes">
              ${cta.includes.map(inc => `<div class="sos-cta-card-include"><span class="sos-cta-check">✓</span><span>${inc}</span></div>`).join('')}
            </div>
            <a href="<?php echo esc_url( home_url('/assessment') ); ?>" class="sos-cta-btn-primary">${cta.btn}</a>
            <a href="tel:18442448869" class="sos-cta-btn-phone">📞 +1 (844) 244-8869</a>
            <div class="sos-cta-card-note">Senior partner-led · No sales pitch · 60 minutes</div>
          </div>
        </div>
      </div>
      <button class="sos-restart-btn" onclick="sosRestartQuiz()">↺ Start over with different answers</button>
    </div>
  `;

  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function sosSubmitEmail() {
  const email = document.getElementById('sosResultEmail').value.trim();
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email || !regex.test(email)) {
    document.getElementById('sosResultEmail').style.outline = '2px solid var(--red)';
    document.getElementById('sosResultEmail').focus();
    return;
  }
  // TODO: POST to HubSpot Forms API
  document.getElementById('sosEmailRow').outerHTML = `
    <div style="background:rgba(26,107,58,0.2);border:1px solid rgba(26,107,58,0.4);border-radius:8px;padding:14px;text-align:center;color:#4ade80;font-weight:600;font-size:14px;">
      ✓ Check your inbox — your report is on its way.
    </div>
  `;
}

function sosRestartQuiz() {
  sosAnswers = {};
  sosCurrent = 0;
  document.getElementById('sosResultsScreen').classList.remove('active');
  document.getElementById('sosResultsScreen').innerHTML = '';
  document.getElementById('sosQuizScreen').classList.add('active');
  const activeQs = sosGetActiveQuestions();
  sosRenderQuestion(0, activeQs);
  sosUpdateProgress(activeQs);
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>

<?php wp_footer(); ?>
</body>
</html>
