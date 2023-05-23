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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ecommerce2' );

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
define( 'AUTH_KEY',         ']`XGo($qm~~2$UFyx.,b5wnKDjM=?!3Bcr@+XY[S8w]W~|vhS,7U~i/}RZnbZT:/' );
define( 'SECURE_AUTH_KEY',  'l5z[*vZ%6R-],/SGapX2TM;:=(oP4|t0#H$w?&;36BC-5IRPa}M=#wyWD=Ih|sg&' );
define( 'LOGGED_IN_KEY',    'h}7%$A0JYEsiew.TzC?zuM&HB$DIE5T0CG8z1fed|j7-^y5M^nC/nCmfU4qL?u!R' );
define( 'NONCE_KEY',        'LTT};c5#!9=#5$sH?Vp%TiUvpa:bMfVPzaIyIM)EL~J_WrG]yKoA=3Tu!`hL/dyC' );
define( 'AUTH_SALT',        'z/]6J-/}lqDV}PMap8wDh:(wi7l`bDJk>GS%Fl%tP{ !tsi5bDomC1cZPuJTQ=]w' );
define( 'SECURE_AUTH_SALT', ';g`PhQf<8<EAfXjdsT>NiMgN0*^YFq$A[K<D7R!O[L=3s5=V0-JdK-,uxwWvEQSI' );
define( 'LOGGED_IN_SALT',   '0tWA],YvSoKMHa`j= ,`v~;@{@<VL%aJwpq-QY3C3CM|?+KF 1jQ pLh.g6@10TO' );
define( 'NONCE_SALT',       'GTf$S4-Q8v}!YCD#Q%:BeX!6A|>)+MEBGw[GD_n2QL(gz%[%Na$E}B0dZB>3`qPV' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
