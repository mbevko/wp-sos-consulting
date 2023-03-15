<?php get_header();?>


        <div class="article_body">

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="post_img">
            <?php endif;?>

            <h1><?php the_title();?></h1>

            <?php get_template_part('includes/section', 'blogcontent');?>
        </div>

        <div class="subpage_archive">
        <h2>Recent Articles</h2>
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

<?php get_footer();?>