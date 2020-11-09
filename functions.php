<?php
/**
 * 
 * Theme Functions
 * 
 * @package Abso
 */

use ABSO_THEME\Inc\ABSO_THEME;

if( ! defined( 'ABSO_DIR_PATH' ) ) {
    define( 'ABSO_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if( ! defined( 'ABSO_DIR_URI' ) ) {
    define( 'ABSO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once ABSO_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ABSO_DIR_PATH . '/inc/helpers/template-tags.php';

function abso_get_theme_instance() {
    ABSO_THEME::get_instance();
}

abso_get_theme_instance();


// Enqueue styles and scripts
function abso_enqueue_scripts( ) {


    


}

add_action( 'wp_enqueue_scripts', 'abso_enqueue_scripts' );