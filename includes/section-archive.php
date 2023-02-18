<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <div class="card">
        <div class="card_body">
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>

            <a class="archive_btn"href="<?php the_permalink();?>" /> Read More</a>
        </div>
    </div>
<?php endwhile; else: endif;?>