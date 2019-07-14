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
define( 'DB_NAME', 'colewilldev.com' );

/** MySQL database username */
define( 'DB_USER', 'cdubs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jab$$rontel99' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JzpSOL6N%,3LtHgGf(2W9gv/FrwTgdn8dO[gea$ CZox1g7b|e`,wqIK2uWzE{@;' );
define( 'SECURE_AUTH_KEY',  '7y}72`cx=+4QLm[TlO45CA?aqs@1SQPeDP68$$s@)i4qDhMR*g]Z@S+$lY0vU$xu' );
define( 'LOGGED_IN_KEY',    'CQ+|nZJPFIzqoaJMivDKkwXiY]HI.lfCFb./O{EohsPkZw4cqL=A}0ho3p{JpK&g' );
define( 'NONCE_KEY',        ']Vq~>nq^#7_S]h~c3D8j/@Gk=8yczZ!Y]S_c!B.uiIcG@(&SyH52,_x@(m*2FRu6' );
define( 'AUTH_SALT',        '+X>Z8L rw9]9Yq!BN&Q9}Z8v~_SlU28~i+.GxSdL)yp+;_=)z+[j!3^4JizO^l0A' );
define( 'SECURE_AUTH_SALT', '~ipJ`tLGx{+~$Gd9Ra;R-rzC?8#MspFm8y#N50D)O6lqrm$K*[uz7ldbR1e]jDI$' );
define( 'LOGGED_IN_SALT',   'Q bLZ-|yU~Z%u7)yqMAd=SwRS7L28pJcnyq(KpE;!>0sTMBe0(BMCI$BDYArk{iW' );
define( 'NONCE_SALT',       '1Nk/SFk6al1/,87RE&3SXv4UrGrMSg1RH9i;S@N/rKR|%qt8A$dQ(c<)uNRIttfi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
