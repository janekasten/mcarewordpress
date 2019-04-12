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
define( 'DB_NAME', 'digital startup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`vRC@JT(_po;)(>B!OBVT5r:#,sVXtb]Ts|eOV8{5#2NujLt_L!r1;[wQ7*zky$q' );
define( 'SECURE_AUTH_KEY',  'q=*AeFy$/ch|V$,=Sy(/a[l;,KS^xm!?q Ae%zlQe%&hjE=2Y`ke.dilILO7`eZ/' );
define( 'LOGGED_IN_KEY',    '%Cmen&[c=u+g3L6r6%H>h*^8q1@GrfH2+@1mA%;yhLrTg&4,bd8[3W]ltHPZ/kvn' );
define( 'NONCE_KEY',        'JQJF8wnJ?^AtFCyw_ELJj.#(_1LDGE^yK7~n#5Jj};l:AOuYwS[qJ#]PS}%?71x$' );
define( 'AUTH_SALT',        'slL&D5:8*SE/hu5`.f0[M?Aueo;3RYQBDB?(72;wI%-YFO!wp/h#$0QsMQcoMP{>' );
define( 'SECURE_AUTH_SALT', '5I rd3)).?V/t9PiI:^<bhH_E#CdNGo) #V_0S?Qg..C9(aM/J0DMehfv,V+pYgY' );
define( 'LOGGED_IN_SALT',   'n5xD]uE!JaW[4Z:2W(r~7!69),u/6fo0c`kGkiXdI|`!Xkx6-unQDnz3<;=G9yOG' );
define( 'NONCE_SALT',       '5`[J%f,`(U{mi[FyJ-;weq {^:`K%>1,v$B2U.tuzbL}w8h 4`yN|~OO~[A]}s1x' );

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
