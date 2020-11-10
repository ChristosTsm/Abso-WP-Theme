<?php
/**
 * 
 *  Single Post Template
 * 
 * @package Abso
 */

get_header( ); 
?>


<div id="primary">

    <main id="main" class="my-5" role="main"> 

        <div class="container">

            <?php if( have_posts() ) : ?>
                
                <?php if( is_home() && ! is_front_page() ) : ?>

                    <header class="page-title screen-reader-text">

                        <h1><?php single_post_title() ;?></h1>

                    </header>

                <?php endif;?>
                
            <div class="row">

                <?php while( have_posts() ) : the_post(); ?>


                    <?php get_template_part( 'template-parts/content' ); ?>


                <?php endwhile; endif; ?> 

            </div>

        </div>

    </main>

</div>


<?php get_footer( ); ?>