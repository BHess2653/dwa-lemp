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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpbhess');

/** MySQL database password */
define('DB_PASSWORD', 'tap289fed765');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V1Qz-FuOm?pFB%n%+/-`t}yB|xzoi)*c~54.E%#/}viP>L9sO7iBl)i+^op:J`o|');
define('SECURE_AUTH_KEY',  'eajq@I*/m&C-cQ0JkyBNsc>/U<vk<qmm25P_M4n>9h.zSFgLA[Rj]0MfOtAD$kqY');
define('LOGGED_IN_KEY',    'm*^Lq+JY-{vl!Xn&Rm;@(&*VaHZz;c2|~ZuBEV~63CV8:VH4Th/iHl;Xcz{OSB~s');
define('NONCE_KEY',        'S9ipy/@q8[G2+rT$5#x+)mWp&goG#5]&]eB&>wYulAPQ8<mCfa.aRB&+Ldy8t%lp');
define('AUTH_SALT',        'z9+rI)b,+2_ %/! h~tZ@pQ|JK$&?7%2 /l!=]9XB!+2h8a+/U4b]`G/Y?)|c1n5');
define('SECURE_AUTH_SALT', '*||DvB)@R9=DPgf-{M$1Ee4pTU3*M+|I6T&{GZP)x{-x<z2hb/F+li-`MtL(D6(m');
define('LOGGED_IN_SALT',   '5h%%hqK&4UwiC64g3.Jk|^t]#2OMcFfwi~imrh:-(Y|RNz;}sV_],68eE3!6~L`(');
define('NONCE_SALT',       'H`(bJ6TcFMF~+EgXKSxpVAKC;/tKJI|Ma|2)^]Na2j|_E,&/acb8OhItE9|$X*Lg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
