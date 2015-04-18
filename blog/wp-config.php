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
define('DB_NAME', 'edeno_wordpress');

/** MySQL database username */
define('DB_USER', 'edeno_wp');

/** MySQL database password */
define('DB_PASSWORD', 'DIngfuus500');

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
define('AUTH_KEY',         'e-TY<;?IGr%&UccnG!+6X?:Cy0[pK];-AVNLVCONMd]FK}+K=/R ,YQa-C{>~^u0');
define('SECURE_AUTH_KEY',  'eRx^El|77?b^}T6^L<}*O^t(;!j~mO/GEk-{=C$CY/<q?wv]1 op6m$6gN-m;6WU');
define('LOGGED_IN_KEY',    'X-CK-O;~)L<*Y0qJF$BV7:C*Qv Gs=-4>rZvugz|WDW7m/|-B/%/hyp26rzpGDe-');
define('NONCE_KEY',        '/t<]3Irw)JGm ;~nhXjl-EK9^D?[#kp#rp5=[Je8~8{q}3S7mUAF*dY7MfmIVWkA');
define('AUTH_SALT',        'ql`K1MIX[A>)&b#^ tDx9!1E1A_zv?fYA9DI^P{TnZ>$A3s]iF# J*&|__=k@:w0');
define('SECURE_AUTH_SALT', ':+g,#ny+ZzZ)Ohhu2<<>@&|7,WMX{Q%>qOh~Gyaa&X-8= D!(>*ZE.ci SJ$@,v(');
define('LOGGED_IN_SALT',   'Re}.d!|y-UEIXpFb%>1x98!I(L0BYjgtuBF-Lr9.JL80.Mk@|.G}F=00Im6<fZsW');
define('NONCE_SALT',       'H+%ch>x5dV@~UxG?2XKylEOx]JaIzGR]6u9u5/Yw>x>4z?_M2%-$)wXE5OApSpsj');

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
