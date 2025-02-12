<?php
define( 'DB_NAME', 'college_project_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication unique keys and salts. Replace with actual values from WordPress generator. **
// ** https://api.wordpress.org/secret-key/1.1/salt/ **
define('AUTH_KEY',         'YCj/)y-lfily8T{OX0|hiko|ZFyNuptD8Huj`]s|Vwc`k4FGbB1!({f+)qwe?U#2');
define('SECURE_AUTH_KEY',  '.)4N<:+RzY/q3/`)b!E)RK=)u+xCSA/no@&d_/8q#*[uuk9qa6UU6S2 cGGt-e?e');
define('LOGGED_IN_KEY',    '_5WoJsV1:IlB-.q =-`-yG!R$Va4gq=Fsh,x!0dQ_Mf_p~P:[sc5wLMT=&5<pVe4');
define('NONCE_KEY',        'km3B0H-t;)abx&fMx/f=G6;dPj&;(aAy8$K?+q}T+KdLz6AkbFiO5I ofb6jXm7.');
define('AUTH_SALT',        'MUH5O2FLR/l*zNEbH$!VFmuvq 5q,.jR];ChNboOPq|vJGVbM7`ffbb~LDa%zP^~');
define('SECURE_AUTH_SALT', 'v6cq9eq~C)<9X>O]=C:fY*)k.jAhJDrCA:cPl9WhZ-,dx>+))N#uANz&M%Px3,kc');
define('LOGGED_IN_SALT',   ' g*ojmVV!TlqS4[d&?f9/)w-wAKKz<<..Yo,Zi2D7+`#IfqiS.@ApnI0L<KgRFso');
define('NONCE_SALT',       '6! s6N!8L{yZD*K@16I!2Pit*}?l?n>vPvpZAc9,xdO#ps.|tLR?XD+B%] m*t()');

$table_prefix = 'wp_';

// ** WordPress debugging settings and enabling theme/plugin installation **
define( 'WP_DEBUG', true );  // Enable debugging
define( 'WP_DEBUG_LOG', true );  // Log debug messages to wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', true );  // Display debug messages on screen

define( 'WP_ALLOW_MULTISITE', false );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'WP_MEMORY_LIMIT', '256M' );  // Increase memory limit

// ** Enabling theme and plugin installation, uploading images, and file size limits **
define( 'UPLOAD_MAX_FILESIZE', '64M' );  // Max file upload size
define( 'POST_MAX_SIZE', '64M' );  // Max post size for file uploads
define( 'WP_MAX_MEMORY_LIMIT', '256M' );  // Max memory limit for uploading and processing

define('FS_METHOD', 'direct');


if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
