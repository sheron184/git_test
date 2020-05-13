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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_nu_hellmann_mas' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '~IN=]&y|l_gxY`*iDdS]iP i#[;l-yUE?q0!yx=YN[C2^N]VM^:LF.g7:~@bYleb' );
define( 'SECURE_AUTH_KEY',  'S(c5maAw<Uc,`E3.8~f9q;-1=^mhZnDeRn@rbnyVEE~evd(wM%_n8svpAB%Oo7a ' );
define( 'LOGGED_IN_KEY',    '#W[Rg_Ek=5k{k:y0xgdLJ2gcu!YN}_.xYt&3<6^dX,UpnD#v?!fcp?GV5mCm[75&' );
define( 'NONCE_KEY',        'kd&ReHj*?;G*ImAmKRpqvF:7/RV}6Ye+_k:S=1E}m%DNBreI<~;l|n0pIe`$AV@n' );
define( 'AUTH_SALT',        'R~0ow;;%C,_j<.#?nErePYh/FAPi$=|XOBn%vg15Mx/)Hj!FNK(jDFQ2gYi|?87}' );
define( 'SECURE_AUTH_SALT', ')RO)Q?`1}^{k8Y-(mvL!Xc{Hm0nh}JlE~s%A-B>/2=k%r~Z6/||7;m]uircJ,WJL' );
define( 'LOGGED_IN_SALT',   'h%o!K~n:ymk!W=]]5AX3D*c+Z?fYPDLY-9>5&2F`T~UzQ3F.6:xHQlM5s7uej0yh' );
define( 'NONCE_SALT',       'r2Z4Doq2UP=IY7N]m?G2TJ7$Z$-Q#HBTbU*0O^8OZj!g8HJ@2tuFS@ND_q@:(X=Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'st_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
