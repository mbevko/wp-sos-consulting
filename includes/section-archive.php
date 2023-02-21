
<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
        
        <div class="card_body">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="post_img">
            <?php endif;?>
            <div class="card_bottom">
                <h3 class="thumbnail_titles"><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
                <a class="archive_btn"href="<?php the_permalink();?>" /> Read More >></a>
            </div>
        </div>

        
<?php endwhile; else: endif;?>