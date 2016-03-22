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
define('DB_NAME', 'pestana_db');

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
define('AUTH_KEY',         'X:|<-%W7#_,EwXD$c/zzU9E0ZU-{rG:g0!Wdy9q,2zUi0iX>N-_pU#2& ot8Pi#|');
define('SECURE_AUTH_KEY',  'm-pILE Ka`BMbu$+!khc >Ps7Ydd-P+Y4y]iv.Tb=px{~>>G@grF>0Y9|R0~aU<6');
define('LOGGED_IN_KEY',    '4-C;N|2HxELYb5tw:PgBq,j40v=jq+LhOEw0SM}Y8`=DSv<Y+`4HST;M)r>i&{_G');
define('NONCE_KEY',        '.j%I+gDRYk|8J<E7u5^zE9Srv7Ma+1EO:x}-,N9Czz6stZ+-}.OU` +r)TR((^Z>');
define('AUTH_SALT',        '[bi8qe`SeN=W?]).[ETcF.n9K[iJ~)K-u/10EXhu6|KGs0|~7=Av4.kuBKLrePLv');
define('SECURE_AUTH_SALT', 'k0AM-rFO]|~`*c[^@z-EULbG24y)7{)9%,;%D3d%ydK8Uz]i:0&)+=E;S#_/OB7!');
define('LOGGED_IN_SALT',   '`}}iCJ}*xo`{-I/@-brj<LT}gHVVS?qH3{(?~Y{sQ;_7)VTGp5, juUV26|(Rxfw');
define('NONCE_SALT',       'GS+(6<EWEhO-+a|Nl]D4|t>*rqYH3Gwsa{j+R3K&Ig>n6 TPh}?Az/PM;cKCn-Bk');

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
