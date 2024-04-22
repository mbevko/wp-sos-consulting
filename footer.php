<?php wp_footer();?>
<footer>
    <img
        src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"
        class="footer_logo"/>
    <div class="footer_sitemap">

        <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_class' =>
        'footer_sitemap_container1' ) ); ?>

    </div>
    <div class="footer_form form">
        <script
            charset="utf-8"
            type="text/javascript"
            src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
            hbspt
                .forms
                .create({region: "na1", portalId: "45057611", formId: "1ebd865c-a9a0-4bce-a098-11e4c846b77c"});
        </script>
    </div>
    <p class="footer_form_title">Send Us a Message</p>
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

        <a href="tel:18442448869" class="contact_footer_link contact_footer_link3">
            <img
                src="<?php echo get_template_directory_uri(); ?>/images/icons8-ringer-volume-50.png">+1(844)-244-8869</a>
    </div>
    <div class="icon-credit">
        <a target="_blank" href="https://icons8.com">
            Footer and header icons by Icons8</a>
    </div>

    <!--  <div class="copyright">© 2022 SOS CONSULTING SERVICES  ALL RIGHTS RESERVED </div> -->

    <script></script>
</footer>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

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