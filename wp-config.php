<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'nmr' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EFsT0<}5Q3v]Dx3g=NmhghA_*.h.E)h,=on0!PFD[<uwVM#d l(VOUYoZh%`{#`5' );
define( 'SECURE_AUTH_KEY',  '7!L,*ec;V4)Abq6D._*c8` ]}@.%% vV!!;!lBif?yS-ymz~4:jd[gU[C(Nur.9$' );
define( 'LOGGED_IN_KEY',    'Tm,:4XF]aV[rIB8:cRoVLUDi!ht,5JP(9z_#D}A0*!@f:6Dq:3=4WP}-&l#DbFDR' );
define( 'NONCE_KEY',        'he4_ gIQuw<r-rQ%FXN!O;%^]c7eA*,kkA8oj#h?.>Q!q:MGmJ:+l#p`%>K2`*bg' );
define( 'AUTH_SALT',        'l16<_;aixpH?`IW|<kGI^, F66M]xTr<7UoZWfLO7#-^O46#KfkRPc6y>>i YUH|' );
define( 'SECURE_AUTH_SALT', ',j<k`0|u{p}.[a[40V48,AUugsC#s[6%g{Rs~qUnvGRz>vy|G0+N^=MQ$)7$%Ewn' );
define( 'LOGGED_IN_SALT',   'NWL4x/{>{!:&!beFNI))+E@m;M41R=C~[ 6y*9~i]9#N{913xL/o>&G,H.NEzKbM' );
define( 'NONCE_SALT',       '3l|4Eky(wqAAc<7ctKajh,igy F+~`VL@%v)pZp(3[m8]7A%mMeoUPSD{/+Q$KQ?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
