<?php 
/**
 * Register Meta boxes
 * 
 * @package Abso
 */

namespace ABSO_THEME\Inc;

use ABSO_THEME\Inc\Traits\Singleton;

class Meta_boxes {

    use Singleton;

    protected function __construct() {
        //  Load other classes.
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //  Actions
        add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_box' ] );

        add_action( 'save_post', [ $this, 'save_post_meta_data' ] );
    }

    public function add_custom_meta_box() {

        $screens = [ 'post' ];

        foreach ($screens as $screen) {
            add_meta_box(

                'hide-page-title',                   // Unique ID

                __('Hide Page Title', 'abso'),       // Box Title

                [ $this, 'custom_meta_box_html' ],   // Content Callback

                $screen,                             // Post Type

                'side',                              // Location to be shown

            );

        }

    }

    public function custom_meta_box_html( $post ) {

        $value = get_post_meta( $post->ID, '_hide_page_title', true );

        /**
         * Use nonce for verification
         */

        wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name' );

        ?>
        <label for="abso-field"><?php esc_html_e( 'Hide the page title', 'abso' ); ?></label>
        
		<select name="abso_hide_title_field" id="abso-field" class="postbox">

            <option value=""><?php esc_html_e( 'Select', 'abso' ); ?></option>
            
            <option value="yes" <?php selected( $value, 'yes' ); ?>>
            
                <?php esc_html_e( 'Yes', 'abso' ); ?>
                
            </option>
            
            <option value="no" <?php selected( $value, 'no' ); ?>>
            
                <?php esc_html_e( 'No', 'abso' ); ?>
                
            </option>
            
		</select>

        <?php 
    }

    public function save_post_meta_data( $post_id ) {

        /**
         * When post is saved or updated we get $_POST available
         * Check if current user is authorized
         */
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        /**
         * Check if nonce value recieved is the same with the value we created.
         */
        if ( ! isset( $_POST[ 'hide_title_meta_box_nonce_name' ] ) || ! wp_verify_nonce( $_POST[ 'hide_title_meta_box_nonce_name' ], plugin_basename(__FILE__) ) ) {
            return;
        }
        

        if ( array_key_exists( 'abso_hide_title_field', $_POST ) ) {
			update_post_meta(

                $post_id,
                
                '_hide_page_title',
                
                $_POST['abso_hide_title_field']
                
			);
		}

    }

}