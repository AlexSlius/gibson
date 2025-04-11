<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gibson' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I:{X$zFC~JrvzZqI_f@7wNOovJ]@[^`J.!=B-b6s+S[99~BL>Rcsd[JKy<A{]ZQ0' );
define( 'SECURE_AUTH_KEY',  '>q8dY4YG[+)zaw,XLL6`+;E4u;JhfID*]}UJ7t+>gH@=mf_WhI q|LM?TLJ0!mNq' );
define( 'LOGGED_IN_KEY',    'K2x#,rs^`<=8{*V6eQw?k=4;l3r,I#l<|k8=u%O]Izp>,_GBX 2Qc2%S|I#7XmP4' );
define( 'NONCE_KEY',        'GgEBjB;J&!elKLl6`R:G3|&|z~OcK<&OD1S|8S`|1xZ%T{YtG^!_M}cO+>Pu3URY' );
define( 'AUTH_SALT',        '3!*IAC1^[i1-c!_~Kf}X4hJIP^iS:[4_AB-sNg)@Lf{HHjv>0mB9-f}V!5@NJfi{' );
define( 'SECURE_AUTH_SALT', 'O)8qU<>Cr{t]CvMIJd>U#{Z+hV},1S(Gp^ALs2A71<V&4_>)&2/Lm@o?3<@0$zjM' );
define( 'LOGGED_IN_SALT',   'e?VBR~;H.11lh%*wsP.W(*[ 9D!9#*M!:gbOHi2)v;wZ+*5]w@2<sY6?SH Ho<J8' );
define( 'NONCE_SALT',       '_0a U8g@4:i6?u6iNkl_<?9U^OXO5xvd#y?Q@#:Z5T.1wj.1T@Y,NQlb.LuKspbs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
