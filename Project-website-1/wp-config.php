<?php

define( 'ITSEC_ENCRYPTION_KEY', 'NiZWb3EhcSxhMltYQEh+Uz8hNypSLT5eP0gjTk8/eihgN2FPY1ZvQHhiVERXe2tjRHwzdCtsJG91ZURje2dBeg==' );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', '----' );

/** Database username */
define( 'DB_USER', '----' );

/** Database password */
define( 'DB_PASSWORD', '----------' );

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
define( 'AUTH_KEY',         '1lZt)D,Hl!p?X|bhc&[AqG{EbX)ZLc;7t4}^/c<o;`Iq5<$*^tP:l[ApUe(E$Gi[' );
define( 'SECURE_AUTH_KEY',  '+@q1+O^L6r7jhm21*LID#~fI)}#mn|P1On>q(Su:BNY1`yeYRFja?2yes&$cfrvR' );
define( 'LOGGED_IN_KEY',    '=%[.dD&F/Tc;bi;=sy)J`%OQCI~zHNU(v&y#6^o!KCB*j*7LoZo&c(x!zCslDs(v' );
define( 'NONCE_KEY',        '-URQ8xMIC<- lPH812t=`_t-|]XN=`Mzw0+x;c9[V&I@*=T/GIhqU)R)C^KBF_f.' );
define( 'AUTH_SALT',        '/0UWmXh{i.JF*VGW3rI*`z`#e8QP)m`mHb+2ykJ#<ot/^jtb]bSX}^V]{{] @=}o' );
define( 'SECURE_AUTH_SALT', 'SO4fm;,S+)A~ioaxwe3JizXt2;f)]1,7$ty6K7y/IO7q99=aQtG(M5e`f/6qTov8' );
define( 'LOGGED_IN_SALT',   'P8U+U%1tZdA3eNW 85 bF%d.ACj$Q(MSmLOu@d(^Ynq1*LqVbSe]Z|;(T[;KeB1M' );
define( 'NONCE_SALT',       '2#!xKPh8.!(r]E2?F=nwSw@a)y=,{buv+15D_n@V%:ADEg|k!JGw5]puo8J2,7`U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pqbjomhg_';

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
