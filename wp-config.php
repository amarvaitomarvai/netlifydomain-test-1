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
define( 'DB_NAME', 'netlifydomain-test-1' );

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
define( 'AUTH_KEY',         'c*hB9;)y%H]e$8&B;K20#sibh]XN*%HFfy.D)(X3NOi?lZO.&a2<mdGS^mQQ$JDi' );
define( 'SECURE_AUTH_KEY',  '],Xki5=F9mbvhKraB-;NT:6EAGZxZ`e(y]P/5n],XrOo69#=K9z)Ddv$5Q8FJ@.U' );
define( 'LOGGED_IN_KEY',    'Y*`?$SCHfq<08+E*R;_&Qv`DT-9rwyDgW2:NT{${Z3A0)Ce<Oj$@Oy;teaQGnq)U' );
define( 'NONCE_KEY',        'CwJ 86hg*WhmydL>KuXLZ#.kXp7[r1msJ|[KPC=l?<ue:ZYQJ+(}Q:ns~@}b@}zR' );
define( 'AUTH_SALT',        'wIn $P-ONia<N0wt{&nfU$ASJ=.@TJiw;J8fxBil?BLbo=BK=0QX#S?, Iy_5+Yi' );
define( 'SECURE_AUTH_SALT', 'RUG8y;JF,=zQiZ?QYe .1+<Jw#_YEN0)i|NpK..+S$:N-7z(HP&6zgZ#C+IL2#3`' );
define( 'LOGGED_IN_SALT',   'g_g30`jZl|:WAF-g^I!:~?0Ss+a#tBEqQ(h+ZSvP{bnm_9Ygfben+d%e*-[Xm^[Z' );
define( 'NONCE_SALT',       '[.NL?Q:qpo:tKLZ112{y|`mqdPy=Yw2;tT_[2@17uVw,OXgyoKN.i~3>=s:DUEzz' );

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
