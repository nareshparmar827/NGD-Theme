<?php
add_action( 'wp_enqueue_scripts', 'ngd_child_enqueue_scripts');
function ngd_child_enqueue_scripts() {	
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}	
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');      
}