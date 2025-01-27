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
define( 'DB_NAME', 'site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         '2iZX{!1fU^)qz**85%bNMxMX<=PS$}z:}:]TZ2)AH>dwsk5<mL~o`_GpXHaGeu3~' );
define( 'SECURE_AUTH_KEY',  '([Mj  1$yaD9{!xsbXr,mPJ_F8>Zx9x&iU@an<w=f{ks0Zc7U=n%(]2Hi,WWXVWb' );
define( 'LOGGED_IN_KEY',    'fWCET!Xt+jhB&D]`2ouAiT0w8-4iI9x;0nbcXJ&w Z)7^.+_Wl^_uy ;0.en6Tdd' );
define( 'NONCE_KEY',        '#ixB1W rjv^LfR}.>{8+<1n(R)]T`(%+R?q>6y3%`1A)&w6(f*-]nE$zvz4S9gYW' );
define( 'AUTH_SALT',        ':8N>o5+@yD_GqB$Orp%V:$!66^[s3wvF]}>M}J#?zr~3Va|/u5Z06G/%Nj}f^p&r' );
define( 'SECURE_AUTH_SALT', '<+d[F9)Nki/UO|V|>!(AKcuHG0GeU:>Kxe]fkeqVE^hyD4:}mgGxwec}@!W[9Jh&' );
define( 'LOGGED_IN_SALT',   '8ru@W(9p$z1VE2K^6C&M#w(9[4,}1wdrU38GUlZ?[D`[WyPR{to%AS3jh1vH{kn5' );
define( 'NONCE_SALT',       '^$5h<6k}n]${a}5JDgWAOKviKo!pHlk:p%/?lc/x?,tD?KLueW$A&D>I#Ll`D}q6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
