<?php /**
 * Shila Theme Functions.
 * @package Shila */

if( ! defined ('SHILA_PATH')){
    define('SHILA_PATH', untrailingslashit( get_template_directory() ));
} if( ! defined ('SHILA_PATH_URI')){
    define('SHILA_PATH_URI', untrailingslashit( get_template_directory_uri() ));
}

define('THEME_NAME', 'Shila');
define('THEME_DESIGNER', 'Nur Akbar');
define('THEME_DESIGNER_URI', 'https://github.com/silohon');

// Main Function
require_once SHILA_PATH. '/functions/theme.php';
require_once SHILA_PATH. '/functions/script.php';
require_once SHILA_PATH. '/functions/admin.php';