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
define('DB_NAME', 'angelathome');

/** MySQL database username */
define('DB_USER', 'angelathome');

/** MySQL database password */
define('DB_PASSWORD', 'hs4UmnE6hJh3nqRa');

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
define('AUTH_KEY',         'eN(BEK_RNp?6xtxRSV_):fGH@+(F#W:*/Hgzlb44:0FL^J6yYvQE.wj,zYj^IRMU');
define('SECURE_AUTH_KEY',  'DTB8<@6beS<160/@P!v9A`[mlDLk6 M+6wv6]J$OzMa=9&>R?,1D~zA6&uW+zeSd');
define('LOGGED_IN_KEY',    'AI5Z>Qim4[At$6]_|a/.qJP}lF$f<anjioqx_]PzVpDrY@@TFL6N`HO*:0Sa5_z;');
define('NONCE_KEY',        '_F:9z>NQ A &jD-49UKcj9F.:)m_sF5o7!4Ky/p-Aig#CeckZi@Pz*,HeVSt5+&5');
define('AUTH_SALT',        'IZ~xw#Z!5H$to5w b]N*t2Dwv6EqYqU>uL8dK;*jcC1J&`>^m<J]^uMC!i:DU]Wx');
define('SECURE_AUTH_SALT', '`Ly=U_H#V?cM{vZcu|)rVQKR~$x+icQl)D:SEEi.*BQ!#LxAK+AL}!:!F(+a|#.N');
define('LOGGED_IN_SALT',   '^-eD1KfZUDs Bx%PXD,pn2Bf2Tu+X~_=~**$7lYJ~fs?)e+H?RC7BL3rAm.c2<Po');
define('NONCE_SALT',       'w^)$e2g!,(w5!X(3cUMze1N2ToW|vo*$Y_o*AIoA3x)%G2`p{2K*6T!*7VQ;(/83');

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
