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
define( 'DB_NAME', 'rbmanasum' );

/** MySQL database username */
define( 'DB_USER', 'rbmanasum' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rbmanasum' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'dhXzH4RV2O80zpttJjzvoABjWrAq1DbsgsnVyOBoc2XEP5BwmzxRBQfoMePMMfhy');
define('SECURE_AUTH_KEY',  'qgagmtPEXDHHXkf80HyCqNfHyE09kr8nrnozb8N5q57rxJLya1LjU4Y8AUK7Ty86');
define('LOGGED_IN_KEY',    'SnqjCGHKfUd3iPUxWtue6GcRHFyTil6huvGW7wyDIfsjw88yfvgTm9bqrhJkd8Fp');
define('NONCE_KEY',        'nxKPN8GRvh7chINY1Xx9kCsvSnDMbgEGGq3C6X3rHgh4ORSsBhwvS40YEctcppi7');
define('AUTH_SALT',        'xENGwKuP6ifh3p0bw5Quyc36UPqCQD4OcVxryYGxohaDENQnTbda4WgvCgr1DLO1');
define('SECURE_AUTH_SALT', 'dT0EQSbnrOeukzCwabSwQq8luRRG99OI2N5xY45JuCExg2tasdnwr9Px5SG1IDDK');
define('LOGGED_IN_SALT',   'UtQ9qYZgs7atcUXlusNga15DgCYJlk4IPiXWaOM3f9m4DFjAfduGYhesO15TsDFL');
define('NONCE_SALT',       '74cecEAIforBWLXMoPtDloQeUcty9e1W2txGDzdD7Z26pc0d3puBcjmc7X2asyG4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WP_HOME','https://manasum.com/');
define('WP_SITEURL','https://manasum.com/');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
