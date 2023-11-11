<?php get_header();?>


        <div class="article_body">
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="post_img">
                <?php endif;?>

                <h1><?php the_title();?></h1>

                <?php get_template_part('includes/section', 'blogcontent');?>
            </div>


    <?php get_footer();?>