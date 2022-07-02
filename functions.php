<?php
//get css files
function register_styles() {  
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'register_styles');

//get js files
function register_scripts() {  
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jjquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.1.1', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), true, true);
    wp_enqueue_script('lazy', get_template_directory_uri() . '/assets/js/jquery.lazy.min.js', array(), true, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), true, true);
}
add_action('wp_enqueue_scripts', 'register_scripts');


//theme support
function theme_support () {
	add_theme_support('title-tag');
	add_theme_support('custom-logo'); 
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'theme_support');

//create menu
require_once('wp-bootstrap-navwalker.php');

function regester_my_menus() {
    register_nav_menus(array(
        'header-menu' => 'القائمة الرئيسية',
    ));
}

function add_custom_menu(){
    wp_nav_menu(array(
        'theme_location'    => 'header-menu',
        'menu_class'        => 'nav navbar-nav',
        'container'         => false,
        'depth'             => 2,
        'walker'            => new wp_bootstrap_navwalker()
    ));
}
add_action('init', 'regester_my_menus');

function coder_extend_excerpt_length($length){
    return 15;
}
add_filter('excerpt_length', 'coder_extend_excerpt_length');

?>