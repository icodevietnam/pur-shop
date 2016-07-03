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
define('DB_NAME', 'purshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|f=#)tvnY]gLu!A_DiZ96@naCK{gPEd3;aXz2KK_}ZS{kAL5&SDQTqehgAI3vP1x');
define('SECURE_AUTH_KEY',  '}mZ*+-NNm^-SjoY P_Y%<}r$HVk}hF(]q}Ch-0Bx%p-8+@BQ-_I;7#%0=G$<LJUo');
define('LOGGED_IN_KEY',    '=$E{ZN3W~UA6FnKI-am-vPW5-2.{`Iyd|sfs,_uw/mHO}Ck5Wms0N/4`$^.W`Y-.');
define('NONCE_KEY',        ' T@3Y|vdc?)>(=G|Kj(T &}lVKfV?Og5<2c#ZBXwNXrg)ja3[.1[[]Iy@t4*a48R');
define('AUTH_SALT',        'H+dnT(fmUv;|k@=>{7oUkLRmH:Yv$m/Tdo!G[7HF@#^`d>`G}=h[y4szX,}y0F?R');
define('SECURE_AUTH_SALT', 'u/>o8Z-}-@S/3my=i*W#iok=/w}+Nl`P4RNZn/2kuD*7~Vq-6I v^&!mZB`eYH@u');
define('LOGGED_IN_SALT',   '{mq&1-wN1tHFTx3oj7Cc_cM#+}ii<N=xUt:$nV8;0:X.e[3wBji1y=(5y/uQLi}{');
define('NONCE_SALT',       '|-]{(M7p]/$N-!PG8,._oZdcM4@o0|h`zShfWo-~%>`n*`#2>j;>iSJFFI5tv%eV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pur_';

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
define('FS_METHOD','direct');
define (‘WPLANG’, ‘vi’);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
