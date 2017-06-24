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
define('DB_NAME', 'infortekcursos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '0040112r');

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
define('AUTH_KEY',         '#NOhq Oh=+wrIuuiP<hdyXt8o6RgRaT8jNv7)qdn-/=Y_-fjNgH1y0+^`,wx4dt(');
define('SECURE_AUTH_KEY',  'y3!Djqwex^6*wxM&cqk%f=Y<-N;Q:wUV#?VDh/%u%j95T[b8Pr*;}qHEZX/a;]_Q');
define('LOGGED_IN_KEY',    '|m:s5?6Exz#O8jh5v(en2[dx40C,L6d!}h^I R*N@qG#n1 nBNZur}#2XpiiMfp>');
define('NONCE_KEY',        'XjTlKuB8(GvD+2DC.~>a:^*$j9g=`&n(bnf2-zOf94U. )#RSa&vo[_)fJDD*%u!');
define('AUTH_SALT',        'fu@=+KfIg^#~_ !dM[d*pK3$ehh9g_SY]a(2*Sv}m=$(V]]{qQbAZ7`IZCw`4~u0');
define('SECURE_AUTH_SALT', '/m??)HrqE8AeplzN~2jG*=F@QuM[XL7[#+%6Y%48*]aZzC&B!+Tr5Y{|aP1MkbS|');
define('LOGGED_IN_SALT',   '=&@Q%R|Nlc$ENg0TdaNrd:B!Bed(N%a(smAX%(A]u~?gFgmR/oT&L= s$-U;_n)s');
define('NONCE_SALT',       'N>Z>RNmc7U#lFDt f56ba(};^gKhP8OC^kS<^^eOr!4dT^V`IJ|o[}Q ;F!ZPcRC');

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
