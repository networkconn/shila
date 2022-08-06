<?php /**
 * Theme Function Shila Theme.
 * @package Shila */

/**=====================================
 * Shila Setup Theme ===================
===================================== */
add_action('after_setup_theme', 'shila_setup');
function shila_setup(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'nav-header' => __('Menu Header', 'shila'),
        'nav-footer' => __('Menu Footer', 'shila')
    ) );
}

// The Excerpt Length
add_filter( 'excerpt_length', 'shila_excerpt', 999);
function shila_excerpt($length){
    if(get_option('shila_excerpt') != ''){
        return get_option('shila_excerpt'); // Custom Excerpt Length Shila Theme
    } else{
        return 30; // Default Value
    }
}
add_filter('excerpt_more', 'shila_exerpt_more');
function shila_exerpt_more(){
    return ' ...';
}