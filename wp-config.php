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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stratefydb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kP*pB!jUA3+rPAo9DSGo<;quz!)FKKNLyQ$&[%J0JRy|%xI;9P +03`u_nDrc{5:' );
define( 'SECURE_AUTH_KEY',  '<hEWCbW^ER4Fg2va*zg_z0hWe/hE2y]eud(4B[Gf<)qVC(X82 MlhK*8/1&Seb &' );
define( 'LOGGED_IN_KEY',    'Eiy]L.76n0G!#0Vp)=0S5OfYZn5]3efC^1Li=7gbge+p7}_}6%7tp4.2t/b%Q|*4' );
define( 'NONCE_KEY',        'M*M(k[oEE3-z=~kUrsAbD!b/C]+e)J,QeP1H^<L[TK7odRllQ:t;UN&e^l0,V|~A' );
define( 'AUTH_SALT',        'X=[A@bvK=KwU5Cm0pR!](bU*-osx/aX.CI:Ug>wNyUxEr#K{Vkh=-i*D>,ch0`BB' );
define( 'SECURE_AUTH_SALT', 'NS3l],OFS_j%UsbrVe20FJuds|5rL8`Y.Y687PjH>~qd(:d!mlf}2ZBLaYOn[;mj' );
define( 'LOGGED_IN_SALT',   ',8{OR6F8)h:V+=1@kI+9%iQWh?kRJyQvwDPr}zgg@4UG1YLEC,IG0B[N^#^ca$|-' );
define( 'NONCE_SALT',       'I1ho]*=n9jY$AWr5Z$l-V&/0<f}-SP7+~!PP=Fa m&y0:OsRn4JUcJc`83jN2Yl=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
