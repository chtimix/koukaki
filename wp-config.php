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
define( 'AUTH_KEY',          '#e~ksY/1N|xiXtnOmj,gFw1_%gC!<oYs.>T>e_TghktP:4MSKNdfTAok1mPVj,U9' );
define( 'SECURE_AUTH_KEY',   'Yko[L(I; }NBO@eTD7 ,4:4jU$/t}2v Llww|DLQ|c,#b(4=>|j/LM(e$SBMz~VO' );
define( 'LOGGED_IN_KEY',     '&HvN^_Bh3 gH~RZz~1@(n`[/BKxuvn&#}a[f:d}(._~[y!er$iVQ93m&#Xs?-TI>' );
define( 'NONCE_KEY',         'GQY@^,W`O7=w~l*f 8FZ+kg-sr!aSnO?@K(14Wr1nz(_Pw.Z5#+c|wmHc<]btCLl' );
define( 'AUTH_SALT',         't0#8BI&rp.sec[10yqLHmyO4#al=re#9PvoVdVw*/f;:xsOUk@,g{i|(,zWQJrbj' );
define( 'SECURE_AUTH_SALT',  '}O-l8(AC;q-_(Eq%vCna5,q,Q|#hXu-+=@qK<*gXfgbY;,s<B=!D@M}f~!~XeY,o' );
define( 'LOGGED_IN_SALT',    '$+<k3:;:Z)Uk:)8pWM?4[$-NyzwPK$n8i5wsj9}puXng~%Ata=:r9O55c#/Jy.;Y' );
define( 'NONCE_SALT',        'J/xj]}k$S:1.-zIGm@p<7&,e%^(xZrBbrt[IaPKX&^jz&lzu`4ZkL4$ijf&:/Vw+' );
define( 'WP_CACHE_KEY_SALT', '8=UoxGiyti3*)=[T_wfnFVG:!T![Ym^c!WzH#JJcjd`L{(6I(jl_f@uzl4Pj1.+u' );


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
