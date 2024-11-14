<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

define('WP_AUTO_UPDATE_CORE', 'minor');
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs1853792' );

/** MySQL database username */
define( 'DB_USER', 'dbu1147211' );

/** MySQL database password */
define( 'DB_PASSWORD', '&wxmO048' );

/** MySQL hostname */
define( 'DB_HOST', 'db5002302398.hosting-data.io:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}9h~tm$={6!*!AIy ]lt<w=WgcI%9iI4Y8efJpPX8[:_2 ub?rel>)*6cYmg_?BQ' );
define( 'SECURE_AUTH_KEY',  'Q;]d24m)(;[XtGZ1!*Z|wnTwY~MuXp-+(&0]Q3GS,2c{?8,*RP5i~=5[[~1oP`E%' );
define( 'LOGGED_IN_KEY',    'vCPl7/6.`;J]T@nJEq]J?E7HD-1mj#v.lKVtsJ}Zk?jn;=XeU4|+4%1HZz*!y/g-' );
define( 'NONCE_KEY',        'UQsnwE+<+S*nQa<TaNi%h5](a%,jlDjN71Ld<YF*Jsx >2Fga7kYl_#&rOl%3Y%L' );
define( 'AUTH_SALT',        'Y`llRHWzF,28v)bS&ew#GCVg$@0N0$gc!w;(A%$pKdp&9JqOvJ26|VC=thoM>~.Y' );
define( 'SECURE_AUTH_SALT', 'm|KI:,.t=Fevy6()>.E<~<R{t8TijmN0r[N-ho}-NN7PXnQV xkWiRG^&C<@&y9b' );
define( 'LOGGED_IN_SALT',   '-SE$xD.M?8]I<S1JxN![T==Ls2cPQTpa9bqdri+oXN$+:sw q.d*,SVHL!E)G]op' );
define( 'NONCE_SALT',       'T9$;?$rYRJfR4@8^M#F81In)&a6OF~W.=&i96C 7g=^XcGN>I@MGx:~H?UPR{kCl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
