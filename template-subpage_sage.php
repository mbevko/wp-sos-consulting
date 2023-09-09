<?php
/*
Template Name: subpage_sage
*/
?>

<?php get_header();?>

<section class="more_info_body">
        <h2 class="subject_title"><?php the_title();?></h2>

        <div class="subject_article">
            <div class="subject_container">
                <div class="subject_container_left"><?php get_template_part('includes/section', 'content');?>
                <a href="<?php echo site_url('/contact'); ?>"><!-- <button class="contact_us_btn">Contact Us</button> --></a>
            </div>
                <div class="subject_container_right"><?php if(has_post_thumbnail()):?>
                    <img
                        src="<?php the_post_thumbnail_url('medium_large');?>"
                        alt="<?php the_title();?>+"
                        class="page_featured_img">
                    <?php endif;?></div>
            </div>
            
        </div>

        <div class="subpage_banner">
            <div class="featured_software">
                    <p>Sage 300 ERP</p>
            </div>
            <div class="subpage_banner_icon">
            <img
            class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/commerceintegration.PNG">
                <p class="subpage_banner_head">Migration</p>
                <p class="subpage_banner_text">Outgrown your existing system? We have extensive experience in migrating data from legacy systems into Sage 300.</p>
            </div>
            <div class="subpage_banner_icon">
            <img
                    class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/alerts.PNG">
                    
                <p class="subpage_banner_head">Support</p>
                <p class="subpage_banner_text">We are always just an email or phone call away from being able to assist you with any issues you incur. </p>
            </div>
            <div class="subpage_banner_icon">
            <img
                class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/workflow-analysis.PNG">
                <p class="subpage_banner_head">Integration</p>
                <p class="subpage_banner_text">We have years of experience writing custom solutions that seamlessly integrate between other software and Sage 300.</p>
            </div>
        </div>
       <!--  <div class="subpage_banner">
            <div class="featured_software">
                    <p>Sage HRMS</p>
            </div>
            <div class="subpage_banner_icon">
            <img
            class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/commerceintegration.PNG">
                <p class="subpage_banner_head">Migration</p>
                <p class="subpage_banner_text">Outgrown your existing system? We have extensive experience in migrating data from legacy systems into Sage 300.</p>
            </div>
            <div class="subpage_banner_icon">
            <img
                    class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/alerts.PNG">
                    
                <p class="subpage_banner_head">Support</p>
                <p class="subpage_banner_text">We are always just an email or phone call away from being able to assist you with any issues you incur. </p>
            </div>
            <div class="subpage_banner_icon">
            <img
                class="subpage_banner_img"
                    src="<?php echo get_template_directory_uri(); ?>/images/ColorOne/workflow-analysis.PNG">
                <p class="subpage_banner_head">Integration</p>
                <p class="subpage_banner_text">We have years of experience writing custom solutions that seamlessly integrate between other software and Sage 300.</p>
            </div>
        </div> -->

    
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