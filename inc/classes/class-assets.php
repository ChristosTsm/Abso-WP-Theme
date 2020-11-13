<?php 
/**
 * Enqueue Theme Assets
 * 
 * @package Abso
 */

namespace ABSO_THEME\Inc;

use ABSO_THEME\Inc\Traits\Singleton;

class Assets {

    use Singleton;

    protected function __construct() {
        //  Load other classes.
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //  Actions
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles() {
        // Register CSS
        wp_register_style( 'style-css', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all'  );
        wp_register_style( 'main-css',  ABSO_BUILD_CSS_URI . '/main.css', array(), '1.0.0', 'all' );
        wp_register_style( 'bootstrap-css', ABSO_DIR_URI . '/assets/src/library/css/bootstrap.min.css', array(),  false,  'all' );
        wp_register_style( 'font-css', get_template_directory_uri() . '/assets/src/library/fonts/fonts.css', array(), false, 'all' );

        // Enqueue Styles
        wp_enqueue_style( 'bootstrap-css' );
        wp_enqueue_style( 'style-css');
        wp_enqueue_style( 'main-css' );
        wp_enqueue_style( 'font-css' );
    }

    public function register_scripts() {
        // Register Scripts
        wp_register_script( 'main-js',  ABSO_BUILD_JS_URI . '/main.js', array( 'jquery' ), '1.0.0', true );
        wp_register_script( 'bootstrap-js',  ABSO_DIR_URI . '/assets/src/library/js/bootstrap.min.js', array( 'jquery' ), false, true );

        // Enqueue Scripts
        wp_enqueue_script(  'main-js' );
        wp_enqueue_script ( 'bootstrap-js' ); 
    }
}