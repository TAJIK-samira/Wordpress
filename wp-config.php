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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hZ9 U{qznN}<p=@QM(@ndm`.)K[C/BoHfQ;:-@8~D8P,A2&rt6N-1D4ZB1&N?UKO' );
define( 'SECURE_AUTH_KEY',  't8@Hg),}T@ qUzQF^57>DYq3Qs&ngv1Cefeb*Y1)C@8=Xe`7{fg< #a<sFMgmeAp' );
define( 'LOGGED_IN_KEY',    'M] _<35W3Dy<_*,@:p<upMTq@0E#e)fIZ7=*+)R&@j?#I@!7vVb-sX[OFS!B::Rp' );
define( 'NONCE_KEY',        'sg;QkvrEd 8[gM]@IV$*+9V+2pHqAmzP3LF/,MZM{vdm0I^K%i^a<Q~8?Nul.B6|' );
define( 'AUTH_SALT',        '^T^}y;Ha3/U&Tj/ux&YY0:[wgV6DS2vgM=,MZT-ww&Y0zQto,c^5iyr##s0]4G).' );
define( 'SECURE_AUTH_SALT', 'T?D/0*=|9>x{HkfcT<L(SELMxgJd;uHPVZ8kH@xcn(8P)[/7]D1AvBCbKUS-t&AJ' );
define( 'LOGGED_IN_SALT',   'GtV8$ik%rJ_9GXTE.M/[_FLPS5qc(tz Pfpm&mAe5SBzSj%?&zU|JTEjsqSS*5MC' );
define( 'NONCE_SALT',       '@r~@E[hIS@5z?uf6WE%~HrwMaxzBx8Re8TZT2C;6VFD8Dt;QSZD;M^bj~h)pf)]~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wSp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
