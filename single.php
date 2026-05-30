<?php get_header(); the_post(); ?>

<!-- READING PROGRESS BAR -->
<div class="reading-progress">
  <div class="reading-progress-fill" id="progressFill"></div>
</div>

<!-- ARTICLE HERO -->
<div class="article-hero">
  <?php if ( has_post_thumbnail() ) : ?>
    <img class="article-hero-img"
         src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>"
         alt="<?php the_title_attribute(); ?>">
  <?php endif; ?>
  <div class="article-hero-overlay"></div>
  <div class="article-hero-content">
    <div class="article-hero-inner">

      <!-- Breadcrumb -->
      <div class="article-breadcrumb">
        <a href="<?php echo esc_url( home_url( '/category/articles/' ) ); ?>">Resources</a>
        <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) :
        ?>
          <span class="breadcrumb-sep">/</span>
          <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a>
        <?php endif; ?>
        <span class="breadcrumb-sep">/</span>
        <span style="color:rgba(255,255,255,0.4); font-size:12px;"><?php echo esc_html( wp_trim_words( get_the_title(), 6, '…' ) ); ?></span>
      </div>

      <!-- Tags -->
      <div class="article-tags">
        <?php
        // Post type tag from category
        if ( ! empty( $categories ) ) {
          $cat_slug  = $categories[0]->slug;
          $cat_name  = $categories[0]->name;
          echo '<span class="article-tag tag-type">' . esc_html( $cat_name ) . '</span>';
        }

        // Topic taxonomy tags
        $topics = wp_get_post_terms( get_the_ID(), 'topic', array( 'fields' => 'all' ) );
        if ( ! is_wp_error( $topics ) && ! empty( $topics ) ) {
          foreach ( $topics as $topic ) {
            $slug_class = esc_attr( $topic->slug );
            echo '<span class="article-tag tag-topic ' . $slug_class . '">' . esc_html( $topic->name ) . '</span>';
          }
        }

        // Platform taxonomy tags
        $platforms = wp_get_post_terms( get_the_ID(), 'platform', array( 'fields' => 'all' ) );
        if ( ! is_wp_error( $platforms ) && ! empty( $platforms ) ) {
          foreach ( $platforms as $platform ) {
            echo '<span class="article-tag tag-platform">' . esc_html( $platform->name ) . '</span>';
          }
        }
        ?>
      </div>

      <!-- Title -->
      <h1 class="article-title"><?php the_title(); ?></h1>

      <!-- Meta -->
      <div class="article-meta-row">
        <div class="article-author-chip">
          <div class="author-avatar">
            <?php
            $first = substr( get_the_author_meta( 'first_name' ), 0, 1 );
            $last  = substr( get_the_author_meta( 'last_name' ),  0, 1 );
            echo esc_html( $first . $last ) ?: 'SOS';
            ?>
          </div>
          <div>
            <div class="author-name"><?php the_author(); ?></div>
            <div class="author-role">
              <?php
              $role_title = get_the_author_meta( 'role_title' );
              echo $role_title ? esc_html( $role_title ) : 'Consultant &middot; SOS';
              ?>
            </div>
          </div>
        </div>
        <div class="meta-sep"></div>
        <span class="article-date"><?php echo get_the_date( 'F j, Y' ); ?></span>
        <div class="meta-sep"></div>
        <span class="article-read-time"><?php echo sos_read_time(); ?></span>
      </div>

    </div>
  </div>
</div>

