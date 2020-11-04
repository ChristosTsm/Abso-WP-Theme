<?php
/***
 * Theme Functions
 * @package Abso
 */

use ABSO_THEME\Inc\ABSO_THEME;

if( ! defined( 'ABSO_DIR_PATH' ) ) {
    define( 'ABSO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once ABSO_DIR_PATH . '/inc/helpers/autoloader.php';

function abso_get_theme_instance() {
    ABSO_THEME::get_instance();
}

abso_get_theme_instance();


// Enqueue styles and scripts
function abso_enqueue_scripts( ) {

    // Register CSS Here
    wp_register_style( 'custom-styles', get_stylesheet_uri(  ), array( ), filemtime( get_template_directory( ) . '/style.css' ), 'all'  );
    wp_register_style( 'bootstrap-css', get_template_directory_uri( ) . '/assets/src/library/css/bootstrap.min.css',  false,  'all' );
    

    // Register Scripts Here
    wp_register_script( 'main-js',  get_template_directory_uri(  ) . '/assets/js/main.js', array(), '1.0.0', true );
    wp_register_script( 'bootstrap-js',  get_template_directory_uri( ) . '/assets/src/library/js/bootstrap.min.js', array( 'jquery' ), false, true );


    // Enqueue Styles
    wp_enqueue_style( 'custom-styles');
    wp_enqueue_style( 'bootstrap-css' );


    // Enqueue Scripts
    wp_enqueue_script(  'main-js' );
    wp_enqueue_script ( 'bootstrap-js' ); 
}

add_action( 'wp_enqueue_scripts', 'abso_enqueue_scripts' );