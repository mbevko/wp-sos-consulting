<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>

<section class="contact_body">

        <div class="back_banner">
            <div class="contact_container_left">
                <p class="page_info_headings">Call Us</p>
                <a href="tel:6316556288" class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/phone.png"/>
                        631.655.6288
                </a>
                <p class="page_info_headings">Email</p>
                <a href="mailto:info@sosconsultingservices.net" class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/mail.png"/>
                        <p>info@sosconsultingservices.net</p>
                </a>
                <p class="page_info_headings">Linkedin</p>
                <a href="https://www.linkedin.com/company/sos-consulting-services-inc-" class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"/>
                    <p>linkedin.com/sosconsultingservices</p>
                </a>
            </div>
            <div class="contact_container_right">
                <h2 class="contact_title"><?php the_title();?></h2>
                <?php get_template_part('includes/form','enquirycontact'); ?>
            </div>
        </div>

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
</section>

<?php get_footer();?>