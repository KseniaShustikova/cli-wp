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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-cli' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rf2/0-S/ {Ya4ZH*q3y9%oxKR nvJFrPQnc_9%`!:HABM534I:aFmmHT3<*|i7$E' );
define( 'SECURE_AUTH_KEY',   '__S{m%J :e-|,(j4%;7t7_)w}X=X9_wyNoD_x6pR-1HR) /~;bwK?7&UMj4v]#RJ' );
define( 'LOGGED_IN_KEY',     'zfvs?)I%~+%`4Q_7tW?q[$,(:3g6@J Kb;4I>T:<erECL7HmVN|o(LcbHVdy> h}' );
define( 'NONCE_KEY',         '!RcRF7/H6kr<?o-~===|vK0pT|+{>8<chCGd+EA9QRi_>ZKaQvRaJ8/Q7JQ;6^<7' );
define( 'AUTH_SALT',         ' kyY{9ncM+|(_8}}dO<b5rBKadf/9rDTDdn,LF&`,VVuDGT`:yqtGncNHOA5*cVp' );
define( 'SECURE_AUTH_SALT',  'y5?jCGdf8phb4irerbP.b%w8Jf!2ECO7Ocq 6!EE[3lHv5z=ax|yR_;P9<V7=<QV' );
define( 'LOGGED_IN_SALT',    'mpIanE6[A;~)Aj(pJ3xsB!-kQZ/T>~cEL2G;w5[j0zzI`>2`aI-HX [oV7X,QO7K' );
define( 'NONCE_SALT',        'CkEG<x9B38oOc`<nrL0,` |XyF.).F9#JyYkF}!$dn99t^p:ZX^g{I i$A)Dt5)n' );
define( 'WP_CACHE_KEY_SALT', 's--LIF;zPvm]X>m^M-o( rOLf8bg?9[ms8@P`jLc4!3Bh>#u:a:94c,6xYfC*8Ut' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
