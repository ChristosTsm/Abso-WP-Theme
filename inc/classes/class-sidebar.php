<?php 
/**
 * Register Theme Sidebars
 * 
 * @package Abso
 */

namespace ABSO_THEME\Inc;

use ABSO_THEME\Inc\Traits\Singleton;

class Sidebar {

    use Singleton;

    protected function __construct() {
        //  Load other classes.
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //  Actions
        add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
        add_action( 'widgets_init', [ $this, 'register_clock_widget' ] );
    }


    public function register_sidebars( ) {

        register_sidebar( [
            'name'          => __( 'Sidebar', 'abso' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Main Sidebar', 'abso' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-sidebar"> ', 
            'after_widget'  => '</div> ', 
            'before_title'  => '<h3 class="widget-title" > ', 
            'after_title'   => '</h3>', 
        ] );

        register_sidebar( [
            'name'          => __( 'Footer', 'abso' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Footer Sidebar', 'abso' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-footer cell column"> ', 
            'after_widget'  => '</div> ', 
            'before_title'  => '<h3 class="widget-title" > ', 
            'after_title'   => '</h3>', 
        ] );


    }

    public function register_clock_widget() {
        register_widget( 'ABSO_THEME\Inc\Clock_Widget' );
    }

}