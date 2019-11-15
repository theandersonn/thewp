<?php
/**
 * Based on Mark Jaquith's Skeleton repository
 * @link https://github.com/markjaquith/WordPress-Skeleton
 */

// Load database info and local development parameters
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
	define( 'WP_CONTENT_URL', 'http://your.url.com/project-name/content' );
}

define( 'WP_POST_REVISIONS', 3 );

// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'pt-br' );

// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . ( ! empty( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '' ) . '/wp-content' );

// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// Load a Cache config if we have one
// ==============================================================
if ( file_exists( dirname( __FILE__ ) . '/cache-config.php' ) )
	include( dirname( __FILE__ ) . '/cache-config.php' );

// Bootstrap WordPress
// ==============================================================
require_once( ABSPATH . 'wp-settings.php' );	