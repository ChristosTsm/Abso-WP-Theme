<?php 
/**
 * 
 * Template for post content
 * 
 * @package Abso
 */
?>

<div class="entry-content">

    <?php if ( is_single() ) {

        the_content(

            sprintf(

                wp_kses( __('Continue reading %s <span class="meta-nav">&rarr</span>', 'abso'), 

                    [

                        'span' => [

                            'class' => []

                        ]

                    ]

                ),
                the_title( '<span class="screen-reader-text">"','"</span>', false )
            )
        );
    } else {
        abso_the_excerpt( 200 );
        printf( '<br>' );
        echo abso_excerpt_more();
    }
    
    ?>

</div>