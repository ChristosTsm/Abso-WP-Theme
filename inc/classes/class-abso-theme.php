<?php 
/**
 *  Add basic functionality on the theme
 * 
 * @package Abso
 */

 namespace ABSO_THEME\Inc;

 use ABSO_THEME\Inc\Traits\Singleton;

class ABSO_THEME {

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
        wp_register_style( 'custom-styles', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all'  );
        wp_register_style( 'bootstrap-css', ABSO_DIR_URI . '/assets/src/library/css/bootstrap.min.css',  false,  'all' );

        // Enqueue Styles
        wp_enqueue_style( 'custom-styles');
        wp_enqueue_style( 'bootstrap-css' );
    }

    public function register_scripts() {
        // Register Scripts
        wp_register_script( 'main-js',  ABSO_DIR_URI . '/assets/js/main.js', array(), '1.0.0', true );
        wp_register_script( 'bootstrap-js',  ABSO_DIR_URI . '/assets/src/library/js/bootstrap.min.js', array( 'jquery' ), false, true );

        // Enqueue Scripts
        wp_enqueue_script(  'main-js' );
        wp_enqueue_script ( 'bootstrap-js' ); 
    }

}