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
define('DB_NAME', 'WS-Theme');

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
define('AUTH_KEY',         '=YptKC,tm{E=l +VuN5Mltj}S/-#oF,2t#u^l@}TjiT^lU07 jwpa}f{T-9`S{E-');
define('SECURE_AUTH_KEY',  '@uYD:ehCaq[e]sI(?>r&?uJ-p18nYGt(PWj({0P;#k-9/4%hoK2ZPeGPLZKD9LSh');
define('LOGGED_IN_KEY',    'N~2O&hxy-hLIt^7#ru^Yz**6^HspkQ2{O]u-)-dTZS/87K1;(Y(anq72eSwECi;+');
define('NONCE_KEY',        'RuAFL %CXo1hS4LWn|vHkkE@ZTl2WN#tbY2SCn^6voOgeUOB<H]7wh&@7V?5D2nc');
define('AUTH_SALT',        '|_cr8!mdusoy:g0:hx:qO-K#1u;|dz,!f@r^L)$?f*X[CF)uSQT$BE1#GU0Hy%=i');
define('SECURE_AUTH_SALT', 'IE*hYfZD3G3:cYSC$b4f;@!o=R@iB628n>XC,g=Q7A[C8JylQ:5Fq*,=N7&9J},p');
define('LOGGED_IN_SALT',   '*A+](6AeO)WY)aC>V=M>qk#[_1sezi!|#z{HDzH-f<D90j9[^wtm&+@{)YgJoa.l');
define('NONCE_SALT',       '~w]zF+N@xYmUp?Ay&@/0A|V~[_N>b,NIK58U+!thUqS[)vWsKtwq?|$IT&m]o4(`');

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
