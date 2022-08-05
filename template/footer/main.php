<?php /**
 * Shila Site Footer
 * @package Shila */
echo '<footer class="shila_footer">';
    wp_nav_menu( array(
        'theme_location' => 'nav-footer',
        'container' => 'div',
        'container_class' => 'container',
        'menu_class' => 'shila_menu_footer',
    ));
echo '</footer>';
echo '<div class="shila_copyR">
        <div class="shila_part_foot container">
            <div class="shila_foot_left">
                &copy; Copyright <a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>
            </div>
            <div class="shila_foot_right">
                Designe By <a target="_blank" href="'.THEME_DESIGNER_URI.'">'.THEME_DESIGNER.'</a>
            </div>
        </div>
    </div>'; ?>