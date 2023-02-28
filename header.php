<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS Consulting Services</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <?php wp_head();?>
    </head>
    <body>
        <div class="contact_header">
            <div class="contact_head_cont">
               <!--  <img class="mobile_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png"> -->
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" class="phone-icon contact_header_icon">
                    <p>555.987.6543</p>
                </a>

                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" class="mail-icon contact_header_icon">
                    info@sosconsultingservices.net
                </a>
            </div>

            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" class="linkedin-icon contact_header_icon">
                linkedin.com/sosconsultingservices
            </a>

            
        </div>
        <img class="hamburger_menu" src="<?php echo get_template_directory_uri(); ?>/images/menu_bars_white.png" width="50px"/>
        <nav class="index_nav">
            <div class="nav_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" class="logo"/>
                <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'nav_links' ) ); ?>
            </div>

            <p class="module_dropdown">Supported Solutions</p>
        </nav>

        <div class="mobile_nav_closed">
            <img class="mobile_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_lite.png">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_class' => 'mobile_nav_links' ) ); ?>
            <a href="#" class="mobile_nav_articles">Articles</a>
            
            <div class="mobile_contact">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" class="phone-icon mobile_contact_icon">
                    <p>555.987.6543</p>
                </a>

                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" class="mail-icon mobile_contact_icon">
                    <p>info@sosconsultingservices.net</p>
                </a>

                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" class="linkedin-icon mobile_contact_icon">
                    <p>linkedin.com/sosconsultingservices</p>
                </a>
            </div>
        </div>