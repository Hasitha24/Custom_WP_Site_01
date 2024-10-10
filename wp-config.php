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
define( 'DB_NAME', 'testsite01' );

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
define( 'AUTH_KEY',         '1aKfq$BPwfb}fDf%99TC]iwWvN;NQU*|NF]|4a:k&z@QUsXV`O7DH%zo.h{5W^iX' );
define( 'SECURE_AUTH_KEY',  '6J0hKMf+~#]GfN k:dKC2WE~Szxz7l!FY6c9Wz93DT*]Ry{aK/U. zp`EvjY!?#A' );
define( 'LOGGED_IN_KEY',    '}aV^AKV<9:{<=v-Y?B6xjZ?pL!u{p%X/4B<Ysn5v^W{=_>jxFClcEBYNcSpobbf!' );
define( 'NONCE_KEY',        '({w:,MhShC5X=Z}?}:%)HuWTU~)x|4{aoY3>az%]sD9OmdOzAak}jPE0}Z~GM~,6' );
define( 'AUTH_SALT',        '@^<_a6d,<PePiO%4iErLi&wfwl[._2!Yvs88BEGTE`JjWw7 #Z`:0u5+PjmJDPw5' );
define( 'SECURE_AUTH_SALT', '2Yg(!wC!<MN{`gI*&5Bx_1Ckdg.ng<9Kp9>/NGnmWZc$&;N^Q4g[}V[a5mx/ceGF' );
define( 'LOGGED_IN_SALT',   'jjxX8{jc(w,ZL<=bE;l/)3= `/<9D$^Et/Y{!4JdEV$.vXo+Id`!JYZ$[Mk|H8q}' );
define( 'NONCE_SALT',       '>@j4d72JgjD?}SK9Eu78pvArdV12qYN$l@ba~j?Is&W7 @F &/.AjT~@|`FQ/0j-' );

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
