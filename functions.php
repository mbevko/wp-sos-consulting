<?php

//Load Stylesheets
function load_css() {
        
        $style_ver    = filemtime( get_template_directory() . '/css/style.css' );
        $responsive_ver = filemtime( get_template_directory() . '/css/responsive.css' );

        wp_register_style( 'stylesheet', get_template_directory_uri() . '/css/style.css', array(), $style_ver, 'all' );
        wp_enqueue_style( 'stylesheet' );

        wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array( 'stylesheet' ), $responsive_ver, 'all' );
        wp_enqueue_style( 'responsive' );

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

// Gutenberg / Block Editor support
add_theme_support('align-wide');
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');

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

// ── Custom Taxonomies ──
function sos_register_taxonomies() {

    // Topic taxonomy: ERP Rescue / New Implementation / Optimization / Partner Selection
    register_taxonomy( 'topic', 'post', array(
        'label'             => 'Topics',
        'labels'            => array(
            'name'          => 'Topics',
            'singular_name' => 'Topic',
            'add_new_item'  => 'Add New Topic',
            'edit_item'     => 'Edit Topic',
        ),
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'topic' ),
    ) );

    // Platform taxonomy: Acumatica / Sage Intacct / Sage 300 / Sage HRMS
    register_taxonomy( 'platform', 'post', array(
        'label'             => 'Platforms',
        'labels'            => array(
            'name'          => 'Platforms',
            'singular_name' => 'Platform',
            'add_new_item'  => 'Add New Platform',
            'edit_item'     => 'Edit Platform',
        ),
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'platform' ),
    ) );
}
add_action( 'init', 'sos_register_taxonomies' );

// ── Read Time Helper ──
// Usage in templates: echo sos_read_time();
function sos_read_time() {
    $content    = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( strip_tags( $content ) );
    return max( 1, ceil( $word_count / 200 ) ) . ' min read';
}

// ── Author Role Title — custom user profile field ──
// Adds a "Role Title" field to WP Admin → Users → Edit User
// Displayed in article hero and author bio on single.php

function sos_author_role_title_field( $user ) {
    ?>
    <h3>SOS Author Info</h3>
    <table class="form-table">
        <tr>
            <th><label for="role_title">Role Title</label></th>
            <td>
                <input type="text"
                       name="role_title"
                       id="role_title"
                       value="<?php echo esc_attr( get_user_meta( $user->ID, 'role_title', true ) ); ?>"
                       class="regular-text"
                       placeholder="e.g. Senior Consultant · SOS">
                <p class="description">Displayed beneath the author name on articles (e.g. "Senior Consultant · SOS").</p>
            </td>
        </tr>
    </table>
    <?php
}
add_action( 'show_user_profile', 'sos_author_role_title_field' );
add_action( 'edit_user_profile', 'sos_author_role_title_field' );

function sos_save_author_role_title( $user_id ) {
    if ( ! current_user_can( 'edit_user', $user_id ) ) return;
    update_user_meta( $user_id, 'role_title', sanitize_text_field( $_POST['role_title'] ) );
}
add_action( 'personal_options_update',  'sos_save_author_role_title' );
add_action( 'edit_user_profile_update', 'sos_save_author_role_title' );

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

