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
define('DB_NAME', 'wp_uncodeold');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'daivat123');

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
define('AUTH_KEY',         '92L^vQmNXW<@e!Nt~G]39J-&K5TLyV.OBVB2_)BJco*>_it/h3jS)~4-xyuU0x)}');
define('SECURE_AUTH_KEY',  '*<W)Zy89l;Wz]1B&g,WGCTV/.CttkkXQ:~md)3y /.~2m><el3S>2p~iQar6f&JL');
define('LOGGED_IN_KEY',    'X^@asr@cOp*Cu6hlbttn&UqZ>M?NO%/:r^^s-{<?RtsN!N5^%Oh_^ggaiI-)]TPH');
define('NONCE_KEY',        'M-AeM1y^byeoLn@%1)~CK=!??~,p)Od.z6Xv:Yh#zZ2se2KjK%KTz7G<Fo6xHaPG');
define('AUTH_SALT',        'F~KOTP%p1!#5c6v?I?9g?VJe`os6MKXG}f<Y;9u2^)3.-Itdy:{b2aYP+@]mTr5g');
define('SECURE_AUTH_SALT', 'K.Z{t,_R@}7.xWT )M&>hEL[/J=Yo{~]JSJDE*KY3Vr+k).X8&WvFWU,*s^CwS`i');
define('LOGGED_IN_SALT',   '?F1Xu$fY0CP~/&`@>1-e]3g9/-L%ZaYuh;W;9d9AmCFj~--^ Rb0,V.)2&H67bK*');
define('NONCE_SALT',       'l~CFl_i,ZA/RDJCypm,:@J0PdRVoC*L|eRqMj8i<%@3]pOAomIeA%Dc>P3:s:e_C');

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
define("WP_MEMORY_LIMIT", "96M");

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
