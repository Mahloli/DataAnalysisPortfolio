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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websites' );

/** Database username */
define( 'DB_USER', 'rose' );

/** Database password */
define( 'DB_PASSWORD', 'ma91toa6' );

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
define( 'AUTH_KEY',         '-`=;aFtr1d !T)Q0b~CkcCdK(e+8br~rhtxDosj.7X}D2RU7)-Kr73<a5u]2Gz!f' );
define( 'SECURE_AUTH_KEY',  'fl_oU`<hxL5Fok]oNNp,(]3m$S#FgC{D?;Z$T~U.Bm2an4h_1a&#>g(fT^5L@ED`' );
define( 'LOGGED_IN_KEY',    'u.{h9ug:dHUQ%NTh*W>3z!jaQ7R;3Bq}YS My^G0(3z(R$nu{)_>%W|y]X]_H8}&' );
define( 'NONCE_KEY',        '5&#1R%hg2PCwqJyAwEY`)`cpm=aUW?9*+D?57zu$0[qPY:BIJGm^g> glLVb,GdG' );
define( 'AUTH_SALT',        'th +G-rL$vJPl![op~i zrDesz_b(E61{! s3oIk+{DBbONT8 E!W^XH8J:??b=]' );
define( 'SECURE_AUTH_SALT', '~3-C8,Y_kpK!!%-^NVO$#V1+Y<|w a;?{I+XhdZ-*aHRC%(hADUw4LK}q)`+8!-3' );
define( 'LOGGED_IN_SALT',   '&E|L{=_{[/Wx}7.[oJ0q,w&hDIf~dZtEsjE^vFgbO{=[#t[kh/Ra|s_>xWi`vjzQ' );
define( 'NONCE_SALT',       'cAVTUlf8e0K:R3~z`{Rm{rOOKh(`x9xcz>efrRR6A*2#m&nSK29)8Xw9g9pgb><4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wz_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
