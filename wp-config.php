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
define( 'DB_NAME', 'wp_portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vv[8%+Na[x<cAXMu/dNm)bhs2!)nU<4;Z.N^gd-cH::Xj)zJJ/imf~$>k=;~4E$w' );
define( 'SECURE_AUTH_KEY',  'qCzyIKp8[>T(=J?A@Mv&dgUG6JCb$wc#)~:AE9GImI!wG8U<7neJNO7TH[WiaQA4' );
define( 'LOGGED_IN_KEY',    '4Kg@}qne_]`~z}u5[)$T#plw_hf.68JwVn 7:YXR9^HrnR&-7ddsI%%e4) 9q[A1' );
define( 'NONCE_KEY',        'nX4%=meF5aq~Ol_es)BbkQNIs;DZh9#i !]/EExT@& `6Nk(Nf`j>_nDg@u]-Oxs' );
define( 'AUTH_SALT',        'pj+KWX#Bp{0[V2*mMiK3@eK/p2`i~=I0~k9GIDr96coV>q1^X^&!.^2hvwnJ4H-b' );
define( 'SECURE_AUTH_SALT', 'yJ,GC$U`aRPVoEfwYAORUsj>h&[;N #i`1i(Vf<9cIaqZ0jrY%.cKjVS :(VGs#s' );
define( 'LOGGED_IN_SALT',   '<DU{=d]VJc^Q-$eD^q.ioJ(b!*kxcx/x(=SqNlm;YQoQ@oSK%^OygP/hz6%zqwE!' );
define( 'NONCE_SALT',       'C[.Jzn_/k5^2bO7}kpAGthPvVWuf|/yf*Q(A_p,Cd_3?dke`,<?&qv*5-F/tMzL>' );

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
