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
define( 'DB_NAME', 'myanshop.store' );

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
define( 'AUTH_KEY',         '~ya8^)Fq_1bYbBhJnyZ]_0`)EJbkfol_!afn?(4,ZK<Nd{WVw@7:CLiRD2?,dTp)' );
define( 'SECURE_AUTH_KEY',  'nm|Ak%sH*cEOgcwYV>6Z/V6RrjL.}]w.l(Qwm`xp2Nqtj<~ak0BTd98;V?oskf=:' );
define( 'LOGGED_IN_KEY',    '{L$Ce);Qmjn|OljK!q>8+P.h+Q;D/b4b?XkE$~s5pSMcV%)JPz8Y@x C}jcxlwQ#' );
define( 'NONCE_KEY',        '?nn:[4]G2mvDXT*1/fc592p+j)*bjF/!*zkC)t{_[GWgMU%l$Ty:30?zRe;T&Q,4' );
define( 'AUTH_SALT',        'U,+k^~>_g.8frey ~Fusz#v(.%!^L<m&*3bf[RO-79*.H4&)I;D@PRQi/0*YeN3B' );
define( 'SECURE_AUTH_SALT', 'Z9 aC&`}ijPIL ]{Ti _,wFpddm$c1VjTYm?+UL!Y$&G%tT>%N8zGB_5|<8MjLWI' );
define( 'LOGGED_IN_SALT',   '^~yMxmMv)9G5OI4hJW>DM^]*;Jw7:^S}|EwD95+<4g|Vs?,3j+CL?d<|C>^-!F- ' );
define( 'NONCE_SALT',       'KfV{`a`uHdz~oz^d/P+EZ}(&LXE3B}5|B39wv2k]Ho#eZZlfdw1(&lpagm%yF@jj' );

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
