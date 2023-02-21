<?php
/*
Template Name: Sage Module Description
*/
?>

<?php get_header();?>

<section class="more_info_body">
    <div class="white_space">
        <h2 class="subject_title"><?php the_title();?></h2>

        <div class="subject_article">
            <?php get_template_part('includes/section', 'content');?>
            <button class="contact_us_btn">Contact Us</button>
        </div>
    </div>
    <div class="subpage_archive">
        <h2>Latest Articles</h2>
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
                    echo '<div class="card_body">';
                    echo the_post_thumbnail('blog-small');
                    echo '<div class="card_bottom">';
                    echo '<h3 class="thumbnail_titles">'. get_the_title() . '</h3>';
                    the_excerpt();
                    echo'<a href="' . get_permalink() . '" class="archive_btn" > Read More >> </a>';
                    echo '</div>';
                    echo '</div>';
                    
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