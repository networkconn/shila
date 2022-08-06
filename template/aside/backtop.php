<?php /**
 * Shila Aside Back to Top.
 * @package Shila */
$shila_backtop = get_template_directory_uri(). '/img/backtop.png';
echo '<div class="shila_backtop shila_none" id="shila_backtop">
    <a href="#">
        <img src="'.$shila_backtop.'" alt="'.get_bloginfo('name').'" />
    </a>
</div>'; ?>