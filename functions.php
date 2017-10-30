<?php


	function wpwm_theme_js() {
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array('jquery'), ' ' , false);
	}

	add_action( 'wp_enqueue_scripts', 'wpwm_theme_js' );

	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	//Excerpt Length Control

	function set_excerpt_length(){
		return 50;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

?>

