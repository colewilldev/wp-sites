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
define( 'DB_NAME', 'colewi7_4corners' );

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
define( 'AUTH_KEY',         '6Ip0Je:=8X7G~Z6~Anu96JeXLi5_RQ2h-kY(8xU!a$Y])-JU)c:9%p;tb,VMHQ}v' );
define( 'SECURE_AUTH_KEY',  '~cyM?g/p2*F0|h$b<VgaI5u|V%,Bg1vchp7pp*U40OhbMFsl4Ej|YS]oV1!l_8Ww' );
define( 'LOGGED_IN_KEY',    '|;Ti/%=1D51wiTzMyw5IPzsfk<Pnie=jF3Z#DtG}_AgO0+_&8A{#[nZ!)q/_Mh%-' );
define( 'NONCE_KEY',        'y_e)A8MD?tbyLqGh9)vbcm,`Cuz{1:,d7k[a@)fR1k9}@S>ou-bTNv78SPb0, SF' );
define( 'AUTH_SALT',        '`mumLB2<<P:FYF%3#Y1>^ZXb|i-H5it9`[;^=jq5*bU+SF7P U8(=3@GF1vOf;@4' );
define( 'SECURE_AUTH_SALT', 'Z4joo3bD9<zam bXA<ME.`Oq<qwhKra2.(J4XIFz1nxC&Wth_2C>dh=:igH9bbHE' );
define( 'LOGGED_IN_SALT',   '.T5/zbCIKNS@c&?:UhI=bm$v%^SXcZU0^x~GEkC>jJp>zwH+(zimq_AECy#5JB}h' );
define( 'NONCE_SALT',       '_8XqHK5IPWw]8 3h,}-E<sx250I3|8 OS?GD#%# ]Hp rK(!`mc(oz% @|S]H6%z' );

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
define( 'WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
