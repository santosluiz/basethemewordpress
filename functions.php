<?php

	/* ADDING THE CSS FILES*/
	function wp_theme_stylesheet(){
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/static/css/bootstrap.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');		
	}
	add_action('wp_enqueue_scripts', 'wp_theme_stylesheet');


	/* ADDING THE JS FILES*/
	// function wp_theme_scripts(){
	// 	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/static/js/bootstrap.min.js', array(jquery), '', true);
	// }
	// add_action('wp_enqueue_scripts', 'wp_theme_scripts');