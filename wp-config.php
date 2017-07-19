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
define('DB_NAME', 'excursionist');

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
define('AUTH_KEY',         'lC.e(&Im{b4)qL!m_CyH[-RMhna$qrmi5}.]S|z&9RHxPl>hz~~J;1LfPxo: dW;');
define('SECURE_AUTH_KEY',  '_WmBji])pSM4#?Q/zx-7}Yu)Q|FB]z>*)I[~2c]DcYj4Yf=t$&?xAynV`j>4Mj@k');
define('LOGGED_IN_KEY',    ']dw4 ~4Z(@F*{&<@oq7.pm>,f*3ns%dz~;PrXh,Uuf*p> vC6/:R6RYl5.2ypev1');
define('NONCE_KEY',        '_6-U6d.C*s.BtPI|#Rk9Jl[C~yTaD0f}5!([nPRF[f}1)2Y,J<5n{>KRS)v[8vp^');
define('AUTH_SALT',        'b-^79cI@L?<7PBcC#6HEUVkQ9M!PBAHi?iTTJc.qC2u;}9/^_F<UpzVZ*[ t:|FL');
define('SECURE_AUTH_SALT', 'i!<zWqB{boIXTWQ}H;)yqtdIso?)~M/$S_%-HDknSEq[kmjBq2:jk>2]kf=bGW]r');
define('LOGGED_IN_SALT',   ')v*QnH co+96q>8]~1%^DH~b_h.,<?+@fatPdjtc Ig3H?PoxJ<.au`56J:hla6x');
define('NONCE_SALT',       'CAU1?4GZh]=>Y)nz U1,i%IMBnbq]C;|2yp=1.f|d}#FCU h)b4[_tN(|p9NJ)Py');

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
