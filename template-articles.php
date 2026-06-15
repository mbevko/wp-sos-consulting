<?php
/*
 * Template Name: Articles Archive
 */
get_header();
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="page-header-inner">
    <div class="page-header-top">
      <div class="page-header-left">
        <div class="page-header-eyebrow">Resources &amp; Articles</div>
        <h1>Insights on ERP &mdash; <em>from people<br>who implement it.</em></h1>
        <p class="page-header-desc">Articles, client spotlights, and practical guides on ERP implementation, optimization, and the decisions that separate successful go-lives from the ones that don&rsquo;t stick.</p>
      </div>
      <!-- Search -->
      <div class="header-search">
        <div class="header-search-icon">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.5"/>
            <path d="M11 11l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <input type="text" id="searchInput" placeholder="Search articles..." oninput="runSearch(this.value)">
      </div>
    </div>

    <!-- Filter strip -->
    <div class="filter-strip">
      <div class="filter-group">
        <span class="filter-group-label">Type</span>
        <button class="ftab active" data-filter="type" data-val="all" onclick="setFilter('type','all',this)">
          All <span class="ftab-count" id="count-all">—</span>
        </button>
        <button class="ftab" data-filter="type" data-val="spotlight" onclick="setFilter('type','spotlight',this)">Client Spotlights</button>
        <button class="ftab" data-filter="type" data-val="article" onclick="setFilter('type','article',this)">Articles</button>
        <button class="ftab" data-filter="type" data-val="tips" onclick="setFilter('type','tips',this)">Tips &amp; Tricks</button>
        <button class="ftab" data-filter="type" data-val="news" onclick="setFilter('type','news',this)">News</button>
      </div>
      <div class="filter-group">
        <span class="filter-group-label">Topic</span>
        <button class="topic-pill tp-all active" data-filter="topic" data-val="all" onclick="setFilter('topic','all',this)">All Topics</button>
        <button class="topic-pill tp-rescue"   data-filter="topic" data-val="rescue"   onclick="setFilter('topic','rescue',this)">ERP Rescue</button>
        <button class="topic-pill tp-new"      data-filter="topic" data-val="new-impl" onclick="setFilter('topic','new-impl',this)">New Implementation</button>
        <button class="topic-pill tp-optimize" data-filter="topic" data-val="optimize" onclick="setFilter('topic','optimize',this)">Optimization</button>
        <button class="topic-pill tp-partner"  data-filter="topic" data-val="partner"  onclick="setFilter('topic','partner',this)">Partner Selection</button>
      </div>
    </div>
  </div>
</div>