<!-- ARTICLE BODY -->
<div class="article-body">

  <!-- MAIN CONTENT -->
  <article class="article-content">

    <!-- Share row -->
    <div class="share-row">
      <span class="share-label">Share</span>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>"
         target="_blank" rel="noopener" class="share-btn linkedin" title="Share on LinkedIn">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M2 4.5h2V12H2zM3 3.5a1 1 0 110-2 1 1 0 010 2zM5.5 4.5H7.3v1s.6-1 2.2-1c1.9 0 2.5 1.2 2.5 3V12H10V8c0-1.1-.3-1.8-1.2-1.8C7.7 6.2 7.5 7 7.5 8v4H5.5V4.5z" fill="currentColor"/>
        </svg>
      </a>
      <a href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_permalink() ); ?>"
         class="share-btn" title="Share via Email">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
          <path d="M1 4l6 4 6-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
        </svg>
      </a>
      <button class="copy-link-btn" onclick="copyLink()">Copy link</button>
    </div>

    <!-- Article prose -->
    <div class="prose">
      <?php the_content(); ?>
    </div>

    <!-- Bottom tags -->
    <div class="article-bottom-tags">
      <span class="bottom-tag-label">Tagged:</span>
      <?php
      if ( ! empty( $topics ) && ! is_wp_error( $topics ) ) {
        foreach ( $topics as $topic ) {
          echo '<a href="' . esc_url( get_term_link( $topic ) ) . '" class="bottom-tag">' . esc_html( $topic->name ) . '</a>';
        }
      }
      if ( ! empty( $platforms ) && ! is_wp_error( $platforms ) ) {
        foreach ( $platforms as $platform ) {
          echo '<a href="' . esc_url( get_term_link( $platform ) ) . '" class="bottom-tag">' . esc_html( $platform->name ) . '</a>';
        }
      }
      if ( ! empty( $categories ) ) {
        foreach ( $categories as $cat ) {
          echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="bottom-tag">' . esc_html( $cat->name ) . '</a>';
        }
      }
      ?>
    </div>

    <!-- Author bio -->
    <div class="author-bio">
      <div class="author-bio-avatar">
        <?php echo esc_html( ( substr( get_the_author_meta( 'first_name' ), 0, 1 ) . substr( get_the_author_meta( 'last_name' ), 0, 1 ) ) ?: 'SOS' ); ?>
      </div>
      <div>
        <div class="author-bio-name"><?php the_author(); ?></div>
        <div class="author-bio-job">
          <?php
          $role_title = get_the_author_meta( 'role_title' );
          echo $role_title ? esc_html( $role_title . ' · SOS Consulting Services' ) : 'Consultant · SOS Consulting Services';
          ?>
        </div>
        <div class="author-bio-text">
          <?php
          $bio = get_the_author_meta( 'description' );
          echo $bio ? esc_html( $bio ) : 'The SOS team brings decades of ERP implementation experience across Acumatica, Sage Intacct, Sage 300, and Sage HRMS.';
          ?>
        </div>
      </div>
    </div>

    <!-- Article CTA block -->
    <div class="article-cta">
      <div class="article-cta-eyebrow">No-Cost &middot; 60 Minutes &middot; Senior Partner-Led</div>
      <div class="article-cta-title">Does this sound familiar<br>in your business <em>right now?</em></div>
      <div class="article-cta-body">If anything in this article resonates — whether it's cost visibility gaps, a stalled implementation, or reporting that always feels a step behind — a No-Cost Technology Assessment gives you an honest diagnosis. Not a sales call. A real look at what's happening and what it would take to fix it.</div>
      <div class="article-cta-actions">
        <a href="<?php echo esc_url( home_url( '/assessment' ) ); ?>" class="cta-btn-primary">
          Book a Free Assessment →
        </a>
        <a href="tel:18442448869" class="cta-btn-ghost">
          📞 +1 (844) 244-8869
        </a>
      </div>
      <div class="cta-note">Every assessment is run by a senior partner — not a salesperson. No preparation needed on your end.</div>
    </div>

  </article><!-- /article-content -->

  <!-- SIDEBAR -->
  <aside class="article-sidebar">

    <!-- Table of Contents — auto-built from H2s by buildTOC() -->
    <div class="sdb" id="toc-card">
      <div class="sdb-title">In this <em>article</em></div>
      <nav class="toc-list" id="toc">
        <!-- Populated by JS at page load -->
      </nav>
    </div>

    <!-- Sidebar CTA -->
    <div class="sdb-cta">
      <div class="sdb-cta-eyebrow">Free Assessment</div>
      <div class="sdb-cta-title">Is this happening in <em>your</em> business?</div>
      <div class="sdb-cta-desc">60 minutes with a senior partner. No pitch — a real diagnostic of your ERP setup.</div>
      <a href="<?php echo esc_url( home_url( '/assessment' ) ); ?>" class="sdb-btn sdb-btn-red">Book Free Assessment →</a>
      <a href="tel:18442448869" class="sdb-btn sdb-btn-outline">📞 +1 (844) 244-8869</a>
    </div>

    <!-- Mailing list -->
    <div class="sdb sdb-subscribe">
      <span class="sdb-subscribe-icon">✉</span>
      <div class="sdb-title" style="margin-bottom:6px;">Get new articles <em>first.</em></div>
      <p class="sdb-subscribe-desc">No marketing emails. Just the articles — when they're published.</p>
      <div class="sdb-subscribe-form" id="subscribeForm">
        <input type="email" class="sdb-subscribe-input" placeholder="Your work email" id="sidebarEmail">
        <button class="sdb-subscribe-btn" onclick="sidebarSubscribe()">Subscribe →</button>
      </div>
      <div id="subscribeSuccess" style="display:none;">
        <span style="color:var(--green); font-size:13px; font-weight:600;">✓ You're in — check your inbox.</span>
      </div>
      <div class="sdb-subscribe-note">Unsubscribe anytime.</div>
    </div>

    <!-- Related articles (sidebar) -->
    <?php
    $related = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'post__not_in'   => array( get_the_ID() ),
      'category__in'   => wp_get_post_categories( get_the_ID() ),
      'orderby'        => 'date',
      'order'          => 'DESC',
    ) );
    if ( $related->have_posts() ) : ?>
    <div class="sdb">
      <div class="sdb-title">Related <em>articles</em></div>
      <div class="sdb-related">
        <?php while ( $related->have_posts() ) : $related->the_post();
          $rel_thumb = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
          $rel_cats  = get_the_category();
          $rel_cat   = ! empty( $rel_cats ) ? $rel_cats[0]->name : 'Article';
        ?>
        <a href="<?php the_permalink(); ?>" class="sdb-related-item">
          <div class="sdb-related-thumb">
            <?php if ( $rel_thumb ) : ?>
              <img src="<?php echo esc_url( $rel_thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
            <?php else : ?>
              <div class="sdb-related-thumb-placeholder">📄</div>
            <?php endif; ?>
          </div>
          <div>
            <div class="sdb-related-title"><?php the_title(); ?></div>
            <div class="sdb-related-cat"><?php echo esc_html( $rel_cat ); ?> · <?php echo get_the_date( 'M Y' ); ?></div>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- ERP Guide nudge -->
    <div class="sdb" style="background:var(--blue-light); border-color:rgba(26,79,160,0.15);">
      <div style="font-size:10px; font-weight:700; color:var(--blue); letter-spacing:0.1em; text-transform:uppercase; margin-bottom:8px;">Free Tool</div>
      <div class="sdb-title" style="color:var(--blue); margin-bottom:8px;">Not sure which ERP is right for you?</div>
      <p style="font-size:12px; color:var(--muted); font-weight:300; line-height:1.6; margin-bottom:14px;">5 minutes. Platform recommendation + readiness score.</p>
      <a href="<?php echo esc_url( home_url( '/erp-selection-guide' ) ); ?>" style="display:block; background:var(--blue); color:#fff; text-align:center; padding:9px; border-radius:6px; font-size:12px; font-weight:700; text-decoration:none;">Take the ERP Selection Guide →</a>
    </div>

  </aside>

