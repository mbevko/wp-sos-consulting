<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php echo get_the_date();?>

    <?php the_content();?>

<?php endwhile; else: endif;?>

