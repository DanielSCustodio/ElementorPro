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
define( 'DB_NAME', 'elementorpro' );

/** MySQL database username */
define( 'DB_USER', 'leinad' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '@2U}|[71csc0l3Wb3<F5TNn]OIvADWocVLALK;?p4,(2$)?>Zb[!4+ZFU6/pj{UC' );
define( 'SECURE_AUTH_KEY',  'LP%{Q<Uhy%JJ)X3cT3ZoN*{3<G6}|<3QxH~R5X.XGh3e)>Q1|?OaTjI^q/bWB3d3' );
define( 'LOGGED_IN_KEY',    '0r.|uXql|sU#wX9GH4IJf%37U#F;iPds]0]8-696()kq%aGn3rexQL<CjTLSn[S`' );
define( 'NONCE_KEY',        'avUY1-g]V`(IO#}1ZP~ln=P^a0s/>Q61K{ndJaz6@RXRNfV0ZLE61A#c~D$!HjzU' );
define( 'AUTH_SALT',        'k,>38wThfDt}c~oxy3jcbcy5W#1m/)d)?,W0Y:|g@qEs~X$X1bQDO& a1YjQ_7Mb' );
define( 'SECURE_AUTH_SALT', ')v!J4=&.S~n3% g=si:ts;=;i[$&|ZO~/./B3JK/c0!Mbg?UjVivjr8~T/NsWe|:' );
define( 'LOGGED_IN_SALT',   '!p<F;u-(esz1H+wE;=Rq(GM8itfF2osUr,=>SHUPKZ:9t!Wt`OIE,}v<68jL=pn=' );
define( 'NONCE_SALT',       'r1WV[xBfGkE-G-_h*<$!Mo`hwn#~5ha.8,u))rUYx5|rHnSUK=r%}tJUCoxAy!8]' );

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
define('WP_MEMORY_LIMIT', '512M');
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
