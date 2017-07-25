<?php

/*
@package bureau theme

    =======================
        ADMIN PAGE
    =======================
*/
function bureau_add_admin_page(){
    // Generate Bureau Admin Page
    // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = null )
    add_menu_page( 'Bureau Theme Options', 'Bureau', 'manage_options', 'bureau_admin_menu_options', '' , get_template_directory_uri() . '/img/bureau-icon.png' , 110 );

    // Generate Bureau Admin Sub Pages
    // add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '' ) and should be:
    // add_submenu_page( 'bureau_admin_menu_options', 'Bureau Settings', 'Settings', 'manage_options', 'bureau_admin_settings','bureau_theme_settings_page' );

    // To avoid mistake in sub menu positioning  we must change the "add_submenu_page" to :
    add_submenu_page( 'bureau_admin_menu_options', 'Bureau Theme Options', 'General', 'manage_options', 'bureau_admin_menu_options','bureau_theme_settings_page' );
    add_submenu_page( 'bureau_admin_menu_options', 'Bureau CSS Options', 'CSS Settings', 'manage_options', 'bureau_admin_css_options','bureau_theme_css_settings_page' );

    // Activate custom Settings
    add_action('admin_init', 'bureau_custom_settings');


}
add_action('admin_menu', 'bureau_add_admin_page');

function bureau_custom_settings() {
    //register_setting( $option_group, $option_name, $sanitize_callback = '' )
    register_setting( 'bureau-settings-group', 'first_name' ); // Registering Settings
    // add_settings_section( $id, $title, $callback, $page )
    add_settings_section( 'bureau-sidebar-options','Sidebar Options', 'bureau_sidebar_options', 'bureau_admin_menu_options' );
    // add_settings_field( $id, $title, $callback, $page, $section = 'default', $args = array() )
    add_settings_field( 'sidebar-name', 'First Name', 'bureau_sidebar_name', 'bureau_admin_menu_options', 'bureau-sidebar-options');
}
function bureau_sidebar_options() {
    // Callback function called from add_settings_section
    echo 'Customize your Sidebar Information';
}
function bureau_sidebar_name() {
    // Callback function called from add_settings_field
    $firstName = esc_attr( get_option( 'first_name' ));
    echo '<input type="text" name="first_name" value="'. $firstName .'" placeholder="First Name"/>';
}

function bureau_theme_settings_page(){
    // generation of sub menu page
    if ( !current_user_can( 'manage_options' ) ) {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    require_once( get_template_directory() . '/inc/templates/bureau-admin.php');
}

function bureau_theme_css_settings_page(){
    // CSS page
    echo '<div class="wrap">';
    echo '<h1>Here is where the CSS MENU form would go if I actually had options.</h1>';
    echo '</div>';
}
