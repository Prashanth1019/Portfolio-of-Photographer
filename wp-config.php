<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wptheme\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wptheme' );

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
define( 'AUTH_KEY',         '{Sm?jyPho>vp]Wa85w=d8Hl{aH/.kf#m?2}J@r-ivI*H$f#vbp|O{siaWB:$RLai' );
define( 'SECURE_AUTH_KEY',  'Ednkzw28LQ](#<ysM8B=}YwPWr{Q6t WH|V=_;o68hYIFr7+#iGPa{<3m/dT1uOt' );
define( 'LOGGED_IN_KEY',    '{alCUR~S~$-102}*Ua@VjLw~1@zH|@(v{zIMQWA/X>oQ!3&jA{<<Ee)z4q)dI`kq' );
define( 'NONCE_KEY',        'lCV3kQPNh+Z&g<pbyodVPpq62*3~ oQrE4]32/cDgf56$ue(b[L^MeG^l%ahd<KW' );
define( 'AUTH_SALT',        'B6n)7ET 4}02]2h]_f~26{&HF5Es.|y|df dp[X2L.,k)9Doakf!<smd:pZ$f$..' );
define( 'SECURE_AUTH_SALT', '!MYH/&_&^Cuk2aF)3T^*T2j2hu;(Dc$s%lB5.5LN!@F>hTYs[A.%)qMIwBy|(SAE' );
define( 'LOGGED_IN_SALT',   '{[AMXPu ZiNgSyY|NvQQLyDrAoX&va5Y2gFU$Y%WTf*5lQv/P=t95>j4_7%o.2V!' );
define( 'NONCE_SALT',       '4.>mtc@^*UQ<$/iu.!b?g}MrSD){!wa?~pY^52sTwuIRhVdLC 0dbJ1e~^s<<c.&' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
