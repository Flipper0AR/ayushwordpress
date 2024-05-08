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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'ayush raj' );

/** Database password */
define( 'DB_PASSWORD', 'jstar@2005' );

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
define( 'AUTH_KEY',         'a]umM1thNohBh.BEx/5!z{LX6Y9nkl2yMgO)Z  T68D{q_i07EIecZB[z^+JxMe+' );
define( 'SECURE_AUTH_KEY',  ':_rQO($Fw-lJZ:E$o-Co0,58+`2T(ldQlR^78EA%1Hm0{4=n5=4=o#*WenR8we_p' );
define( 'LOGGED_IN_KEY',    'T^<.Jl 9:g$PW${_;JzGI)t-q{Q$Cd]2ScS(bHeZ3=j`{zu-$B(arn.#zFP`m2j7' );
define( 'NONCE_KEY',        ',d%M3ot.=?9;|hP>6*>{_#WgX5 (GWz_7kDMK2g<e~fj&!8{;~[qqgXn`%U}n*zf' );
define( 'AUTH_SALT',        '{jiXa;3TRRj7hRidO=?.}4n lY* Rx>gb0zuU|HxJltIj~KHu0R=Zc;v5D|ix;N8' );
define( 'SECURE_AUTH_SALT', 'c9MjxS8]ZBGFw3f0&|dJp?K:GnkmSX~_`rId55:84nD%7a4eW#V|9.Mfs.#U]6io' );
define( 'LOGGED_IN_SALT',   '$YPcsnP$x@, |OO g9K977/bl>9JH1Kbq^Ocr*f`p36Az|0?H8dgz?1nj;L^E^-Q' );
define( 'NONCE_SALT',       'aMdUg[,!@6-!^}lKZKVP=5.xr~F=iz|=TieY;iN@QhV-Kt3k7J74Ry:Km|y^!>CF' );

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
