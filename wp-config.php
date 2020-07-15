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
define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rs@34360000' );

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
define( 'AUTH_KEY',         'mE&bHS*eP3,#0Oj[szRQxl;{NA%S@2}dUer399&XTXsk]t$=a{dgYQKJf]m&x?7<' );
define( 'SECURE_AUTH_KEY',  'V>pHgk1W9s^z<+Wp^1gp!mf$OsKz4^@=Y,dH5@=S&/j%T305X(tf,9#f(mO`;,h&' );
define( 'LOGGED_IN_KEY',    'dvkd]EjF<S(jkHd%H5`Q&<deUB/Y[]Y0XvZqi3n^2vSB1$=1)=K4@>iQ/l|FycR<' );
define( 'NONCE_KEY',        'L@nVL7rI2mKLA9?YCbL5SE2fNb6Q~y`ufC6Zw4|WmX{&Zir%QGM?8OF-4{q:`~h<' );
define( 'AUTH_SALT',        'mT XS2T4?6xVu`gL0](>,5>jlFRHg.:~8I.tQm$09KH@J.OUxLC9.7M<G(u#&,MI' );
define( 'SECURE_AUTH_SALT', 'zjlFpW|@I##}A|T}#0-)@2K:g?bFE-G11%Eh5O{g1<26@x6Rp<I54+>J;:Z y3)i' );
define( 'LOGGED_IN_SALT',   'fOoVF: U5jPxbk2D&7_tj#cHf_mA2GuD&`D.iXch$Dtw@@@yZm4@rrLUXxB_V#t2' );
define( 'NONCE_SALT',       'O,J+L,GC317x$t*?Vz}vt&tjobz$4N0_FMeZzh.63Ku$[N1Bzi-YG;y--0&.b&_f' );

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
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
