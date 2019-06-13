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
define( 'DB_NAME', 'lilianagomezpf' );

/** MySQL database username */
define( 'DB_USER', 'lgmbbtc' );

/** MySQL database password */
define( 'DB_PASSWORD', '(Nx353xN)' );

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
define( 'AUTH_KEY',         ',-([5u*SvQAVE,MFQbrqVX7#$(}IEW17})^1JLYX7tHK$@A5GkE0yJmE7-EL/(#=' );
define( 'SECURE_AUTH_KEY',  '|+i5+`1@F9ORql9>1W,-M{CVX)x5>W}/_[vjdEW}xyB)iBx{Sp-Vk2J`qO+3e Kn' );
define( 'LOGGED_IN_KEY',    'OAlV!Y9^q.o>L7(KC2*bUP,fwKH-/d^{gwtUnAGbd~@FySJY[76;RR@R)_&OcHFy' );
define( 'NONCE_KEY',        'k;3t~HX^w.k7uQ3Sn.Z#:V*&Zu{`^Yo~VBQgzWm MXr{~>_FexNa~`%8(1p`0X|l' );
define( 'AUTH_SALT',        'ScX;WgBhj}N6anQj g9sIjqV;%lc?er`K|&?M}7].w+H!;XjLKuM&:p;+,Kv=g%{' );
define( 'SECURE_AUTH_SALT', 'UDCK/Tc^)Skq&;=zLy]Z@9Y*U[VzAP6;|0Csbr-O5}mS[T`#Hwa#Q?m(Q_7yM!4T' );
define( 'LOGGED_IN_SALT',   'El~u+{Fl6x+4)KahNB)ezy(y!&N%b=dz`VIYB]oI&Jgo.$aIP]i0TrFG-9ja#_AE' );
define( 'NONCE_SALT',       'YI*C<0VI[NVy}bvu#C!)O7^.GL`p/v?`|x=TET[G6u1Q[D!c(:|BtN/5km(4,l{|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
