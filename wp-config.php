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
define( 'DB_NAME', 'bd_fundauneg' );

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
define( 'AUTH_KEY',         '9= V3Xa;;W>w,jM{mVN/]19RCm]n8*Ru7|)Ksr}MX||I5C9=H>Ma0a%X{$nJBMri' );
define( 'SECURE_AUTH_KEY',  'dx%-eW,J&JaZA9? @?#D/iuR-}YA0G<v5{c<uDtv{#N@#DbE<SVZj$bVlQ7%a(d0' );
define( 'LOGGED_IN_KEY',    '31qIpcNVv@ZFIVz&_Z)kOY0!I5*=A1$=u{=+OkKQj,p>FZC6{5Q/:WG C(r1%VAb' );
define( 'NONCE_KEY',        'I/OM)+4JblHUAKRuZCHVBO)W<c%#h~P9Z1OfC*&G]}iZ%+m67xLQMly/>;D|9f)H' );
define( 'AUTH_SALT',        ':$Lo@Fq,~BKA6oI=Nxp~3bTJE2slBT*^_nGNQ]!((tT1+A8c3guH:[SvcUGcvt>[' );
define( 'SECURE_AUTH_SALT', 'Xds<-gKQa)h|ysb<~{(H,T2gfmucXE=WS$Qxn-(gG*I:`-@,uDfx4x*c!@,[rX3U' );
define( 'LOGGED_IN_SALT',   '$SW*4WAq.t>DpJr)]463b;$7R?E}r3o6@J8;neTb}Q&4`[o[@J*Jb8$MuA|~w*y^' );
define( 'NONCE_SALT',       '7~JmYxuX|_SNpW!}r=^Pg/31b_|OV[u;[MF-~GwUQw0}HvDWDdj7W&PgCf9.12~|' );

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
