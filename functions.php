<?php
/**
 * Theme Function
 * @package Shila
 */


/**
 * Setup Shila Theme.
 */


/**
 * Call Script and css
 */
add_action('wp_enqueue_scripts', 'shila_scripts');
function shila_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
}