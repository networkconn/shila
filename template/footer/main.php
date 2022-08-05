<?php /**
 * Shila Site Footer
 * @package Shila */ ?>
<footer class="shila_footer">
    <?php wp_nav_menu( array(
        'theme_location' => 'nav-footer',
        'container' => 'div',
        'container_class' => 'container',
        'menu_class' => 'shila_menu_footer',
    )); ?>
</footer>
<div class="shila_copyR">
    <div class="shila_part_foot container">
        <div class="shila_foot_left">
            &copy; Copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="shila_foot_right">
            Designe By: <a target="_blank" href="<?php echo THEME_DESIGNER_URI ?>"><?php echo THEME_DESIGNER ?></a>
        </div>
    </div>
</div>