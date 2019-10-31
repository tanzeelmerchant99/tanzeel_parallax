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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ASEU5PhgCt' );

/** MySQL database username */
define( 'DB_USER', 'ASEU5PhgCt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EFuoIm2THZ' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'Urcek%EBx=4.s{:[eN8^oPs6cu!]xW&|(4p% **uCE7Ug9Yx?v?:i<3zsw*&J}Vz' );
define( 'SECURE_AUTH_KEY',  't[?]yV5n`#RFfzQe+-Gt&Bu_{@R7q<CU9GIMr/FJE9Y=87HLNfgxQuH-H[RGz3&(' );
define( 'LOGGED_IN_KEY',    'Nl/fp|%di5RK,Efz%qtrr@{Dt5y<ZI@`&Jb=Ev.jYNjd7=V%dg,hw&yv3w}L734T' );
define( 'NONCE_KEY',        '=&AFVfxH;XDXE|C.Hh)Hh<qOv0`eZE[ZH,x^nX6 2f%5]1G4 !_maD+Ap:3,X3[D' );
define( 'AUTH_SALT',        'Pt0yz~BEErah(/Qg$P/0q$NB_(ju#u1ll q.J,x##jTX`5g|8<---5R){[cqj-XY' );
define( 'SECURE_AUTH_SALT', ':G$*OF])dg@y[A6bUvG+wW:%|3vMUc^:3!DjNA~?5vt9ww2ND19#_+C<*XBrc[,&' );
define( 'LOGGED_IN_SALT',   'E:k1G3evWGGI~~5wcg}>XnJ/Dh[}VNBTz-kZ<;=Y@,n+a(bOh`uJ7W=iYQ<!>R&&' );
define( 'NONCE_SALT',       'c@?Nn0Lf+-FsQQ^|3]F2?r-KL$duf9Q/bsKf>A6c>rNGWGe5A_q:@hNn -s=&g>0' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
