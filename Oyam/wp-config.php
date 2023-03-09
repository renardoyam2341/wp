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
define( 'DB_NAME', 'Oyam' );

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
define( 'AUTH_KEY',         'G_3_0b}FQjwb#@v5%DVD,Uhe|-qKdZ]b*KR{*aO$W}ZCIVjw{$LY<(QR9QJ%a/v?' );
define( 'SECURE_AUTH_KEY',  '5DUk[mM~Se?7EBzIH<x<{0UjPUV~wosCDk0d|f-k3CNs-.p)Kt?w6JU_Y:(3PMVj' );
define( 'LOGGED_IN_KEY',    'jD)<H}$hJ(~:7>9mmdL&X5N_2|+hA,Q]fpZqH+GpaU9-%#n)P()~IN6)J*3G}~a#' );
define( 'NONCE_KEY',        'w|bHtL!1Z>.dae6*h4M?j*o4,dc*/ta)tbwBD9{X:KlF$ =zgG~D{U{iv|3M*P^w' );
define( 'AUTH_SALT',        'HaXs&d`LBLf9AIv Nx]cs$l2H+uQ=EaF%b!Y95lX0osH+O#NflZvA%E4HZqt`_|*' );
define( 'SECURE_AUTH_SALT', 'uKh^O-!Mg5{;MtB3IW5Ih/rVb;TQzY0_:paTA[b+5CnLP8;<~mEb6%4t#a6?NZtg' );
define( 'LOGGED_IN_SALT',   ',Y_ybdFso@#VVHdEr3+r>wbRUT%A3J_u6{`5f@rto{o+WG1RP+wA}|DFW6*6T,DU' );
define( 'NONCE_SALT',       '8Hy,xp;fjvd?Qg4(L.#D@q!`f2>bGTiN3<1WtUl-8G#D/|nagdeUj6[p6F(j{yW.' );

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
