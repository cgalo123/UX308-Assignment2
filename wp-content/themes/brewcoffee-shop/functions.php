<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION

/**
 * Enqueue scripts and styles.
 */
function brewcoffee_shop_scripts() {
	
    wp_enqueue_style( 'esh-el-style-parent', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'brewcoffee-shop-style', get_stylesheet_directory_uri() . '/style.css', array( 'esh-el-style-parent' ), '1.0' );
	
    // Add Gooogle Font
	wp_enqueue_style( 
		'google-fonts', 
		'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,700;1,400&display=swap', 
		[], 
		null 
	);
}
add_action( 'wp_enqueue_scripts', 'brewcoffee_shop_scripts' );


if ( ! function_exists( 'brewcoffee_shop_setup' ) ) :
    function brewcoffee_shop_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
    }
    endif;
    add_action( 'after_setup_theme', 'brewcoffee_shop_setup' );