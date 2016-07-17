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
define('DB_NAME', 'oal_db');

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
define('AUTH_KEY',         ' j51uQe5|&Q-gvoc._OLjV|&@^s9<[-aw+-_4Gj8zP/34n`RO<&T:APN{G6u|*;|');
define('SECURE_AUTH_KEY',  '=crNvNI;~aJ@qIX[yzUC_Z/6_*@7Y=eRGfj,>S7j7FUXA.]kV1Nni:0n 1soH#c}');
define('LOGGED_IN_KEY',    'nsxg-lPxTC}Q[EJekky6)kn&o}kP$.pwH]iIM2y|AT/GA9S9hhq+]B8[ ik1w]{{');
define('NONCE_KEY',        'LR8&*F$I*8^&m-Ih)[ho5p7#(9~3(U#Z%jbAh9cMhrx3l>T^6a[qH&nyG_1, mgv');
define('AUTH_SALT',        '}1KL 3uOCf8H]Y~>gfn!{@:2z@$FMykQs:Qu({er*Fk0^hRJA wDn]RXHc^p1G^.');
define('SECURE_AUTH_SALT', '~W/ZcUW$}1f*xXO8hH2n]DKa:1RJWQ}(@wolQcDkNKEY8DgHrlR::XBCdZzupi4!');
define('LOGGED_IN_SALT',   'bsq..?lH#GUK^]D!m#/Dw^yrbu~ r.ag%F_L?Nyw^4(>U-Q`jVQ^1#t_KXE*yI?7');
define('NONCE_SALT',       '!b&]d@[5Oo.ob]KZ+`ps^+n;3MwKhv&$79%Z1am5S l}2UY2vN ,Q5`^B@Eoui`V');

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
