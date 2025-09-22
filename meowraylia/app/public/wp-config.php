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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'VRYhux(P<$4)xfp=m5_kviT=JY 0+ ~+.k~ +^xwV:KjJ?18}wy@5}DvzD8JP{q1' );
define( 'SECURE_AUTH_KEY',   'v3k*;ST}KQu6,{lPg%|u;aW&aatXUH<T.gcjpjxS6+PRt1QPxey/(2[h/LCfEIlu' );
define( 'LOGGED_IN_KEY',     'Dv>[LBK$awzZ7j@U)IXhQ*-GTg?7KcBX@po>?`]p=q|T3> >UvfB|Su%/8GeY%/l' );
define( 'NONCE_KEY',         '0jkR> .:+{ftiZyuDnT{>imWT8FBw$&nXiv||?tQy!AG|d6`O{j{0M=N;g%&rw]X' );
define( 'AUTH_SALT',         '{Aj]D]QbX]Y5Q!kPi-M[~[b3[_F.on2Ez:NF|$rHt+i<~&tr*tNQ%RFKYKT0We%V' );
define( 'SECURE_AUTH_SALT',  '^c_ljwQN%3v3_ONF)#{u_47:E{JkkfJmfe>W86v&u;lm/Y{5 TA3)&$73&lvYoYf' );
define( 'LOGGED_IN_SALT',    '[K&&6ZL-eZI-74nx*]T}+Mj121-MyC%?KH2.SPd;LtV/K?D1^eKIq[xCom(UWG5p' );
define( 'NONCE_SALT',        'yN=A6{5@%Qomly.:xJjJish<G_KE}=,2EZa]]^{XEr_Tv~<=)/IZLa!e~T{:&H[#' );
define( 'WP_CACHE_KEY_SALT', '>$_Ta/n/#GVuhHW&(wK<#;H*[<-[(>H}bM#+7}T8bUgs1VKAx1FriGBQ$r55l<IP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
