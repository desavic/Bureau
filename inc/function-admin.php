<?php

/*
@package bureau theme

    =======================
        ADMIN PAGE
    =======================
*/
function bureau_add_admin_page(){
    // Generate Bureau Admin Page
    add_menu_page( 'Bureau Theme Options', 'Bureau', 'manage_options', 'admin_bureau_options', 'bureau_theme_create_page' , get_template_directory_uri() . '/img/bureau-icon.png' , 110 );

    // Generate Bureau Admin Subpages

}
add_action('admin_menu', 'bureau_add_admin_page');

function bureau_theme_create_page(){
    //generation of admin page
    if ( !current_user_can( 'manage_options' ) ) {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo '<div class="wrap">';
    echo '<h1>Here is where the form would go if I actually had options.</h1>';
    echo '</div>';
}
