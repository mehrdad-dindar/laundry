<?php

/**
 * Proper way to enqueue scripts and styles
 */
function laundry_theme_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri()."/style.min.css" );
}
add_action( 'wp_enqueue_scripts', 'laundry_theme_scripts' );
