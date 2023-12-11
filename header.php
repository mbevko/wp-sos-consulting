<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <a href='http://www.mindmatrix.net' title='Marketing Automation' onclick='window.open(this.href);return(false);' ><script type='text/javascript' src='https://map.acumatica.com/track/f1ek5d1tl7m/payload.js' async> </script></a>

        <title>SOS Consulting Services</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <?php wp_enqueue_script('jquery');?>
        <?php wp_head();?>
    </head>
    <body>
        <div class="contact_header">
            <div class="contact_head_cont">
                <!--  <img class="mobile_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"> -->
                <a href="tel:6316556288">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/phone.png"
                        class="phone-icon contact_header_icon">
                    <p>631.655.6288</p>
                </a>

                <a href="mailto:info@sosconsultingservices.net">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/mail.png"
                        class="mail-icon contact_header_icon">
                    info@sosconsultingservices.net
                </a>
            </div>

            <a href="https://www.linkedin.com/company/sos-consulting-services-inc-" target="_blank">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"
                    class="linkedin-icon contact_header_icon">
                linkedin.com/sosconsultingservices
            </a>

        </div>
        <img
            class="hamburger_menu"
            src="<?php echo get_template_directory_uri(); ?>/images/icons8-menu-48.png"
            width="50px"/>
        <nav class="index_nav">
               <a href="<?php echo site_url(); ?>" class="logo_link"> <img
                    src="<?php echo get_template_directory_uri(); ?>/images/3.png"
                    class="logo"/> </a>
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' =>
                'nav_links' ) ); ?>
        </nav>

        <div class="mobile_nav_closed">
            <a href="<?php echo site_url(); ?>">
            
                <img
                    class="mobile_logo"
                    src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png">
            </a>

            <div class="mob_back">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-back-50.png" class="mob_nav_back"> 
                <p>Back</p>
            </div>

            <?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_class' =>
            'mobile_nav_links' ) ); ?>
            

            

            <div class="mobile_contact">
                <a href="tel:6316556288">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/phone.png"
                        class="phone-icon mobile_contact_icon">
                    <p>631.655.6288</p>
                </a>

                <a href="mailto:info@sosconsultingservices.net">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/mail.png"
                        class="mail-icon mobile_contact_icon">
                    <p>info@sosconsultingservices.net</p>
                </a>

                <a href="https://www.linkedin.com/company/sos-consulting-services-inc-" target="_blank">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"
                        class="linkedin-icon mobile_contact_icon">
                    <p>linkedin.com/sosconsultingservices</p>
                </a>
            </div>
        </div>
