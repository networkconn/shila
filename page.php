<?php /**
 * Page and Fornt Page Option Shila Theme.
 * @package Shila */
get_header();
if(is_front_page()){
    get_template_part('template/special-page');
} else{
    echo 'ini bukan front page';
} get_footer(); ?>