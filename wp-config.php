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
define( 'DB_NAME', 'if0_37878135_db_apparelph' );

/** Database username */
define( 'DB_USER', 'if0_37878135' );

/** Database password */
define( 'DB_PASSWORD', 'apparelph' );

/** Database hostname */
define( 'DB_HOST', 'sql202.infinityfree.com' );

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
define( 'AUTH_KEY',         'zMT]3<e^vno-mOYz15$6VhF} kMF5L:E8IGc3q1;]|btUtfDBE4bdC#<&T9%jEK@' );
define( 'SECURE_AUTH_KEY',  '4Nj2%YXQ0)Bky$+xupQNQ]aC</%7:)]EI+UV7S1BB#9&J!:)@PuA?FV7Q!#La}mF' );
define( 'LOGGED_IN_KEY',    'EBhgj/U|sqbL?9^*Y0$tTH5DDFS6NO =fS$x?#Vu@la0Y^&,Z_B?FmI8-/SOy[!Q' );
define( 'NONCE_KEY',        'QQw<S~5+21I<oOX.Ru{F3KMxoBi_~1xZE6]G+>1RC-[Jv!WdxEhFU@[-WwqSw*Hr' );
define( 'AUTH_SALT',        '#R>HKiYb1-1*Ga(9pD/L]iG)L$o$e^E F)4 _H.7fJ_C|8XPddMPqjA>~ C.8OJ*' );
define( 'SECURE_AUTH_SALT', 'b!S>A!`sYK:,?YE*]Ag|IT{)wyc3 8Eu=#z8{_G:H3CuJ5:k4A{>=.}[[ brD]}3' );
define( 'LOGGED_IN_SALT',   'C9{.<vi@>8NSt8rCi1b*M|270%A(c<,tikdw$B=rC+FYtwSZIRat|BiMs}]gS+Hx' );
define( 'NONCE_SALT',       'OcUyP drcMpq075;tsd7]|a*.{O%Mm)#)Qp8a{{*4ws)w-_52X8Ms^}$E39RvbZu' );

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
