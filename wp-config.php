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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mushmade' );

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
define( 'AUTH_KEY',         '<p+wD7^NWFpc+!cmiuum6bF~FUq7lLtmG*~6CELjn6=*QPb|dlUpxgERA`}<(ZKp' );
define( 'SECURE_AUTH_KEY',  'kVOpC1|}QoxP3uW>#|koK^[PYw>C+w3Dvu$L!-j(pb_fZ-.<$r-oxDWlV,]ldK=>' );
define( 'LOGGED_IN_KEY',    '+(mi ]gF&CL<J3)^KL)IA>bsMQQC{f6A(f]1ybH&)Y37:=XOW91~3rN#=tfP@6t.' );
define( 'NONCE_KEY',        'T%n!x*H*NR$b!`I.C evmi[$c;[(4z.Q|dlFB;r#9o9@bb/w8xgrzk,Q:L{fv^q4' );
define( 'AUTH_SALT',        '+8!6,ol$@7/KKzwo[8&HFS:D6Wvs:H]qVIFKQtvn)ncL/Oj_XIp),RJWV}xbP.N(' );
define( 'SECURE_AUTH_SALT', '9ll`#g;w<FM ^43aurgl?BwQ&|2yZR)Z0P=0M(8n7Rw7k]XaPi-QjXR{Kw]+Jhxd' );
define( 'LOGGED_IN_SALT',   'H}fp7_**<*tB9zWCo}<%.8ne<{US>SAnUT%cl~#)-yatLmi8JWu?9CP[WY27CRf,' );
define( 'NONCE_SALT',       '%AbF^pqWay0{C>iSm_j,`W#HA]qMvt2fV;l0L7edap:cv8B|v;cJkkUS[u,pPlN3' );

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
