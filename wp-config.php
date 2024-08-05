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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\laragon\www\GymFitWP\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'GymFitBD' );

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
define( 'AUTH_KEY',         'C3u7!E00d]x99m|oDt?DTNIUf-PEOLqUt~Jy5uS1Fgt#8Hwj??uChcOw.tOZ8*!)' );
define( 'SECURE_AUTH_KEY',  '?o;<oG@X-3eNf}1PJ<[jDf]C*XPk50vOaX e8V4/G~Hyw} g{$12 #4vi1jl.tj7' );
define( 'LOGGED_IN_KEY',    'H>y0}B@~nf!V=aj7Zf}Jf;m}6F_H@<VSKwe}U`|`OqY E+`VxMVy0q+~v@45!sVC' );
define( 'NONCE_KEY',        'JO|wg?~2qO!)NxmTC>B3$qW=3yRaUy#-5,tm7:n]WVfyY83/LI/#<OtRUVjM6s9J' );
define( 'AUTH_SALT',        '~_/3 4yLon>1J*BmvH?vteUIK9~g~Mr3=/|GHVWQ{VHTB6K!6I6tA},-K0PNFO]G' );
define( 'SECURE_AUTH_SALT', '3`tAxb0!rj=T&:J<)5iq>%CPr4r!GHV_@aC.[lu?cYN2+2* lV0KP`K^`k(~[4I{' );
define( 'LOGGED_IN_SALT',   'D ZW~,Wl=q1#h]5VH():x3/Mciu||_8xhFvZ)T0wPc?=HD*OsdC~X?Yb.7wTpbVe' );
define( 'NONCE_SALT',       'Q@^g|i5$^}}L8Pa2:l5lF-%(V34kMnWg<})*a9P?/Ov/`j`7?1Vm4uVD&R.p%4/~' );

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
