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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '8hbE2AUpsfOnSFua7t6/0HJt0U4wbJ4C2etnr/wqG19FaERXe69bcw8ac3JBQgeVDfl3sdmND+hnwNTalTvjGQ==');
define('SECURE_AUTH_KEY',  'etFSrq43cmZ+dtbAd78tcIf+jd9OlD70OEOQP7Cz9zOxtVD1qxTLL7IpLD7mfgilsdYyx4rwQmls1igqGmudyA==');
define('LOGGED_IN_KEY',    'gj5BLqvIYHqd2xXfSRpO8uKQr6EHGeZtfkDzJp55iJNgJfpWZus+aWecOET0GzSTKLH4dJwBksM4osCioZtzJw==');
define('NONCE_KEY',        'Lam2aOtvroeToL9OUGjU12JJlGhd8UVImDwxXb7bJXQ05p13W3Y+yeH+1R2YrEWNy1/KecF4ELuN8vkl7Lc6iA==');
define('AUTH_SALT',        'OBXhefY99fhQvIeHPEz7foau0ehft35O6ovICUtLA8LprmT3LL4nKQVyJcW/J1TzsYj8OPc2A1pBnqoeOLHfqg==');
define('SECURE_AUTH_SALT', '/sGmlLpmPMaAoOUQF9ig+pfufj9Vy8a7zlvtYLxYE2K+EuLBTvcmVb6QL5wJUCV2vNzEv862AGJD7lp/MJ2ENQ==');
define('LOGGED_IN_SALT',   'qaAzxn2MqwKuu7VoTSmlt0Tp8Eb+vFC/EjIWAm9ASrmvC3A6QU7NLcTHVFkNGoYybSpGrz+l66/UuhmwZOCc3w==');
define('NONCE_SALT',       'OT5QBy4+M0RwZQs0FNm7Z+xmTfYbUzX4WqI+owTnk+OmbdhQwqtfDEHtEc1o96xz5XtEmaCYoKTPr6+IZb0unQ==');

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
