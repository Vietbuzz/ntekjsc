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
define('DB_NAME', 'ntekjsc');

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
define('AUTH_KEY',         'jpIg+YJ;gcqZGSpGi<]$6c]9t]5iO8~Vl839`yp<)?,*LF]=bX9>enR?H_E(WLVy');
define('SECURE_AUTH_KEY',  'K7QBvKV>xR<8KfLOz} <G$ukxIW[XuqR<RW|`oD9$3p.r1?rq3mq4{k}G4.F:4BZ');
define('LOGGED_IN_KEY',    'yqH{1su=+ClSY;R!TXp_n:#ZOCA;]Tg@$1r2XA V]c-W I1K?t&BUh<@_*5[[M8k');
define('NONCE_KEY',        'xh!&;x82G;N.H)RRnUfaw$yI>$z{ermIj-i?>W$:^59lcU2`kQ(6._hgEalBoJjO');
define('AUTH_SALT',        '2%J mYM)GM6w4pa*3%W_mSTgz0,K@,pXptZ3eIn+*0O|L<DN[nzBS&woioX^bgn#');
define('SECURE_AUTH_SALT', 'G^r^$1^6*_27;?J}QB1Cb420gw+h!,eAEEpmIZ?y/aZ|?qc5$4x+cx+?oetqbQfy');
define('LOGGED_IN_SALT',   'pQ!DLTy[GdL}q~k^3?IW=kGAA9otdFp8:x5SIJfSPT;:E *dKf)_F[cnoYTJ)3@X');
define('NONCE_SALT',       'bXCUo8_?&#93^jrJlDNdj9`X?g~-g(tl<vR@YB}/=SB+!rG41tI#TnYkoLA1!+cf');

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
