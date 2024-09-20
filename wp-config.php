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
define( 'DB_NAME', 'wastewater' );

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
define( 'AUTH_KEY',         '>D@)B%t8r{*-PR|zjhRM_>ov4BYZFoywIx*>z.?M-:TP>RgrKC%h~hf2N)%S+~9#' );
define( 'SECURE_AUTH_KEY',  'CUj-PD9iF7_9LpfI8cMygY<4p#Pc/98=iR%[hoLlb0xT,iSxsHBlYZ7c+H />ZI_' );
define( 'LOGGED_IN_KEY',    'Oga$:~;(C{3i{Uqx>!`vc KJenj~PS91yR%y ;%4-chE7iwtES~t~C1+Zd)zgS-G' );
define( 'NONCE_KEY',        'O14/O$D*DuT;;MgPj*r.Ek88G<nFbJ1y^a5JJz|bHU*,t`d2:5#uEi)h[_2Co{R`' );
define( 'AUTH_SALT',        'O^%N0m-t65rI#`@,u)n{gFG7#jMN~lP36vEOp?fz3UZB(Ett &lR1HiXP@-Jhwp ' );
define( 'SECURE_AUTH_SALT', '$HI3o`qOBB${Q;|hKx3Ug)2n;fJWWN<zaK1^:hTFhiYRNf/K:j8QQ@VYg?8k|OOM' );
define( 'LOGGED_IN_SALT',   '/k(l8({{l)VNh1zw`,bc{/V:>)K<o$#<S,L!C_mmKyDhoFy?lC(l0BL!D-_>oJvs' );
define( 'NONCE_SALT',       '0-&O?z=p&om=?5jkiHldEQ2ZpG+<Ks8@iNZT?>kxOsFd(@32L43urBe4 bS{d1NE' );

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
