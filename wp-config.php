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
define('DB_NAME', 'peteco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1{B^sYspA=%u^XUSvV61lC-fT4r%&;fhSJ2c+E)JItIaThH.5:sK}hiv-,|7VTtI');
define('SECURE_AUTH_KEY',  '2`-s@kE24&|eM|ZpN6kZ_7c=wnBCv{>F?&uX{GLe3Kg&rs>SC>x]j:~rWsT*9n);');
define('LOGGED_IN_KEY',    'Q%erJp6D#7Uf3|mO-Sd0]}6o%!m:/$daOwWA`H)7%E5;vX?zoH2l0da&o#dW,|V/');
define('NONCE_KEY',        'Zn`S^w0 ZA&;XHPW1LmO8fARj_^buLC)rzZRxpU*K+)P}*f1p(LJ3u$M={xdR<GQ');
define('AUTH_SALT',        'A|WO{,p Su)hd8__vQuay9CiBTSK4:3pZS+d=/7/L>a#o/q)O-Ss029sJlR2IxtO');
define('SECURE_AUTH_SALT', '_1?$n8UK)VZrhJoPIuQ>H}I{4.s1hD$k@Oew;_:q;!kIq|t@Ad9fzXMdMF/%A+to');
define('LOGGED_IN_SALT',   '%H!JG}Y5Ci1as@;3zCq4i1fo-|*=@HCvAW6-gSaOUV0JXzl&[#b)^m17m-dFh|CY');
define('NONCE_SALT',       ',$6~(B^X$@,I];8BtM<6i8U^>Wdx4>lIvv$[IVb#^K[#e83=GHxxJ#7.8q0*ODEY');

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
