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
define('DB_NAME', 'guaubisavj666');

/** MySQL database username */
define('DB_USER', 'guaubisavj666');

/** MySQL database password */
define('DB_PASSWORD', 'XdgE8CQpHHQT');

/** MySQL hostname */
define('DB_HOST', 'mysql511.sql004:3306');

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
define('AUTH_KEY',         'ksnhvDEJXpoqRgoRfM7Y7I5K0t9HWeJvdkZtckdJD3/z1Rs5CkfrW4pmNdK1');
define('SECURE_AUTH_KEY',  '2vstgRdMdMyhYHT/s/tQRfS8hSBYdxRhp8I104weD+VGuQpzYhKK7pED5BBR');
define('LOGGED_IN_KEY',    '722p4yz/EypNTUPIjnVlgX0hag6Z/Aufq9JFO6Lk0MCiUApBTijrdqSHNSac');
define('NONCE_KEY',        'r5NGlB8VKY5t9TJcoOdCW+75o5hqsqLI7kdweA38ssTXvQwjArcvhedoaoUh');
define('AUTH_SALT',        'Anmx57C8mIliq3RnoXmsX/4XMfrRXH1bPMpBdZCJE+OLrbeDW8CSmTnchkyE');
define('SECURE_AUTH_SALT', 'C5M/2n6n75WMKV27b5FX0hIN12Znjq7rjtfKfwWCfbNX2XIMzdQcydRmCbJl');
define('LOGGED_IN_SALT',   'KGnuT14oRohAC9H3scjm9IYZTH2hpWPwhqV1Pt5MiUaRC2gYBFkd16P5kUT1');
define('NONCE_SALT',       'QRTSfnpHiytX8zEOgL5WCHGhfPmsVsHmdvOIv+aU15ah2957mRibzFJC5XZV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod871_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
