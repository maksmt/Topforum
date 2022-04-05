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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\OpenServer\domains\topforum\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'topforum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'V5=h@WgR`Oa8C>MTmY^R(arML,XcB6g,ok-<V0 +f#iBvIKS@sE!-&5Q:APH/1}w' );
define( 'SECURE_AUTH_KEY',  '.P-y#o|Etx1f[MyH*WfG=9pxqDl{I-;4q{H=#%VL)~9smmAS}DPi(kfBJaRSjZ#]' );
define( 'LOGGED_IN_KEY',    'I#{9#6PffB!(^.jr/k#WHnL0=/+JXyVfIdc/bwr$wbl(@iKrXSB;sC4_hs,k.U;U' );
define( 'NONCE_KEY',        'G@E[JQ(eW<MJu7k`yU6SL#et36nD;s3E/g{hI4/2t`s%$FP@% ?eN`>`-ZTy/<H*' );
define( 'AUTH_SALT',        'SRkhQ4{t@0x+dc?5V7G<5j;%z%4WeowQ.,Gp/J/][S-^<ox8vMug6[Nt?}&?bs_>' );
define( 'SECURE_AUTH_SALT', 'sPj;bczTwsz3OnOU+jZD+Ta`D{a=N%Y@`+FQoK?AxBQu&,o%}Xgdj+8LC~&J>^o0' );
define( 'LOGGED_IN_SALT',   '**c}T_2kIt,S,]3RrJ}iE8:XC}BHZKd]X:LFzZ(wx|hf]AevYlLy(HL#~-2La ~b' );
define( 'NONCE_SALT',       'aLLSUDh}-YRLDY.h/2Q J4d,`{5AjU0xi-dst+rnV@Y?).,Qi*l,XEVL2K2[:rz)' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
