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
define( 'AUTH_KEY',          'N[6c<xug?iJSa9Y=sK]_/-+:8JY1%W@;~9=4JwX27z2Yon:Gc48_[tMWcpqMpuqf' );
define( 'SECURE_AUTH_KEY',   'CKYIg8G~Z}1>&u^JIeJ-8O!R^<W$AZ@V!CBsa$Sl9sbpO9^!&<TOBal.ALq6]47@' );
define( 'LOGGED_IN_KEY',     'UcZr! ~?F4,LgHN*kzk4eC:3sf3jmagB9dzpoeMPYR1T?)N:]lB9y51uTH&|kEwk' );
define( 'NONCE_KEY',         'qlRorB~3w5r64]TwxW3A~Einpig.wUZVaqF9YoKv^)`$tI0y<{oV%2a53T{5qLhk' );
define( 'AUTH_SALT',         ')__kQ;,S^-5z+9lDp}#h@m6lU/PNpY$K1?rhP8oC=%2K2-8VzTGsav5>)y39BHI1' );
define( 'SECURE_AUTH_SALT',  'u;#risjGV(WD7.=m]R,I=/7+PmG}&fFLC%u=8;r~DlFA_od8jx,N:?&%6zt_,< y' );
define( 'LOGGED_IN_SALT',    'JZZpTS>ob1]}V}q9(B=wPpN@dac&W)4sh%wg`Uha9Xp-w`j- bVc2fMAd{(Xf{v9' );
define( 'NONCE_SALT',        ';AC0Sb-gOv^g<g3-rNK<mmNEm70:MSG.9%xbZ@0@~PYW*s6x@c_d.Al]BEkBo;y9' );
define( 'WP_CACHE_KEY_SALT', 'M~Gc<HEG2nb?%SE,xEotLir6-3jVagXGN-$C*NhbT@,}1NKIdJ8t; 0k4bchLCe=' );


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
