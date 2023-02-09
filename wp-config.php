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
define( 'DB_NAME', 'wp_planty' );

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
define( 'AUTH_KEY',         '/O>S |v#00(yX|n9v2,6jd,E~0V% P|P@%k1KwBIsH>[z:%ps`kYs53*?_V{lJbS' );
define( 'SECURE_AUTH_KEY',  '@.qC.sLh3@9:g$Z^U=vLD+yCx*,o}vyv+3^sm5h+?0Lw%g.rB;Ozxw|>pp%x>NE5' );
define( 'LOGGED_IN_KEY',    'v+OKYRih-2jJL<fvE$v,0?:O1-S(/H^#K&d7;)h0b?+x7{([|1|W.^/)^xYndZBw' );
define( 'NONCE_KEY',        'CJyPI}-$P4:1HB`|*a$s;xU #_pA,?k_p0HiJbv-ryZhK%7!?Th([!&)|jV;!Y {' );
define( 'AUTH_SALT',        'URcyW#y[<Xf.m%fR,btQ`tlQh3B^clsWLH#c.~:JmJyWSvK1_G.1XIY:|L@o~iIC' );
define( 'SECURE_AUTH_SALT', 'xAkC)3n9G%`i&)e0E5},3*KnHDn?> &9,vh]];[|>H^e>{?|^6>4:enuL6zS,IVG' );
define( 'LOGGED_IN_SALT',   '}VSBBd{XWI.$=h_TC]{~.I13/%~l1wlg$2h[@3=V;`p2UrLNL{X4;Pd|BFBTfnqe' );
define( 'NONCE_SALT',       '5).bG8Y?rZMLs?a*JV:_Fl+;8 CdCxVyE:I2cx&H-((WP[0%u$JLao~gsl+R|Fex' );

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
