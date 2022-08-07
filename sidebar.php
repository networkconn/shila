<?php /**
 * Sidebar Shila Theme
 * @package Shila */

/**===========
 * For Home */
if(is_home() || is_front_page( ) || is_tag( )){
    if(is_active_sidebar('home')){
        dynamic_sidebar( 'home' );
    }
}

/**========================
 * For Single Post =======*/
if(is_single()){
    if(is_active_sidebar( 'single-post' )){
        dynamic_sidebar( 'single-post' );
    }
}

/**========================
 * For Page ==============*/
if(is_page()){
    if(is_active_sidebar( 'page' )){
        dynamic_sidebar( 'page' );
    }
}