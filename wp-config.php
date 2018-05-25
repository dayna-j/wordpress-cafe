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
define('DB_NAME', 'daynvbaq_wp159');

/** MySQL database username */
define('DB_USER', 'daynvbaq_wp159');

/** MySQL database password */
define('DB_PASSWORD', 'SL5pRC66[.');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5kqscnneebifsrpmaj0tirajso1r3zuwiqya89yxt92wwppf1jqhvuufmenlpbj7');
define('SECURE_AUTH_KEY',  'k5jucfwlbz28hytqto5jdhlkoitn5nbljcujcmwqhlkbsl4lya8dzczqhgnzsxtf');
define('LOGGED_IN_KEY',    '2zgprkutmle8uoharuhhhglv3ezhfs8hxef36oyf4fwvwawme9ywf8oz2spytuyg');
define('NONCE_KEY',        'ampt2edhrhbi3h5n9wpcncxwmf64mjbknwvkg8wkdwww6jdsektawksvsntyi1k4');
define('AUTH_SALT',        '6j0gi2jgipsriunejb09ysc2qjokmrnkf0uij2qrkafnexhnoiubhgijeva8ugbp');
define('SECURE_AUTH_SALT', 'c7abxv1zocl6wfd9gtnxad3adggudeiu3a683odg7xera0odh6mjliovxnvnzald');
define('LOGGED_IN_SALT',   'xyccxp7b2f1du8jde9ykal3kenxeknw9pxjodeqmievmnw2vmvpjg1tkbhokujyq');
define('NONCE_SALT',       'ofxwwyswkjd1hlfhtwoaoz9ppiufcpv1u2wnfuvymwk7mfoidyrglymjwbjeaobp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp0s_';

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
