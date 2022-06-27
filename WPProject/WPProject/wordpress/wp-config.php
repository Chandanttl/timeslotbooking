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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpproject' );

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
define( 'AUTH_KEY',         'lNHdyx`@T)aqj{F*G-vC{FSmmdd[nq95/1cU<TZ`2|dWV3#?yl0f`RPvy[8P$1LA' );
define( 'SECURE_AUTH_KEY',  '`rc#6$i(aY/,73RrDlULy}TgW)wN0P(j5JiRn@)?~zHcY),k!{:@IPBpHJ5TAo}v' );
define( 'LOGGED_IN_KEY',    'kUfj_Xf8 )_Q,#+*5S?_fZ/{=TRw=~K>>s78pMkzz-;P$ka`SshWlEC2L&SjhzSn' );
define( 'NONCE_KEY',        'wi?]l%)U)#? ,F$MtFU#M?w5hYqMpx%yHfsx.>%-=_:YI4d=_nHM>JVGkFzF?S=X' );
define( 'AUTH_SALT',        'l3hShxfNAT62xfw-wB1c[GRtc>(xzrWM3O< PU]dkb!CI ?V,j 9r!^lh(z%Ol%}' );
define( 'SECURE_AUTH_SALT', 'XtI-ImjOn8,a7RD>27>F!*Nf8^]_uJUbD=(s(M1&VM&IIlk)6l [l&:M`oE?r<e|' );
define( 'LOGGED_IN_SALT',   'C~4@&sw{{%(,F_v.>;G60d JK}dNO<{ @UrWqz:fs;ln $r{WhkS>hy:_bx]o:D`' );
define( 'NONCE_SALT',       'ig!RcgAnebl4R?.MX1)C(m8D]LNjE1GK|2m3QI|HN|omg+i;0z8rg2+JIXv74Q9G' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
