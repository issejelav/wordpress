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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O-,n/u?RgCR6p,XG/u2`l[0o-pJ$rXv5SvxW]<oj]OK:l&uQlE0.e)G0r_NF0q#z' );
define( 'SECURE_AUTH_KEY',  'ST6&6mQq*Ijv+x.;D]L+%v=ip7q(-pd|q1>s_:@tjQTi(6B#j,jb(^W4GrD0uw~k' );
define( 'LOGGED_IN_KEY',    '6bq5_9@>B2*]%4%rZoJ*[K}]cFfo9S4MaQGB/H(rs:|]3;_0WQHTf=<4 [43rh<3' );
define( 'NONCE_KEY',        '!)1$uq)t}D/N>;J8 ]}v@5]NR|mgadxt_DO*dO ~*nW}i97}R6vu_n^>-)7iRO]D' );
define( 'AUTH_SALT',        'S=WY(DkJozQX66Suj^S6n?#f]YPpq(0-CmnP^WuA&)Nxg]k^aqTxJDTwzUt?L#e5' );
define( 'SECURE_AUTH_SALT', '5Q= 0+*N*`u CmN<RQ27wWhj{fZH{_5vxM/p[ke8-V9>FV_1PY/Vu3[C7NX.:~O,' );
define( 'LOGGED_IN_SALT',   'wy0o82{,GaIv:j*BTm]ju{Bc9}:giRS!(_9_%z]Zvo}q{rL1qq@1Yq~+{,+%qSUX' );
define( 'NONCE_SALT',       '(npIN^jn4q^9Eu3GF5BFa-]1o1Wp!3(&/$;wYl#Bzlc>so8/DlEI%vPB+Vu/($]~' );

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
