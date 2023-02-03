<?php 
//function to add stylesheets
function custom_scripts(){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'custom_scripts');

//function to activate menus
function custom_menus()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Navigation Bar');
    register_nav_menu('secondary', 'Footer');
}
//adding menu into appearance folder
add_action('init', 'custom_menus');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' );
//activating pot formats i.e aside image, video
add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
//sidebar function
function custom_sidebar()
{
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'class'=>'custom',
        'description'=>'standard sidebar',
        'before_widget'  => '<li id="%1$s" class="widget %2$s">',
        'after_widget'   => '</li>\n',
        'before_title'   => '<h2 class="widgettitle">',
        'after_title'    => '</h2>\n',
        'before_sidebar' => '',
        'after_sidebar'  => '',
        'show_in_rest'   => false,
    ));
}
add_action('widgets_init', 'custom_sidebar');
?>