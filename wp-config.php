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
define( 'DB_NAME', 'creative_reflections' );

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
define( 'AUTH_KEY',         '*BaOg[b/?/VBBg9yKPVrJzu,5lGWvikl{dhp^[=N{M8Nn=~S2`r)#Se}D1oU;L6+' );
define( 'SECURE_AUTH_KEY',  '9bg;<8Y9l2Ozn6x(gtr%}ZbO7vSzodD+H;jAE*HfDIvbj0zHIjv`XL%H#X~fP6Eg' );
define( 'LOGGED_IN_KEY',    '^<w@0ChOi:h`B+W]YC/GObJ+v.T0l>rmn8sm^`fpj$DK= Fgn#RlOr;c_5a$Wsg.' );
define( 'NONCE_KEY',        '*G@Q;z(Yv:^?3D<<jp0+W!JaMNpqNFz-:Blw/s2|o5;8u1oTBC{2%D4_56Up{P>g' );
define( 'AUTH_SALT',        'R(b 5|[cAtJ nPiG+N{%6~H%s RiJroXIU|4[K?DC47Z#tL%8N#?Xg>1{)Q]oANx' );
define( 'SECURE_AUTH_SALT', 'Rq^d(DE:YM.0#h|D`g8Y%mz#(?Trr4xi]Pt=nV6]`G4r3uXm^5{T,-tpUL^JfF!t' );
define( 'LOGGED_IN_SALT',   'xiuz=p0 3nlotz!wNkG0@-T=pY>Y#OuWWXPdB]+oP6E;%=f^.(ea56FSie~|AAYL' );
define( 'NONCE_SALT',       'o}_k_tFW8[t2hD77GGH986t.K, (OgCey|$!uCN.:F7FEu!H?&WKkZHfY?90h_`n' );

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
