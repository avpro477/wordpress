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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '?|2?+y5j-*l=`TxbvUJx!t{<G_DLa>st]:p(J4BKUV=,[t 1b=/])(wpG-MPfL~R' );
define( 'SECURE_AUTH_KEY',  'gD>1lYr]KG%l cD.Pzf:ZP98lFHNv8N0y-wwp3ubcL(_;S[bZFdDk#?vGL_E0(}K' );
define( 'LOGGED_IN_KEY',    '&|JVqg[r]9o&@dHj.(M:}.2Hpf)rMIUY[}o5|FL+T:P@<6`xNu=B3Zsmv3|3+Av7' );
define( 'NONCE_KEY',        'S@ZU/d}ydjnl)jFTgd: t9uqHE e.x8mLyXXd06=c2jMWmbX<c-.p^X%mIxu^E;m' );
define( 'AUTH_SALT',        'zQ_@6(d$.P:,NYLO&iCpLCZt2u.%&/E.qqe7MA(n+S/r(Y^qK=ib;k?jh11T Mg{' );
define( 'SECURE_AUTH_SALT', '.`m2j7;y#1kZ(Fv$%@?jQrV#(!XKvVe6b&C.z8vyq j^Rxl&#%eZu73&^B]$TNHz' );
define( 'LOGGED_IN_SALT',   'l#Is8Byv^}iNF#E[@&RhC5O%ji9.u[_tK=Oi.[}Hdx4Fy0s)]U>29V|6K#E=5`)Y' );
define( 'NONCE_SALT',       'm-7dbt,TMq&,O +cHv7mXZ+=iqVzREU(MR-9MW4c}9R*Kf6SE!/uLJ[JY/S%9M6Q' );

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
