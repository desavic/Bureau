<?php
/*
@package biro theme

    =======================
        FUNCTIONS PAGE
    =======================
*/

/*
  	Enqueue admin page.
*/
require get_template_directory() . '/inc/function-admin.php';
/*
  	Enqueue theme scripts.
*/
require get_template_directory() . '/inc/function-enqueue-scripts.php';

/*
  	Customize colors of header background, footer background and main menu color.
*/
require get_template_directory() . '/inc/function-customize-colors.php';

/*
  	Customize - trening fungcije kustomizacije admin strana, OBRISATI KASNIJE I OVAJ INCLUDE
	i function-trening.php fajl !!!!!!!!!!!!!!!!!!!.
*/
require get_template_directory() . '/inc/function-trening.php';

/*
	Registering theme functionality
*/
function biro_theme_setup() {
	register_nav_menu( 'header_navigation', 'Primary Header Navigation' );
}
add_action('init', 'biro_theme_setup');

/*
	Live Customizer JS included
*/
function biro_customization_live_preview() {
	wp_enqueue_script('biro_live_customizer', get_template_directory_uri() . '/js/biro-customizer.js', array('jquery', 'customize-preview'), true );
};
add_action('customize_preview_init', 'biro_customization_live_preview');

// ---------------------------------------------
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
