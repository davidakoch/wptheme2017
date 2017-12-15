<?php
	//upload style sheets
	function my_assets() {
		wp_enqueue_style( 'bootstrap.css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
		wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array('jquery'), ' ' , false);
		}

	add_action( 'wp_enqueue_scripts', 'my_assets' );
	
	add_theme_support('post-thumbnails');
	
	//register menus
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

	//function to create sidebar with the id of sidbar
		//for a widget
	function my_init_widgets($id){
		register_sidebar(array(
			'name' =>  'Sidebar',
			'id'   =>  'sidebar'
		));
	}
	//the hook for sidebar function
	add_action('widgets_init', 'my_init_widgets');

?>

