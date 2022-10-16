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
define( 'DB_NAME', 'api' );

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
define( 'AUTH_KEY',         'JH1Y_?9_xpB}n@E^OP<4cB?n$-x7N8YQqp`DZ/Nt(tu<1i]t%Kqzgy}gTBusx`2?' );
define( 'SECURE_AUTH_KEY',  'Rv)qFa92Rs1y`B)g{h7 IOEYZRRcGFO?nHnA8MwH6p[J:nWK-#R#&mf6=7]d!19p' );
define( 'LOGGED_IN_KEY',    'L`k{WH!D>@+r2Ww-Cak1xfz;B+l$9RmJa.,{8d:vKu%!]|%zw(94i8[,9lLtDj9<' );
define( 'NONCE_KEY',        'moUtjV$%xr[6R<_@dTY}Tw.@C6cZE% [ `,FJt9FGF=YKU)|caV%g0w$?J&j1z5M' );
define( 'AUTH_SALT',        '[Z3047{hl<u!m@a<K)3$tIxl6eyg:i$Uq:;pYkm/u~J#}YgFA(h-iyue0G$+D.hB' );
define( 'SECURE_AUTH_SALT', '81E-/dtBWuAE=`^1_u1p`eK-<0XY]=pq$n4_Y[#[KApNfpj+9tQT0O1 #V1-b[T0' );
define( 'LOGGED_IN_SALT',   'S;W#lwI+S~?]h1w4O77w8J+U4|Z=7i#r}G sCo.b?R}00eIs*0V15Os464TdYyx+' );
define( 'NONCE_SALT',       '&u>]c7m?Q_ |AD=~@/G[M/4*^j3<G3WU2J3amNk[u3B n O|coMH+:-YNn_JvJ?h' );

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
