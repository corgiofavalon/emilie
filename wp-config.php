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
define( 'DB_NAME', 'obispo' );

/** Database username */
define( 'DB_USER', 'obispo' );

/** Database password */
define( 'DB_PASSWORD', 'tubbynbibbles' );

/** Database hostname */
define( 'DB_HOST', 'https://corgiofavalon.github.io/emilie/' );

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
define( 'AUTH_KEY',         '5x8DxJYc9`@+R^5w4.Y6l|lez<j`RiXc+c_`)Io~(U%Aq3B>vwfC=PP$R%@A]! 3' );
define( 'SECURE_AUTH_KEY',  '?v`N}bd~?%s>;ShFGfv.7uS,[W6sOp2u(`k&>t-&4G|[@c8/RTF+f2kT3p*W%,Xn' );
define( 'LOGGED_IN_KEY',    'xCM&af|V93.2JcHn`exB]dl^IuCLhjn!ncSCES}`S_9s8AA>rY=[Nf_|Su8:sqVV' );
define( 'NONCE_KEY',        'cEQi>Ykup7fYZvvFF=}V`o3@pHi&w_~,2ay>w1,B+Q9!l`KlxvNQ``k:CGgg2gfH' );
define( 'AUTH_SALT',        'Bs^ixFN-BM*-SnHyr@go9E0zvAiVAGPsXYC8]F1AT&|JF~b+E5h9s{H5=&-Vr$=T' );
define( 'SECURE_AUTH_SALT', '05uvy7Xk~.3Qz&VK<ah:ukhixWv^DMJ{4t -pW.6_!xlH5pSA}!Ze|U:ov.VVTBY' );
define( 'LOGGED_IN_SALT',   'O.N1#(`HZDQ4lZx0,QL$!1QVcbznl!)./*:/!~90gJ^yOYTc=uRy!!IGtz5c61oB' );
define( 'NONCE_SALT',       'ngp3^)~XA0YYh3,?2l<Oc?Vz+ergUcRr*a}u?`2yL-vd?J::)PNWUSDPrgP;JF4#' );

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
