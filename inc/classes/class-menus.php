<?php 
/**
 * Register Menus
 * 
 * 
 * @package Abso
 */

namespace ABSO_THEME\Inc;

use ABSO_THEME\Inc\Traits\Singleton;

class Menus {

    use Singleton;

    protected function __construct() {
        //  Load other classes.
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //  Actions
        add_action( 'init', [$this, 'register_menus'] );
    }

    public function register_menus() {
        register_nav_menus([
            'abso-primary-menu' => esc_html__('Primary Menu','abso'),
            'abso-footer-menu' => esc_html__('Footer Menu','abso'),
        ]);
    }

}