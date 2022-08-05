<?php /**
 * Header Special Shila Theme.
 * @package Shila */ ?>
<div class="shila_header_special container">
    <div id="shila_lef" class="shila_lef">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="shila_mid">
        <a href="<?php bloginfo('url'); ?>">
            <?php if(has_custom_logo()) : 
                the_custom_logo(); ?>
            <?php else :
                $default_logo = get_template_directory_uri(). '/img/logo.png';
                echo '<img src="'.$default_logo.'" alt="'.get_bloginfo('name').'" />'; ?>
            <?php endif; ?>
        </a>
        <?php wp_nav_menu( array(
            'theme_location' => 'nav-header',
            'container' => 'ul',
            'menu_class' => 'shila_nav_header'
        )); ?>
    </div>
    <div class="shila_right"></div>
</div>