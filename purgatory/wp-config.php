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
define( 'DB_NAME', 'purgatory' );

/** MySQL database username */
define( 'DB_USER', 'purgatory' );

/** MySQL database password */
define( 'DB_PASSWORD', 'purg pswrd 320' );

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
define( 'AUTH_KEY',         '[Tm:42#;dPAX{mb-<+BG1A+C_AE&_F#Sr^[[?w`AJ+z}a!akhP^W|a6>wQ(Z-rws' );
define( 'SECURE_AUTH_KEY',  '(&,_4xZrw#xKvShr=MX?1f5C#En:80#+f7vDrd 27etRmsR5_pZ`&yWocO5Rr1sv' );
define( 'LOGGED_IN_KEY',    'G3h>wAT{$UG6FCnOy/g3i9LPr`vS**IlbvH;*+J$EP/LN&1UC3fE4rLuzXjKkzgV' );
define( 'NONCE_KEY',        'r3>2icxwtpSW?pAj?TI1M{em[Qz+>eKoyre`.jvs|Rl@V40]GOY]+n*q|{4SMf/s' );
define( 'AUTH_SALT',        'T$&x+|YV5{ViHo-Ug,kq@>G9i@9NwZQ#L^@iSaD*KOO%,[v%u`<:o[^1Jy=%bYNs' );
define( 'SECURE_AUTH_SALT', '4YMC{0)TcV4r<iS!7 hx @kuhCb[xi!alDmEhNj6,wm;9!Y9z#UCBZ|]k+Ddv<>:' );
define( 'LOGGED_IN_SALT',   'K)zB;E!b N.J#}9]PBMEb*=oa0lz:F^LyP8V?qLT(BVFPI[8:Og=`,9dr+z/hsK;' );
define( 'NONCE_SALT',       '!O2Fn[AEtMeGzfl#y[k,|,AKaheOod0WZ,JoCz0r44:Wt@91>PMsJ~(J5F{5se:q' );

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
