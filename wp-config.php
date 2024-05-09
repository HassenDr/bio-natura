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
define( 'DB_NAME', 'bionatura' );

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
define( 'AUTH_KEY',         'V1E^CUVb;*k#&z)O:l_)MU:onNba!PFYQj/)RV3OGD<]a)D?gHt#U56LT<c=4w=J' );
define( 'SECURE_AUTH_KEY',  'Sp%daah,!r+tt|$)1NZSu chPbHk*|W&64p0GkGhWu/)d)sre?Iy8pGk[[=q|SmV' );
define( 'LOGGED_IN_KEY',    'R;D|9.xWX}njG].^D;wB+Bx u)wab{&ngctrvYxW~#m/Wpt(*)AM+v|`TbjtLZm ' );
define( 'NONCE_KEY',        'Ay0IK6Eo)rGe*i)UqiAn!$rm^L(3O.=bC;f?/:nnt8:OukOrZcsxdQf?^;5HhAv@' );
define( 'AUTH_SALT',        'E{ltQ,)B*t1]@yOUy.qPX4g7oX3G?=UA~b`Zr7~% ]f]@q[c%X!Gkc%L{1TN:kE,' );
define( 'SECURE_AUTH_SALT', ' }gk}5S^MVGeD GuEgYk4h$os1nqcUOx]4oBiTgDshf0!6}@Ms QNvHtSc1vK~N2' );
define( 'LOGGED_IN_SALT',   '^<gmo:~k+G5<&5HcC1j5JgDB9KYG e0vOBBq^+8x}wIbv8=Qgp|dnbQ48<Y>O=YO' );
define( 'NONCE_SALT',       '_Z+b(/5/=i1&rQY^{Z<MC;(O#bp)DpH=#pWVm,I;bf<?[O0h7PG2P]o5fK%/p%Bg' );

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
