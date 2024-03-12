<?php wp_footer();?>
<footer>
    <img
        src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"
        class="footer_logo"/>
    <div class="footer_sitemap">

        <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_class' =>
        'footer_sitemap_container1' ) ); ?>

    </div>

    <?php get_template_part('includes/form','enquiry'); ?>
    <div class="contact_footer">

        <a
            href="https://www.linkedin.com/company/sos-consulting-services-inc-"
            target="_blank"
            class="contact_footer_link contact_footer_link1">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-linkedin-50.png">
            <span>Follow Us</span>
        </a>
        <a
            href="mailto:info@sosconsultingservices.net"
            class="contact_footer_link contact_footer_link2">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-mail-50.png">
            info@sosconsultingservices.net
        </a>

        <a href="tel:6316556288" class="contact_footer_link contact_footer_link3">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-ringer-volume-50.png">
            631.655.6288
        </a>
    </div>
    <div class="icon-credit">
        <a target="_blank" href="https://icons8.com">
            Footer and header icons by Icons8</a>
    </div>

    <!--  <div class="copyright">© 2022 SOS CONSULTING SERVICES  ALL RIGHTS RESERVED </div> -->

    <script></script>
</footer>

<script type="text/javascript">
    _linkedin_partner_id = "6736929";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window
        ._linkedin_data_partner_ids
        .push(_linkedin_partner_id);
</script>
<script type="text/javascript">
            (function (l) {
                if (!l) {
                    window.lintrk = function (a, b) {
                        window
                            .lintrk
                            .q
                            .push([a, b])
                    };
                    window.lintrk.q = []
                }
                var s = document.getElementsByTagName("script")[0];
                var b = document.createElement("script");
                b.type = "text/javascript";
                b.async = true;
                b.src = "
        https : //snap.licdn.com/li.lms-analytics/insight.min.js";
                s
                    .parentNode
                    .insertBefore(b, s);
            })(window.lintrk);
        </script>
        <noscript>
            <img
                height="1"
                width="1"
                style="display:none;"
                alt=""
                src="
        https://px.ads.linkedin.com/collect/?pid=6736929&fmt=gif"/>
</noscript>

</body>
</html>