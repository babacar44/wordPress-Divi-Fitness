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
define( 'DB_NAME', 'wordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aller@44' );

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
define( 'AUTH_KEY',         'Oh2%+<Hgn?bOq!KH^SO@>@!.:KdUSX51rZUPr?`Kku%Bzq#(4oo*^jj FY$DD[nD' );
define( 'SECURE_AUTH_KEY',  'V*_L)e)h,U>GHx@3G[THs?T$,.Cjwek`.P)rcvgu!wHGq(.|0fu/+fiobgm^a~:G' );
define( 'LOGGED_IN_KEY',    'O7e)|9IByPs!LF:h>_f6.%0e69*Sq$+eW`5)Dgnv9,Un$S4MF HVA4h21&0,9/Zh' );
define( 'NONCE_KEY',        'rVs=9[rUP5:s*c57K y_UzX8ok<ajzIc7zU#VfO0-5kyt0>klDZGm+1&6!k}+`tS' );
define( 'AUTH_SALT',        'uwUN{xiLAPyvDv^ F{Aa8a[y4XmfEVm ]tTxCDuAYlj5S0I@7ky3o9@F0s2pv{Y?' );
define( 'SECURE_AUTH_SALT', '*k%0&Xosh^#+Yilt=aB/Mq(dT(P@!ujpc>Ej9T@*%Az?:#!JtsTlM{Y~7lfUOJ^/' );
define( 'LOGGED_IN_SALT',   'I>V0&J?Rtus0$@bg?^?2x);?LTlZ<A#arx^Gf)@[k^`)}4I/X,egEZCk8jscudR?' );
define( 'NONCE_SALT',       'd.>xAV-jaX|F11eYe^7zHn4(AS~t,P-c^-}{,PFb;cLf7?N%/IPS1&9i8jg?s)[M' );

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

define('FS_METHOD','direct');

