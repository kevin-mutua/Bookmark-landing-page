<?php
if ( ! function_exists( 'bookmark_landing_setup' ) ) :

function bookmark_landing_setup() {

  
    load_theme_textdomain( 'bookmark_landing', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bookmark_landing' ),
        'social'  => __( 'Social Links Menu', 'bookmark_landing' ),
    ) );

/*
     * Register custom menu locations
    
/*
    * Set image sizes

    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // bookmark_landing_setup

add_action( 'after_setup_theme', 'bookmark_landing_setup' );


if ( ! function_exists( 'bookmark_landing_init' ) ) :

function bookmark_landing_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.


}
endif; // bookmark_landing_setup

add_action( 'init', 'bookmark_landing_init' );


if ( ! function_exists( 'bookmark_landing_custom_image_sizes_names' ) ) :

function bookmark_landing_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    
    return $sizes;
}
add_action( 'image_size_names_choose', 'bookmark_landing_custom_image_sizes_names' );
endif;// bookmark_landing_custom_image_sizes_names



if ( ! function_exists( 'bookmark_landing_widgets_init' ) ) :

function bookmark_landing_widgets_init() {

    /*
     * Register widget areas.
     */

}
add_action( 'widgets_init', 'bookmark_landing_widgets_init' );
endif;// bookmark_landing_widgets_init



if ( ! function_exists( 'bookmark_landing_customize_register' ) ) :

function bookmark_landing_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.


    $wp_customize->add_section( 'header', array(
        'title' => __( 'Header', 'bookmark_landing' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'bookmark_landing' )
    ));


}
add_action( 'customize_register', 'bookmark_landing_customize_register' );
endif;// bookmark_landing_customize_register


if ( ! function_exists( 'bookmark_landing_enqueue_scripts' ) ) :
    function bookmark_landing_enqueue_scripts() {


    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/./asset/js/main.js', false, null, true);


    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap', false, null, 'all');

    wp_deregister_style( 'grid' );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/./asset/css/grid.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/./asset/css/style.css', false, null, 'all');

    wp_deregister_style( 'responsive' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/./asset/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');


    }
    add_action( 'wp_enqueue_scripts', 'bookmark_landing_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
require_once "inc/wp_pg_helpers.php";

?>
