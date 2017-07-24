<?php
/*
@package biro theme

    =========================
        ARANGE PAGE COLORS
    =========================

	Registering control settings and adding controls to header background,
	footer background and main menu and customizing CSS
*/
function biro_customize_register( $wp_customize ){

/*
	Add settings to header background, footer background and main menu text color controls
*/
	//Add settings to header background
	$wp_customize->add_setting('biro-header_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	//Add settings to  footer background
	$wp_customize->add_setting('biro-footer_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	//Add settings to main menu text color controls
    $wp_customize->add_setting('biro-header_nav_text_color',
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
		$wp_customize,'biro-header_background_color_control',
			array(
				'label'         => __( 'Header Background Color', 'biro' ),
				'description'   => __( 'This is a header background color control, choose color and Save & Publish to take efect', 'biro' ),
				'section'       => 'colors',
				'settings'      => 'biro-header_background_color',
			)
		)
	);
	//Add controls for footer background color
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,'biro-footer_background_color_control',
			array(
				'label'         => __( 'Footer Background Color', 'biro' ),
				'description'   => __( 'This is a footer background color control, choose color and Save & Publish to take efect', 'biro' ),
				'section'       => 'colors',
				'settings'      => 'biro-footer_background_color',
			)
		)
	);
	//Add controls for main menu text color controls
    $wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,'biro-header_nav_text_color_control',
			array(
				'label'         => __( 'Header Navigation Color', 'biro' ),
				'description'   => __( 'This is a header navigation color control, choose color and Save & Publish to take efect', 'biro' ),
				'section'       => 'colors',
				'settings'      => 'biro-header_nav_text_color',
			)
		)
	);

}
add_action('customize_register', 'biro_customize_register');

/*
	Customizing CSS output for header background, footer background and main menu text color
*/
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
