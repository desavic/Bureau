<?php
/*
@package bureau theme

    =========================
        ARANGE PAGE COLORS
    =========================

	Registering control settings and adding controls to header background,
	footer background and main menu and customizing CSS
*/
function bureau_customize_register( $wp_customize ){

/*
	Add settings to header background, footer background and main menu text color controls
*/
	//Add settings to header background
	$wp_customize->add_setting('bureau-header_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	//Add settings to  footer background
	$wp_customize->add_setting('bureau-footer_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	//Add settings to main menu text color controls
    $wp_customize->add_setting('bureau-header_nav_text_color',
		array(
			'default'           =>  '#e5e5e5',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

/*
	Add controls to header background, footer background and main menu text color controls
*/
	//Add controls for header background color
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,'bureau-header_background_color_control',
			array(
				'label'         => __( 'Header Background Color', 'bureau' ),
				'description'   => __( 'This is a header background color control, choose color and Save & Publish to take efect', 'bureau' ),
				'section'       => 'colors',
				'settings'      => 'bureau-header_background_color',
			)
		)
	);
	//Add controls for footer background color
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,'bureau-footer_background_color_control',
			array(
				'label'         => __( 'Footer Background Color', 'bureau' ),
				'description'   => __( 'This is a footer background color control, choose color and Save & Publish to take efect', 'bureau' ),
				'section'       => 'colors',
				'settings'      => 'bureau-footer_background_color',
			)
		)
	);
	//Add controls for main menu text color controls
    $wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,'bureau-header_nav_text_color_control',
			array(
				'label'         => __( 'Header Navigation Color', 'bureau' ),
				'description'   => __( 'This is a header navigation color control, choose color and Save & Publish to take efect', 'bureau' ),
				'section'       => 'colors',
				'settings'      => 'bureau-header_nav_text_color',
			)
		)
	);

}
add_action('customize_register', 'bureau_customize_register');

/*
	Customizing CSS output for header background, footer background and main menu text color
*/
function bureau_customize_css_output(){   ?>
	<style type="text/css">

		.header-container{
		background-color: <?php echo esc_attr(get_theme_mod('bureau-header_background_color', '#545454')); ?>;
		}

		.footer-container {
		background-color: <?php echo esc_attr(get_theme_mod('bureau-footer_background_color', '#545454')); ?>;
		}

    	header > nav ul li a {
		color: <?php echo esc_attr(get_theme_mod('bureau-header_nav_text_color', '#e5e5e5')); ?>;
		}

	</style>
	<?php
};
add_action('wp_head', 'bureau_customize_css_output');
