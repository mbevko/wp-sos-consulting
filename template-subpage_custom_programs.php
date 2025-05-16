<?php
/*
Template Name: subpage_customPrograms
*/
?>

<?php get_header();?>

<section class="more_info_body">
    <div class="subpage_header_banner">
        <div class="subpage_header_container">
            <div class="subpage_header_subcont">
                <h2 class="subpage_title"><?php the_title();?></h2>
                <img
                    class="horizontal_logo"
                    src="<?php echo get_template_directory_uri(); ?>/images/SOS Morse Code.png">
            </div>
            <div class="more_info_btns_subpage">
                <a class="subpage_learn_more_link">
                    <button class="subpage_learn_more_btn">Schedule Demo</button>
                </a>
                <a href="<?php echo site_url('/contact'); ?>" class="subpage_contact_us_link">
                    <button class="subpage_contact_us_btn">Contact Us</button>
                </a>
            </div>
        </div>
        <img
            class="subpage_header_img"
            src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/CustomProgramingpage.png">
    </div>

    <div class="subject_article">
        <div class="subject_container">
            <div class="subject_container_left"><?php get_template_part('includes/section', 'content');?>
                <a href="<?php echo site_url('/contact'); ?>">
                    <!-- <button class="contact_us_btn">Contact Us</button> -->
                </a>
            </div>
            <div class="subject_container_right"><?php if(has_post_thumbnail()):?>
                <img
                    src="<?php the_post_thumbnail_url('medium_large');?>"
                    alt="<?php the_title();?>+"
                    class="page_featured_img">
                <?php endif;?></div>
        </div>

    </div>

    <div class="third_party_banner">
        <img
            class="third_party_banner_icon customui"
            src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/customui.png">
        <p class="third_party_banner_p"><strong>Custom UI</strong><br>Create bespoke user interfaces tailored to your ERP</p>
        <img
            class="third_party_banner_icon databaseintegration"
            src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/databaseintegration.png">
        <p class="third_party_banner_p"><strong>Database Integration</strong><br>Integrate your ERP with existing databases for efficiency.</p>
        <img
            class="third_party_banner_icon integration"
            src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/sage300integration.png">
        <p class="third_party_banner_p"><strong>ERP Integration</strong><br>Connect your ERP seamlessly with essential business applications.</p>
        <img
            class="third_party_banner_icon tailoredsolutions"
            src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/tailoredsolutions.png">
        <p class="third_party_banner_p"><strong>Tailored Solutions</strong><br>Custom programming solutions tailored to your business ERP needs.</p>

        <p class="third_party_banner_title">Make it your own</p>
    </div>

    <div class="outer-container">
    <div class="container">
      <div class="table-section">
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Items</th>
              <th>Units</th>
              <th>Qty on Hand</th>
              <th>Unit Cost</th>
              <th>On Order</th>
            </tr>
          </thead>
          <tbody>
            <tr><td><input type="checkbox"></td><td>Pens</td><td>Box</td><td>150</td><td>$4.25</td><td>40</td></tr>
            <tr><td><input type="checkbox"></td><td>Staplers</td><td>Each</td><td>85</td><td>$7.90</td><td>20</td></tr>
            <tr><td><input type="checkbox"></td><td>Paper Reams</td><td>Pack</td><td>60</td><td>$12.00</td><td>35</td></tr>
            <tr><td><input type="checkbox"></td><td>Binders</td><td>Each</td><td>45</td><td>$6.75</td><td>15</td></tr>
            <tr><td><input type="checkbox"></td><td>Envelopes</td><td>Box</td><td>100</td><td>$3.60</td><td>50</td></tr>
            <tr><td><input type="checkbox"></td><td>Markers</td><td>Pack</td><td>80</td><td>$5.00</td><td>10</td></tr>
            <tr><td><input type="checkbox"></td><td>Notebooks</td><td>Each</td><td>200</td><td>$2.50</td><td>60</td></tr>
          </tbody>
          <tfoot>
            <tr class="total-row">
              <td colspan="4"></td>
              <td class="total-label">Total: $3,650.00</td>
              <td class="profit-label">Profit: $1,245.00</td>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="info-section">
        <details open>
            <summary>Create Read Update Delete</summary>
        <p>We build tailored solutions that turn your ERP into a perfect fit for your business—down to the smallest detail.</p>
        </details>

        <details>
          <summary>Anywhere and In Real Time</summary>
          <p>Our custom programming makes your ERP as mobile and immediate as your team. Whether you're in Sage 300, Intacct, or Acumatica, we develop tools that surface exactly what you need—instantly and from anywhere. No more digging, no more delay.</p>
        </details>

        <details>
          <summary>Lightweight and Fast</summary>
          <p>We craft add-ons and automations that do exactly what’s needed—nothing more, nothing less. Every customization is designed to run lean within your ERP, keeping performance high and complexity low.</p>
        </details>

        <details>
          <summary>Scalable</summary>
          <p>From a single form field to a full module, our custom code grows with your business. We work closely with your workflow today—and build it to flex with tomorrow.</p>
        </details>

        <details>
          <summary>State of the Art Tech</summary>
          <p>Our development combines modern standards with ERP reliability. Whether it’s APIs, web interfaces, or advanced automation, we use the best tools to create forward-compatible enhancements tailored to your exact process.</p>
        </details>
      </div>
    </div>
  </div>

    <div class="thirdparty_solutions_desc">
            <h3>Streamline Your Business Operations and Enhance User Experience</h3>
        <p>With years of experience in ERP customization, we have successfully helped
            businesses across various industries optimize their operations and maximize the
            value of their software investment. Our passion lies in empowering organizations
            to harness the full potential of their ERP by tailoring it to their specific
            needs. If you're seeking to simplify complex processes, improve productivity, or
            add functionalities, we are here to provide expert custom programming services
            to transform your experience and drive business growth.</p>
    </div>

    <div class="subpage_archive">
        <!-- 
        <h2>Latest Articles</h2> -->
        <div class="subpage_article">
        <?php   $args = array(
            'post_type' => array( 'post' ),
            'posts_per_page' => 3,
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo'<a href="' . get_permalink() . '" class="archive_btn" >';
                    echo '<div class="card_body">';
                    echo the_post_thumbnail('blog-small');
                    echo '<div class="card_bottom">';
                    echo '<h3 class="thumbnail_titles">'. get_the_title() . '</h3>';
                    the_excerpt();
                    echo '<button class="read_more">Read More</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
        ?>
        </div>
    </div>
</section>

<script>
    let schedDemo = document.querySelector(".schedule_demo");
    const modal = document.querySelector(".demo_modal")

    schedDemo.addEventListener('click', () => {
        modal.style = "display: block;"
    })

    modal.addEventListener('click', (e) => {
        if (e.target.getAttribute("data-type") !== document.querySelector(".schedule_demo").getAttribute("data-type")) {
            return
        } else 
            modal.style = "display: hidden"
    })
</script>

<?php get_footer();?>