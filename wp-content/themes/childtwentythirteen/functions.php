
<?php
/**
 * functions for child of twentythirteen theme - enqueueing fonts and syles
 */
function my_theme_enqueue_styes() {
	$parent_style = 'twentythirteen-style'; 
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
		);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb_google_fonts',
		'http://fonts.googleapis.com/css?family=Muli:400,600 | Comfortaa:400,800', false );
}
add_action( 'wp_enqueue_scripts',
	'wpb_add_google_fonts' );
?>
