<?php /**
 * Navigation Flexbox Shila Theme.
 * @package Shila */ ?>
<div class="shila_flex_header">
    <a href="<?php bloginfo('url'); ?>">
        <h3 class="shila_flex_title"><?php bloginfo('name'); ?></h3>
    </a>
    <div class="shila_flex_close" id="shila_flex_close">
        <span></span>
        <span></span>
    </div>
</div>
<h4 class="shila_cat">Category:</h4>
<?php wp_nav_menu( array(
    'theme_location' => 'nav-header',
    'container' => 'ul',
    'menu_class' => 'shila_cat_flex'
)); ?>
<h4 class="shila_cat">Services:</h4>
<?php wp_nav_menu( array(
    'theme_location' => 'nav-footer',
    'container' => 'ul',
    'menu_class' => 'shila_cat_flex'
)); ?>