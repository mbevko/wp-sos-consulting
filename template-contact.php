<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>

<section class="contact_body">
    <div class="contact_white_space">

        <div class="back_banner">
            <div class="contact_container_left">
                <p class="page_info_headings">Call Us</p>
                <div class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/phone.png"/>
                    <p>555.987.6543</p>
                </div>
                <p class="page_info_headings">Email</p>
                <div class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/mail.png"/>
                    <p>info@sosconsultingservices.net</p>
                </div>
                <p class="page_info_headings">Linkedin</p>
                <div class="contact_page_info">
                    <img
                        class="contact_page_icons"
                        src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"/>
                    <p>linkedin.com/sosconsultingservices</p>
                </div>
            </div>
            <div class="contact_container_right">
                <h2 class="contact_title"><?php the_title();?></h2>
                <form class="contact_form">
                    <input type="text" name="name" class="name" placeholder="Name"/>
                    <input
                        type="text"
                        name="comp_name"
                        class="comp_name"
                        placeholder="Company Name"/>
                    <input
                        type="text"
                        name="contact_email"
                        class="contact_email"
                        placeholder="Email"/>
                    <textarea name="message" class="message" placeholder="Write us a Message"></textarea>
                    <button class="form_submit">Send Message</button>
                </form>
            </div>
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