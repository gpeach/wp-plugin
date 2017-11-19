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
define('DB_NAME', 'wordpressplugin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'v31vP--x8B&HC> kR-T $-),qOU_a0Q= 3;(AK^G+%`{#]UpRm,HFe]Tw*,ThT&A');
define('SECURE_AUTH_KEY',  '#;O6zN>k4`Ni0;cU_~Z +/,m?mZ~q?/Ry&;-!}(fz?SB=c|*-:6*j,/G57V]fTkc');
define('LOGGED_IN_KEY',    'k8ZO  & uxOJpE^N8:7#-t$U4{+20qe^,Np<}T&Ed_)Ta(39KW9R1Yoq?*HK)wcP');
define('NONCE_KEY',        'Fu|7RG^MM=IFGPQ#JQLBJpM_q=WV_SQ}}+A6@HCco#<4V%ZH9jl}MKB-LzKXC<i~');
define('AUTH_SALT',        'z0@E;DrBV 5o;`H=]gn$k80Jq-uncKT<`_c|eFyKs . dzDH,4IMjNwq^`fbycYi');
define('SECURE_AUTH_SALT', 'VK;+7oj|?/u-W$o-+Qyrp^w[| YvIY/sbzA]DCF+sBy}5:n4ZFHENRw~OR7!#|H_');
define('LOGGED_IN_SALT',   '}EeOqj86J2xx?cQJ94<ouQ^C)^3tDO%+z3?afLXESXUcpbVhTk8a632[K_+6iNc;');
define('NONCE_SALT',       ';yi@2/dO^tp2)-4w mOQltAD@+SqfTDPRK&$:@auo:+Z:f>tbKrxu N,dao(T#nY');

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
