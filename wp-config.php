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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'g8.qO$3Fsj,id3&;1*DTziG%o3P5s7wj]qjukG[ ~*)vKa`Exp(+BpJao#!<0{cH' );
define( 'SECURE_AUTH_KEY',  'ZDt#Ypn/|dUhG5c>-#)R<j0TppDPigRH]/b,0[]C/3s+Y0[%fI(S)49|%qVBF/2K' );
define( 'LOGGED_IN_KEY',    'I N%!+k^?me)_pj- JuwtZ & hChMOe.v&i750T-oY@^Xm91=! 3W&a<&= b[QDo' );
define( 'NONCE_KEY',        'jr-:mBS~kYx5?<Rqg5>hqmh?lqTp6Fj|Sr%Z%V9oU.s^ys=s8QNBd Mfknn@vL_8' );
define( 'AUTH_SALT',        't=~n:2q~yCxL=wN[7EAiU- vrENhP(n4 gM|M,%`Hlnef1*qnFQ961Iklon!:nsm' );
define( 'SECURE_AUTH_SALT', '%|HKr*|6Ym~Qxj)hnX.zv$0s_xo,0Ho`O`QJOiVhEcZ.*/mH]9-LzX&SsgMw7oeY' );
define( 'LOGGED_IN_SALT',   '!nHz/di.kB%mpuzGZCWh_jE;|b{Q^f9N2.+4jd9^T:-R|[5khk5]LFYl|rRwt7!e' );
define( 'NONCE_SALT',       'WQeTiUP7Z3yz9jR3yiV/G*p^!=9*sv$IqI9X@&z[^B7pMI&UIdhVV}nLm/N4HnWs' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
