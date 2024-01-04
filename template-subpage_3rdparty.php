<?php
/*
Template Name: subpage_3rdparty
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
            src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/3rdPartyPage.png">
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
                class="third_party_banner_icon integrate"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Integrate.png">
                <p class="third_party_banner_p"><strong>Integrate</strong> <br> All your tools to work together in one ERP</p>
            <img
                class="third_party_banner_icon customize"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/CustomizeIII.png">
                <p class="third_party_banner_p"><strong>Customize</strong><br>Your ERP to match your company's workflow and requirements</p>
                
            <img
                class="third_party_banner_icon automate"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Automate.png">
                <p class="third_party_banner_p"><strong>Automate</strong><br>your business needs, cutting manual work, reducing errors and freeing up time</p>
            <img
                class="third_party_banner_icon streamline"
                src="<?php echo get_template_directory_uri(); ?>/images/3rdPartyPage/Streamline.png">   
                <p class="third_party_banner_p"><strong>Streamline</strong><br>Your process, creating a nimble system that adapts to your business</p>      

        <p class="third_party_banner_title">Supercharge your ERP</p>
    </div>
    
    
    <?php echo do_shortcode('[wptabs id="585"]'); ?>

    <div class="see_more">
        
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

