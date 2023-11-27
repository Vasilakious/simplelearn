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
define( 'AUTH_KEY',          'Z{ J2AOI58y:5qSjR8.B0k$q];puW=CXEdadg_z|8> M()<BAE6yHnBtL(QYOFjt' );
define( 'SECURE_AUTH_KEY',   'u@l)Zp8.=/J|-r8ZBe`r}PA2t#Q(|/W>/)jU>`&N(1[vP^LkV+hRqv>yU8CsviMM' );
define( 'LOGGED_IN_KEY',     'fxB2=Q?@c),z.x[stNu-I~fPXd_o=/=(r~nmvG5xV[)Av[o.WcPrOD^T75GD^ir ' );
define( 'NONCE_KEY',         '5m>4gv3Ajaoaoa`L3_Y@Nzunu2g=6RvcX<+D<z6/NE{ZR$]5LnU*U)WS.C]P!b;W' );
define( 'AUTH_SALT',         'FdA12jYLKt^E.XT& `$TSYuS^{Me)p4J:hmJ+IubVq%Id^&:ruQn9x0L~6;.^@/u' );
define( 'SECURE_AUTH_SALT',  'h{8WEt(v&U5DrN$%,&u#!~+n1:Lh,u&CR[?JqQGM?.;aL>B{=SO1WE0zcTFzM!TH' );
define( 'LOGGED_IN_SALT',    'dda`d#Z<|I5 Q(uU%zoMQ<J%WP@b=bBEpW`bX56gh&0Zj,`Rq3/@i-6OG2&F;lFU' );
define( 'NONCE_SALT',        'wKjhPvq9prZzQ$Wo fp>e!%^sf=QxX@:f7ZktX<m$=Y~VKC,)*7Fn6RH=DN,bl. ' );
define( 'WP_CACHE_KEY_SALT', 'Su+V$UA#}@@JA&Y$G;$W?cR-a>9*OQ#0C.gQ-Bx&Nyx*kzt]qK2<fbfXjh|v>bwE' );


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
