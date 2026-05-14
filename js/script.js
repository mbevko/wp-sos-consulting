// ── NAV STATE ──
var openMenu   = null;
var mobileOpen = false;

// ── SERVICES PROBLEM → SOLUTION INTERACTION ──
function showSvc(id) {
  document.querySelectorAll('.svc-problem').forEach(function(btn) {
    btn.classList.toggle('active', btn.dataset.svc === id);
  });
  document.querySelectorAll('.svc-solution').forEach(function(panel) {
    panel.classList.toggle('active', panel.id === 'svc-' + id);
  });
}

// ── TOGGLE MENU ──
function toggleMenu(id) {
  if (openMenu === id) { closeAll(); return; }
  closeAll(false);
  openMenu = id;
  var item = document.getElementById('item-' + id);
  var btn  = item.querySelector('.nav-link');
  item.classList.add('open');
  btn.setAttribute('aria-expanded', 'true');
  document.getElementById('navBackdrop').classList.add('active');
}

function closeAll(updateState) {
  if (updateState === undefined) updateState = true;
  document.querySelectorAll('.nav-item.open').forEach(function(item) {
    item.classList.remove('open');
    var btn = item.querySelector('.nav-link');
    if (btn) btn.setAttribute('aria-expanded', 'false');
  });
  document.getElementById('navBackdrop').classList.remove('active');
  if (updateState) openMenu = null;
}

// ── KEYBOARD NAV ──
function handleKeydown(e, id) {
  if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggleMenu(id); }
  if (e.key === 'Escape') closeAll();
}
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeAll();
});

// ── SCROLL — nav shadow ──
var mainNav = document.getElementById('mainNav');
if (mainNav) {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 10) {
      mainNav.classList.add('scrolled');
    } else {
      mainNav.classList.remove('scrolled');
    }
  }, { passive: true });
}

// ── ANNOUNCEMENT BAR DISMISS ──
function dismissAnn() {
  var bar = document.getElementById('annBar');
  if (!bar) return;
  bar.style.transition = 'height 0.3s ease, opacity 0.3s ease';
  bar.style.overflow   = 'hidden';
  bar.style.height     = bar.offsetHeight + 'px';
  requestAnimationFrame(function() {
    bar.style.height  = '0';
    bar.style.opacity = '0';
  });
  sessionStorage.setItem('ann_dismissed', '1');
}
if (sessionStorage.getItem('ann_dismissed')) {
  var annBar = document.getElementById('annBar');
  if (annBar) annBar.style.display = 'none';
}

// ── MOBILE MENU ──
function toggleMobile() {
  mobileOpen = !mobileOpen;
  var menu     = document.getElementById('mobileMenu');
  var backdrop = document.getElementById('navBackdrop');
  if (mobileOpen) {
    menu.classList.add('open');
    backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  } else {
    menu.classList.remove('open');
    backdrop.classList.remove('active');
    document.body.style.overflow = '';
  }
}
