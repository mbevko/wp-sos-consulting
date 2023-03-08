<?php wp_footer();?>
<footer>
    <img
        src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"
        class="footer_logo"/>
    <div class="footer_sitemap">

    <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_class' => 'footer_sitemap_container1' ) ); ?>

    </div>

    <?php get_template_part('includes/form','enquiry'); ?>
    <div class="contact_footer">
        <a href="#">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-instagram-50.png"
                class="">
        </a>

        <a href="#">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-mail-50.png"
                class="">
        </a>

        <a href="#">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-ringer-volume-50.png"
                class="">
        </a>
        <!-- <a target="_blank" href="https://icons8.com/icon/120374/menu-rounded">Menu Rounded</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
    </div>
    <!--  <div class="copyright">© 2022 SOS CONSULTING SERVICES  ALL RIGHTS RESERVED </div> -->
</footer>
</body>
</html>