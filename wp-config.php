<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u465815020_PWhbE' );

/** Database username */
define( 'DB_USER', 'u465815020_Hxlkr' );

/** Database password */
define( 'DB_PASSWORD', '8WeF8WFnal' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '-zS:DZ9.O#!`HMFd$XF#f@y<:AQ$d#iCY$R11UE e|5.MVdoekx6N*#8]_T&{~Y,' );
define( 'SECURE_AUTH_KEY',   '3Slsu9Wls6J,ax;]gh$bHV]hMY4 Qo%c@,j%VkA%g*kF7l)Gs)im-7`>0xLR$jC<' );
define( 'LOGGED_IN_KEY',     'DBilroKmhtD-qCnEFw}qy1l@Hf9(_E{.+wG+0u4&>OMhrl8[9tDZ]bvr=fJ tk.9' );
define( 'NONCE_KEY',         'x_{bISvu$VZ*oNS=1NeW]7.KK]G}~Oqc>N@A}FSh7H*=bl28oCY+mY1.}+2Q`EUv' );
define( 'AUTH_SALT',         'gI:<C[p66Vnl)BqKLh)qB#{,R}OX_OgJ2<L&$*^)^h;56VO~1omJH/>fz&)<n3.D' );
define( 'SECURE_AUTH_SALT',  'Q)S/HqPiAO_hgQ>R0[cG#Y@QJKN#e{ho!RyEe)L(_y/^p|,}o|5o9{4D~M+(/ oa' );
define( 'LOGGED_IN_SALT',    'Wa4~3<DHt&(n3qHtMl>8RDqg6g|p~,{sS2{3fPJ+)AW34|P+>>_M;;VfbkP4OLx~' );
define( 'NONCE_SALT',        'Y0z.4j&-ZDl=/2><jY*~:BQCdPeF{H&HvsW:T5Jyz2D9#h3NfNh`eo7-q1@WCgH2' );
define( 'WP_CACHE_KEY_SALT', '8.!Or >8ah$b`T97dAtk`sc-r,Q~@0%fdYBm}k=*e3R7*P^bJNA8%]MUBtEqF2V^' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
