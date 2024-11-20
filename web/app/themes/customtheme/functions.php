<?php

add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles' );

function custom_theme_enqueue_styles() {
	wp_enqueue_style( 
		'custom-theme-style', 
		get_stylesheet_uri()
	);
}
