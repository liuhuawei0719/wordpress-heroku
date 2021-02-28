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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '`~32;p0aZg/IUf?GEG]+#?t. /].t$_$krS40vJ|$%e7:UB2)|;_loQkKQlMATY{');
define('SECURE_AUTH_KEY',  '8i+v`#77S9 !;Hh3[MM^cKDhIPG29kMKFWnEh28Yc}QTSJS3|^:=+dBD~poD`^%+');
define('LOGGED_IN_KEY',    'o,kJ?$`O_ojzU(b^{i9hbQ6!m3d2JX~FAR$,2c@|bwQD_Xi.qeXx<]u~S7D;dYbz');
define('NONCE_KEY',        'Y8pk4XYAE?PZDfOPd;%5E0@>%jgKm!J~2nqc.n688tc*A+hDJi R2~&^T:oK{4>Z');
define('AUTH_SALT',        'leb`45QfwCT9~zye+]Sjq;-+-j#PHT.bfgx1+U14/5`~hg0=+,3q6aj92NX1@G6A');
define('SECURE_AUTH_SALT', 'keK5uZcb&2b3]emi7NzpV/3p^ewI7i%s?u-@N+kS`s|8oa/_?u$56iST6|59p0NC');
define('LOGGED_IN_SALT',   'C-kl^*mohzp+qmwst;_UpzPKN-4 8a+7P[l7C0BRE/romh@h-qp|Q,#qcQ?_+6iG');
define('NONCE_SALT',       '`S?fV4|0%/Lr~Eej2mu8n1;YSdm+c-n[B2,(Y2 e4ga9=+}|lUM;~|;IYM`E@+1/');
define('AWS_ACCESS_KEY_ID',     getenv('AWS_ACCESS_KEY_ID'));
define('AWS_SECRET_ACCESS_KEY', getenv('AWS_SECRET_ACCESS_KEY'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
