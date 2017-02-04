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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '488d1f05ddb40e68e4f6857df2aa2ad466845491b6d3f654');

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
define('AUTH_KEY',         'H]3KF$&S=OEk2AaCIBYN_c%MM&V-VD4{k|DI+14b0!DOc9/_j%4<Hh$f?,BJUNL1');
define('SECURE_AUTH_KEY',  'M7_N;ueMyH2u*r/-^ @g]]`jSxQ7`<(v]-V`^oQ!s(+7/UW#@)g,>yMu%vTQ>GF|');
define('LOGGED_IN_KEY',    ';l]8t|WhN9H+A%X;cd#P3|;!p0lD(J8OG87>6|67D jX_>uT1#hj0KU@{bql:j#/');
define('NONCE_KEY',        'C;neJEZKGhUPFLAyCY2qs3lE5iXG/gZ(#,MS#}G=aU3)2~fBGVh3oD?DEuQh.~Yo');
define('AUTH_SALT',        'g+O%+F6?;=n-8 Es:V;c<=6?gXnzvePmWO]#gA,u.EZ?~[!xrW+2;|]yl!/!GY|[');
define('SECURE_AUTH_SALT', 'KPBgP.uflo`R,s&=R@%4r0PB.NH`)~&/9`WA[)|`FK+5K4}K*in49)3`.W]C{uP=');
define('LOGGED_IN_SALT',   'Up0hC5GcmkiR(1MzgFC:nHba[AE$)=osk?`{EhiGn!(|YjwG(#pz85wj;)tP>2S;');
define('NONCE_SALT',       'i-ftg~<~42>v8fSB][vto~45Vy>h>|qww9hPFLvB=4i<z^G4^#ZkJJ|ouBvGaE<W');

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
