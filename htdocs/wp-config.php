<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atticus-test' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S/4?Y4UP-QP,o ESLSknfmrhNoSL3dMqt2?OT^4X(O[g<D:w>$B^b$&O5.A*PV,P' );
define( 'SECURE_AUTH_KEY',  'AxpBFM-{n2(1AG+g9_N$NK5tIm0DR j1kL1YvVHh<gOu*Kg#fe&d,B%u#IS=:{Pp' );
define( 'LOGGED_IN_KEY',    'H.0?e>)0jMVQQ94B0BOMLgSXx;xp(i*N:{s`=lE0r|?zI3~vTe^07{Zn=o^}b~li' );
define( 'NONCE_KEY',        'Fj4 %-T<.?n:uo)D$W|S#J&a.N:*Sj#{b~D)++9_~,)Po>V*Kf[!v(e1dw.G+Zwn' );
define( 'AUTH_SALT',        'BfVNcBqUVqu1ur8EdGDJYyeNL_vWU6OwyoAUN*<x+WrIaTewh/x+LfH.30CE:r_-' );
define( 'SECURE_AUTH_SALT', '&j->dx=Y,2,jv5f}Lg(Y<TcS2r?(F3-%!6/{-fe9SW8YlVsg%1= x%LpNs2T,?Vw' );
define( 'LOGGED_IN_SALT',   'h89XU)Jom&AY3O.X8Vk8:],F&PDhasgU_J4-4lQ3?DM#_ce#.P8o<Ab>|x9.GC7d' );
define( 'NONCE_SALT',       'Oi|#&r-?6le(KObm2lCKIXr8p.fRv0OWTWq1e}Fm!ork?]38bV5-Ca)q$fZUbIp4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(atticus-test.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
