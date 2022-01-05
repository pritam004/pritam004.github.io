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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cv_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         ':%ix]{?-0;fz6,/f vf1580L}TD;`<ic>i@Bz},XXbOQM?v&nz=yU(yA$]7gPEvc' );
define( 'SECURE_AUTH_KEY',  'G^l6:bnH^_Y@Lg5Y@wXtu+]aO+z5V>|?,mr%Zg7)@L(>3bkk2i36*9xA.wG#evoC' );
define( 'LOGGED_IN_KEY',    ' o]:3DA}joE]W[Q@tAK%9Ny%5n,rgQ?C`R!d7l`(2@Mt0GyGb?C0b/Y>%zjEYMDP' );
define( 'NONCE_KEY',        '2b~{/mV$qSewrc*&8)hs;>%k96lI{V/&ix3,]Z4Wsg3H+cE~-OYcXMRWHT]j-AX)' );
define( 'AUTH_SALT',        ')j$:+^mWMfXvAOI jF-Yw*+cMG1K1)0G:7rKR/^`!:sC#l<k-^),((~En2jLl`/B' );
define( 'SECURE_AUTH_SALT', 'q(UUc:GX8VrD{JHkv?P?nB3[aiau/1#1FB*mkuwdzk-J<n]t %V9CId92p%_LHa/' );
define( 'LOGGED_IN_SALT',   'dj^VCR+{W;;IANyHka?J9Q<^w`dn/DH>sjoNV2,Q%*xW9lBc:0{]p;mW]^4.W]sN' );
define( 'NONCE_SALT',       '7ihg+ijd(vex|k[EV3XyK|_LS9mG#^l:?)t-1fOwb l:]9U*3{B1>`=k#OTG(B?=' );

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
