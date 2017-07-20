<?php

/*
@package bureau theme

    =======================
        ADMIN PAGE
    =======================
*/
function bureau_add_admin_page(){
    add_menu_page( 'Bureau Theme Options', 'Bureau', 'manage_options', 'admin-bureau-options', 'bureau_theme_create_page' , get_template_directory_uri() . '/img/bureau-icon.png' , 110 );
}
add_action('admin_menu', 'bureau_add_admin_page');

function bureau_theme_create_page(){
    //generation of admin page
    
}
