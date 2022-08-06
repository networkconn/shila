<?php /**
 * Setup Script Shila Theme.
 * @package Shila */

add_action('wp_enqueue_scripts', 'shila_script');
function shila_script(){
    // Stylesheet
    wp_enqueue_style('shila-style', get_stylesheet_uri(), [], filemtime( SHILA_PATH . '/style.css'));
    if(is_home()){
        wp_enqueue_style('shila-home', SHILA_PATH_URI . '/css/shila-home.css', [], filemtime( SHILA_PATH . '/css/shila-home.css'));
    }
    if(is_404() || !have_posts()){
        wp_enqueue_style('shila-404', SHILA_PATH_URI. '/css/shila-404.css', [], filemtime( SHILA_PATH . '/css/shila-404.css'));
    }

    // Scriptt Js
    wp_enqueue_script('shila-main', get_template_directory_uri() . '/js/main.js', [], filemtime( SHILA_PATH . '/js/main.js'), true);
}