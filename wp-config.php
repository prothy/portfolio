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
define( 'DB_NAME', 'fohqdqph_wp611' );

/** MySQL database username */
define( 'DB_USER', 'fohqdqph_wp611' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pS!v8F2Y7)' );

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
define( 'AUTH_KEY',         'yhswkgtoisdxcjrgy0mjaqz82tq4prwhkhun0etbl16hdcvh2tgogmfe8teklars' );
define( 'SECURE_AUTH_KEY',  'cgnrgmxqdcpwizdekorf8gix5hzdjiauwmwc8sbc0ebh7t7nrqvfqfa8dc9spss3' );
define( 'LOGGED_IN_KEY',    'd03cd1p4zfxsev7inivipqed1gwffgekzo7lf7ehn6ksl5pzzdxutyl2mel4lxtm' );
define( 'NONCE_KEY',        '8o6gszgcyvdhz65bix26nftgchojkqvc6kwqjloapx6pnvjxcgcnijxnbn3jvhec' );
define( 'AUTH_SALT',        'w29rstaf0ydvhpzdnukhperg6rypmketwr5avbfqqcdtnut0avbbrj8gdzrqblht' );
define( 'SECURE_AUTH_SALT', 'lydrovzysdqwakxtyk5xcxgwsrglco4c38zny1xjbg7esvdtdfmsjpr8090n2znq' );
define( 'LOGGED_IN_SALT',   'tlrr4xuauiz560a7tpa9rj2ltwe8lxktdeafbj9p11fogp2tu9ielczqcvtiotaq' );
define( 'NONCE_SALT',       'zqqlidvgbcajhmbkbuibfcvqubeoejyrbarh8huyrs4uycholvlossqfy0u3jbwk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpzj_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
