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
define('DB_NAME', 's00jlonv_ttplum');

/** MySQL database username */
define('DB_USER', 's00jlonv_ttplum');

/** MySQL database password */
define('DB_PASSWORD', 'dk85wP6mS3');

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
define('AUTH_KEY',         'av11ezxgsaobon11bodnqq1oou6ic7xwoxfqo7w1emsbf77vgyp9s1mc0iziv41y');
define('SECURE_AUTH_KEY',  'qjve362xutrsqhfno9lsbo47kvslrqvbl2tqaj8di3waaf2dy7lsqhtzgdxdscba');
define('LOGGED_IN_KEY',    'm2wdkhtlaohcxjw9mhrdzlddvvl3kw2oapgzig8tvljff8zgng7ateugogiriqbv');
define('NONCE_KEY',        'iop7nzspvu58u4qzya3bpxcs0offpzwafeezrv1gsvudc9a1w6yqa3v9qdy4ajzg');
define('AUTH_SALT',        '0odmejstfqri6vr89wypiyu7abxtc8pekjsho6rtjjpw4wckqdec8k8is35jt3ye');
define('SECURE_AUTH_SALT', 'yatupgbcjoebcw8xdctb5x8th1fxvbt6g5tvx0vmo5bbijrk1cbhbfrrjt3xmlja');
define('LOGGED_IN_SALT',   '5zjuycoykeb3ifussct6op7ee4jewkvxlqvmeugppjh2v6vhctlpfcwaxsifedq8');
define('NONCE_SALT',       'x0lsgxi7oi7zpagkvc8ir3fwvxz4kow53at4xzlkmczw273zwj1quduwgwwj43zc');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

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
