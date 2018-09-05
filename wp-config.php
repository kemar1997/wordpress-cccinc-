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
define('DB_PASSWORD', 'CST171');

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
define('AUTH_KEY',         'Z:clE sKvbK0]%k&h|as,N$7r h/GQu<Ga<}L&jxdRW+7XR#[+t67abj^d+4uv-S');
define('SECURE_AUTH_KEY',  'u3=EdPW(2Me/ePjFopxK#y_7qQ%WPW}[Y-)q=u A=NpA.kJ}m8T0;65m5<b5m*?e');
define('LOGGED_IN_KEY',    '8go$;eyjr $^x7N][o|_Jv/xrP{54:uU}Sz;&[OiB<_)B1n$RWDH{vx3n<LDG,v8');
define('NONCE_KEY',        ':F:2eEh]wOBBs ~Z1yG?@b*k7{/?`/N9&5PH8QgHQXG.!;OBnJUWB?trFDI(/;8m');
define('AUTH_SALT',        'tBV^nc@=.z++GUxu7}u5%@[$/a4dvqVYg0QD[x~1k-Kp&(u~/c;0x9Pu9OpJn+3k');
define('SECURE_AUTH_SALT', '19}-Lzp;gOfj_9Xm%(Q1xf.uu7.jSTMZ$A1Y:k`r/R o{&,|{tsPwkp 0m>bq.C!');
define('LOGGED_IN_SALT',   '|g4,Y1^3|DrW}=79l*>kD)kXto?Ai0^>36mjCUd20$QJs+0Fd7GK.azQdzmm![UE');
define('NONCE_SALT',       'N+LKx]kvnRC&lt[8U`.Q&=d,BEAO:2f=)5B_0-.XPW)]~eMHB%{E3fXaw++^;xLn');

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
