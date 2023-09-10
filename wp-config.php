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
define( 'DB_NAME', 'abti' );

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
define( 'AUTH_KEY',         '^A8.7%pHK A/qjf`o0z&,aQAG!>`E!0Q9=o+k?plwt226Z(L/3[-@z7V]T]Nal@s' );
define( 'SECURE_AUTH_KEY',  '9A_xN4w`Q,3uhkxrIR#{O:^$:+iGg$~~.o}enW+6NuP4yaiN>Yql+DJkym+1c]u+' );
define( 'LOGGED_IN_KEY',    'nlrddu+N1ON@f)e#o[D8^SFA]G,oH&p]1gxbp9S/r(*8GzOkj.P/:T(13[5GgC5$' );
define( 'NONCE_KEY',        'ce_4_=cBond,<4?=} >Y}7W?mPi&-t9X%v:5E0i&%]`wEx@mmUL2C_RxrWtfu_CU' );
define( 'AUTH_SALT',        '[l7yFzJWds~R`qZoFV*{x<%iv0<+KJZnLzA+=f:d2Ri^4VI8QG6]$|;n3k*S<J~%' );
define( 'SECURE_AUTH_SALT', '``zY1v0o+L>]/pKB#,gx};QdUo_B5zizPDC2RsUB,{j[Xs ]6S(Y2s#Wo(CoV+CF' );
define( 'LOGGED_IN_SALT',   'gnp-pN$p]DaMnzKx9WcKC/tgmhb$(sxj6Qy>Dg,|BQ6Gmxo{(Qqn]00P;81#Iv]P' );
define( 'NONCE_SALT',       'ah]v` !q+BGAHS0o<_g1m0UOTrd|ZL?r. KM/(5@Sth:o;li0KM6<:4oFIVN,/&6' );

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
