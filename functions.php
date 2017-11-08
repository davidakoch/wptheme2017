<?php

	//add style sheet
		//add bootstrap as a dependent to the style sheet
	function wpwm_theme_js() {
		wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array('jquery'), ' ' , false);
	}

	add_action( 'wp_enqueue_scripts', 'wpwm_theme_js' );

	add_theme_support('post-thumbnails');

	function register_my_menus() {
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu'),
				'secondary' => __( 'Secondary Menu'),
				'footer' => __( 'Footer Menu'),
			)
		);
	}

	add_action( 'init', 'register_my_menus');

	//Excerpt Length Control
		//sets the length of blog posts shown on blog page template

	function set_excerpt_length(){
		return 50;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

?>

