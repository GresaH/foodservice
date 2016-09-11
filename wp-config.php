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
define('DB_NAME', 'foodservice');

/** MySQL database username */
define('DB_USER', 'foodservice');

/** MySQL database password */
define('DB_PASSWORD', 'E3Ey8TyqFn3AXueJ');

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
define('AUTH_KEY',         ']13e&99ywZYp=CUA?<1Yry1zqqm1]cAd-%m~a}c[34MhG4r}w,=9X5*[}AeX?%RX');
define('SECURE_AUTH_KEY',  'm}AR`Y&<pq0.~LHbCbXWFzO0/4!lS,|tg0@Y#lTP/L=p5Fg_>~6Kh:zz?s~BPQr8');
define('LOGGED_IN_KEY',    'n0[!Nt/eS}/s&,UU=F+?[p_=~EeS)O/eq&`LMeU7T0-!82E3%FhdvX4mQy}Eczw[');
define('NONCE_KEY',        '8*ByW:P|t4A{[|7eNJ1xwd=ZCSY`Im`!!a$ft/z=-o+0e[eVYe9RfF<Y %`>*of+');
define('AUTH_SALT',        'j6eDmsb!!<<9l^O3}*K2@cYFMC5&akuV^]{v;-s*{_aF?2dFlu7C+z7%K30s|-^[');
define('SECURE_AUTH_SALT', 'itab.Ad^pw^s.@m=`:~wz~U.8+jPE^gXg2NodXlx_%)3>K6q(0?JDOi7RVVr)~L9');
define('LOGGED_IN_SALT',   'YD1TY;L{`6(QVBmLx-y*o.W|Vehc=jpOQD~)Yj5KvT!fwP89t[Lp9kV6[3l*:vXX');
define('NONCE_SALT',       'afIZY h<: MmH?`2QGB&Wy+))8ji`{{=20PjVTOrCE5/4X70w]+y5jl59~)Y/Xq;');

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