<!-- MAIN -->
<div class="archive-main">
  <div>
    <!-- Results bar -->
    <div class="results-bar">
      <div class="results-count" id="resultsCount">Showing <strong id="visibleCount">—</strong> articles</div>
      <div style="display:flex; align-items:center; gap:12px;">
        <div class="sort-select">
          Sort:
          <select onchange="sortArticles(this.value)">
            <option value="newest">Newest first</option>
            <option value="oldest">Oldest first</option>
          </select>
        </div>
        <div class="view-toggle">
          <button class="view-btn active" id="listViewBtn" onclick="setView('list')" title="List view">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
              <rect x="1" y="2" width="12" height="2" rx="1" fill="currentColor"/>
              <rect x="1" y="6" width="12" height="2" rx="1" fill="currentColor"/>
              <rect x="1" y="10" width="12" height="2" rx="1" fill="currentColor"/>
            </svg>
          </button>
          <button class="view-btn" id="gridViewBtn" onclick="setView('grid')" title="Grid view">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
              <rect x="1" y="1" width="5" height="5" rx="1" fill="currentColor"/>
              <rect x="8" y="1" width="5" height="5" rx="1" fill="currentColor"/>
              <rect x="1" y="8" width="5" height="5" rx="1" fill="currentColor"/>
              <rect x="8" y="8" width="5" height="5" rx="1" fill="currentColor"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Active filters -->
    <div class="active-filters" id="activeFilters" style="display:none;"></div>

    <!-- Article grid -->
    <div class="article-grid" id="articleGrid">

      <?php
      $archive_query = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 100,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ) );

      if ( $archive_query->have_posts() ) :
        while ( $archive_query->have_posts() ) : $archive_query->the_post();

          $topics    = wp_get_post_terms( get_the_ID(), 'topic',    array( 'fields' => 'all' ) );
          $platforms = wp_get_post_terms( get_the_ID(), 'platform', array( 'fields' => 'all' ) );

          $categories  = get_the_category();
          $type_slug   = 'article';
          $type_label  = 'Article';
          $type_class  = 'tag-article';
          if ( ! empty( $categories ) ) {
            $cat_slug = $categories[0]->slug;
            if ( strpos( $cat_slug, 'spotlight' ) !== false ) {
              $type_slug = 'spotlight'; $type_label = 'Client Spotlight'; $type_class = 'tag-spotlight';
            } elseif ( strpos( $cat_slug, 'tips' ) !== false ) {
              $type_slug = 'tips'; $type_label = 'Tips &amp; Tricks'; $type_class = 'tag-tips';
            } elseif ( strpos( $cat_slug, 'news' ) !== false ) {
              $type_slug = 'news'; $type_label = 'News'; $type_class = 'tag-news';
            }
          }

          $topic_slug  = ! empty( $topics ) ? esc_attr( $topics[0]->slug ) : '';
          $topic_label = ! empty( $topics ) ? esc_html( $topics[0]->name ) : '';
          $topic_tag_map = array(
            'erp-rescue' => 'tag-rescue', 'rescue' => 'tag-rescue',
            'new-implementation' => 'tag-new-impl', 'new-impl' => 'tag-new-impl',
            'optimization' => 'tag-optimize', 'optimize' => 'tag-optimize',
            'partner-selection' => 'tag-partner', 'partner' => 'tag-partner',
          );
          $topic_class = isset( $topic_tag_map[ $topic_slug ] ) ? $topic_tag_map[ $topic_slug ] : 'tag-article';

          $platform_slug = ! empty( $platforms ) ? esc_attr( $platforms[0]->slug ) : '';
          $thumb_url     = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
          $excerpt       = has_excerpt() ? get_the_excerpt() : wp_trim_words( strip_tags( get_the_content() ), 28, '…' );
      ?>

      <a href="<?php the_permalink(); ?>" class="article-row"
         data-type="<?php echo esc_attr( $type_slug ); ?>"
         data-topic="<?php echo $topic_slug; ?>"
         data-platform="<?php echo $platform_slug; ?>"
         data-title="<?php echo esc_attr( get_the_title() ); ?>"
         data-date="<?php echo get_the_date( 'Y-m-d' ); ?>">
        <div class="row-thumb">
          <?php if ( $thumb_url ) : ?>
            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php else : ?>
            <div class="row-thumb-placeholder">📄</div>
          <?php endif; ?>
        </div>
        <div class="row-content">
          <div class="row-tags">
            <span class="row-tag <?php echo esc_attr( $type_class ); ?>"><?php echo $type_label; ?></span>
            <?php if ( $topic_label ) : ?>
              <span class="row-tag <?php echo esc_attr( $topic_class ); ?>"><?php echo $topic_label; ?></span>
            <?php endif; ?>
          </div>
          <div class="row-title"><?php the_title(); ?></div>
          <div class="row-excerpt"><?php echo esc_html( $excerpt ); ?></div>
          <div class="row-footer">
            <span class="row-date"><?php echo get_the_date( 'M j, Y' ); ?></span>
            <span class="row-read">Read
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M2 6h8M7 3l3 3-3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>
        </div>
      </a>

      <?php
        endwhile;
        wp_reset_postdata();
      else : ?>

        <div style="text-align:center; padding:64px 32px; color:var(--muted);">
          <div style="font-size:40px; margin-bottom:16px; opacity:0.3;">📝</div>
          <p style="font-family:var(--serif); font-size:22px; color:var(--teal); margin-bottom:8px;">Articles coming soon.</p>
          <p style="font-size:14px;">Check back shortly — we publish regularly.</p>
        </div>

      <?php endif; ?>

      <!-- Empty state (shown by JS when filters return nothing) -->
      <div class="empty-state" id="emptyState">
        <div class="empty-state-icon">🔍</div>
        <h3>No articles found</h3>
        <p>Try adjusting your filters or search term.</p>
        <button class="empty-clear" onclick="clearAllFilters()">Clear all filters</button>
      </div>

    </div><!-- /article-grid -->

    <div class="load-more" id="loadMoreWrapper" style="display:none;">
      <button class="load-more-btn" id="loadMoreBtn" onclick="loadMore()">
        Load more articles
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 2v10M3 8l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- SIDEBAR -->
  <aside class="archive-sidebar">

    <div class="sdb-cta-card">
      <div class="sdb-cta-eyebrow">Free &middot; No obligation</div>
      <div class="sdb-cta-title">Does something here sound <em>familiar?</em></div>
      <div class="sdb-cta-desc">Every article is written by the people who actually fix these problems. If one resonates, a free assessment takes 60 minutes and gives you a real answer.</div>
      <a href="<?php echo esc_url( home_url( '/assessment' ) ); ?>" class="sdb-btn sdb-btn-red">Book Free Assessment →</a>
      <a href="tel:18442448869" class="sdb-btn sdb-btn-outline">📞 +1 (844) 244-8869</a>
    </div>

    <div class="sdb-card">
      <div class="sdb-card-title">Browse by <em>topic</em></div>
      <div class="sdb-topic-list">
        <button class="sdb-topic-item active" onclick="sidebarFilter('topic','all',this)">
          <div class="sdb-topic-left"><div class="sdb-topic-dot" style="background:var(--teal);"></div> All Topics</div>
        </button>
        <button class="sdb-topic-item" onclick="sidebarFilter('topic','rescue',this)">
          <div class="sdb-topic-left"><div class="sdb-topic-dot" style="background:var(--red);"></div> ERP Rescue</div>
        </button>
        <button class="sdb-topic-item" onclick="sidebarFilter('topic','new-impl',this)">
          <div class="sdb-topic-left"><div class="sdb-topic-dot" style="background:var(--blue);"></div> New Implementation</div>
        </button>
        <button class="sdb-topic-item" onclick="sidebarFilter('topic','optimize',this)">
          <div class="sdb-topic-left"><div class="sdb-topic-dot" style="background:var(--green);"></div> Optimization</div>
        </button>
        <button class="sdb-topic-item" onclick="sidebarFilter('topic','partner',this)">
          <div class="sdb-topic-left"><div class="sdb-topic-dot" style="background:var(--amber);"></div> Partner Selection</div>
        </button>
      </div>
    </div>

    <div class="sdb-card">
      <div class="sdb-card-title">Browse by <em>platform</em></div>
      <div class="sdb-platform-grid">
        <button class="sdb-platform-btn" onclick="sidebarFilter('platform','acumatica',this)">Acumatica</button>
        <button class="sdb-platform-btn" onclick="sidebarFilter('platform','intacct',this)">Sage Intacct</button>
        <button class="sdb-platform-btn" onclick="sidebarFilter('platform','sage300',this)">Sage 300</button>
        <button class="sdb-platform-btn" onclick="sidebarFilter('platform','sage-hrms',this)">Sage HRMS</button>
      </div>
    </div>

    <div class="sdb-card" style="background:var(--blue-light); border-color:rgba(26,79,160,0.15);">
      <div style="font-size:10px; font-weight:700; color:var(--blue); letter-spacing:0.1em; text-transform:uppercase; margin-bottom:8px;">Free Tool</div>
      <div class="sdb-card-title" style="color:var(--blue); margin-bottom:8px;">Not sure which ERP fits your business?</div>
      <p style="font-size:12px; color:var(--muted); font-weight:300; line-height:1.6; margin-bottom:14px;">10 questions. Platform recommendation + readiness score. 5 minutes.</p>
      <a href="<?php echo esc_url( home_url( '/resources/erp-selection-guide' ) ); ?>" style="display:block; background:var(--blue); color:#fff; text-align:center; padding:10px; border-radius:6px; font-size:13px; font-weight:700; text-decoration:none;">Take the ERP Selection Guide →</a>
    </div>

  </aside>
