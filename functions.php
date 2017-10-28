<?php

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

