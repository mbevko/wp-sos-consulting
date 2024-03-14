<?php
/*
Template Name: subpage_acumatica
*/
?>

<?php get_header();?>

<div class="subpage_header_banner">
    <div class="subpage_header_container">
        <div class="subpage_header_subcont">
            <h2 class="subpage_title"><?php the_title();?></h2>
            <img
                class="horizontal_logo"
                src="<?php echo get_template_directory_uri(); ?>/images/SOS Morse Code.png">
        </div>
        <div class="more_info_btns_subpage">
            <a href="<?php echo site_url('/about'); ?>" class="subpage_learn_more_link">
                <button class="subpage_learn_more_btn">Schedule Demo</button>
            </a>
            <a href="<?php echo site_url('/contact'); ?>" class="subpage_contact_us_link">
                <button class="subpage_contact_us_btn">Contact Us</button>
            </a>
        </div>
    </div>
    <img
        class="subpage_header_img"
        src="<?php echo get_template_directory_uri(); ?>/images/BannerImages/AcumaticaBannerImage.png">
</div>
<section class="acumatica_body">



    <div class="acumatica_banner">
        <h2 class="acumatica_banner_h">Streamline Your Business Operations with Acumatica</h2>
        <p class="acumatica_banner_p">As an authorized vendor for Acumatica, we are proud to offer a complete set of business management applications that can help you streamline your operations, improve productivity, and reduce costs. Acumatica is a cloud-based ERP software that provides a complete set of business management applications, including financials, distribution, project accounting, and CRM.</p>
        <div class="acumatica_banner_icons">
            <a href="#" class="acumatica_banner_links">
                <div class="acumatica_banner_link_cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/acumatica_images/icons8-manufacturing-100.png" class="acumatica_banner_icon"/>
                    <p class="acumatica_banner_icon_text">Manufacturing Management</p>
                </div>
            </a>
            <a href="#" class="acumatica_banner_links">
                <div class="acumatica_banner_link_cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/acumatica_images/icons8-manufacturing-100.png" class="acumatica_banner_icon"/>
                    <p class="acumatica_banner_icon_text">Distribution Management</p>
                </div>
            </a>
            <a href="#" class="acumatica_banner_links">
                <div class="acumatica_banner_link_cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/acumatica_images/icons8-manufacturing-100.png" class="acumatica_banner_icon"/>
                    <p class="acumatica_banner_icon_text">Construction Management</p>
                </div>
            </a>
            <a href="#" class="acumatica_banner_links">
                <div class="acumatica_banner_link_cont">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/acumatica_images/icons8-manufacturing-100.png" class="acumatica_banner_icon"/>
                    <p class="acumatica_banner_icon_text">Project Accounting</p>
                </div>
            </a>
        </div>
    </div>




</section>

<?php get_footer();?>