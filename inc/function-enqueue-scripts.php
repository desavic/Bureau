<?php
/*
@package biro theme

    ==========================
        ENQUEUE SCIPTS PAGE
    ==========================

	Enqueue styles and scripts to  theme
*/
function biro_enqueue_scripts() {

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', 'array()', '7.0.0', 'all');
	wp_enqueue_style('comfortaa', 'https://fonts.googleapis.com/css?family=Comfortaa:400,700', 'array()', '', 'all');
	wp_enqueue_style('opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600i', 'array()', '', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', 'array()', '1.0.0', 'all');

	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/372ea4f277.js', 'array()', '', false);
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', 'array()', '', true);
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', 'array()', '', true);
}
add_action('wp_enqueue_scripts', 'biro_enqueue_scripts');
