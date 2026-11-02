<?php
/**
 * Strezam Theme Functions
 */

if ( ! function_exists( 'strezam_setup' ) ) :
    function strezam_setup() {
        // Add support for automatic feed links
        add_theme_support( 'html5', array(
            'meta' => true,
            'title' => true,
            'fallback-lang' => true,
            'fallback-renderer' => true,
            'rel' => true,
            'open' => true,
        ) );

        // Add support for title tag
        add_theme_support( 'title-tag' );

        // Add support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus
        register_nav_menus( array(
            'primary' => 'Primary Menu',
            'footer'  => 'Footer Menu',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'strezam_setup' );

/**
 * Enqueue scripts and styles.
 */
function strezam_scripts() {
    wp_enqueue_style( 'strezam-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'strezam-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'strezam_scripts' );
