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
define('DB_NAME', 'inv1619806471314');

/** MySQL database username */
define('DB_USER', 'inv1619806471314');

/** MySQL database password */
define('DB_PASSWORD', 'k3E@ETNvu');

/** MySQL hostname */
define('DB_HOST', 'inv1619806471314.db.9712197.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')fR=mFEKNcV5N_s9E9Ev');
define('SECURE_AUTH_KEY',  '4mEDRFkhM6qD2F1HZYnb');
define('LOGGED_IN_KEY',    'Gn_PgKQ7-$rW#dMOSckV');
define('NONCE_KEY',        'jk-H@j37ZZqS_q!VB!k7');
define('AUTH_SALT',        '!akUVHM!%s@MFH&krjZ=');
define('SECURE_AUTH_SALT', 'HJnaHM)Fs$c$&b*7+gZn');
define('LOGGED_IN_SALT',   'Mfdz)RckyIxd1nHj@8b8');
define('NONCE_SALT',       'L6B1a=SsMZk7AErqt@d#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
