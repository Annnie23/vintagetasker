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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\norde\Local Sites\vintagetasker\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          '>R~ 6ULuY)0~Wc$;l:L4ZkhQ7#(JsdE_zKk-5d4o^2IQ{,bq0:Z!zaS@ .;E~qh[' );
define( 'SECURE_AUTH_KEY',   '32NgD}n[5$5~(,LYhe2]aX`bdN`f%u .k`q}!)@u6WFmRj$+L%%Q-B*ak$XdKoLZ' );
define( 'LOGGED_IN_KEY',     'kd]!2om2NP2VX>Q~;d`]pqwD;5;]=xzRo0xD9NoI`?:~OH2Vl2a@m<<FcAD+,NL[' );
define( 'NONCE_KEY',         'mq7lxc?8;VI/!l39as)FVf1gKZP39vqYv_Up_9m.U*,IZmc1+f0$NWxZGE0YfX{k' );
define( 'AUTH_SALT',         'bpbKaA$85:u _:ra2}{v3uXIT Uf8OQ82gj1vsgCUIW&xSWrDeo#7861q-[JNHOH' );
define( 'SECURE_AUTH_SALT',  'X;ee44?rjC)%W@|R50A|8QFacX6y9hfMB%S0S&46}R~/kb4 cGqdW5)H#ppGrCL}' );
define( 'LOGGED_IN_SALT',    'Dbne~%0Xp)baKm:CPIi;zd#~6+r=}8Uf/4(mM$^%u:/uZ@sKsSgzD(ep>QC~;y9]' );
define( 'NONCE_SALT',        'v-&X^YqCC#MC}K.hKz*N%BkNPA9UaE_sx5v1gY#1,m>Tp,LvU@T1B)KjRY:3szy^' );
define( 'WP_CACHE_KEY_SALT', '[|]uh?r&_csZ.3}Oa=3I*`+F_j}^(ej`n<;r A/&s:wOs5fvNkS42JDK=M*2BdSf' );


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
