<?php wp_footer();?>
<footer>
    <img
        src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"
        class="footer_logo"/>
    <div class="footer_sitemap">

    <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_class' => 'footer_sitemap_container1' ) ); ?>

        <!-- <ul class="footer_sitemap_container1">
            <li>
                <a href="#" class="sitemap_first_link">Home</a>
            </li>
            <li>
                <a href="<?php $permalink = get_permalink( $id ); ?> about">About</a>
                
                
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
        <ul class="footer_sitemap_container2">
            <li>
                <a href="#" class="sitemap_first_link">Services</a>
            </li>
            <li>
                <a href="">Accounting & Financials</a>
            </li>
            <li>
                <a href="#">Project & Job Costing</a>
            </li>
            <li>
                <a href="#">Distribution Manufacturing & Barcoding</a>
            </li>
            <li>
                <a href="#">Fixed Assets</a>
            </li>
            <li>
                <a href="#">Alerts</a>
            </li>
            <li>
                <a href="#">Reporting Dashboards & Intelligence</a>
            </li>
        </ul>
        <ul class="footer_sitemap_container3">
            <li>
                <a href="#" class="sitemap_first_link">Software</a>
            </li>
            <li>
                <a href="#">Sage 300 Modules</a>
            </li>
            <li>
                <a href="#">3rd Party Modules</a>
            </li>
        </ul>
        <ul class="footer_sitemap_container4">
            <li>
                <a href="#" class="sitemap_first_link">Archive</a>
            </li>
        </ul> -->
    </div>
    <!-- <p class="footer_form_title">Send Us a Message</p>
    <form class="footer_form">
        <input type="text" placeholder="Name" class="footer_form_input"/>
        <input type="text" placeholder="Email" class="footer_form_input"/>
        <input type="textarea" placeholder="Message" class="footer_form_input"/>
        <button class="footer_form_sbmt">Submit</button>
    </form>
 -->

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