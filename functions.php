<?php /**
 * Shila Theme Functions.
 * @package Shila */

/*=======================
* This Setup Shila Theme
========================*/
add_action('after_setup_theme', 'shila_setup');
function shila_setup(){
    add_theme_support('title-tag');
}

/**===========================
 * Setup Css and Javascript
=========================== */
add_action('wp_enqueue_scripts', 'shila_script');
function shila_script(){
    // Stylesheet
    wp_enqueue_style('shila-style', get_stylesheet_uri(), [], filemtime( get_template_directory(). '/style.css'));

    // Scriptt Js
    wp_enqueue_script('shila-main', get_template_directory_uri() . '/js/main.js', [], filemtime( get_template_directory(). '/js/main.js'), true);
}