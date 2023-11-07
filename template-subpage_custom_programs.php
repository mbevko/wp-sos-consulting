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
                <a href="<?php echo site_url('/about'); ?>" class="subpage_learn_more_link">
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
            <p class="third_party_banner_p">Custom UI</p>
            <img
                class="third_party_banner_icon databaseintegration"
                src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/databaseintegration.png">
            <p class="third_party_banner_p">Database<br>Integration</p>
            <img
                class="third_party_banner_icon integration"
                src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/sage300integration.png">
            <p class="third_party_banner_p">Sage 300<br>Integration</p>
            <img
                class="third_party_banner_icon tailoredsolutions"
                src="<?php echo get_template_directory_uri(); ?>/images/CustomProgrammingPage/tailoredsolutions.png">   
            <p class="third_party_banner_p">Tailored<br>Solutions</p>      

        <p class="third_party_banner_title">Make it your own</p>
    </div>

    <div class="thirdparty_solutions_desc">
        <h3>Streamline Your Business Operations and Enhance User Experience</h3>        
        <p>Our work involves collaborating closely with clients to identify their unique
            requirements and pain points within Sage 300. Whether it's automating repetitive
            tasks, generating insightful reports, or adding entirely new features, we
            leverage VB.NET for creating intuitive user interfaces and SQL for managing and
            retrieving data from the Sage 300 database. This combination of technologies
            allows me to develop solutions that are user-friendly, reliable, and fully
            aligned with the existing Sage 300 environment.</p>

        <p>With years of experience in Sage 300 customization, we have successfully
            helped businesses across various industries optimize their operations and
            maximize the value of their software investment. Our passion lies in empowering
            organizations to harness the full potential of Sage 300 by tailoring it to their
            specific needs. If you're seeking to simplify complex processes, improve
            productivity, or add functionalities that Sage 300 lacks, we are here to provide
            expert VB.NET and SQL development services to transform your Sage 300 experience
            and drive business growth.</p>
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
                    echo '<p class="read_more"> Read More >> </p>';
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

<?php get_footer();?>