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
define( 'DB_NAME', 'organic-db' );

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
define( 'AUTH_KEY',         '8|Q#4_7qA>VYw>vt;cp,u~C;ZKL>|4dGvWTT7q+pQ]Cn%HOSU1oG:A_Tk8Q1sljw' );
define( 'SECURE_AUTH_KEY',  '*f.ML@)EF+^si7vE2F0q7B9i)#uB]%2Q[hpl74lSOB?>7P&M.yM0P+v+v#4Np$c<' );
define( 'LOGGED_IN_KEY',    'P&KH{fTL~R?8pxicH0&9lrOlzRWBll6pM{jvdb+Um4b9izGcvUsIr&;Jja9*bV97' );
define( 'NONCE_KEY',        'vcmUwHG70m9mebu5^ulegsQkK,/z5ETmmQCGaV*6o~NX+Nmh?a~]cq#>:/a@Z[bb' );
define( 'AUTH_SALT',        'R )kE]p%UmJ0#v$O:6l5n;[:|K^(>wady25}R+[kAH%nxnX?u|i]E~> K0vJ/k)d' );
define( 'SECURE_AUTH_SALT', 'C-B!#h**v%T{7TT#`Jx=O]ZKIRB6:QgX~ep;M#w~|>BGmN$PW=n?Qzl~(5Pb*{dF' );
define( 'LOGGED_IN_SALT',   'O{/Txm}fS>EB/)r}>7bb}Tri.kR7<hJM*)W:pn|_sr`Ra~@]GcT;j uiH>}<rQ[A' );
define( 'NONCE_SALT',       'I 9g4{8m/fWez4~z&5TJt|4.(zt;{2BH e>:!&7<OQH&ul(9bWg&&A`Vt+DMA/^m' );

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
