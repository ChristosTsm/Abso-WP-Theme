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

if( ! defined( 'ABSO_BUILD_URI' ) ) {
    define( 'ABSO_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if( ! defined( 'ABSO_BUILD_JS_URI' ) ) {
    define( 'ABSO_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if( ! defined( 'ABSO_BUILD_JS_DIR_PATH' ) ) {
    define( 'ABSO_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if( ! defined( 'ABSO_BUILD_IMG_URI' ) ) {
    define( 'ABSO_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if( ! defined( 'ABSO_BUILD_CSS_URI' ) ) {
    define( 'ABSO_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if( ! defined( 'ABSO_BUILD_CSS_DIR_PATH' ) ) {
    define( 'ABSO_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}


require_once ABSO_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ABSO_DIR_PATH . '/inc/helpers/template-tags.php';

function abso_get_theme_instance() {
    ABSO_THEME::get_instance();
}

abso_get_theme_instance();