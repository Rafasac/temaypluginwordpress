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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(+&hc ^b2#E{eptiko~WKfDoPDX?er0Zdib95m5hFcCk5?UPo0/g]1DQEbCs4(pj' );
define( 'SECURE_AUTH_KEY',  'ScQ79|y9ygK7.e$;D36^~+pGk{$f>vh-*sx tW!R#0E+!8J7cvc^^E/_qmERofv/' );
define( 'LOGGED_IN_KEY',    '&MY7m=-IyTcsPvQoKR7V=z5(A<WL~x_K@#3 u [EYdz(AMbYqd9cxDrEa&uk=c@M' );
define( 'NONCE_KEY',        ' {2I}9 Y1T!_IIVA*g3w=I%;Leez!LN_Oj}bV!6CDfed:X 1<J@GLI$<}<+.`k4e' );
define( 'AUTH_SALT',        ' *m)ug`~12k_M8rtf_0;COx4h`U69?GN/~YeY&dh/(NH<Fo5&uVQH.))a%1Qlj7g' );
define( 'SECURE_AUTH_SALT', '5.M:ep5`Xqkt}&)_M9cRbas5RT%D*1stVxXG<lbdZ_62!q$l!/Z{:wNZyBy-&9O5' );
define( 'LOGGED_IN_SALT',   '250 [o^Q2h2Y(+[7O5>n_tf2$]{l0?z7F|5;_.v->hdiW|du|9^r+~Fu.W:/|2T@' );
define( 'NONCE_SALT',       'au&/3<ek|OIHYWauT^d?T{GNmuQ;+nH;1tz*#r/e)!8a=0,2uy<B|k63@N@j:kF5' );

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
