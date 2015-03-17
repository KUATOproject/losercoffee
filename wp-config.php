<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'losercoffee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '712rCv~]:u2p `pefgw+iJ5IdAb<i1b_[v%5IMp(00&VK%bTSBWwA9IsU0|LT8L3');
define('SECURE_AUTH_KEY',  'q-wnZNfpL_9 /IYThZ:C&/<5eHh`4jT(sxxa-o=6fo9,V3+w(g[sA]XgaY9Ovzy{');
define('LOGGED_IN_KEY',    'V<^lL1M+Hlgc3F8w*0C{O4;J_--qGKVJI[>H-g|*`=_M 7Vm85A>;[f:;?91W2!g');
define('NONCE_KEY',        '<z9%.0/`+op -?)|>o,wWM^idlD|WXxIPCys1|2/iHqPKf_ tn.~yv/!7<.+6;D6');
define('AUTH_SALT',        'i|Qe1Fa7sEP^-lBab]L~Xm[Z(r4)lBjTZDKQL@I??B/_twJ {J6hB-x=t#UT,4FQ');
define('SECURE_AUTH_SALT', ':sJYxBS-_9:ET-D&Em[;NuSrT5^H[tR^HJo?kd1:-InkB,eM*.MIc|hBv6KMGU5)');
define('LOGGED_IN_SALT',   ';SQG2va6PqIFL07[)7(*w4U2RZEzp;RlfYudPFwlqul##r7]&kNK(dE,gyt!*c>u');
define('NONCE_SALT',       '!?2-]hK6&cdUQip>3|HY1+VtcVUoy-<uk9|D5nv3sUQ[+iCB/g:-Bh`qlG}g@HF_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
