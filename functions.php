<?php

/*----------------------------- PHP-FILES -----------------------------------------*/

include_once 'inc/gutenberg_blocks.php';
include_once 'inc/imagesize.php';
include_once 'inc/cpt.php';
include_once 'inc/custom_taxonomy.php';



/*----------------------------- THEME SUPPORT ------------------------------------*/

add_theme_support( 'post-thumbnails' );



/*----------------------------- NAVIGATION REGISTRY -------------------------------*/

function navigation() {
    register_nav_menus(
        array(
            'main_navigation' => __('Main Navigation'),
            'footer-1' => __('Footer First'),
        )
    );
}
add_action( 'init', 'navigation' );



/*----------------------------- STYLE / SCRIPT REGISTRY ---------------------------*/

add_action('wp_enqueue_scripts', 'enqueue_js_scripts');
function enqueue_js_scripts()
{
    wp_enqueue_script('jquery');
		wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '', false );
		wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '', false );
		wp_enqueue_style( 'icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200', array(), '', false );
		wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery', ), null, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/src/js/slider.js', array( 'jquery' ), null, true);
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/main.css', [], '1.0.1', 'all');
    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array( 'jquery' ), null, true);
}



/*----------------------------- ACF REGISTRATIONS -------------------------------*/

if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
       'page_title' => 'General Settings',
       'menu_title' => 'General Settings',
       'menu_slug' => 'theme-general-settings',
       'capability' => 'edit_posts',
       'redirect' => false
   ));
}

/*----------------------------- SETUP STYLES FOR GUTENBERG -------------------------------*/
function gutenberg_editor_style_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( "/dist/main.css" );
}
add_action( 'after_setup_theme', 'gutenberg_editor_style_setup' );

function backend_scripts_function() {
	wp_enqueue_script('backend', get_template_directory_uri() . '/src/js/backend.js', array( 'jquery' ), null, true);
}
add_action( 'enqueue_block_assets', 'backend_scripts_function' );

/*----------------------------- WOOCOMMERCE -------------------------------*/
function add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'add_woocommerce_support' );

/*----------------------------- CONTACT FORM 7 -------------------------------*/
add_filter( 'wpcf7_autop_or_not', '__return_false' );