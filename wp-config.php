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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpmudev' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'r,;]WqC.3AvhSyvl.{;)}qpOHx,UI9>oaIt5.aw)1/KD7F/u4`h/%J3Lff*,+G(E' );
define( 'SECURE_AUTH_KEY',  ';f;k 7iXe|x5F}/<v-wi!H$vo/*ZJ{a>yL4+-51C]k%Gq#}sN-<W)A^0AniL;eb%' );
define( 'LOGGED_IN_KEY',    '<W4:Jl.?`YnV87GF&mk/tKZ?Y/[eGqk@KINXhZB8SSFg8H<}[Rf?HqSlDm d5Hy^' );
define( 'NONCE_KEY',        'LRm_0pe_IH`:m5&6s-|M*p>{;O4zzzVgj2`%X[<OT^-dEt|^9-H4N418y$}Qd;C(' );
define( 'AUTH_SALT',        '(oD[3?(DZ@-}l%we73MR7T/Ny_0fQPE1v~r>u/{7mXD!W)Ns2nzn.#VTE@kLe#|0' );
define( 'SECURE_AUTH_SALT', ':JWP3$.(47KT fFQW[p.si$dK{9M&W%Su_,$PwmQP]E_Fh~+HJ:aWa.X/izG~~p;' );
define( 'LOGGED_IN_SALT',   'CL_4GkO>hg]WN6PNMF`<9eKgN&c>I8qY.hus-M<$JLtEk:;zfAKUu:REY|?:[o6R' );
define( 'NONCE_SALT',       'V2W?0F_I1yQU[8b_H6W~6zf#|B=/~#47$(Z!(2k73URJw,y?Jaf@sxB_(R0dx]pU' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