</div><!-- /article-body -->

<!-- RELATED ARTICLES — full width -->
<?php
$related_bottom = new WP_Query( array(
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'post__not_in'   => array( get_the_ID() ),
  'category__in'   => wp_get_post_categories( get_the_ID() ),
  'orderby'        => 'date',
  'order'          => 'DESC',
) );
if ( $related_bottom->have_posts() ) : ?>
<div class="related-section">
  <div class="related-inner">
    <div class="related-header">
      <div class="related-title">More from <em>SOS</em></div>
      <a href="<?php echo esc_url( home_url( '/category/articles/' ) ); ?>" class="related-all">View all articles →</a>
    </div>
    <div class="related-grid">
      <?php while ( $related_bottom->have_posts() ) : $related_bottom->the_post();
        $rb_thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $rb_cats  = get_the_category();
        $rb_cat   = ! empty( $rb_cats ) ? $rb_cats[0]->name : 'Article';
      ?>
      <a href="<?php the_permalink(); ?>" class="related-card">
        <div class="related-card-img">
          <?php if ( $rb_thumb ) : ?>
            <img src="<?php echo esc_url( $rb_thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
          <?php else : ?>
            <div class="related-card-img-placeholder">📄</div>
          <?php endif; ?>
        </div>
        <div class="related-card-body">
          <div class="related-card-tag"><?php echo esc_html( $rb_cat ); ?></div>
          <div class="related-card-title"><?php the_title(); ?></div>
          <div class="related-card-date"><?php echo get_the_date( 'M j, Y' ); ?></div>
        </div>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- BACK BAR -->
