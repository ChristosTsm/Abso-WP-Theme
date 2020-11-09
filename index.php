<?php get_header( ); ?>


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

                <?php 
                    $index = 0;
                    $no_of_cols = 3;
                ?>

                <?php while( have_posts() ) : the_post(); ?>

                    <?php if( 0 === $index % $no_of_cols ) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-12">

                    <?php endif;?>


                    <?php get_template_part( 'template-parts/content' ); ?>


                    <?php $index ++; ?>
                        
                    <?php if ( 0 !== $index && 0 === $index % $no_of_cols ) : ?>

                    </div>

                    <?php endif; ?>

                <?php endwhile; else : ?>

                    <?php get_template_part( 'template-parts/content','none' ); ?>

                <?php endif; ?>

            </div>

        </div>

    </main>

</div>


<?php get_footer( ); ?>