</div><!-- /archive-main -->

<script>
var archiveState = { type: 'all', topic: 'all', platform: null, search: '' };
var currentView  = 'list';
var pageSize     = 12;

document.addEventListener('DOMContentLoaded', function() {
  var cards = getCards();
  document.getElementById('visibleCount').textContent  = cards.length;
  document.getElementById('count-all').textContent     = cards.length;

  // Hash-based filter: /resources/articles/#spotlight pre-filters on load
  var hash = window.location.hash.replace('#', '');
  var validTypes = ['spotlight', 'article', 'tips', 'news'];
  if (hash && validTypes.indexOf(hash) !== -1) {
    archiveState.type = hash;
    var btn = document.querySelector('[data-filter="type"][data-val="' + hash + '"]');
    if (btn) {
      document.querySelectorAll('[data-filter="type"]').forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
    }
    applyFilters();
    return;
  }
  if (cards.length > pageSize) {
    cards.forEach(function(card, i) { if (i >= pageSize) card.style.display = 'none'; });
    document.getElementById('loadMoreWrapper').style.display = '';
  }
});

function getCards() {
  return Array.from(document.querySelectorAll('#articleGrid .article-row:not(#emptyState)'));
}

function applyFilters() {
  var cards = getCards();
  var allPassing = [];

  cards.forEach(function(card) {
    var type     = card.dataset.type || '';
    var topic    = card.dataset.topic || '';
    var platform = card.dataset.platform || '';
    var title    = (card.dataset.title || '').toLowerCase();

    var ok = (archiveState.type === 'all' || type === archiveState.type)
          && (archiveState.topic === 'all' || topic === archiveState.topic)
          && (!archiveState.platform || platform === archiveState.platform)
          && (!archiveState.search   || title.indexOf(archiveState.search.toLowerCase()) !== -1);

    card._pass = ok;
    card.style.display = 'none';
    if (ok) allPassing.push(card);
  });

  allPassing.forEach(function(card, i) {
    if (i < pageSize) card.style.display = '';
  });

  document.getElementById('visibleCount').textContent = allPassing.length;
  document.getElementById('emptyState').classList.toggle('visible', allPassing.length === 0);
  renderActiveFilters();

  var wrapper = document.getElementById('loadMoreWrapper');
  wrapper.style.display = allPassing.length > pageSize ? '' : 'none';
  window._passingCards = allPassing;
}

