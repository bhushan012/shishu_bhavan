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
define( 'DB_NAME', 'shishu_bhavan' );

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
define( 'AUTH_KEY',         'NR,qEQw#p=6_u]T%o.zl!.cu>8]*=6zvPFl$;p@T~fp+Xsx#EklFBv#1%a7BVxw$' );
define( 'SECURE_AUTH_KEY',  'NBHK|d:I@TbGL(JeZTHa5wm#W?.w%e+|=9RTacxFc2*@9/M|JG>C!dx>cp#Qj:|Y' );
define( 'LOGGED_IN_KEY',    ';]0+33!!2rN}%H=<[/RKD,8l?Z|.6Rc(?gddB!%s|y}076M_V&l2kN77*8^.__)]' );
define( 'NONCE_KEY',        'D4,w&cBxV?Pm0]|%E<$v$4+c$zGc>RSinTxEjL(.2Z*fHFB)=48<n;CxUOA*~Bl>' );
define( 'AUTH_SALT',        '3%j}a^m18x9Cr9eeV?DSc}eXH=T;;:=0=+#LKIAEqMl=Kz5[>sC(T3sVz7eT!]W0' );
define( 'SECURE_AUTH_SALT', 'y1Xm!z OxpK_O6r MBT(:.JtYkCV)AIF(X/eG{X=S]F^@do:LmoElCT^,AtL&CRQ' );
define( 'LOGGED_IN_SALT',   'N?*:B.:DB*Dtf]E./QIubl[F_RdHb6]&0yM=z8;6sz:%J.ct[I);;/II&eZ#(@N`' );
define( 'NONCE_SALT',       '}gANKl4FP7^}DBBCrFGox0eH]G=Q1:|Jp Wys+d2S0)NZyBw<fIhe)(H(;Hm5eu[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sb_';

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
