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
define('DB_NAME', 'cvwpu-umk-u-188712');

/** MySQL database username */
define('DB_USER', 'cvwpu-umk-u-188712');

/** MySQL database password */
define('DB_PASSWORD', 'Rr/rtn2WM');

/** MySQL hostname */
define('DB_HOST', '10.16.16.15');

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
define('AUTH_KEY',         'O8==Rp_x+bMUm73aqO9W7woZGutdpIMo!1QLq!8gpou4+McAWJyVL6ZHwQqf(+E#');
define('SECURE_AUTH_KEY',  'c7SUP4IcDvEPTx3XAKc1jlj(G(b3L7!6527fc6gDz6h(v1qq8e8Qu!yItbJCdD=z');
define('LOGGED_IN_KEY',    '7EPVYN=JXuR7)rhAG0k#gLe-EnqfiaO4LjLDHK^yEESncccd=YH!wXJNWwx=5hDt');
define('NONCE_KEY',        'XP85qHHD9A+Hpjsm!HpYp0RoHBS/yhi)Pve#XfqLBAx411eJ3j-r!T-AOJAeG5NR');
define('AUTH_SALT',        'R=EMjQSZWIkbdaLJf1UgqJt(GCCLFoI+x_17_=(A344hsb4W4DVmMCMY3JMj9jBq');
define('SECURE_AUTH_SALT', 'se-ql4!qQS^NLh9(gDOcJW0qGCTEjmOf!r-cA!M4vsYaOR(nEeTld2g4/=^GPGEH');
define('LOGGED_IN_SALT',   'PLB3jVyHfX)i82-zUPE4Ptq5x1YdEYhGIkMIU)5p45vz+diBYV4742I4-o8utho)');
define('NONCE_SALT',       'STnDO1F7gT8v=2EIum_tnWwwJglSPP8B6oTsIY/4yh70C_=9bJBQic)U4QOjE0=R');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

