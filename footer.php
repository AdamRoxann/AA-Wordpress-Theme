

    <footer class="footer mt-auto py-3 primary-background">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center mb-4">
                <div class="col">
                    <div class="sosmed-mobile">
                            <a class="text-decoration-none" href="#" target="_blank">
                                <img width="36" class="linked-footer" src="<?php bloginfo('template_url'); ?>/images/icons/linkedin.png" alt="">
                            </a>
                            <a class="text-decoration-none" href="#" target="_blank">
                                <img width="36" class="insta-footer mx-3" src="<?php bloginfo('template_url'); ?>/images/icons/instagram.png" alt="">
                            </a>
                            <a class=" text-decoration-none" href="#" target="_blank">
                                <img width="36" class="youtube-footer" src="<?php bloginfo('template_url'); ?>/images/icons/youtube.png" alt="">
                            </a>
                        </div>
                </div>
                <div class="col-8">
                    <h1 class="footer-title text-uppercase"><?php echo get_bloginfo( 'name' ); ?></h1>
                </div>
            </div>
            <div class="text-center">
                    <?php
                        wp_nav_menu(
                        array(
                        'theme_location' => 'footer-menu',
                        'container' => 'ul',
                        'menu_class' => 'list-unstyled d-flex justify-content-evenly',
                        )
                    );
                    ?>
            </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>