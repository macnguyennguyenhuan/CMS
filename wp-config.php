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
define( 'AUTH_KEY',         '?8VuM|[fUL-v3w*^/|n.L4K#//iv1`vH>?uXx23$=?33@K=L7f%k28@cXc+Kt08D' );
define( 'SECURE_AUTH_KEY',  'N4g;dsG#[2f*,~E(Y2O;4 lw6dfD3aa4.b2lq>+htv2.~vK,}WmGGyW{*tmDroiJ' );
define( 'LOGGED_IN_KEY',    ' /f^-^3j&309[XjHF5i[?Q{RX`8cTdrnq$OtCxf^; i!WZ,9( Bmlby-3g*:#TY+' );
define( 'NONCE_KEY',        ']@+GR`iA0l|Ess6jMIX9ha9)+5*t.zd|NTm;2Gop06WKBh#UyD(QO#&3}.[[2G],' );
define( 'AUTH_SALT',        '>3??(SXxZ])KWJ=,UR&WU3x%|qGR%X)yn6~*g:wgPy$rnHC<](HhME6.90B0]FQ&' );
define( 'SECURE_AUTH_SALT', 'q:r@Ip[7eaIiaSOj3a82@gf}nj28c,Q&qDr)P{,nI-2Zn4:OC0]1B5oyo1_#Wi%#' );
define( 'LOGGED_IN_SALT',   'x4HhjW-O/Vs13j!ai:n<G7*.HKI@2Vz52D&T@Aa6X0wlQGespdmS>ieh~X0l3N/A' );
define( 'NONCE_SALT',       'Mr=eFNZ7]!co*}_z5 hLCvD<fs=4.z!qw.pf7H]kw|^|2Zs<UAPA4DZ<#@dj~,>/' );

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
