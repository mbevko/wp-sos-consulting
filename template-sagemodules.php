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
            <div class="article"></div>
    </section>

<?php get_footer();?>

