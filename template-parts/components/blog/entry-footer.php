<?php
/**
 * 
 * Template for the post footer
 *
 * Use inside WP Loop
 *  
 * @package Abso
 */

 $the_post_id = get_the_ID();

 $article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag' ] );

?>

<?php 

if( empty( $article_terms ) || ! is_array( $article_terms ) ) {
    return;
} 

?>

<div class="entry-footer">

    <?php foreach( $article_terms as $key => $article_term ) { ?>

        <div class="abso-read-more">

            <button>

                <a class="text-black-50" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">

                    <?php echo esc_html( $article_term->name ); ?>

                </a>

            </button>

        </div>

    <?php } ?>

</div>