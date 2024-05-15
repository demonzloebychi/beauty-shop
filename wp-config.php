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
define( 'DB_NAME', 'premier-shop' );

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
define( 'AUTH_KEY',         'c/QM9dLM.e5.Ut/}(WqZEM[b*Nl$o[Rqu<Mv~*-[x*5[OmClikMl1Xc8)b!-%~ &' );
define( 'SECURE_AUTH_KEY',  'Sosxu#IE/M=mx%<<x]r0w%_z_?su0)>|S!D+(1xkBWE!rh5HjM(2zOib$V<BSdJk' );
define( 'LOGGED_IN_KEY',    'k>(C5`7T/6P%}kP=.Y%=fcSV=iuS-r=gkE~1V,|DJ=)MVKJ^Huq3r$[gfdKKTQzj' );
define( 'NONCE_KEY',        '=;:{Ty!%0sy$%LHr5ou3:Bs<F! <Fp=&N<r.mhslkXtrhuYsU>T1iYAs`^y@#L9B' );
define( 'AUTH_SALT',        'jm=6JvT{,K8HVe&)Oy|N~CjD7v0+~`PJVOnZTP-+Di|:jUu75-)oO$-o|.;m5=hi' );
define( 'SECURE_AUTH_SALT', 'WLRlqv1P@MBpp!:,p`j9?8tySR?4*-QQ!2X2l%Ro7?|7vdK3T5 E,^4<mb_#;R2u' );
define( 'LOGGED_IN_SALT',   '2@c.= 2)Utd<S+zAC+az)r/cfp,@Uj|xsJcVRe;.s@x= -|!knPJ<MVp|pD QO7F' );
define( 'NONCE_SALT',       ':zopMtn g|ZrQzEw}4x-G280qWVja}8daver)b{PCxYp[e?2L_40sRmz4[nY.6@n' );

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
