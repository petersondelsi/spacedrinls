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
define( 'DB_NAME', 'sitebruno' );

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
define( 'AUTH_KEY',         '+D{siJ6=2M( r6c//mUU,R8%NAS %WhY;t7RCX5O6OP:PTy B,/MEiar`)*wj<9_' );
define( 'SECURE_AUTH_KEY',  ' LEI~!ZbhDxoO#07Ml,2$bP^3V}7M>]Ch~Q?k;teu3DQ_G`?U,awESDTMq79cEJN' );
define( 'LOGGED_IN_KEY',    '=Up$#3KnN|/_[{&U`$W9eT2 dqkF>^]jBsDY4{W#|j:Uwf/#|1k8z=LF[~-!Cc{x' );
define( 'NONCE_KEY',        't %F*sE9BS/wZsk(`|gE6Zm2N,|r{F3_3+_6#,Ev<XOHw`(ejj[~z/6=%yYx(<gb' );
define( 'AUTH_SALT',        'fop9O}IrlyVk,68Znq?laVW`kaTTcox]79&JzC1muUpgCvaB#?9:f.UX;J(L[#`U' );
define( 'SECURE_AUTH_SALT', 'C}!Zy.IGxcExa`)+*I+F+2L|YFUc:#Y]9/4@|;dV]6L`d2dp=!{+/(`z{;M?o>=w' );
define( 'LOGGED_IN_SALT',   '`YL%*&RKyPe0Cp%t0QeptWV3?a7C%SEHI>0$fRK_C<f>g0f;7>}E63$XKmH@X;15' );
define( 'NONCE_SALT',       'Kci!BMgpTs~V2~5K1$UA,{<$F-f]o,v5kY0_d>X]j6Uhzi1U}qQ#2[i+.%Ta9Id*' );

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
