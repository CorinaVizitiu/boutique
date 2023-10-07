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
define( 'DB_NAME', 'boutique' );

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
define( 'AUTH_KEY',         'X:e>FD2Q=H!&J:)9Al_D4|hQ #X5NH3qPZ@0~z1/6P9m LiJ8LeF#9d5d2siyXwn' );
define( 'SECURE_AUTH_KEY',  'z8^dDQ:l?|L>nY/dHuultC{k7&!?}jGM[$op}Crj%rQEX86IjZ.zIT;5?8Vu_=f<' );
define( 'LOGGED_IN_KEY',    'gINA6U|jj$zaIJf&%h}+|&DW/nJ{A1abe,L8hk|I!a+Sv:VH9a/;|Q+W1:5K8}p{' );
define( 'NONCE_KEY',        'y&Wq(h(tl0rBI8CUMZq$ ~j=Yq.O%vw$>V>zOG&lc^r+v5n1#D`o!m!t4v{]|)C2' );
define( 'AUTH_SALT',        '}P7A9nG0w(+T~x-[nYyUmD!%Czd>DgYky;}-!-U*OL$$gS]$%%NQJB:nwpKQ^BdI' );
define( 'SECURE_AUTH_SALT', '(a1TU[%o+QsN{QI|q1htvyIi:t$ bmdfrJs2J5 hEq$Bra]4d!bs.(!^.TiS:`%^' );
define( 'LOGGED_IN_SALT',   'zXaMzt]MZY9a~$&-$YfmG4hb%%Cufa@>To->u$*C9zr}bdqn{68BXism.jL~78tx' );
define( 'NONCE_SALT',       'pvE.qEK.v,e0O!mfi;fGU?c9zYP##[{zzVe4M!uz^AdfDl]wpknVilW@`[ijO)1X' );

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
