<?php get_header();?>

<div class="article_body">
    <?php if(has_post_thumbnail()):?>
    <img
        src="<?php the_post_thumbnail_url('blog-large');?>"
        alt="<?php the_title();?>"
        class="post_img">
    <?php endif;?>

    <h1><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'blogcontent');?>
</div>

<?php get_footer();?>

<script>
	let sideBar = document.querySelector(".jp-relatedPosts")
	sideBar.style = "position: fixed; right: 0; top: 150px; border: solid silver 1px; padding: 15px; width: 20%; background: white; z-index:1;"
	
	let footer = document.querySelector("footer");
	footer.style = "position: relative; z-index: 2;"
</script>