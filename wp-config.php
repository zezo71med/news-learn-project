<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn_p1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C3EDUaKh&)G!27G_h47#Yt1wVh)KMeEIVec!<T{XsMLY5~IjAM8Nkbd+uNf%?_$(' );
define( 'SECURE_AUTH_KEY',  'Vq(I-3y?K|38|zs#|S%sH)~@6;9qG8rTeN1%oVwSoZ{N$ezH&`)9[[+:8e]YgVaq' );
define( 'LOGGED_IN_KEY',    ':ui<u}OWFw*Q{dy0cKL-TUHwFWc^=#mUiO;+oE~>#K2#Ow**#p{ej;LG^C3(v,s3' );
define( 'NONCE_KEY',        'I8xh[~nvYMY[T$]PArK7P`[S(X+!eTq4sQ9HMc/6tnjTRpp{o(sYQWb]2Cf|L/Oi' );
define( 'AUTH_SALT',        'n?m %,=_l#)vxEovII|t;|L0#Et&Jc,xZ{9{kw>,J`[%un].2wYS_OGpipfma7@,' );
define( 'SECURE_AUTH_SALT', 'c7W6Ci#0ZI];yI!D0yN[`j(aj718Z>-6ztd{z$54Uy9^MKdd?^}lJj|n+=>wx2jr' );
define( 'LOGGED_IN_SALT',   '?iiAhO/wMrwrxzX^)Qizq-xw_;(b9&C?eHDjso0I!/tTb M`_`MYnZoClZag{<m!' );
define( 'NONCE_SALT',       's:yi^ W=n3q]XB1#hre+VcmFH3^fJ^J}r2vM+dRbU%8s+](aNlwZC/>]-rf};CfM' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
