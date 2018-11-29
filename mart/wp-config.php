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
define('DB_NAME', 'dev_mart');

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
define('AUTH_KEY',         '1}$uXZ:@m*9O]K g}$]EQ@vq{%/cr~b+g3{<]xMC^q>nUe]XW A}{5k}F)Ko@B=`');
define('SECURE_AUTH_KEY',  'O6.x%L%$AjvWS9Sgs< YTN([;xA.=~_eWI`-2PF.p$b55K0z~S}rK}VK`l[ER,[Z');
define('LOGGED_IN_KEY',    'Kr8k-z+Ir:V1GwYT$5{BX^rHBAL#kbZ>i41$*j~z3Y$eI;8gi~ZIEw1=iq+d*s<a');
define('NONCE_KEY',        '!.o33<FOw}=~A]L|r>j2pFwlq6](p*2^R {4Bp(U+FiEL!R.[yw3Bz%8czim[v7.');
define('AUTH_SALT',        '&R(BrG[j+9`][i<RptuGA`$2V1]`9//JDlPQbj?+_19>5! Q{L,ZMho-Y0bGs%-.');
define('SECURE_AUTH_SALT', 'TKL2zud%2WgboP=D9LT[87**@}=Xy:K*H7B:=}vr#e$k.%Hd5A.n&OQs)]eXV.~]');
define('LOGGED_IN_SALT',   '&ylhxx]Ef-@*+T!12#3!u/&~l<GLzH%CpX9AMN}4VJx;}Yf`Xf+K 3XqNKx4AXF9');
define('NONCE_SALT',       'P1=Y)|]/tD0VZbM<,}~a06PVJyJ|AdVvO5YJ0Ufx#PB2yV^F?%(smQw%8+]P8gJ9');

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
