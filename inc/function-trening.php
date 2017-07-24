<?php
function bureau_general_customize_register($wp_customize){

    $wp_customize->add_section('bureau_color_scheme', array(
        'title' => __('Bureau Theme Customizing', 'bureau'),
        'description' => 'Kratak opis onoga sta korisnik moze da kustomizuje, ili par instrukcija kako da to korisnik uradi na naj bolji nacin.',
        'priority' => 120,
    ));

    // =============================
    // = Text Input =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[text_test]', array(
        'default' => 'Arse!',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control('bureau_text_test', array(
        'label' => __('Text Test', 'bureau'),
        'description' => __('Par instrukcija kako da korisnik na naj bolji nacin kustomizuje ovom Text Test kontrolom. ( Text Input )','bureau'),
        'section' => 'bureau_color_scheme',
        'settings' => 'bureau_theme_options[text_test]',
    ));

    // =============================
    // = Radio Input =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[color_scheme]', array(
        'default' => 'value2',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control('bureau_theme_color_scheme', array(
        'label' => __('Color Scheme', 'bureau'),
        'description' => __('Par instrukcija kako da korisnik na naj bolji nacin kustomizuje ovom Color Scheme kontrolom. ( Radio Input )','bureau'),
        'section' => 'bureau_color_scheme',
        'settings' => 'bureau_theme_options[color_scheme]',
        'type' => 'radio',
        'choices' => array(
                        'value1' => 'Choice 1',
                        'value2' => 'Izbor 2',
                        'value3' => 'Choice 3',
                        'value4' => 'Izbor 4',
                    ),
    ));

    // =============================
    // = Checkbox =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('bureau_theme_display_header_text', array(
        'settings' => 'bureau_theme_options[checkbox_test]',
        'description' => __('Par instrukcija kako da korisnik na naj bolji nacin kustomizuje ovom Display Header Text kontrolom. ( Checkbox ) - Opciono','bureau'),
        'label' => __('Display Header Text'),
        'section' => 'bureau_color_scheme',
        'type' => 'checkbox',

    ));
    $wp_customize->add_setting('bureau_theme_options[checkbox_test2]', array(
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('bureau_theme_display_header_text_2', array(
        'settings' => 'bureau_theme_options[checkbox_test2]',
        'label' => __('Display Header Text 2'),
        'section' => 'bureau_color_scheme',
        'type' => 'checkbox',

    ));
    $wp_customize->add_setting('bureau_theme_options[checkbox_test3]', array(
        'capability' => 'edit_theme_options',
        'type' => 'option',

    ));
    $wp_customize->add_control('bureau_theme_display_header_text_3', array(
        'settings' => 'bureau_theme_options[checkbox_test3]',
        'label' => __('Display Header Text 3'),
        'section' => 'bureau_color_scheme',
        'type' => 'checkbox',

    ));

    // =============================
    // = Select Box =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[header_select]', array(
        'default' => 'value3',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'bureau_theme_options[header_select]',
        'label' => 'Select Something:',
        'description' => __('Par instrukcija kako da korisnik na naj bolji nacin kustomizuje ovom Select Something kontrolom. ( Select Box ) - Opciono','bureau'),
        'section' => 'bureau_color_scheme',
        'type' => 'select',
        'choices' => array(
        'value1' => 'Choice 1',
        'value2' => 'Choice 2',
        'value3' => 'Choice 3',
    ),
    ));
    // =============================
    // = Image Upload =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[image_upload_test]', array(
        //'default' => '/image.jpg',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label' => __('Image Upload Test', 'bureau'),
        'section' => 'bureau_color_scheme',
        'settings' => 'bureau_theme_options[image_upload_test]',
    )));

    // =============================
    // = File Upload =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[file_upload_test]', array(
        'default' => 'Arse2 !',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        ));
    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'file_upload_test', array(
        'label' => __('Upload Test', 'bureau'),
        'section' => 'bureau_color_scheme',
        'settings' => 'bureau_theme_options[file_upload_test]',
    )));

    // =============================
    // = Color Picker =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[link_color]', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label' => __('Link Color', 'bureau'),
        'section' => 'bureau_color_scheme',
        'settings' => 'bureau_theme_options[link_color]',
    )));

    // =============================
    // = Page Dropdown =
    // =============================
    $wp_customize->add_setting('bureau_theme_options[page_test]', array(
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control('bureau_page_test', array(
        'label' => __('Page Test', 'bureau'),
        'section' => 'bureau_color_scheme',
        'type' => 'dropdown-pages',
        'settings' => 'bureau_theme_options[page_test]',
    ));

    // =====================
    // = Category Dropdown =
    // =====================
    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('_s_f_slide_cat', array(
    'default' => $default
    ));

    $wp_customize->add_control( 'cat_select_box', array(
        'settings' => '_s_f_slide_cat',
        'label' => 'Select Category:',
        'section' => '_s_f_home_slider',
        'type' => 'select',
        'choices' => $cats,
    ));

}
add_action('customize_register', 'bureau_general_customize_register');
