<?php

//Load Stylesheets
function load_css() {
        
        wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), false, 'all' );
        wp_enqueue_style('stylesheet');

}

add_action('wp_enqueue_scripts', 'load_css');


//Load JavaScript
function load_js() {

        wp_register_script('functionality', get_template_directory_uri() . '/js/script.js', array(), false, true);
        wp_enqueue_script('functionality');

}
add_action('wp_enqueue_scripts', 'load_js');


//Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(

        array(

                'main-nav' => 'Main Nav Location',
                'mobile-nav' => 'Mobile Nav Location'
        )

);

?>