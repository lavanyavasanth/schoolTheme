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
define( 'DB_NAME', 'schoolTheme' );

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
define( 'AUTH_KEY',         'z+A3:S:Lq+ CL w;k@E_c[5rymxKtBbym(/sg5wNfc$&^9$J(42m&cvmM[_GZQ{c' );
define( 'SECURE_AUTH_KEY',  '_S}f(?&{[/DZn3yPbo$$*lAFBYWB+y_Ti0e3VKqqU2~p$.(FgM}NzrJ{.(eLEe)7' );
define( 'LOGGED_IN_KEY',    'U]+)r>11dr-(|7E#vlY1~.klIw&/t-X/Iua)Qy_QB+yO!g/h3~nZ_fpj^)#tjVmQ' );
define( 'NONCE_KEY',        'DJZ{N8bM!{B-RKgx=cIl? QR`5lIYIwWWV<Bc~km;^hrXbRN9MyxZ,i#xkZ`5c~w' );
define( 'AUTH_SALT',        ' 3^#-26-QwD2;/4rVq[w>f>`1~C_jR idd_Imbx6X|xDbe#f^wY8/=K>>#,F@M~$' );
define( 'SECURE_AUTH_SALT', 'VJqNFA><a2m80O}COT-]-xQ/haU?89W;f#o3Rq:#dk]y<vtErE7a m4GBEcV*4f6' );
define( 'LOGGED_IN_SALT',   ']9(zA6J;WwxkVm&GdU!#ItKrF=i]>`%],i2l7 GtXH[u0=YC2_U:FLcV4AbvdNZz' );
define( 'NONCE_SALT',       '+*!e$u|;sAu+IK?{b7lk>uaH#@=ALnRD_/wp6m1SJuG9<TG<}P?>sv=Q/y_-sc!8' );

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
