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
define( 'DB_NAME', 'weavilexpress_db' );

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
define( 'AUTH_KEY',         '7Q=s?/c0HOgN{GB!;LN1bRkyVBHin|H5Fs<F`CT5XTE@nkRsbv<I_>u^:C- tgmQ' );
define( 'SECURE_AUTH_KEY',  'NjvXRbrcG90$TJ_B[%}#~5:P5Ukn/7Z:a{:K/B]6Vj8GS`%QutVD7J{pjbfG9d >' );
define( 'LOGGED_IN_KEY',    '#M4ma.N? -:&e>E:a++#@q$E3V pp&4!#1]C74N _Ju>(jKLY&}PTsZ-z0.O|l%5' );
define( 'NONCE_KEY',        'f%jV0o_`#THn}}n)e5V`2IF*0R{*4;gKjP( r ]}.[s^+f%Ix>q +74P+t/F>8<<' );
define( 'AUTH_SALT',        '3a]d*l#uLh6*+KU:.*(+GL)v-UJ8-,Y.(xI1!5VQf`N>-eh-m`QWMnTI#xz{9E,P' );
define( 'SECURE_AUTH_SALT', '*te%t)llvYtM*s/|XR? 4vHzot=_)j< F,^o`2+uFda&IL|O^?p)8:qEG#U(=fth' );
define( 'LOGGED_IN_SALT',   'R(vcK{3Jvx9c:NEf*/j#Dw8j6*[_zRYgAZwRe&R/[8gC$-gT;&%DC{r.jkS{KO,J' );
define( 'NONCE_SALT',       'Dt|*Q?KyK/;TnQKMXU`bNy@6D=Xd3&=qq3yNJ9V{YD8Ao@RDw0zNA7vIJ0De;^x>' );

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
