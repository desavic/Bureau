<?php

/*
			Enqueue styles and scripts to theme
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

/*
			Registering theme functionality
*/

function biro_theme_setup() {
	register_nav_menu( 'headnav', 'Primary Header Navigation' );
}
add_action('init', 'biro_theme_setup');

/**
 * Customize colors of header, backgound and footer.
 */
require get_template_directory() . '/inc/colors.php';


function biro_customize_css_output(){   ?>
	<style type="text/css">

	.header-container{
		background-color: <?php echo esc_attr(get_theme_mod('biro-header_background_color', '#545454')); ?>;
		}

	.footer-container {
		background-color: <?php echo esc_attr(get_theme_mod('biro-footer_background_color', '#545454')); ?>;
		}

    header > nav ul li a {
		color: <?php echo esc_attr(get_theme_mod('biro-header_nav_text_color', '#e5e5e5')); ?>;
		}

	</style>
<?php
};
add_action('wp_head', 'biro_customize_css_output');

/*
			Live Customizer JS included

*/
function biro_live_preview() {
	wp_enqueue_script('biro_live_customizer', get_template_directory_uri() . '/js/biro-customizer.js', array('jquery', 'customize-preview'), true );
};
add_action('customize_preview_init', 'biro_live_preview');
