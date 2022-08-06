<?php /**
 * Special Page Shila Theme For Front Page.
 * @package Shila */
$shila_hero = get_option('shila_hero');
if($shila_hero == 'active' || $shila_hero == '') : ?>

<?php endif;
$shila_sec_1 = get_option('shila_sec_1');
$shila_sec_2 = get_option('shila_sec_2');
$shila_sec_3 = get_option('shila_sec_3');
$shila_sec_4 = get_option('shila_sec_4');
$shila_sec_5 = get_option('shila_sec_5');
$shila_sec_6 = get_option('shila_sec_6');
$shila_sec_7 = get_option('shila_sec_7');
$shila_sec_8 = get_option('shila_sec_8');
$shila_sec_9 = get_option('shila_sec_9');
echo '<div class="container">';
if($shila_sec_1 != 'false'){
    get_template_part('template/home/section', '1');
}
echo '</div>'; ?>