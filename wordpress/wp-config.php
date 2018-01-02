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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' S>J[%6tQT|$poNBhc*aAUI73P-su45iAw>w:?nMtSvmaGcVv]G-+QZ404HIjj%K');
define('SECURE_AUTH_KEY',  'NtE%?l_<%t#m/+!@BX5-PfYDG7Lm]#k:1lPwh=WY5IS@OO~r<BRHQ^>%*iNLE1J1');
define('LOGGED_IN_KEY',    '2|nlT&GeFGzc0y|t-0@y[*jb6%[9tl}#O-TJHIi]%-<|Urv4LFK#F)*_l1ltD$mP');
define('NONCE_KEY',        ':axtlW[:PjL,=~h@*U])^BgN`eP=T&]|?RLdm:k~?iU/%)CdbD!8>u1E-GLqP~d>');
define('AUTH_SALT',        'FB>m?~!H0MQa8Y^t?<^+,]x3BV)a?3CLCTDrK,qyS&&QT0F_^4z=n1nYBd2|U?L>');
define('SECURE_AUTH_SALT', 'd60z8cn1[50L@+MPcsw9`!U|p0#sSLxp FR.2V$GH}<;q_)=`$4A<p-GQkvj#^in');
define('LOGGED_IN_SALT',   'D1B>?f]2Ss.O1`gj8s?k6%bnP87]cL<PMsD^%MIonV({Y>3DJ>Y*mOG!@B>;U^`f');
define('NONCE_SALT',       'X+cI4|U^/s?!|*y%_c(GnO9fh)K/ZF/xg,mHPgPwP/b1#WJFm(:oeBv|!BRRR+wz');

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
define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
