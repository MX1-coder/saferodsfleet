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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'betam4jh_wp747' );

/** Database username */
define( 'DB_USER', 'betam4jh_wp747' );

/** Database password */
define( 'DB_PASSWORD', ')pSJ5-5E1N' );

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
define( 'AUTH_KEY',         '3bzqoyxax6kpc7f2wgsuthelj58zrkkvmz3o5dkwphrmtnbwceuzywcmcmtdqazj' );
define( 'SECURE_AUTH_KEY',  'f9u7vyvbssn9g2kubypabnuxn2iub8satnltsthex3xne6xqps9ytq8upt1c45m0' );
define( 'LOGGED_IN_KEY',    'kcmmcsswmyxq8xzfvmh287lsvft3w5zvzbl9wxfckmcdirvl1tdtnraxpcc3m0x8' );
define( 'NONCE_KEY',        'gcxpbtvvt8a3h3xxts3of1x0biywxcp4cjtrfrupcn6dhl6gnsgdjulj5noq5z0o' );
define( 'AUTH_SALT',        'tfh5di375mqhgm72yngeqjsibxnxtuflmscrww6lctcspvwc8mxvalwft4xstsfd' );
define( 'SECURE_AUTH_SALT', 'othkqsxxoxcqgtflm1clu4q6mvh9yyejkshe6wqhupatbjmjes87tluxthfectge' );
define( 'LOGGED_IN_SALT',   'bxqlh4ei09bxc9lr4jd0lnxmrppx3d06jncnadvmqccdhinaujnlubk6ii2jsnvy' );
define( 'NONCE_SALT',       'xn9cbovrkpyvc964yx8s9hjgjsalr67zqiyyvrvh2ygdzvbtdmfs0tbbis6qfzav' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpu9_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