<div class="back-bar">
  <a href="<?php echo esc_url( home_url( '/category/articles/' ) ); ?>" class="back-bar-link">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L5 7l4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    Back to Resources
  </a>
  <div class="back-bar-nav">
    <?php
    $prev = get_previous_post();
    $next = get_next_post();
    if ( $prev ) : ?>
      <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="back-bar-prev">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L5 7l4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <?php echo esc_html( wp_trim_words( $prev->post_title, 5, '…' ) ); ?>
      </a>
    <?php endif;
    if ( $next ) : ?>
      <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="back-bar-next">
        <?php echo esc_html( wp_trim_words( $next->post_title, 5, '…' ) ); ?>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M5 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    <?php endif; ?>
  </div>
</div>

<script>
// ── AUTO-BUILD TABLE OF CONTENTS ──
function buildTOC() {
  var prose   = document.querySelector('.prose');
  var tocEl   = document.getElementById('toc');
  var tocCard = document.getElementById('toc-card');
  if (!prose || !tocEl) return;

  var headings = Array.from(prose.querySelectorAll('h2'));
  if (headings.length === 0) { if (tocCard) tocCard.style.display = 'none'; return; }

  headings.forEach(function(h, i) {
    if (!h.id) {
      h.id = 'section-' + h.textContent.toLowerCase()
        .replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').substring(0, 40) || ('section-' + i);
    }
  });

  tocEl.innerHTML = headings.map(function(h) {
    return '<a href="#' + h.id + '" class="toc-item">' + h.textContent + '</a>';
  }).join('');

  initScrollSpy(headings);
}

function initScrollSpy(headings) {
  var tocLinks = document.querySelectorAll('.toc-item');
  window.addEventListener('scroll', function() {
    var current = '';
    headings.forEach(function(h) {
      if (window.scrollY >= h.offsetTop - 140) current = h.id;
    });
    tocLinks.forEach(function(link) {
      link.classList.toggle('active', link.getAttribute('href') === '#' + current);
    });
  }, { passive: true });
}

// ── READING PROGRESS BAR ──
window.addEventListener('scroll', function() {
  var el      = document.documentElement;
  var scrolled = el.scrollTop || document.body.scrollTop;
  var total   = el.scrollHeight - el.clientHeight;
  var fill    = document.getElementById('progressFill');
  if (fill && total > 0) fill.style.width = (scrolled / total * 100) + '%';
}, { passive: true });

// ── COPY LINK ──
function copyLink() {
  navigator.clipboard.writeText(window.location.href).then(function() {
    var btn = document.querySelector('.copy-link-btn');
    var orig = btn.textContent;
    btn.textContent = '✓ Copied!';
    btn.style.color = 'var(--green)';
    btn.style.borderColor = 'var(--green)';
    setTimeout(function() {
      btn.textContent = orig;
      btn.style.color = '';
      btn.style.borderColor = '';
    }, 2000);
  });
}

// ── MAILING LIST SUBSCRIBE ──
function sidebarSubscribe() {
  var emailEl = document.getElementById('sidebarEmail');
  var email   = emailEl.value.trim();
  var regex   = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email || !regex.test(email)) {
    emailEl.style.borderColor = 'var(--red)';
    emailEl.focus(); return;
  }
  emailEl.style.borderColor = '';
  // Wire to HubSpot Forms API in production:
  // fetch('https://api.hsforms.com/submissions/v3/integration/submit/{PORTAL_ID}/{FORM_GUID}', { ... })
  document.getElementById('subscribeForm').style.display    = 'none';
  document.getElementById('subscribeSuccess').style.display = 'block';
}

document.addEventListener('DOMContentLoaded', buildTOC);
</script>

<?php get_footer(); ?>
