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
define( 'AUTH_KEY',          '5(h3CMY9I99l !0TrJ1(C%OajIcFO^?Es=DUhDKQJI^*B$ MXS/B{$T*Tlg9ec3Z' );
define( 'SECURE_AUTH_KEY',   'owmJ({,?%~Fg ]m?OcQ5|ftKw`m&s=!$F;fOwF,K4[{m/r}e=E]{hT.]P$W0vt--' );
define( 'LOGGED_IN_KEY',     '2pv0!GHDZ[K*}imJ=QMfA+(yf_%9p#H|-B]ez%ZotI/aGOkei3ip,t]9|zEXh1&Q' );
define( 'NONCE_KEY',         '8By_nX,UyhL<EWrcJ+<]e6Q7`z?<Zt1=PqcfzbAFKb?,Gvm0kt,i-E2IEdt+$q+R' );
define( 'AUTH_SALT',         ' c_$f!w3~;CO1xQ((UTdM$3GDN5P|I.2JKciIQj_4l1fF}BI{m:d5g^0~8GpwaU;' );
define( 'SECURE_AUTH_SALT',  'hHv7NoX::A|R%|<*=31iVx7`yS*[<dUZXWJ83f=q^tv !2p6yz4a9?4~EdJgx)Ld' );
define( 'LOGGED_IN_SALT',    'N;&ww/NB^;#0j*!Jq!,QC9^;os(n#RZRW!(]Pm6rm{[eo 96L,y60B Te:LpW!wU' );
define( 'NONCE_SALT',        'L_V@x[rjgt@nHlTnA`v<*LMfg-=SXf9lL741<>bIj:,zcpRBkl`z%AvYo?.`)+Ve' );
define( 'WP_CACHE_KEY_SALT', 'bA!3ko<qcLmRvN9Ooq,o=5wwixujL7iTn#(@)+T(~VyzT]13Oh#?=s,x:W,$Y6we' );


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
