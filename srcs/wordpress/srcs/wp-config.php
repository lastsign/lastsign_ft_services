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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin');

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '>>`Ose|hup3r+I~-#{+p&kuQq1 pK&xY**jre*$K*ZP|h#-oUm27sva=`90C f0i');
define('SECURE_AUTH_KEY',  '*<y]|hbiay2/1C@$ETvIKc,a23z8-?-E%Z;CFF+}F}4jNy;F~}vfxCuTh5dGAa<I');
define('LOGGED_IN_KEY',    'I]|<,{.v|F+6h>|4ptqoYiGJ$[5CQo)szr_:{ml0M4n <m3k:#}@pGMx3&/3x+|A');
define('NONCE_KEY',        '<P+Jgw32W*bt$#Y|6lxpJSB$ZR-)?s+E-0D1Y5)kC5`X2>()cH)4Dop4B#1F 4i;');
define('AUTH_SALT',        'InVj{[@=%D@h@7vCDGm]-VfRgBP,S^%Fbe/-}{B^BJ}RKkUEyh$`3;V$T0Vn0-*&');
define('SECURE_AUTH_SALT', 'K2yQSMIn,e^[bSpqQiqD-&52LrN>zlrmw#3Q2b;2NSe[MnL37_C+P3yCqzd{M8_j');
define('LOGGED_IN_SALT',   'V`oD9VZc0]kv:5)TpE4z c#5+L^r[]Y?={b+6GfvN/(@Zd-}x1LNGa;cc3ayVhMb');
define('NONCE_SALT',       '8<ZGg?@q7tq_t7CgroE~V,#-Xl& swotRru)^%%B{F)zW/G7+@Q}~fn6=3ZI~1^y');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/var/www/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
