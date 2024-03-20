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
define( 'DB_NAME', 'limra-automotive' );

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
define( 'AUTH_KEY',         'r[<.r~uK/5={<g_)wxSk++66-l6Rnm/vMi=;&xddZx<% ^GJ PH)e[P]TdAj.#3e' );
define( 'SECURE_AUTH_KEY',  '`nKdJ_?je7L&sH)_<Lh{ [QzkMhWKAddR9P=62>gexbkgD-+4d^$Km^%IW]Am2K^' );
define( 'LOGGED_IN_KEY',    'P-F0&g<Pu{S{.L%6w6wIqlnG#3<`?a&!k_m1-(-F._r#*|&S7NyUrZn[6$KKl9.E' );
define( 'NONCE_KEY',        '042^$R1.Ch$7ntg:cKj~^(>o)k*t@/b(ShD)9I59GL3d9:)HFpZpn-H}mUOq.O:n' );
define( 'AUTH_SALT',        'ofbfPVXEamYw)zafvS=*t5=|<EdH.+8w>t;-|p?t:tfLM/ZXJ>gklDb3@>cUO%h`' );
define( 'SECURE_AUTH_SALT', 'I)LOTt_`2o4NEZ|OFg_a/<L|y2:!I%f/x!4.$oR%Q@vBMc!FxPDDb2fJ3{ev04F:' );
define( 'LOGGED_IN_SALT',   'j|(sF X$%JwS#&gkQAZ0za$?m)tav=%e%nJJ5/3dy?NQd==WU~=f!vSz=Ay1svZ2' );
define( 'NONCE_SALT',       '@P!v n@%t9P.$YQDVQyoNWn$rd[/b1JN?Pit^1wDM[+ImDz!xb,Ic2<[Ws:3xa~`' );

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
