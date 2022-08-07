<?php /**
 * All Function Setting For Admin Panel Shila Theme.
 * @package Shila */

/**==================================
 * Add Admin Menu ===================
==================================== */
add_action('admin_menu', 'shila_admin');
function shila_admin(){
    $menu_icon = SHILA_PATH_URI . '/admin/img/icon.png';
    add_menu_page( THEME_NAME, THEME_NAME,
    'manage_options', 'shila_panel', 'shila_panel', $menu_icon );
    add_submenu_page( 'shila_panel', 'Front Page Setting', 'Home Setting',
    'manage_options', 'front_page', 'front_page' );
}
function shila_panel(){
    get_template_part( 'admin/setting/general' );
}
function front_page(){
    get_template_part( 'admin/setting/front' );
}

/**=========================================
 * Setup Admin Css and Js ==================
========================================== */
add_action('admin_enqueue_scripts', 'shila_admin_script');
function shila_admin_script(){
    wp_enqueue_style( 'shila-admin', SHILA_PATH_URI. '/admin/css/shila-admin.css', [], fileatime( SHILA_PATH . '/admin/css/shila-admin.css') );
    wp_enqueue_script('shila-admin', SHILA_PATH_URI. '/admin/js/shila-admin.js', [], filemtime( SHILA_PATH. '/admin/js/shila-admin.js'), true);
}