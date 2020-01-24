<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'beerworld' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rHN{TaKhK$nZ:4LH<yaHDpV;ZjB0Q++x,[TjxL^_>Yi`%S^BqJN9:$6W%w6)?y9c' );
define( 'SECURE_AUTH_KEY',  'T$.uY44yr.t|=c-JH6~V:=iplXM359?G(KG!P`kplteRdn (w`x#v `wxZ+yS1vz' );
define( 'LOGGED_IN_KEY',    'aofo.;N*2wLYVSuuog!sk(xu;7@PU7+x)N@$37lI&A(EAP1:Q?m:W=|db%7ipnFa' );
define( 'NONCE_KEY',        'ssSj[{U$<s(-ME!V*?2TR{FVj$v:rMiKx/>(dva+.F*8/r+hK+Vt}zVz~QyXV</d' );
define( 'AUTH_SALT',        '5jX:&gFB`% XT>Hkxz/*R/d}XYNjJC}Z k:%GM541~{F1R}qN|>3Zd@O@~e8}ui|' );
define( 'SECURE_AUTH_SALT', 'R5AN &;)SP{-NpMU[?jqh,nZ;)yrHi-:wuV2eX+uD_4jLG(L=60&#|w*((/L.;yu' );
define( 'LOGGED_IN_SALT',   'L1[@]1qn*w>:L3hIdpsF#Ikw-AZgW8CXTlK0]5U}Bf}m+x|rMz.@1eCK2Zp%Ea!s' );
define( 'NONCE_SALT',       'DXRrcG/Ql_(<pFBE~&#_,yTeF^!-XyzYa=S_)?N CcYQ;|=z.8}|ju0=G[69Ur!K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bws_';

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
define( 'WP_DEBUG', 0 );

define('WP_HOME','http://localhost/beerworld/');
define('WP_SITEURL','http://localhost/beerworld/');

//Use this site key in the HTML code your site serves to users.
define('reCAPTCHA_SITE_KEY', '6LcZDMsUAAAAABMY8aaFAbGC46_bOU6Z_UL92yyH');

//Use this secret key for communication between your site and reCAPTCHA.
define('reCAPTCHA_SECRET_KEY', '6LcZDMsUAAAAAKzNVFUFVqCyo3g0TyS7aHqoy4Il');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
