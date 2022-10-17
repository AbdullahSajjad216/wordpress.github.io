<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'jFOoGo4lrV.[?F<aKg<S/8#(~!Ein(jtsmj8>4DLB@{mPcZ;8RG.a;hGqh=+cyXw' );
define( 'SECURE_AUTH_KEY',  'n #WB@F~$K%s2yq:.MU<J*~EQ#c@e(5YBI,meEw<^X$nsH4lg{} XywfWgAf~u)l' );
define( 'LOGGED_IN_KEY',    'NdoY(A?xsUW6tdNK2rj$v38,B55D/>907D/=VWu$mW~36TFso@Vus7IE6^-S|x^T' );
define( 'NONCE_KEY',        'Tk;J5WFB[-~ndC3W2ajt0oo{ogI,@a!;tG~q@$ERBg<|.zSNV66OPW*6D3W5^26#' );
define( 'AUTH_SALT',        'oNE!JWAEu+A-lS</[cj#.)tnWp8R}^2r#sqi$Rn6_uwng,AKN1E@~hOnB4U*GU:X' );
define( 'SECURE_AUTH_SALT', ')vKfP5xvy]/2%JPl8..!Px)1nI$hkGQa>*|McP#@OHD_Y--e4WM?: .__dMzlrA2' );
define( 'LOGGED_IN_SALT',   '2[;p@{8=YDl==R2 ?ELNq};w_ST5]Hs0,2SAn?7X-<xOEs!>O9FJ=k.Pt7g}C_{(' );
define( 'NONCE_SALT',       '8D,D_y(%gE->tS+:Z76%>k/o6u![nf/rg3e2kEhcRxUsmb,ODo|j>yM@t/S9)cA:' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
