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

        add_theme_support( 'custom-background', [
            'default-color' => '#fff',
            'background-repeat' => 'no-repeat'
        ]);

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
        ] );

        add_theme_support(' wp-block-styles ');

        add_theme_support( 'align-wide' );

        add_editor_style();
    }

}