function loadMore() {
  var passing = window._passingCards || getCards();
  var shown   = passing.filter(function(c) { return c.style.display !== 'none'; }).length;
  passing.forEach(function(card, i) { if (i < shown + pageSize) card.style.display = ''; });
  var newShown = passing.filter(function(c) { return c.style.display !== 'none'; }).length;
  if (newShown >= passing.length) document.getElementById('loadMoreWrapper').style.display = 'none';
}

function setFilter(dim, val, btn) {
  document.querySelectorAll('[data-filter="' + dim + '"]').forEach(function(b) { b.classList.remove('active'); });
  btn.classList.add('active');
  archiveState[dim] = val;
  if (dim === 'topic') document.querySelectorAll('.sdb-topic-item').forEach(function(b) { b.classList.remove('active'); });
  applyFilters();
}

function sidebarFilter(dim, val, btn) {
  if (dim === 'platform') {
    var was = archiveState.platform === val;
    archiveState.platform = was ? null : val;
    document.querySelectorAll('.sdb-platform-btn').forEach(function(b) { b.classList.remove('active'); });
    if (!was) btn.classList.add('active');
  } else if (dim === 'topic') {
    archiveState.topic = val;
    document.querySelectorAll('.sdb-topic-item').forEach(function(b) { b.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelectorAll('[data-filter="topic"]').forEach(function(b) { b.classList.toggle('active', b.dataset.val === val); });
  }
  applyFilters();
}

function runSearch(val) { archiveState.search = val.trim(); applyFilters(); }

function sortArticles(val) {
  var grid  = document.getElementById('articleGrid');
  var cards = getCards();
  cards.sort(function(a, b) {
    var da = a.dataset.date || '', db = b.dataset.date || '';
    return val === 'newest' ? (db > da ? 1 : -1) : (da > db ? 1 : -1);
  });
  var empty = document.getElementById('emptyState');
  cards.forEach(function(c) { grid.insertBefore(c, empty); });
}

function setView(view) {
  currentView = view;
  document.getElementById('articleGrid').classList.toggle('grid-view', view === 'grid');
  document.getElementById('listViewBtn').classList.toggle('active', view === 'list');
  document.getElementById('gridViewBtn').classList.toggle('active', view === 'grid');
}

function renderActiveFilters() {
  var bar   = document.getElementById('activeFilters');
  var chips = [];
  if (archiveState.type !== 'all')  chips.push({ label: archiveState.type.replace('-',' '),  dim:'type'     });
  if (archiveState.topic !== 'all') chips.push({ label: archiveState.topic.replace('-',' '), dim:'topic'    });
  if (archiveState.platform)        chips.push({ label: archiveState.platform,               dim:'platform' });
  if (archiveState.search)          chips.push({ label: '"' + archiveState.search + '"',     dim:'search'   });
  if (!chips.length) { bar.style.display = 'none'; return; }
  bar.style.display = 'flex';
  bar.innerHTML = chips.map(function(c,i) {
    return '<span class="active-filter-chip" onclick="clearChip(' + i + ')">' + c.label + ' <span class="chip-x">&times;</span></span>';
  }).join('') + (chips.length > 1 ? '<button class="clear-all" onclick="clearAllFilters()">Clear all</button>' : '');
  window._chipData = chips;
}

function clearChip(i) {
  var c = (window._chipData || [])[i]; if (!c) return;
  if (c.dim === 'type')     { archiveState.type = 'all'; document.querySelectorAll('[data-filter="type"]').forEach(function(b){ b.classList.toggle('active', b.dataset.val==='all'); }); }
  if (c.dim === 'topic')    { archiveState.topic = 'all'; document.querySelectorAll('[data-filter="topic"]').forEach(function(b){ b.classList.toggle('active', b.dataset.val==='all'); }); document.querySelectorAll('.sdb-topic-item').forEach(function(b,j){ b.classList.toggle('active', j===0); }); }
  if (c.dim === 'platform') { archiveState.platform = null; document.querySelectorAll('.sdb-platform-btn').forEach(function(b){ b.classList.remove('active'); }); }
  if (c.dim === 'search')   { archiveState.search = ''; document.getElementById('searchInput').value = ''; }
  applyFilters();
}

function clearAllFilters() {
  archiveState = { type:'all', topic:'all', platform:null, search:'' };
  document.getElementById('searchInput').value = '';
  document.querySelectorAll('[data-filter]').forEach(function(b){ b.classList.toggle('active', b.dataset.val==='all'); });
  document.querySelectorAll('.sdb-topic-item').forEach(function(b,i){ b.classList.toggle('active', i===0); });
  document.querySelectorAll('.sdb-platform-btn').forEach(function(b){ b.classList.remove('active'); });
  applyFilters();
}
</script>

<?php get_footer(); ?>
