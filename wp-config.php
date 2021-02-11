<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finaedge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EQcH8r|okTW*6 ]hp`6{G$I9BdhevD.VBt4B6O J0HY4^X9+miGd4MGS?:R%WGt=' );
define( 'SECURE_AUTH_KEY',  'X2[+lE}Ju;,@EoX1e0<sg%u= 3WPEP`t2daL%vN<b{<GGKN-TE~;t+>H}&-~X(6v' );
define( 'LOGGED_IN_KEY',    'njvRT9I%G;7fY7s>k;IMDP_:wckmVj-s*)^a)G+&(8MyW*@dYUrM^($K?W2^hsok' );
define( 'NONCE_KEY',        'Z#d!.5( #O5|a$v%!U!)Wc9.j;,vD:K&i)-^&l(=z.]3paJA5_+1auIX!{g0)G/_' );
define( 'AUTH_SALT',        '|5?!+1GH@%;jq^Y!Mp-83;&.,Qw<?&L(u87Zxs{2GYfS^;!.CaLVP!iUDPS2=5vi' );
define( 'SECURE_AUTH_SALT', '_pUxJ_am6URqHNz2#HNe&{>en/Jyo]OgU^fB/~fG+Cx@)QToNNw/ BsZaSp}sb,0' );
define( 'LOGGED_IN_SALT',   'LK]&{]`~1^)_nS/pLd8*|ih[)i/NjJ]X+]XT+6et)h#w.g,Ty:K}t8rm}Y#!s96(' );
define( 'NONCE_SALT',       '/>0B.%UIKUg .#7BXgC{1SPF!$!CEGywo>mXZy^-(^:9oXw:?fGP;U*#6Ucr[f!}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
