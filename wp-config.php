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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andaliensur' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'f#lZCn&(jJZNRFc=;`lqqe5mLj~&f])rMuf cw+SWC-a|?N@L87Vl6)XTjOvY_m7' );
define( 'SECURE_AUTH_KEY',  'jN$9/=t1wpJ]_&OyQ;D_)X`}/8tuoUgu50mv(~pGZSYSJ/cy+zMyxB#rKV_sO7~C' );
define( 'LOGGED_IN_KEY',    'N}p=quh2<4VprVs%9&?62o/6#5P;8pY=Xbo|Od]EHsGBsQbZ]nDy4|C_38A3kt:x' );
define( 'NONCE_KEY',        '_!|`Te}nH7iQ~B{vDNyeTqNI1]OtV*a_MJc7k7gT5$X3G!)-!m&^#SP/`}^ribQB' );
define( 'AUTH_SALT',        'V@S[fj+h?rc/8q[?;%ZlB~@PkFyHM~}>=C^ cUYfIzHU:x#r8hzTdRD9I]kw$^57' );
define( 'SECURE_AUTH_SALT', 'Zr^xU5?tVty@W|Ae 8`Gk(ZUqTy19Z~dsd.%}X9,3vtAGDY$rwULYkS@aXs;W5%N' );
define( 'LOGGED_IN_SALT',   '-T;Q[ezecoaf!2xsUSdf232Ku?VMWE)]4<ap4ymIhg14?]/x>YjHcu?:UMyp#/a_' );
define( 'NONCE_SALT',       'N_OsM_[<U3QM|-ASWj=+#sWh.zNP^?=+ 4mLc@_)`KC2l]RnPJOTa$8K1jMTjb.F' );

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
