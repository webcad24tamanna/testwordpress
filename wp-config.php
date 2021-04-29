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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'jh(tO=8c~D#{|wf+~,2]d^Hee)r9uw%I IXz4UTmDtwj<4D]z}d/ ,#H!P0?YWuc' );
define( 'SECURE_AUTH_KEY',  'i}wkkDLetS@<;G4;H[R!<6bFaBZr[m=?:Z<C>RNSI*c:i-^PR3#qz[|yrHWsPo:f' );
define( 'LOGGED_IN_KEY',    'f{wjD}:=:Yxb[z+@nYH-D|Ip7rMs>^70$QqU00!scD&H[ql;D{}5xru|)KA)oH}2' );
define( 'NONCE_KEY',        'Sueq_OTz-t6#gVHU:GOGk50rWI6Tg38|H9C_^36tCTo:a#5vx0:;M`fM@2]]=02P' );
define( 'AUTH_SALT',        'OB$z@raza9,=~#N2U*:HEQ7bJotoEf}Vg@*|8d~/6gC#<DZF((cEusrA0{9JnLE)' );
define( 'SECURE_AUTH_SALT', '$~9hAzZ-]tM.5MA[ss(uy]v}RQ@z,zEd+VCR5y{i3kc|W&]uHR:5o)l=QLu5R;qE' );
define( 'LOGGED_IN_SALT',   't8TLRQd%42|qI$tZ]qj<Z&/<xurn=Q6]9Mb`_2Eo4eFa81&3cS|7,Q;_Ma9to8Qd' );
define( 'NONCE_SALT',       'u0NjdX#maeV_/~vvv(:(dPfP<=eqf~>;@TSe?ihS.#yG8gy1qqu]|#98-|wmz%IJ' );

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
