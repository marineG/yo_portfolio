<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'yo_portfolio');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'yo_portfolio');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '1234');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ty?DWr-7v#,cj<92ma Fb}zex$@bld3Fd,U~4|(!#iMiT~>WY4>5^&+;s%$,xmIE');
define('SECURE_AUTH_KEY',  '>NaLWP(;1*Mj9:sq~=d#yf[V:bk2Zwi=vgZL5N-<>h1*=!NlA^@/QmwU;O-.-t*k');
define('LOGGED_IN_KEY',    'ip:E]>Iy-O#>(p|DfuB4Nvh*ds!7^;f*i4&d1*AIb9M!2)h.+A4CZF}0:]s^T8a+');
define('NONCE_KEY',        'G7|<=XY!{^N.B.N9-Bj|9vCD D8.i;ueX3GX^m%-!-(F(!bm*jM!75w8*j7E%P|X');
define('AUTH_SALT',        'jmqvC-C@-HRs}cR4*.%uBFPb SK6Fd-i!V~C0m?y}*blT<U>!?>NR/%Of`z:2+L@');
define('SECURE_AUTH_SALT', ';>f3<^U#.gENUpO@|:M+jVS9xXI-~7gLK&=yPQ:za+=#Cf::Q.?*{ty|6=(e{Bsq');
define('LOGGED_IN_SALT',   'DCwZ][/w0RNEZ,pb^oxj+5.iud35l=U-+#ywEclod1iP`pJB5dZl;k-TL|BY2RQ7');
define('NONCE_SALT',       '3&+L?( Sn`8D&dMoUYz=`d~R4C.02_{7GdVW?O53]}30bQaX:Wa E(:2e/Q3=JTL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':8888');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
