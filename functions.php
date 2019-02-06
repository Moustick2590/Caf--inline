<?php
function ressources() {
// Chargement des styles

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/all.min.css');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

// Chargement des scripts
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js');
}


// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'ressources');

function register_my_menus() {
    register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'social-menu' => __( 'Social Menu')
        )
    );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

?>
