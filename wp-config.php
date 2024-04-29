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
define( 'DB_NAME', 'db_faizsite' );

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
define( 'AUTH_KEY',         'v;c Q.*&yBPXzKCvU[OT.OW3x31BPeLSdtOY3Q,F,fzdXChfHicz{Byc.VxHmYpn' );
define( 'SECURE_AUTH_KEY',  'h9rw7;4j%0!,cMb;4?P{cP&mA3keu0%.VlNTEI,c.[vfv&lsz`4X(Xn#Lf?(6Fzf' );
define( 'LOGGED_IN_KEY',    ':|A7d%U]lDu0F,7Ijo/E&X.V1g5:$}I3o(NU!c5j9<X3=wiFJQN|lvz1I*;2X%O;' );
define( 'NONCE_KEY',        'wV?g6H^vH-wb;L0@OSECdpK~/C!|RS1%<>i!u,/3~oJhm~~2qCu.6g@g5JT_fe`j' );
define( 'AUTH_SALT',        '-[:}?!E2=-tX3zoo~tz_Jg]V9#06F@z|EiT8!F(pfhs3=%t@|pNqD61d0wkbV&n{' );
define( 'SECURE_AUTH_SALT', ']*TeRMm%i0JC8l=G$s`(6doJ5yF$Z+cvp]!:yp=[Peg[+NnyqE^f{5v&Y<Z&U6/~' );
define( 'LOGGED_IN_SALT',   'jd5{KxkSxP7]Nywwp/yv7|K& Ob.N|?>7HWE19Te)m2;Ho0@RMIm-^Li7@_-+L,Q' );
define( 'NONCE_SALT',       'E~?&m;:.LNogpTvM<2Hya?/YxRQSBlc#vj<,?8:LVFBBl}GG&nijwDL#f9{z>]y_' );

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
