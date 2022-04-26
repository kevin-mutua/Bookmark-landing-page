
        </main>
        <!-- =========================== FOOTER =========================== -->
        <footer>
            <div class="container">
                <nav class="footer_nav_bar">
                    <div class="footer_nav_logo">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-bookmark-footer.svg" alt="logo-bookmark">
                    </div>
                    <div class="footer_navbar_link">
                        <a href="#" class="footer_nav_link"><?php _e( 'features', 'bookmark_landing' ); ?></a>
                        <a href="#" class="footer_nav_link"><?php _e( 'pricing', 'bookmark_landing' ); ?></a>
                        <a href="#" class="footer_nav_link"><?php _e( 'contact', 'bookmark_landing' ); ?></a>
                    </div>
                </nav>
                <div class="footer_social_link">
                    <div class="social_link_container">
                        <a href="#" class="social_links"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="social_links"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="attribution">
                <p> <?php _e( 'This landing page is part of frontend challenge by Voxloud . Coded by', 'bookmark_landing' ); ?> <a href="https://github.com/linuxbykevin"><?php _e( 'Kevin Mutua', 'bookmark_landing' ); ?></a> </p>
            </div>
        </footer>
        <!--Javascript is placed at the bottom to improve pageload time-->
        <!-- JS File -->
        <?php wp_footer(); ?>
    </body>
</html>
