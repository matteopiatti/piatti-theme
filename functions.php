<?php

/*----------------------------- PHP-FILES -----------------------------------------*/

include_once 'inc/gutenberg_blocks.php';
include_once 'inc/imagesize.php';
include_once 'inc/cpt.php';



/*----------------------------- THEME SUPPORT ------------------------------------*/

add_theme_support( 'post-thumbnails' );



/*----------------------------- NAVIGATION REGISTRY -------------------------------*/

function navigation() {
    register_nav_menu('main_navigation',__( 'Main Navigation' ));
}
add_action( 'init', 'navigation' );



/*----------------------------- STYLE / SCRIPT REGISTRY ---------------------------*/

add_action('wp_enqueue_scripts', 'enqueue_js_scripts');
function enqueue_js_scripts()
{
    wp_enqueue_script('jquery');
//    wp_enqueue_style('montserrat-font', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap', [], '1.0', 'all');
//    wp_enqueue_style('font-preload-style', get_stylesheet_directory_uri() . '/assets/dist/fonts/Optima-Regular.woff', array(), null);
//    wp_enqueue_style('font-fa-solid-preload-style', get_stylesheet_directory_uri() . '/assets/webfonts/fa-solid-900.woff2', array(), null);
//    wp_enqueue_style('font-fa-brands-preload-style', get_stylesheet_directory_uri() . '/assets/webfonts/fa-brands-400.woff2', array(), null);

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/main.css', [], '1.0.1', 'all');
    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array( 'jquery' ), null, true);
}



/*----------------------------- ACF REGISTRATIONS -------------------------------*/

//if( function_exists('acf_add_options_page') ) {
//
//    acf_add_options_page(array(
//        'page_title' => 'Allgemeine Informationen',
//        'menu_title' => 'Allgemeine Informationen',
//        'menu_slug' => 'theme-general-settings',
//        'capability' => 'edit_posts',
//        'redirect' => false
//    ));
//}

function my_acf_init() {
    acf_update_setting('google_api_key', 'keyhere');
}
//add_action('acf/init', 'my_acf_init');