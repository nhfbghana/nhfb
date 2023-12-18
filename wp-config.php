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
define( 'DB_NAME', 'nhfbghana' );

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
define( 'AUTH_KEY',         'Th9|;Q,z1Xas>$$qUU3M_yxI-T>#FHSi]i5OiQCv/9-m9+L9p3+iXL?6~bPLYn`r' );
define( 'SECURE_AUTH_KEY',  '>CLnhe[-7d:j5e+@$)yJRwW?buX~!X%LIx^KE=E/bZ2WDy*LY]h0G{eC19UzuL)(' );
define( 'LOGGED_IN_KEY',    'T~{Hb Z~yhTA%>`bC#8[};;l;5aUK)E+F!kI$Uc=qo+[b$1H8}E|*ewOg`a@h #_' );
define( 'NONCE_KEY',        '+.-Q:&d=Q|I-QI1UNwf|b2@a 3y8|+LsH)?[L3VlNJgAxFeT&D|Ir:# a]LYel;Z' );
define( 'AUTH_SALT',        'E%x`lvc;2/s k)L1WIT7h]AX*umr/smUui{X17HiwY9f0Hq=9/{=4DKA/}-vf:{k' );
define( 'SECURE_AUTH_SALT', 'M^C^a#c@<m;#s At:,aRF[QV)UKvc`o[cs~uh??Hd@k! HEEGylJX~3e?BrrQ}UV' );
define( 'LOGGED_IN_SALT',   '=mh(T6Qt,bDX?`0):kDPDW;b@YKxi[E |D J*r}_PU^<$4.s.v8z;K9sP.e^W(~E' );
define( 'NONCE_SALT',       '*`N`F{+@Hs_1.jJojX9,r58)8Ny/$Z?C.Ch19Y4#ZjOW6c~B/i_mZ`ZGlDRe7P_C' );

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
