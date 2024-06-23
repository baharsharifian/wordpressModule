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
define( 'DB_NAME', '652' );

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
define( 'AUTH_KEY',         '5wAsf?Ii8sqiY(U@ke0^aJ2<ISe0c1KM3nlr.{a<.!9KGhKOs:UcAOF(/_SW47Q-' );
define( 'SECURE_AUTH_KEY',  '9xF8 ok*1ls4R`|TE-EC p*9*pL=i$(?/Z%Yp`}-}HPE=6H^#+g:=PbnYv]?_,p;' );
define( 'LOGGED_IN_KEY',    'u[nk$8/|RwGk17FFnC+xVY7ksk_,DMNBO=GT<Yb i}PdO>[.&?qy)quz|&sNR72E' );
define( 'NONCE_KEY',        'jKLc_$pV(srF}AGvc8.JCG:+RV#Utz7yJ9Ir%i;:,&)urFH|HT/V,[T_y.:}kN]F' );
define( 'AUTH_SALT',        'lYjt=4+X9CBs{B m^xP5JmjZtN_)CAU{E}X3eM9zYxrpZen+[RJGxo14L;yNwjF5' );
define( 'SECURE_AUTH_SALT', '?{^_{Q$_^;LPtJoYTik]&Y;^_:EbBGkYOvkp<b]tX{fPsZmyM7|8ZccOZ2/<}eo(' );
define( 'LOGGED_IN_SALT',   'u4X0-D=s-&2=v!ePoOhI*nrA[n3Ye$=cJ|H}:[Kf8Hc)_-eB9wRc+VrLnKq^IUS?' );
define( 'NONCE_SALT',       'SVQ3-seoT`hJ^MEvwW#;]3II,Q]MO</+D.LOsWX]NOx4bT#WZjV9?@/OFw7e87nA' );

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
