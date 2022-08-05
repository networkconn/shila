<?php /**
 * Shila Theme Header.
 * @package Shila */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(function_exists('wp_body_open')){
    wp_body_open();
} ?>
<header class="shila_header">
    <?php get_template_part('template/header/navbar'); ?>
</header>
<div id="shila_flex" class="shila_flex flex100">
    <?php get_template_part('template/header/flex'); ?>
</div>