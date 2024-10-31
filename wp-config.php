<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xw?n31i{wG0SUwhwQpOn?.+XYb(M$iDgO?u{8*dw(p+_%A.dP#jOi#Jta3zSi=nP' );
define( 'SECURE_AUTH_KEY',  '>z,3vwj{r*3^gNuRJM%oHyfCeVBldsg{Mx9YUl{x3mjO ]A.O& NB~a;+Iz9%B-;' );
define( 'LOGGED_IN_KEY',    'qi)(W(O51kue$MbW9?:q1Qsc)&8KI+yf@Z2,%aSu0n>qkbI]g#W Y2!d2RfA_|>g' );
define( 'NONCE_KEY',        'DmV|uscc/&{%wA<p7 JzFettxE-H(<#;B[04{O?x0o9?Jl,E6n:M-B7n.:aQ4Zp.' );
define( 'AUTH_SALT',        't*?JyMwpF@[9XU t6Z^7dQ5p&$pvt9fL#7#0lmUiW6/tb41}X,,VHeaya*/^n}T ' );
define( 'SECURE_AUTH_SALT', '1zzQ@AqRw+p.1w--DN`/rNjv|:+07tZF]DyU(Vu3jJ?*I.!I*j>$R*I2eCS&D<GY' );
define( 'LOGGED_IN_SALT',   '@6)_VH=1BQE2]s++5!jN[UP+3:G&2Fr|U0H7S*XtDy9 X2;o)VO#!q)CS-#Dy5yJ' );
define( 'NONCE_SALT',       '[Pp|{/!h,_iYlN^EHd/nO&;SF<6A*)>%KO:FDM;+Q<DD[g{P8gMb#;lY5HDdaHaq' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
