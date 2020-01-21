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
define( 'DB_NAME', 'resume-portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?jvyH*%0C/N;Gu%_cg&stbq{./|GQQr>2$fGIb&`&Vi%5Ds{{U5`vKkw0%`=*!Dj' );
define( 'SECURE_AUTH_KEY',  '?q]PsqB|NI>.2F&DxhKynZTc9_a7da(NVx]Ny;`|whxrC^Bw$g5F.G%nT ax>[Zp' );
define( 'LOGGED_IN_KEY',    ':gl0l<RGoZ4jVg nv|pd%*XSIUh~{^`{lf)nG,`2e|*,Iid(21$N}v *40k5*far' );
define( 'NONCE_KEY',        '? `@ 58n~n,XqGD_D5px5~2><n} Wxz|D047H[}JWPHwrD&EcuV+qP8Kx!PMpC1m' );
define( 'AUTH_SALT',        ',h]q+1~*(qWdcKk@VM>43,ZMgf^yL_grOB@cG_v;pU2,,+1h@8;]1dkz!g+{:2y.' );
define( 'SECURE_AUTH_SALT', 'M U+U=4J*C +9>W+4y@h-[nduU-EV$iU_>6`}x[PZ4Hr*|^yS>4GwAVc <Oxb`>N' );
define( 'LOGGED_IN_SALT',   '5Q1mO<ho!^5GVGk,_#XHE1sZV4*#`c;}V`;Nfa##rhB+M0giMY~Q[A}Ev]#q]1-U' );
define( 'NONCE_SALT',       '#?o^h2ftN8@~IL)MxJlw}S]t;~6Qa*|=1u4XzLwP!e@ut!#dBiV$!Wsfi;COi3H-' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
