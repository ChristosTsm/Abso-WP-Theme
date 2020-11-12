
            <footer>

                <div class="container">

                <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

                    <aside> <?php dynamic_sidebar( 'sidebar-2' ); ?> </aside>

                <?php else : ?>

                    <div>

                        <h3>Footer</h3>

                    </div>

                <?php endif; ?>

                </div>

            </footer>


            </div>
            
        </div>
        
        <?php wp_footer(); ?>

    </body>
    
</html>