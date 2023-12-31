<?php

/**
 * Proper way to enqueue scripts and styles
 */
function laundry_theme_scripts() {
	wp_enqueue_style( 'swiper', get_template_directory_uri()."/dist/swiper-bundle.min.css" );
	wp_enqueue_style( 'style', get_template_directory_uri()."/dist/style.min.css" );
	wp_enqueue_script( 'swiper', get_template_directory_uri()."/dist/swiper-bundle.min.js",array(),'1.0' );
}
add_action( 'wp_enqueue_scripts', 'laundry_theme_scripts' );
