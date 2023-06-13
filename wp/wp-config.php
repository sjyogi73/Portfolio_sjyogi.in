<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sjyogiin_wp212' );

/** Database username */
define( 'DB_USER', 'sjyogiin_wp212' );

/** Database password */
define( 'DB_PASSWORD', '9pfS!6]829' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nqpoyvzrsgeacdgu0avveeksitcxpcrag3xqjdrrq65xtt9b0t9zynmsnutoauqf' );
define( 'SECURE_AUTH_KEY',  'pvwqdqr6hxdrzbcnee44jl80q8gstzelooofo29pfpkbkzqauwqgoliamb2aexma' );
define( 'LOGGED_IN_KEY',    'q5gm0wb1mkvsanvazag0rerrripbv1i7ftc8rp9xhvhwu1oz6kfmfoccshuirxrj' );
define( 'NONCE_KEY',        'mhdjo8k2a3qgmf6zjt7azwqqpabcqthbnutj7ivlqbm1mxacwhvjpohwruxe9n35' );
define( 'AUTH_SALT',        'ylhoaxobmzf0p04fiu2xtfvh2ohdgfvuoxeeig2o84hj49m8g1mst2jgrzvnf12c' );
define( 'SECURE_AUTH_SALT', 'bl76bieommmogoimooq6hacnhuaa5e4wic64yrvg2zwlwmuc3d7r3ozshgmle8br' );
define( 'LOGGED_IN_SALT',   '0rubszhlaskmuigrgvwo3vx0vqj2xlxvbkyfpdpfejfa6s3aysofewlqio0slk3u' );
define( 'NONCE_SALT',       'vog50mkfx2vctdmhmphbjswswdbqrirwpz9dzodkcokw3nersy7rh0cosf0jdvcs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9o_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
