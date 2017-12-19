<?php 
	//an attempt to add new functions to the customizer
	function bronson_customize_register( $wp_customize ){
		//page dropdown
		$wp_customize->add_section('dropdown', array(
			'title'  => __('Dropdown', 'bronson-theme'),
			'description'  =>
		))
	}

	add_action('customize_register', 'bronson_customize_register');


 