<?php get_header();?>

<header class="main_header">
    <div class="overlay">
        <h1 class="header_title">Enterprise Management Software & Technology Provider</h1>
        <p>Providing end-to-end solutions for businesses looking for greater efficiency,
            flexibility, and insight.</p>
        <div class="more_info_btns">
            <a href="<?php echo site_url('/about'); ?>">
                <button class="header_learn_more_btn">Learn More</button>
            </a>
            <a href="<?php echo site_url('/contact'); ?>">
                <button class="header_contact_us_btn">Contact Us</button>
            </a>
        </div>
        <!-- <img src="./images/3.png" class="header_logo"/> -->
    </div>
</header>

<section class="index_main_body">
    <article class="software">
        <h2 class="software_heading">Supported Solutions</h2>
        <div class="software_links">
            <a
                href="<?php echo site_url('/enterprise-resource-planning-erp'); ?>"
                title="ERP Solutions"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/erp.png"
                    alt="ERP Solutions">
                <p class="software_links_p">ERP Solutions</p>
            </a>
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/SOS More Code Vertical.png"
                class="vertical_logo"
                style="width: 5px;">

            <a
                href="<?php echo site_url('/human-resource-management'); ?>"
                title="Human Resource Management"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/hrms.png"
                    alt="Human Resource Management">
                <p class="software_links_p">Human Resource Management</p>
            </a>
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/SOS More Code Vertical.png"
                class="vertical_logo"
                style="width: 5px;">
            <a
                href="<?php echo site_url('/custom-programming'); ?>"
                title="Custom Programming"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/customprogram.png"
                    alt="Custom Programming">
                <p class="software_links_p">Custom Programming</p>
            </a>
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/SOS More Code Vertical.png"
                class="vertical_logo"
                style="width: 5px;">
            <a
                href="<?php echo site_url('/3rd-party-solutions'); ?>"
                title="Custom Screens and Applications"
                class="sf_link_cont">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/homepage/3rdparty.png"
                    alt="3rd Party Supported Solutions"/>
                <p class="software_links_p">3rd Party Solutions</p>
            </a>

        </div>
    </article>
    <article class="sos_info">
        <div class="sos_info_content">
            <h2 class="sos_info_heading">Why SOS Consulting Services?</h2>
            <p>Welcome to SOS Consulting Services, where expertise meets innovation. We are
                a dynamic consulting practice comprised of seasoned professionals in accounting,
                software engineering, IT, and project management, with over 25 years of industry
                experience. Our mission is to deliver top-tier ERP solutions to a wide array of
                clients across diverse sectors, including financial services,
                manufacturing/distribution, retail, agriculture, food services, electronics,
                real estate, maintenance, and healthcare, among others. Join us as we transform
                the way businesses excel in the digital era.</p>
            <a href="<?php echo site_url('/about');?>" class="sos_info_link">See More</a>
        </div>
        <img
            src="<?php echo get_template_directory_uri(); ?>/images/homepagebannergraphic.png"
            class="sos_info_graphic">
    </article>
    <h2 class="software_heading">
        Our Supported Softwares
    </h2>

    <div
        class="supp_software carousel"
        data-flickity='{ "groupCells": true, "wrapAround": true}'>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/acumatica_images/acumatica-logo-2024.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/intacctlogo.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/hrmslogo.png'"
                class="acumatica_front_logo supp_software_logo"/>

        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/sage300.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/TrueCommerce-logo.svg'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
        <div class="carousel-cell">
            <img
                src="<?php echo get_template_directory_uri(); ?>'/images/ecilogo.png'"
                class="acumatica_front_logo supp_software_logo"/>
        </div>
    </div>

    <div class="hp_center_banner">

        <a
            href="<?php echo get_template_directory_uri(); ?>'/2024/04/22/nagigating-erp-implementation-pitfalls/'"
            class="hp_banner_left">
            <h2>ERP Implementation Success Guide</h2>
            <p>Ensure a seamless and successful ERP migration with SOS Consulting Services' proven method, backed by decades of experience and a track record of success.</p>
            <button class="hp_read_more">Read More</button>
        </a>
        <a
            href="<?php echo get_template_directory_uri(); ?>'/2024/05/09/comprehensive-guide-to-selecting-the-right-erp-for-your-business/'"
            class="hp_banner_right">
            <h2>How to Choose the Right ERP</h2>
            <p>Achieve a successful ERP implementation by following our comprehensive guide to selecting the right ERP solution for your business.</p>
            <button class="hp_read_more">Read More</button>
        </a>
    </div>

    <div class="map_section">
    <h2 class="software_heading">
        Helping Clients Around the Globe
    </h2>
    <?php the_content();?>
    </div>


    <article class="articles">
        <!-- <h2 class="articles_heading"></h2> -->
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

    </article>

</section>

<?php get_footer();?>