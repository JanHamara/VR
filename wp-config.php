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
define( 'DB_NAME', 'wp_vr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Excelsior1808' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+~s_4:e[8PwvXeJxiz?& 2`c~b${[A_rV>Pw.O6EoB(*.Z-J}ad`l]R9dg.480&[' );
define( 'SECURE_AUTH_KEY',  '[VnEyesuMi/2a8$_kln4kF4pla/ng7Ih4zY#YMo+.5ifBjQF~nZp9*y{VVuM{,bv' );
define( 'LOGGED_IN_KEY',    'I45d1j#l=0X$j2+Kq-+OW8hpq~i+<[Kv<]=?:R>V-*>k*q@:2<;r<`Wa[F<@N?vP' );
define( 'NONCE_KEY',        '}O1:dvPj]<j#2)ZB_VRr 5#z<dVT*dh?d$kI8TPJrO5UVbD;[|IZ&!%UO7&jiT5h' );
define( 'AUTH_SALT',        '*wq;N.ClGg$lXYXx/UX[A.iEnLQL:PFPCzax@>;ME&wox/1ik}y*wO++1fh4/at=' );
define( 'SECURE_AUTH_SALT', '`W>+lK`6M<H06`qx iK3*fiAmycy=<FLeVm(5-aR?MtTRqZGqu)ux!^)d~AqtU%T' );
define( 'LOGGED_IN_SALT',   'eof J5|vmEQf[m=!sI?aX,*imc #F;oA{nkx~u,uIBXh]{/|>(dvP?-+b(OPmvDM' );
define( 'NONCE_SALT',       'd8X]81.@a6}.L:y_=,0#e>ewl)2M8C)Ut+X#T5CvN#+j}80PK14uCxag>2{GWl]g' );

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

