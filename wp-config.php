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
define( 'DB_NAME', 'A-H-Group' );

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
define( 'AUTH_KEY',         'cy%oe@h:>Cnl{xkdOSM~l7-HX/m0J[gST%&X;sP@dQ;I^TO<uo>oO_sU*a+_Tvlk' );
define( 'SECURE_AUTH_KEY',  'Kb~KCEGEw9`2)(DHUQjgj=IVLs^uR,P@mZZ3m&=|&^h7)Ym$!W<Ne*)()J&!HPr?' );
define( 'LOGGED_IN_KEY',    '{MO&d[N.>+B6Q 9f5u^G*xy|$0kq=_OQNmidbI&MV+#w1G}qgTx4X[W2oC$_V,L>' );
define( 'NONCE_KEY',        'b9xtUN?BvyKOY[FG8[:n+!!}20w+]/szQ5F?V/TM:EH{2PnN<)eO_|VCtf<!:uYY' );
define( 'AUTH_SALT',        'EE/#njDP;Fmrj/3L^Wp;$ Y1/a@|rEesl;.^K?,2HB!HH!Iyf6H]5V:G=J&%mxRy' );
define( 'SECURE_AUTH_SALT', '.]73i`zQm~>nXQ%fr}~op^!6|u!c]jUW6>Rx1bt_J*og/TM{jArkgQK)+XN$0du-' );
define( 'LOGGED_IN_SALT',   'sU~*PgAn:s>ZqS{1A%sglH{ /}a$iUxVs#-tTI|`ny6]]yQ;mvgCD`qa/gov`CAQ' );
define( 'NONCE_SALT',       '.#[%}1-v]..}bD%UFhuj,P}?rLejk%fm%q}$%Jq[27VcyS^3=K0%rV68]uN(g5:/' );

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
