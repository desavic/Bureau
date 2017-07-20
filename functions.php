<?php
/*
@package bureau theme

    =======================
        FUNCTIONS PAGE
    =======================
*/

/*
  	Enqueue admin page.
*/
require get_template_directory() . '/inc/function-admin.php';
/*
  	Enqueue scripts.
*/
require get_template_directory() . '/inc/function-enqueue-scripts.php';

/*
  	Customize colors of header background, footer background and main menu color.
*/
require get_template_directory() . '/inc/function-customize-colors.php';

/*
	Registering theme functionality
*/
function bureau_theme_setup() {
	register_nav_menu( 'headnav', 'Primary Header Navigation' );
}
add_action('init', 'bureau_theme_setup');

/*
	Live Customizer JS included
*/
function bureau_customization_live_preview() {
	wp_enqueue_script('bureau_live_customizer', get_template_directory_uri() . '/js/bureau-customizer.js', array('jquery', 'customize-preview'), true );
};
add_action('customize_preview_init', 'bureau_customization_live_preview');
