<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev_dion');

/** MySQL database username */
define('DB_USER', 'dev_main');

/** MySQL database password */
define('DB_PASSWORD', 'Rixthz.');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MmRm3c?3Nlk^(=)1RTI37rL&y5N.^qoVlN?}c9b*9k[`[J0fu^_C623?D_?ex+h$');
define('SECURE_AUTH_KEY',  '8Dox}NE;P#:Se:HS-,9!7S6+6{XIkRX8;H=<N&Ma+3$Z.CiHq}V^2)Ig!cDR0df%');
define('LOGGED_IN_KEY',    'x9I^jGi7P}cVEuIik::4_G.h!ozasAv=PRxv6/JMk[-e!0XMBaf-?3sQFdpc%b>g');
define('NONCE_KEY',        'PDXl3wNdJC2M$5NN9W3|/8VtM#&>,K5UDd.4LhyDfghhW`YyLfh(@Es3vBU}%7q|');
define('AUTH_SALT',        'qN~<`}EEFM@$?}[wd[@Z@<<DN8z4kpF8$e8Y22,(oZoph6A,,at+*|Dn*K|YeK26');
define('SECURE_AUTH_SALT', 'YD%qloZ0v;oud5?&Gp5i254ax8w9jv{b[G2ufoJea1575o2T)FP8z~V7fQzff,h#');
define('LOGGED_IN_SALT',   'mVwY>>2>ps(y)(`Qd4)|}RM13Qvg +OPF.$&.vC*#E,yEw#[j<!ha[~*!u%V67dr');
define('NONCE_SALT',       'swOBgQOF,vk7L.DEj=e n=v6sle}#U8.im8?XCq!~6})bW{zm%L1bJ>5l&O>Zi.H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
