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
define('AUTH_KEY',         'L5/hUAZ+h7ubTX2t+N18v5Xlb4nqIicb1+3AjhgyNru/wGxQVLG3z0kI1GUWfkTG/uis6EIKGh4x/hySdZf/4Q==');
define('SECURE_AUTH_KEY',  'Ufv53VGD4hiIgZh8UD90S4TG5IjZueRlN/IVqaab0kjypwTD192Lga67GaIir3Ctj9VjaqaxwLUi2w9MGb52Lg==');
define('LOGGED_IN_KEY',    'U+cX0fjkoDXTpx67WtXxldjnUu/TPuhPoNEKrlCG96AV5GW5mO5ite3ZZvKsfKwCAHhFjdJP9E8DVyQBsdX8vQ==');
define('NONCE_KEY',        'oz1JwENFTzdjidVP9+FYPnyUEvVOp9sWgvC6J2iPhi8pwp6gfAibfWv4c6chzQDJ1S9AB79yOJ8AS4fiWnGw7A==');
define('AUTH_SALT',        'LpE8rQ5or4BQXwCSJmcBWFpChc6JZWScO586OQWAOEb5PPUb3B3xpLT1cqKvrWcnxg5DwB9I3vfIiCZF+36cBg==');
define('SECURE_AUTH_SALT', '4u+S1fq+Gs3SqKDRglNse/HUPdM66yUSVOBlNgNtLUoRXRZuhuFzxjMsoy8tM6BB60ge226vgGyT5sz10GBJtQ==');
define('LOGGED_IN_SALT',   'RZ/oAPPI/GAc8rBQq5ZGyN4qShVqyVse9mNTVMTsnbSJUEv+YUUGuYG/jLEuvM2iXf6f9ll5IuUcNPSJjzz+Gg==');
define('NONCE_SALT',       'n3C8cG0BRuVtFLDYS77U7GkG60gjYoQlBqjX/k1Cd0CxiruyHkR4lHYXawIUHK/SYDYBzqynMTVddylnN2Kh0g==');

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
