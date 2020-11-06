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
        Assets::get_instance();
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //  Actions
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height' => '100',
            'width' => '300',
            'flex-height' => true,
            'flex-width' => true,
        ]);
    }

}