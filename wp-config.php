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
define('AUTH_KEY',         'MreZoDwf+0kKDdS3yQyEy/rv/3KvcdbDnpHF211oODsRHXGIYxneQaADpbRG8wSMT9n/hodVIBB1MqYVTmNTCQ==');
define('SECURE_AUTH_KEY',  'CDG+VcjWzM9zZaG3kUdzLy0uHZjkteZRRJH+2lSRjrwbSYPpoY6yKeW+Jq1BY+s2OxgCGP4zx98dotuXzdXrWQ==');
define('LOGGED_IN_KEY',    'rKR8PjNoNbUyR5q3ou1D5gSOWaMFR7jBgu/uUKXhLrUKqdV2BK9xn5LOOl3YVfsYTSBXCKEXK/IGMjmL9YlpfA==');
define('NONCE_KEY',        'Z7Z6s43MfAa32pqdXlTLJr600qjaqJHrSbWDTj9klDIJReIVdo40moBSX9vskyZt0AA+vD90TRKSccFXabLyUw==');
define('AUTH_SALT',        'roTkXfq4ynSsl2p/HsyaTWAeE3/Nhvhw+MxBl6N6apJnfFC3b/gVx9gB/WdUcwp6PTIyxM08CyCpCRu59kDZ2Q==');
define('SECURE_AUTH_SALT', 'EtBhzCiZHLwzmzk/nlb4zXU4buVTP1CFtXJg/ZhKX+Sggp3PlN34hHDiFKSc9hoeHX194MAawa5vDPdgYbQJQg==');
define('LOGGED_IN_SALT',   'Ru3LmbLijDZ9lkekHBEf6Pna7EVL3p2Mq6Nrm36ziw6IvZyjpD10m57UO3UV5O2I+ojrHKWvpqcvgcJAqK1dGQ==');
define('NONCE_SALT',       'UyjIwTthqsM/syxm2WmqJ4g3VqzVOr2lvmJ95KFwkyShENlKTqmXL3R8zGaRFUCkwOwlC4iKqWqHX/4uN3xDxQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

//cache active
define( 'WP_CACHE', true );

//URL's
/* define( 'WP_SITEURL', 'https://www.example.com' ); */
/* define( 'WP_HOME', 'https://www.example.com' ); */

//Disable Cron
define( 'DISABLE_WP_CRON', true );

//Editor work save
define( 'AUTOSAVE_INTERVAL', 30 );

//Empty trash
define( 'EMPTY_TRASH_DAYS', 7 );

//Media trash
define('MEDIA_TRASH', true);

//Post revisions
define( 'WP_POST_REVISIONS', 3 );

//Disable edit file
define( 'DISALLOW_FILE_EDIT', true );

//Update WP core
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

//Disable update WP
define( 'automatic_updater_disabled', true );

//Overwrite image
define( 'IMAGE_EDIT_OVERWRITE', true );

//Default theme
define( 'WP_DEFAULT_THEME', 'twentytwentyone' );

//Concatenate files
define( 'CONCATENATE_SCRIPTS', false );
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );

//Debug
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', false );
define( 'SCRIPT_DEBUG', false );

//Memoria máx used.
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
