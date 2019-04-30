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
define('DB_NAME', 'shopymag_shopymag.com');

/** MySQL database username */
define('DB_USER', 'shopymag_shopymag');

/** MySQL database password */
define('DB_PASSWORD', 'x0shopymagx0');

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
define('AUTH_KEY',         'OOtQ[QjLc4MnxMDKbBqf`Crb0]ttd|P*i#WhLZO EE4Utj;xb6A6DXFSOKp#sb`T');
define('SECURE_AUTH_KEY',  'w,GnxY1=_ Oi68:m9p(.x`Kw7(8M&wUk;Sog`I`9:@28S15Y{[K yE?rMJ3-?~8S');
define('LOGGED_IN_KEY',    'C<_#:|~WdEVRO]cY^M{a`%o=2_5y0+(T+U48#6^y.}.gHYP[IKH:NJ)3pD>{~Nek');
define('NONCE_KEY',        '.hEXL5Gl x)5*$,2}V%U$]z--t^+P[_@LJKRx,g|`%u^QD/j+8v+4}0$tqbxs|Rf');
define('AUTH_SALT',        '  N]r2_h -bWS/ec{y&,J$:Lvhrz W-yFu<=&e412u]lglxs3t-#7-SAhJ=>XQ~L');
define('SECURE_AUTH_SALT', '=Ss*;27Ue r{xo6Qo/zE@#f7VlOY5$7`gGDW>MxIPn>$K${_P[lj)%!6.kIc@Pf=');
define('LOGGED_IN_SALT',   '(8$.P3|5v_~$75c~[M~Ne8Rk4m0MRl4)#&=.DUFl$vG`iGCE)K=<Ls)xNAfO4sRg');
define('NONCE_SALT',       'ZKAc,1yS-h7vpbYzOh$JHiDukCj%#eEqZIH7{v{02w5_1|r}|?eY}t7a4T3!]AUc');

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
