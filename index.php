<?php /**
 * Index File Shila Theme.
 * @package Shila
 *  */
get_header(); if(have_posts()){
    get_template_part('template/loop/index');
} else{
    get_template_part('template/loop/emty');
} get_footer(); ?>