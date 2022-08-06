<?php /**
 * Category Print Without Links for Sila Theme.
 * @package Shila */
$cat_counter = count( get_the_terms( $post->ID, 'category') );
$i = 0; foreach( (get_the_category()) as $category ){
    $i = $i + 1;
    while( $i < $cat_counter){
        echo $category->cat_name . ' ';
        break;
    }
} echo $category->cat_name;