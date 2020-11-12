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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']~ZN9fsD$YBig]#1f !;Xbmd4T-qo%9%Mu&8O^7d#<&xetRlx!]BaD6;d{3<bT=*' );
define( 'SECURE_AUTH_KEY',  'dI(%or~4k<)Qno(wK*R|X<z`T+>@anM>;[Lx=z[OS]7ssLIKwVMW>C5(7Ihny%T:' );
define( 'LOGGED_IN_KEY',    'x6.5VZ:coM;TGP8w56g(o(n&P,E[i$}Q.M>9?ol^IIyxvOs`Q7D:>[f<1{n82p~X' );
define( 'NONCE_KEY',        '>-D&?6W=YmoH??ZX$Cy9Y8BUj#f,ch7}]/dP^W$1dUB+N|mJZ|a|xv[!cL;.A/x%' );
define( 'AUTH_SALT',        'Q=Wv(hsr??Ye#g^2MBmoKyj4EqzE$A)E#|MK.gGg=U`$ywd7,0~%0f%wIb_8P;Hd' );
define( 'SECURE_AUTH_SALT', '5ZSeF#sslsFgL%=Ep=jiyM&phF3#qv!,i;D^Z;sG5g,N3@,Zysa=X3}kRl!6IN<~' );
define( 'LOGGED_IN_SALT',   '-J)Fd1$]YlBF8ff;s,%pxiYe(p>/@!yrBE[h)b[b(KclmZnql-Job~t-wwoQ~SE^' );
define( 'NONCE_SALT',       '5P:paIL)}^:**HgL4WJ_5AU5_P5=vK?#+cI4eT .,,)CT^<6%W nz*{CQgPOTbh:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
