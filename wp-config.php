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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tZ#qf7oj2C-%g*Rjm1`-b;tiX[[I5XxX=pG-*?!V,_Ly>d0zT>-u)`?1F[USr_QJ');
define('SECURE_AUTH_KEY',  'GNH!%V31}CcLtbWTl/Xn[h]BOR}14.RTcWu3<2TdLn4@-$nC,cr^e0~S!e}_[I^;');
define('LOGGED_IN_KEY',    'YLG3BQv(-*|u0W{+lT.`9kF`7:-@K#LM33W3(s~(8NN]a^sW(#q3rbQ$od6/`eA}');
define('NONCE_KEY',        'gkj]1,LUB8kN)Oqc:>[WUIaEFLRi Kev76W2C1# BJ9>9X$;L(Nnkxb<82lL=?s2');
define('AUTH_SALT',        'OA;CjrBjK0o/cdj:=d@@Ep` _0@FrOJiWv9~s&NvH]9fQ[X`vS>f1gJ&J`Dz5p5?');
define('SECURE_AUTH_SALT', 'a@2=({!hzkKdtt]0orRod=W;_.4oe$*b@8?k)7Vz(ZFQLau {&P+Hk[9YFCyJ6KI');
define('LOGGED_IN_SALT',   'C,ZqYW!81PN^6N;~O=ry?E<j6!(aLKt;f$0YHYVZR+^/kPbFV :c0hj8GJHlKEW:');
define('NONCE_SALT',       'MQK]qi%bdU{wX|yOfW&WiP2&EbPjX`%e*jl-!EU=?B]6fq;E 3&Gv1+)pxX{]:q1');

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
