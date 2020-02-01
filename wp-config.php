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
define('DB_NAME', 'sdgsgombe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'lST8tplG>&?P[=p6pxK#yFRw QS.6f)oBk`[2-w=-4jzpna 59F56?7t|G 4}?n=');
define('SECURE_AUTH_KEY',  '~CLf~9N)sl9md`NIdHV8Ua99[F>_NA}u7gca$0(ch=~dLLQ}*7(eHzOU5;KfsY!q');
define('LOGGED_IN_KEY',    'H+/;Qj@XV,OI6AQQ_?o@G*mjcjaXs_[6$oSZEa$)f@* Cq6:Us=>/QNptPzYY5tF');
define('NONCE_KEY',        'cLLz_SdWiZ:>UZhg`{5wn1w~[L[p*YTQ(B*~EK +:dDV`x|8=4X`70-m+l=k+=9,');
define('AUTH_SALT',        'jjR]F!j8,U{WH^OxJbnxQSnT4L |17C`G:mwOI{SsW<66|)S$:1AvK5E]c!fYFNM');
define('SECURE_AUTH_SALT', '+P|}hmW2PK%4;DALFG/_4Ul!Svf8F|_tbU 9M5z`W? 5K(1et()xaN#P.KXl;<!O');
define('LOGGED_IN_SALT',   'HBBz+.dS_uoF0X1XAwi7|+J0G5:N;TfUP|61;q/Q2.bMh|FUY>jrb}oI+B%dYVb ');
define('NONCE_SALT',       '~$*Wa<(<:|pX(i(3?w%lDV`;y}>S.gRT0(<W!J$,V+#!-<2Lz6m~JGur^b)fhWca');

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
