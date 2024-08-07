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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Abyan' );

/** Database password */
define( 'DB_PASSWORD', '713955' );

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
define( 'AUTH_KEY',         'JTrfA3N{9Fd(8xr|WRb7T[[>Azj9?f+xo3P[dH%JLtcgoPMTtX68T5XYp*5UqL4:' );
define( 'SECURE_AUTH_KEY',  'UJ=yIsH0U7dTYb|3)IRfKa>/On~/(2pq,>Yd;|aU[0(tlglCN~X+0dTK`knRCKCb' );
define( 'LOGGED_IN_KEY',    'C]B#jn`+In,wcZ-&S_8y!m|-# t/|P^2m]{uqV((K*)0WVQsKdVW`gc5rbyx&/])' );
define( 'NONCE_KEY',        '*[.gXB*lch^ZCdsCy c)6)1EYH!;RM@7im23hR%+@C~v3nsa1VC2mWD@9tCEL_{C' );
define( 'AUTH_SALT',        '[VT}yu]W;:_qQu#DmYrn@6a+x Mb8yu|^]&cIqz{_41pIR+BJooy$1QO,yve32T^' );
define( 'SECURE_AUTH_SALT', '<-LAUDi/~DL+@7y>fC()dydV(ACI!dF*5UpG%WL./z&|29~c{W<S? 0&Z9v^1gZg' );
define( 'LOGGED_IN_SALT',   'Afx)K%<M+g~b!9F8|o|,}vz7a7giLnw@,cIrXvKA]aB/j>;viy%tuicVd^I6z^`d' );
define( 'NONCE_SALT',       '9lD$SKtCd9:;;*IgX`=w9q{SU )+eNfV<{XaY/&rM/8Q%}d<#f{`:p9*XoMn.$:0' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
