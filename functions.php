<?php
	function theme_style(){
		wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
		wp_enqueue_script('fontawesome', 'https://yourkitawesomehere.js');
	}

	add_action('wp_enqueue_scripts', 'theme_style');

	//Add thumbnails
	add_theme_support('post-thumbnails');

	//Add menus
	register_nav_menus(array(
		'main_menu' => __('Main Menu','theme_style'),
		'sencondary_menu' => __('Secondary Menu','theme_style')
	));
	
