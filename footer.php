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

    <a href="https://www.linkedin.com/company/sos-consulting-services-inc-" target="_blank" class="contact_footer_link">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-linkedin-50.png">
                Follow Us
        </a>
        <a href="mailto:info@sosconsultingservices.net" class="contact_footer_link">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-mail-50.png"
                > info@sosconsultingservices.net
        </a>

        <a href="tel:6316556288" class="contact_footer_link">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-ringer-volume-50.png">
                631.655.6288
        </a>
    </div>
    <div class="icon-credit">
        <a target="_blank" href="https://icons8.com"> Footer and header icons by Icons8</a>
    </div>
   
    <!--  <div class="copyright">© 2022 SOS CONSULTING SERVICES  ALL RIGHTS RESERVED </div> -->

    <script>

    </script>
</footer>
</body>
</html>