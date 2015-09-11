<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'badr');

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
define('AUTH_KEY',         'A~YRvBd6x&ofkL}8*Wm;qOajdiaui|SedZQ.qY)PETdqC;riz9B7Xyxyp`LQSA>U');
define('SECURE_AUTH_KEY',  'I[ybH.U2k8auFD^XVBfK=9!eN1GFL]6,bj|ZDa-0]pdAF-/J._-ZW3RSGy+Um~a7');
define('LOGGED_IN_KEY',    '|@+W[l;4+)sd]ZEHGTQ+|(.mbeONpny 90[uZ;M)h~CW]1I8^(n$!5$UQ1t<t3Z{');
define('NONCE_KEY',        'kuK5VkkU{]h`C-V2O`k^`I3S[x||EKL:Q9j[pt|[^BJZ^]g#d-/8GFGH.iF5P%mv');
define('AUTH_SALT',        '!FjJIKCZ9RWYcxsDA|!V8qlfDhH%&c(Wrjt|`xYP-d%]`& 0t<.!3I<_PCO^]d8|');
define('SECURE_AUTH_SALT', 'K(4 C2sDC*4<Nk?,k-G-3{eKqK?+PXI1c8hPm6,5:dvFo9 2G,j-cd,=$&6 A+N ');
define('LOGGED_IN_SALT',   'W]b;!_/@Ds<unX->xU-fQvi94:o*g&n+L_6Pa2V!vdZ}B}ECcI7nR50@K]|->rLS');
define('NONCE_SALT',       '[[J(ehSIAm!V.,eM&cY.L:-xQ!Dc-Ws+;.}UCA=9bO[Rh^ny[mCU{VFYKBXn#O#1');

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
