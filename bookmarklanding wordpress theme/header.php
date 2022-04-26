<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/favicon-32x32.png" type="image/x-icon">
        <!-- Title -->
        <!-- Fontawesome CDN -->
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- CSS File -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <!-- =========================== HEADER =========================== -->
        <header id="header">
            <div id="wrapper_0">
                <div class="background_0"></div>
            </div>
            <div class="container">
                <!--=== Navigation Bar ===-->
                <nav class="nav_bar" id="sticky_nav">
                    <div class="nav_logo">
                        <a href="#header"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-bookmark.svg" alt="Logo" class="h_logo"></a>
                    </div>
                    <div class="navbar_link">
                        <a href="#features" class="nav_link"><?php _e( 'features', 'bookmark_landing' ); ?></a>
                        <a href="#pricing" class="nav_link"><?php _e( 'pricing', 'bookmark_landing' ); ?></a>
                        <a href="#contact" class="nav_link"><?php _e( 'contact', 'bookmark_landing' ); ?></a>
                        <button class="nav_btn btn">
                            <?php _e( 'login', 'bookmark_landing' ); ?>
                        </button>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="mobile_menu">
                        <div class="m_menu_button" onclick="openNav()">&#9776;</div>
                    </div>
                </nav>
                <!-- === Mobile Menu  Style === -->
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <div class="mbl_close_btn">
</div>
                        <div class="mbl_button_logo">
                            <a onclick="closeNav()" href="#header" class="m_logo_container"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/logo-bookmark-mbl.svg" alt="logo-bookmark-mbl" class="mbl_b_logo"></a>
                            <a href="javascript:void(0)" class="close_btn" onclick="closeNav()"> <p><i class="fas fa-times"></i></p> </a>
                        </div>
                        <a onclick="closeNav()" href="#features" class="m_menu_link"><?php _e( 'features', 'bookmark_landing' ); ?></a>
                        <a onclick="closeNav()" href="#pricing" class="m_menu_link"><?php _e( 'pricing', 'bookmark_landing' ); ?></a>
                        <a onclick="closeNav()" href="#contact" class="m_menu_link m_menu_link_l"><?php _e( 'contact', 'bookmark_landing' ); ?></a>
                        <div class="btn_flex">
                            <button class="m_menu_btn">
                                <?php _e( 'login', 'bookmark_landing' ); ?>
                            </button>
                        </div>
                        <div class="mbl_social_link">
                            <a href="#" class="social_links_mbl"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="social_links_mbl"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <!--=== Header Sub-section ===-->
                <section class="section_0 clearfix">
                    <!-- Intro -->
                    <div class="col span_1_of_2 intro">
                        <h1 class="heading_1"> <?php _e( 'A Simple Bookmark Manager', 'bookmark_landing' ); ?> </h1>
                        <p class="para_1"> <?php _e( 'A clean and simple interface to organize your favourite websites. Open a new browser tab and see your sites load instantly. Try it for free.', 'bookmark_landing' ); ?> </p>
                        <div class="button_grp">
                            <button class="button_1 btn intr_btn">
                                <?php _e( 'Get it on Chrome', 'bookmark_landing' ); ?>
                            </button>
                            <button class="button_2 btn">
                                <?php _e( 'Get it on Firefox', 'bookmark_landing' ); ?>
                            </button>
                        </div>
                    </div>
                    <!-- Intro Image -->
                    <div class="col span_1_of_2 intro_img">
                        <div class="h_image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./asset/images/illustration-hero.svg" alt="Hero Image" class="h_img">
                        </div>
                    </div>
                </section>
            </div>
        </header>
        <!-- =========================== MAIN =========================== -->
        <main>