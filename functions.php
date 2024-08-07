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
add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );

function my_excerpt_length($length){ return 10; } 

add_filter('excerpt_length', 'my_excerpt_length');

//Menus
register_nav_menus(

        array(
                
                'home-nav' => 'Home Nav Location',
                'main-nav' => 'Main Nav Location',
                'mobile-nav' => 'Mobile Nav Location',
                'footer-nav' => 'Footer Nav Location'
                
        )

);

// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-medium', 100, 500, true);
add_image_size('blog-small', 350, 250, true);

//widgets
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );
?>

