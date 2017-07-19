<?php
/*
			Registering control settings and  controls
*/
function biro_customize_register( $wp_customize ){

/*
			Add settings to controls
*/
	$wp_customize->add_setting('biro-header_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_setting('biro-footer_background_color',
		array(
			'default'           =>  '#636363',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);
    $wp_customize->add_setting('biro-header_nav_text_color',
		array(
			'default'           =>  '#e5e5e5',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		)
	);

/*
			Add controls
*/
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
