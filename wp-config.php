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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5}6/]kW<<::7.#>Vn0mguS;w1*te5l3[n &{l ~>SF:}k,Ox)MLcrSeuo#BL<*Jy' );
define( 'SECURE_AUTH_KEY',   ',Ap/..FLSJ0di%?ju3jtl+eK]V|Y;{ ~<zz2s&g no[/RsW&xEzFE@%sgZqw!T w' );
define( 'LOGGED_IN_KEY',     ']_laZhP;*R[n%Gme- (xG>0&1LkOiw_B/l4q#%>g|<9!U*RQ=dkF/aNhyw`ot(Y1' );
define( 'NONCE_KEY',         'bB$/ol%.Z39n11a_j{{5V{5zC:xQadyG?)J<{a^HELgl6E;lkrrZm.^r c FY<Yi' );
define( 'AUTH_SALT',         'feT0HMv?a2.$f*DfCN0,@ [ U|v{2u[Y#>P&DiM3~Z%.?j3l~@gf|Ojl$,x!gQ%v' );
define( 'SECURE_AUTH_SALT',  '-.g7_Z9 3lhNL@4V,<geru{I^[&qxk3}nVU)6[b-cHJKmaFoZKX1&%Vpxm__to5_' );
define( 'LOGGED_IN_SALT',    '~K4zgbz(;!f9pFnbu;>K.k|(6Zp$Jj->B y|J?v1$rfGw;2z*x}JI@ mD!11Ab]u' );
define( 'NONCE_SALT',        '<V?l6rtNU9Ek<)i5nRoF?5D$a0|dwT_**]Td|}0t_zr?V%F;S8,bDA,m7._2{i9P' );
define( 'WP_CACHE_KEY_SALT', '4@aTD]0S5D?u@I-slvG[*xMr(QLe-vDdS*}Hr;%3s):Up=?D,y?XW9)L ^9@x&A!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
