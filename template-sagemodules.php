<?php
/*
Template Name: Sage Module Description
*/
?>

<?php get_header();?>

<section class="more_info_body">
        <div class="subject_title_container">
            <h2 class="subject_title"><?php the_title();?></h2>
            <img
                    class="horizontal_logo"
                    src="<?php echo get_template_directory_uri(); ?>/images/SOS Morse Code.png">
        </div>
        

        <div class="subject_article">
            <div class="subject_container">
                <div class="subject_container_left"><?php get_template_part('includes/section', 'content');?>
                <a href="<?php echo site_url('/contact'); ?>"><button class="contact_us_btn">Contact Us</button></a>
            </div>
                <div class="subject_container_right"><?php if(has_post_thumbnail()):?>
                    <img
                        src="<?php the_post_thumbnail_url('medium_large');?>"
                        alt="<?php the_title();?>+"
                        class="page_featured_img">
                    <?php endif;?></div>
            </div>
            
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