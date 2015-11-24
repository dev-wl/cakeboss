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
/*DEV*/
define('DB_NAME', 'cakeboss');

/** MySQL database username */
define('DB_USER', 'cakeboss');

/** MySQL database password */
define('DB_PASSWORD', 'zh7pTtdZJq');

/** MySQL hostname */
define('DB_HOST', '46.101.36.226');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/*LIVE*/
// define('DB_NAME', 'db592984755');
// define('DB_USER', 'dbo592984755');
// define('DB_PASSWORD', 'LK0hv45Lyg_cb');
// define('DB_HOST', 'db592984755.db.1and1.com');
// define('DB_CHARSET', 'utf8mb4');
// define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f_VmV#{&G&`_]sQOL!oLl.y~h--Wm(+^7_(m8tw#nf+e{[9;96il)!*}3ed?T-O/');
define('SECURE_AUTH_KEY',  's4/&. DMSi,Nb+Mns^tp IO4A-5i=u8 -4>|@(J,B-LbBU8+Xo~q8%NA?EP%<kIx');
define('LOGGED_IN_KEY',    '?~z:6v]*#/]e]N}Tlqz|:K`}W][#,XW-+-,u@-G_`r9jx_a*v5^/T.:A[B$}.xfB');
define('NONCE_KEY',        'Xd+BT|w+2Qp4pM(2?!1n`WZ|[3gLV(g]?!r$|4So!-06n^VS4XnIITOKV*-VrFJt');
define('AUTH_SALT',        'eMPQQF-JT:O-=Ye1s*^3+of-h25u|y$3<<B%}-=z9-~Qbq1fvV7}P4t<csOT{#}M');
define('SECURE_AUTH_SALT', 'E)-6}^>OJgq?Y~slIU+S/>G.),B`kJeSRL)D]H,>p,=C1pGR.J.N2W[ J+NiN,s*');
define('LOGGED_IN_SALT',   'C&qy V)=a-bKK- ~)#~~K-8b=b_>_t@qitV[-FpD48m8TIReA>[`#<,[<U2fj21[');
define('NONCE_SALT',       '_i>FnZMKg^0 dGB8bG7-jO4E9|_bFEL5U3Pm.vioO<bRUw-)in}K)|g1<fi4:0|V');

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

/*DEV*/
// define('WP_HOME','http://cakeboss.dev.wonderslab.com');
// define('WP_SITEURL','http://cakeboss.dev.wonderslab.com');

/*LIVE*/
// define('WP_HOME','http://cakebosscoffees.com/');
// define('WP_SITEURL','http://cakebosscoffees.com/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
