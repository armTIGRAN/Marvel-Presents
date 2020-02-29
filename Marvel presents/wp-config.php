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
define('AUTH_KEY',         'myiA1#H@/[Q?BT9@Jf4l+WOv8.H%x>a4}fin;/eF}i_AKq;):@/Z+[-Vb+HCOoy{');
define('SECURE_AUTH_KEY',  'FUuJ~Ee0<F<k/l7vq<[l={|AN6s#cTB$skhy=+;*6>NIk!dsLWEIhx_.[|&E&TX,');
define('LOGGED_IN_KEY',    'y-S%$w$ORxqV34ylW@5pN7x&knO$YlM#}TEkZ>LIou,!;0A+U#8?6C(m8/]A0Y5H');
define('NONCE_KEY',        '$Oz+1#>a&@#/INSMcGO)ZyqztD$c 1XhTU~AoiW{y%A)IoH-Bv[:.Xc*D)eJ}PKU');
define('AUTH_SALT',        ']xHQ`C^y3dOj8ACY8Bh&}a/i.w>,`qq,#BE}MO)=aHwKJy#2o1zQaXK7rP?6F /i');
define('SECURE_AUTH_SALT', '$EH`[HXCf >CXlt#S18qARSeNU:AZ]s+o-Ky)?*`l@,zrcrj-71s21/O@>tFuHl ');
define('LOGGED_IN_SALT',   'MlS`]gB<0+et?-l1wr&6|%pg?SfKC>kF+W?7=e7pb8l7YZ+w8ml;0i+27RbbQ<1H');
define('NONCE_SALT',       'iwhZl(kLq82i$0b+r,TQq~]M@?5Nqon^kLiRt!%,~}@z[mWLxhNzK)<n2U:M5$D4');

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
