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
define('DB_NAME', 'gallery-theme');

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
define('AUTH_KEY',         '~v|OcC~[bI3a]$<84LeMFU&i-m`JIZR8CWgu#dv^)oR_QiT)0;j],4=P(RxZX:H<');
define('SECURE_AUTH_KEY',  'CNQyb!)GCs0 YG?p,W@,ndf?,G,k%Z1`RfLI$QA,@KK6A8fUJE#1|~&puDIU8 i!');
define('LOGGED_IN_KEY',    'NqPhY|wwH.l!202NiHSc#F6<Q.J4n?p,xTy2;v?Q&;asoKD?u_1S<ne<z3zt_2_A');
define('NONCE_KEY',        'E}5FUOyRN#Tv.#{^AnUC@=VJh>M1ahe4h0l1-TF6kIu@Mf?p6DJIpMQV|GL.Ds!p');
define('AUTH_SALT',        's-0ae68*|CEI?hE]bXN:f)+/926rcC]Gc8#)}S|Xf0<b/Hq4mn*^Y`]gPq VI|w5');
define('SECURE_AUTH_SALT', 'H-LgRiZ/pVLy_=e+}]:f{vM}<iEp(m?Z;WbU?rr5JdfBHyF)=v5TMbm7MD#-(@5C');
define('LOGGED_IN_SALT',   '`olb%o+*fMP^XP-%N6|Jc$n<- (YGjb)&eujXDN]Fbk-5[S~=OI>vhRr(By.My;W');
define('NONCE_SALT',       '2FXH^!.VZ?7:$QleiVx4)FJH[1r}jp(7ph.YX!+@b)oe/$!$dGY;W=C5R&zqBO0w');

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
