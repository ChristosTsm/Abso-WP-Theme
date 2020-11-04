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
        $this->set_hooks();
    }

    protected function set_hooks() {
        //  Actions and filters
    }

}