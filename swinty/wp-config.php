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
define( 'DB_NAME', 'swinty_admin' );

/** MySQL database username */
define( 'DB_USER', 'swinty_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YDrFSst6UlqhFQNX' );

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
define( 'AUTH_KEY',         'R@6|KA;dM i7s&Z&ON^rcpb}p^~JUrx)rpvW~{AJ%<(qf3%Sg!s%1!!hSe*-1I8M' );
define( 'SECURE_AUTH_KEY',  '+zVKH!!M&01l=xf#zUzOT!-4xUiY%*DW=GKmPm=)$KBED$rE2^6B<goP]=P`h Av' );
define( 'LOGGED_IN_KEY',    'YK0.lY>QQVeW6qqZ&:5Q9%P4C7x]>jF5mEH+fJ=HX>E:ekGC@`<ix%8 Cc+sw,36' );
define( 'NONCE_KEY',        '&>EVT.BiJf8_CU?x}>/NuvN;42Nd{]AyZ3gDam <4E|iIH$DRrdM<lg.)vha*jAp' );
define( 'AUTH_SALT',        'kUKhnh#43D!mb]ae0zVw?FvI3d=5[V?:h[;nGqxUK_=c#k]?E!<Ei}47Vc!N4/lM' );
define( 'SECURE_AUTH_SALT', ';xN_h$vB%b0S4~,;a;^L=CQe<g|e.aO2OpWoFUjKudo6oN,l+V2v&WN9k7xe]$_Z' );
define( 'LOGGED_IN_SALT',   'b7)fr.P3N^^+8$_cOX<a=y~lb j@!iYb=yuyK[UX=k7_mLl<O!/T*w?Hg3Q@^Ccs' );
define( 'NONCE_SALT',       'c(!%@8Ou/gK_+?4yXsfL:X%6G6mYQNLPyBP-V=XC<F4oy}-34/JR4cTh]_z9wRUG' );

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
