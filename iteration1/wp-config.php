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
define('DB_NAME', 'wp_article');

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
define('AUTH_KEY',         'cL|L2:qR^+Rx1N1<!J/GRM3sW,9HEw_<]r?t5Dn`TlTIXzFx?D3KBLGw%vb-K832');
define('SECURE_AUTH_KEY',  'kMx9)?zMHe1hR>Ryll|Mvmd0=N6GmVN5;=nW%pKFZre:uHXM*=u1J6k:OrAsqq3=');
define('LOGGED_IN_KEY',    '>IL(Q6j}^hM];A3a$F.|hS*#hC|4Qd8U<F#g467j+HQ^brRW*Rya]5uj|9!6~rxR');
define('NONCE_KEY',        'Yu~yEg4-X+r8i+5DIY^4@s&#TS[[G>rgBomPJFC+Q#pG1$`cz9bZ6V2w!1Jt: G@');
define('AUTH_SALT',        'T$z@,XI03DF3vVF%Ss:vn$^4*[Nq@~jk|Q1MP7,l0{W`.0s]uX?Hs+I7mrnKZ101');
define('SECURE_AUTH_SALT', '&kSQt{mkbHT&phHO&!TN?m47u7~%JnG:V_oDK$6h$TFQ0^Wpqr0@cYjQ<c.hggqx');
define('LOGGED_IN_SALT',   'W,+*63/V8Pv_et7 0<%S)Ne@U5[~2FQp[3v1xV}M<`z9K[z+2Pq:hJ@yJBKL]A3 ');
define('NONCE_SALT',       '+=*[9h^Bg]PUb`#^6A;?S1h_G@>/}*p.br7V13-kikj6iLL1@?R)oHv?~j{lx{`u');

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
