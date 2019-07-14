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
define('DB_NAME', 'perfectionSpa_DB');

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
define('AUTH_KEY',         '_ aY[Qkx0f>7u+,Xi1&3M@M#&vUT@b]=]Aj={Fubz|n|h_Zuvnz{W+}O|R8hj-a>');
define('SECURE_AUTH_KEY',  'VyUVuOq*mp@A2g+:J=R[(OrX#AR#3p@*r(x#FE5syo?ZMvGK.]Ebn><VbbE3pz8(');
define('LOGGED_IN_KEY',    ':[3my7P)Z@BunjKGaS~OOOQS#I(KjQsh&1lJo[o&4KtMq}X_VY=2*E&]^|6hD`h$');
define('NONCE_KEY',        '/4?qVgsd1GS9E1,Lfs,a@O02qraj8^1<qbk3=Y 5p(]aWu~x/=hsLnzAA) n%-u=');
define('AUTH_SALT',        'L@7gn8><ap}^]s`jsiLwjLE-[qwF4ibnQy4wHOa39AD}#tG$*uBZhbnwWX;|J`DN');
define('SECURE_AUTH_SALT', '=-U?Lzp.H`)@{I5lhZ~|SI|2cFIZ.tfSl#v1ADxj=<.K}H@N?fyxhu4q>@p1BDtT');
define('LOGGED_IN_SALT',   '7L)NPRXjkqZdtf8AVavJy7)o-#om3z?7t-}t7bz6]rE$k`0~w{3d*AY@PuB<w +%');
define('NONCE_SALT',       '[w($AHZI5?|[vHA^3({*[ C6/d<MdV:tJrmZ0xk(_+f/oyk!=P~ub{yhiv},$d|b');

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
