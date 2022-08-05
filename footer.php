<?php /**
 * Shila Theme Footer.
 * @package Shila */
get_template_part('template/footer/main');
if(get_option('shila_backtop') == 'active' || get_option('shila_backtop') == ''){
    get_template_part('template/aside/backtop');
}
wp_footer(); ?>
</body>
</html>