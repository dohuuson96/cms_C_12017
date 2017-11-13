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
define('DB_PASSWORD', 'vertrigo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}q[9c6S`8?YAc_ztu #ze}h,rH.&x~. F=IEQh,;+:^1<|Q Z6_Cd3aOtQ%g{%_c');
define('SECURE_AUTH_KEY',  '(2<3&$U88awo{aib~MS{m,9VI9mw1h,ipK<20Ht,wIr|3j[u[d^(3!_6m2z*8&&m');
define('LOGGED_IN_KEY',    'c_8U RyUX2;]C/W<GsOyw72QZX0B$zZR8AyY@okxx8ba^*nhb+d=&fy)cwoPC48n');
define('NONCE_KEY',        'iR#Lm_Mol/8t;sJ}~@Y=jD=5e$!HO08Z<:@]S.WfMHQ88&hCfTfJ|,s!L*cC5Oi;');
define('AUTH_SALT',        'v4arHXV?8;MVJ01%[38m(MeD1*pwCS+LKH+fWv:j0swwz6X~>HQAtn>2#y21n~K8');
define('SECURE_AUTH_SALT', 'x,`YHZbV>:r| #l rI~GUpV$]v:=tgYpA*cKXn>n;*1Kwl9G=$u6DARz$|C8w#)C');
define('LOGGED_IN_SALT',   ':D^KrTA?#qzg>E5)Z1=t95K0[PpuU}%SI->$+5PR96^:],/KXbgLv:`^t(<@E O%');
define('NONCE_SALT',       'RKSv|!8V8G;V$3Og7ncM%<Y(#]v3V[2JJnd5yzM>Yp7taBF`rcS`&N4+_.H^ns(1');

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
