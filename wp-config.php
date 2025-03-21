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
define( 'AUTH_KEY',          '}`g9BTxC+pJNP0w`y=% d=NmqZ/C^._8r|bD8}}lHdcVhnGw)OGCf;R[%`/BiD;9' );
define( 'SECURE_AUTH_KEY',   '`0qZ_Xs=!l h.F(LOF%C(+;w1<J#s]Q-Us<JJPP)`g %3n21ClQ`(Ds0o/zFakxE' );
define( 'LOGGED_IN_KEY',     'T8YfPy@~WLC4uojE~w0#(%Q$v+Afa=xIS${/~OS[Q[+![Sd-vIadmFvEF%1.[_$A' );
define( 'NONCE_KEY',         '@BAoso5+sAYiy$IGi5k(3_rz#~WwD+UZTdGtIYvie-cknK2JL= ig0fWOjyZy8Wa' );
define( 'AUTH_SALT',         'iTr(gK)T|Z]ez,Y1.xZ~3kNk&nifGAa,`M Z1 E&XRJFky 19F<4=p-d6FOv@_|l' );
define( 'SECURE_AUTH_SALT',  'Q`W9IYjDVQr*]s@5s?TOt)qzXnq.vA{k=:*uv)]Y?0 SCbT)i=@c&3D@[OrEcDP5' );
define( 'LOGGED_IN_SALT',    '!(FDC(1[ dMjubH@]T@6OkLmN:]1DBw1a$iWq<F2#>OQ7tTm,]<E4V$Dr,jo($I~' );
define( 'NONCE_SALT',        '9YDW3;@0ds~P]{$sO8&{+8Zw[rQRQ<DO@%@ljLp{?4/B>=p`arvv(BG$# J5,$`O' );
define( 'WP_CACHE_KEY_SALT', 'y~dRX#cVSR:A/CnpPVRZu%J&HJROjk,[9vy3vLc)-iUis@TV6GWkLJb?PDZw5H#|' );


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
