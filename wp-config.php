<?php
define( 'WPCACHEHOME', '/home/u390ejj4da7z/public_html/ofsca.com/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
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
define('DB_NAME', 'ofsca_db');

/** MySQL database username */
define('DB_USER', 'ofsca_user');

/** MySQL database password */
define('DB_PASSWORD', 'C$bL3P^7o.2v');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'r2]Oe{rm21|Rv-$>-2T~-.M5n~6@+!;(PM,578$%,qd^+ouJN3V,)+O7|<8QTm6N');
define('SECURE_AUTH_KEY',  'u^X[=[Mgsj=YeAshI2PL$5o= c;Xas)!Wklo.B+o}9:O.UNA*Ah-2/>*Rx%-S;K/');
define('LOGGED_IN_KEY',    'yHXOLp)C#eTam!kSO>$W-cY)3QS|MY7>Am}w]sl7!+b_=sjG?IC9*QUY,BtS~-EP');
define('NONCE_KEY',        't>J|DN/$L+r]+.)DZM<$:t)+#^LC4o$qC78elzwRO|v0o@n:r4l83dUE!t<u}ywL');
define('AUTH_SALT',        'a$J A$M+~ OoUL2Yc6`Dy@,-GY.Y!!u~?3wg=}b7DaD<Z8cio#9Fj-4T.EG_7Z+A');
define('SECURE_AUTH_SALT', ',[6B5.iLs|Al#DWq95Nt>YffAz*4yA-=T+cbt~%zR:aaqg;o !f&mI1VOZjX~MvD');
define('LOGGED_IN_SALT',   'Y(QeWMDdy/a7 z6lvbGcYG;g:L8DYXlBL({mjE[VpEq`<8X=xlAeWm#|{0S81 EQ');
define('NONCE_SALT',       '#.(D,_@b;r&_$vF|;g|>/Wb012|2t(1I~:z1>uFR4^e5!vt{BUX{fUv`m+z@c2z]');
define('FORCE_SSL_ADMIN', false);

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_DEBUG_LOG', true );
define('WP_MEMORY_LIMIT', '256M');

define('WP_HOME','https://www.ofsca.com');
define('WP_SITEURL','https://www.ofsca.com');



/* That's all, stop editing! Happy blogging. */
/* Multisite */ 
define( 'WP_ALLOW_MULTISITE', true );
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
