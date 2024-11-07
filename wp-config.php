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
define( 'DB_NAME', 'u384055928_4XgdN' );

/** Database username */
define( 'DB_USER', 'u384055928_9p4Qo' );

/** Database password */
define( 'DB_PASSWORD', 'rsfsrqDCTY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '<;*,5 H[W[=#;m8btad, Wfnjc.f|mo)Rm@ZJ[y9P;B;p$p,{T8]0mBn9}?6aWK[' );
define( 'SECURE_AUTH_KEY',   'H]/_TQ][])7nz,} c[=OVFmO^/kOSB_Mq H736tCb6wJD6=$W4,57M4AJOj0zq#k' );
define( 'LOGGED_IN_KEY',     'Xp.aQM6OrWoieSFf%~,/~QQXMPvh_q<?8_kL,V(0Oxk~8y;E_88$s1$QB3d9>1wy' );
define( 'NONCE_KEY',         '(C,{7a97)[slY1W)tm{vFK4X-<C4Xy=#>h;hm.?}D%y;;GDy[8^mjnw|>|WEift1' );
define( 'AUTH_SALT',         '(OwL}q-;n}?qx?C-u^h=F^ASXB:rL*T-Vngu16nIAPep.;jc#WE;zUYMTOU!=tK:' );
define( 'SECURE_AUTH_SALT',  '<_B{3jk;hMPK*YFN# Q*__y-ux|]wNV%Wf}h`hSP;[_XbM)Ecn%=J.n`K~vXt>QX' );
define( 'LOGGED_IN_SALT',    'Cu/$3Is2/YNQ]QR:_BVj`x&ZDYtLQ#rS9<m]/&tx=.].b={2Qjud{BS@Vfp`3&;3' );
define( 'NONCE_SALT',        'sepTj]1GK4> /XC*RIK0gX|U_Ykl~Ry4::LVZv4iWN Z_k6G{xa:JN0h!3JiV(81' );
define( 'WP_CACHE_KEY_SALT', 'kZ=~ew5noG:Ee4h|I`!AHbQK,n518 o?.tmP$ K];3N]2XZ%j=]!Hq2d<*DK-c1}' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'a0dc0b48e26955b8dc29dac7c1efd95b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
