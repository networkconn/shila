<?php /**
 * All Function Setting For Admin Panel Shila Theme.
 * @package Shila */
add_action('admin_menu', 'shila_admin');
function shila_admin(){
    $menu_icon = SHILA_PATH_URI . '/admin/img/icon.png';
    add_menu_page( THEME_NAME, THEME_NAME,
    'manage_options', 'shila_panel', 'shila_panel', $menu_icon );
}
function shila_panel(){
    get_template_part( 'admin/setting/general' );
}