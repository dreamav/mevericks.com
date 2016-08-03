<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_mevericks');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'ru_RU');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$[C#DQd_2NS}D%H>.prP&4$}Wg3hh#aPtcNk E2=LC?M?7;)Th9T%U.q9q?kjBsd');
define('SECURE_AUTH_KEY',  ',yJj[_QJPoz B;J-p / TgD5q8ZEtAQMf4Q&t<^&|CB| &7_?I}kk~mgxiX@9 kv');
define('LOGGED_IN_KEY',    'w(?=]_R/r[Is{m|>l%|dW;}6X+-v75i-~nowFmLYUXH@$}J^ywh(j[+LWWHVqVhI');
define('NONCE_KEY',        '8S}?C+Oy++1|gO}DiN8%6H *zW!ke86p|5QB0Z3xZ*n-}U--Mq0U9zIx2-`R:EYp');
define('AUTH_SALT',        '9|7EznH4TTL.C(_ 6jK[sGO+gh^0-k-(N`,2T6I|xY:-4 ),?+&HE]HBO[E6vS_N');
define('SECURE_AUTH_SALT', 'LR=v xHnKa[<tjTbFEUdv%+/cZ]J}u;bX,-R![QN1-t,mh-#.AXC-B[0(,M @q}:');
define('LOGGED_IN_SALT',   '7`N=2@jyyW`n*z&/HHHq+5vEDJ$>We_hXsI;HR|a[anR,D|.DE %YYtYoF||2mZu');
define('NONCE_SALT',       'e2F 7+M?{bVEcb3rRKwJbvX69@92w+(0zS*[N-OxZ9E)8/:9M5I`b/66OrpytYVw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
