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
define( 'DB_NAME', 'bmc' );

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
define( 'AUTH_KEY',         '+>9#wfq0!K0K6:9Ea.GNquk~+O6S5ECh>W;TJ-#rbew!Z4ZZn;~P0 @^JRoT.dw/' );
define( 'SECURE_AUTH_KEY',  '-Lc(J3%W~J,(SS6W>pJ~oIU)d=K;!n:#WcPU@=n),u|/ GIw2361cT#((!Fd.p{V' );
define( 'LOGGED_IN_KEY',    '_;7r0K|yDF|ZU:;I;$**Be=9XKU2V9;m(bW!XO?9NKJ-<)w9V7#VO3FQn:=@;W6D' );
define( 'NONCE_KEY',        '/42Id.Ri`/`@v-~o?mg7]1/v4/G!Aw<cOTTC78&7U,e)mn#q/Ad$;_ClX!|oMiCN' );
define( 'AUTH_SALT',        '0grTJf&j~/J)(COH*f]rlO!/Z %q?c=SF@Zc /%q x/*78HQ(rZ;34E)G>+a9)5k' );
define( 'SECURE_AUTH_SALT', '2m+9[VlMODssx_H$/6aD!+aBXO86@K!q&#?0%TOW)~mpfV|A]a?kP1`Kv)0aR5gj' );
define( 'LOGGED_IN_SALT',   '>%->M8b]I3hrURFXX5aVRDDGL[$il>B734p@UV~-N_!)NL]Cg97^n<z<O+w1<r@i' );
define( 'NONCE_SALT',       'NjXsM/&]Fq[Lyo:-UWH6-w_1l7??cZ8^dq6lsoD6^2E0$8NdCgBs[IYCK&P&.)$H' );

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
