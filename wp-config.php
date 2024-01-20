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
define( 'DB_NAME', 'rabbit' );

/** Database username */
define( 'DB_USER', 'rabbit' );

/** Database password */
define( 'DB_PASSWORD', 'kqj00147' );

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
define( 'AUTH_KEY',         'R;ob}@#^|XEpPQ?_MYLp7eUn/R HM=NHYmNaMFaC334,?j<Mw-[ossZ}]awq]MN7' );
define( 'SECURE_AUTH_KEY',  'A_e|wZ_/Pd8e*N8XxRPQywgl|Fg<$W+e_C@N8B|t_nLWNK44zosw,Bw`-rU2#q8V' );
define( 'LOGGED_IN_KEY',    '-_]c?y[QHx[gTEFS$-poe- 5jk2s&|R&S|c@!)Aquq8&08B1>b#oBoKf95O]X_2D' );
define( 'NONCE_KEY',        'UIyP4h}Fc|U9:(/v-p{KU~Ync1+o}DkP}0]?{KmN<O%^?jT2gGW6bFD~a-Un|U5*' );
define( 'AUTH_SALT',        '$u1Y)D1d)?~,vg~k,NC!7`zXjEGIY8VYPzHS{i#>V#,=<|Hu~rFk_erROEcu-uGB' );
define( 'SECURE_AUTH_SALT', ')pRTxl>P`u57f41gL$*EP5b+}HVpLFG=0C6dC{{Yf_N#-:GzuNh3z+)R>cdYkET%' );
define( 'LOGGED_IN_SALT',   '(@fF =.+<|+~c2gg=Da$VzqJ3}:91B8.,,=E#i;K}`zDB;Di>vARL4?Ah-8dHtPY' );
define( 'NONCE_SALT',       'E/*UgqKP_mUwK+$w:/U2<XK/I(IO>Q/j7Y1;rkL4u^F_DE9QWp=M(IlnqA977u j' );

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
