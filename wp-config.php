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
define('DB_NAME', 'museumofDBve9kk');

/** MySQL database username */
define('DB_USER', 'museumofDBve9kk');

/** MySQL database password */
define('DB_PASSWORD', 'LRaz4Dx5Da');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'pg>>7,^gcCJz>osYXM7<Eu{<yfPyfXTM3QM3}>^30$zrY,^nfbInjbIB7eaT92;T');
define('SECURE_AUTH_KEY',  ';A*qb.uaLiTE;E^q<yjUyjTEbXI3L5_t]+lW-lWGeO9]D;*q<xiHmWH2P9]*RC:@');
define('LOGGED_IN_KEY',    'Q7QMF}>^A7$yf,^nfbUgcUB30JB70@zr}cF2.texiTPpaWH;L62.3.qb$mXImXI2');
define('NONCE_KEY',        'c40EA3^$u<,qjfXyumXEbXI*B>^$jb,rjfMrbM7YI3,WH2_;.te_taLtePH;PI;{');
define('AUTH_SALT',        'OZKC81KC91[wo]_pheWpiaWD5;dWD5:]_5;]_phgYF84},80}|rk4}zrngzrngNF7');
define('SECURE_AUTH_SALT', 'QNB^@+yiTyfbTA2iPHE6.HE{.*m,^nfbInjbIE7XPM3{<A3<umj1]#tlh+tpWOL');
define('LOGGED_IN_SALT',   '<$yfXTnfbIA7iPME{.M3{<*m]xtlSOtaSO5;dWD91~H9#~-h*+taWPiaXD62]LH9');
define('NONCE_SALT',       '-[ws|!-gdJ>^njQIrYQM3{bIA7.$E{<^nj^njQJFYRN4}>JF7,^3}>vrjTPHA<.+i');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
