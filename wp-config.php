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
define('DB_NAME', 'ifollow');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZNXlXSPp2v*Dd8haX0vxG]Y4;w-x[n;UFzr!!9<vWR|eeBN(KS04OaxCi]Zh7%__');
define('SECURE_AUTH_KEY',  '&%W7?Yjr#4KHnbPh>Z,my%BoY~iaIS5=wFgJ~}+I#KsOHKtf~oC %Uilv,/&vl35');
define('LOGGED_IN_KEY',    '%o,}U8lOW,0B+sbi+sUt2h|E@R~QGsE)C*#rT[N)ZA!e4rZz6N0(*z9{u&DD.npU');
define('NONCE_KEY',        'l;y!5%0_&kd|+@r0oL/QHiO=^-=x~3|>:$7Bphs%n Q]F.2j)k#!|qe=. 6Oe/(q');
define('AUTH_SALT',        ' Qn{Kr;xR*wVRyM?AQ3IX 2=U:{t]IY1iT=0LJ^%-6?x?ruU(0%gkb 7sKzntX*Z');
define('SECURE_AUTH_SALT', 'I7R43st_H*R(l|/MH2^mq#KWZ5plrS7/hc+j#Wy[gJF#:%S(2@&YA2}Fo?ToC1+`');
define('LOGGED_IN_SALT',   'cT&YAi7&{HzdX;.aAvhp8XI+*>K8d-lIn/20Y?<K 158=+aF=`<GcF^/ZZ42J8gE');
define('NONCE_SALT',       'K!rJ@S{FTQ]FLqEf#7(n[1E>8S:F!p5Z%qX!y&xV?c;h`IpDftHfmh!;K:6Xjp[=');

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
