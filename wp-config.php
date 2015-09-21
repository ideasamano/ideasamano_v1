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
define('DB_NAME', 'ideasamano_v1');

/** MySQL database username */
define('DB_USER', 'ideasamano');

/** MySQL database password */
define('DB_PASSWORD', 'ideasamano');

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
define('AUTH_KEY',         'IH B{6h7zyV7b~#$<:5mn<K%uY)JN-!-3)b.n1NrwL(qv$uDJCSYaAF-rk%%U_m3');
define('SECURE_AUTH_KEY',  ')C1+9`E)|D@+5HVxq`V@v=Zr?mFU+5N&MQ$;!*`(/il)>rx#U=!xNtDofRufqR/T');
define('LOGGED_IN_KEY',    'a7yDF=VD[F~=98!0n=MHQ<HSHt5>|y(;`/qhOkQueMDKMr=o;I>4sH+E!A_j+Xf)');
define('NONCE_KEY',        'YK6{]b;) sY Z!&KQJJVHz,.|$2)2fKb+W.ro$S:Ar<|(BvLr{g<{[vVD3uMdH0w');
define('AUTH_SALT',        'UZzLl-;Up^-|b%59#aT*,Wm>2-Usm~o:]v_p+%E*-pj)Fz;=ht-u<JKU75OFUzK^');
define('SECURE_AUTH_SALT', 'P.pO)[wh?=~0E6k}Yf@P|vi7+-~{Q6V`:2 8pBpXFTjQ+1c4AS[RarvfRtU-L.4e');
define('LOGGED_IN_SALT',   'ags> kH|6cZ.Vqtik3yx#|VR/UPbCa>%*Bz3>!j~#H]*BlVh4$[c98Xl_szmw(X9');
define('NONCE_SALT',       'R|fu32VZU/x$550?ajt&.}Y`0lw.[03+A6o&T@nvs/1wzc *[Hxpn4>6Bq~T8Vu}');

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
