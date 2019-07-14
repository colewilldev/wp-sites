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
define( 'DB_NAME', 'Custom_Admin_Plugin' );

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
define( 'AUTH_KEY',         'v.KcjKTi{bH7@`,Jb.OIV4gPxwB$=`FYkP4OC8K5?fLZ^i!ur(B8.YT,k.F ?&Q+' );
define( 'SECURE_AUTH_KEY',  ' D& v2SovkM>T<kj3hl$*aTe/2>60L@Cf]f~D`^rkklY}1g{JC)nPdu9}[2|TbrS' );
define( 'LOGGED_IN_KEY',    'i^;TcMC.;p~_*) +[S2QIJ& 49j%4/h :vIwx[^Kc=B-lRF(Eg_ {T4x5}`Ft,EJ' );
define( 'NONCE_KEY',        ' W<k[X?`:xDG;jbZ0K<2gL9b0Q%S;zfJ:u8Ia9QDxw{POM^I+6vf|l3S9.p6G&-/' );
define( 'AUTH_SALT',        'J&]#?<-Q],^%{HRG3~{Y.sku/y{KR7i>-m/wtw8Je.:%b7m([~_pGztwUcKn^wr?' );
define( 'SECURE_AUTH_SALT', 'pAg^AnfFLhV>>>C9_k_FX]96tkUjSz.E46pvAJNqy=O2NJM%t**)jQ^=C*S3nt0}' );
define( 'LOGGED_IN_SALT',   'yOc>J`|= :sj&6]E_m<X$bJU</n8o3(>sNj:?_i%;hCR>~-nJtY-Z+k^N;PJQ,U7' );
define( 'NONCE_SALT',       'h,p/51.*garP>J1Ez3_;)C14ldzi41R `pnD[h|v@AWx6=Em[?</Y~BKnOX[H@r<' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
