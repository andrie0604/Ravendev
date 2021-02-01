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
define( 'DB_NAME', 'ravendev' );

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
define( 'AUTH_KEY',         '0Ynx/(X}Qqgo9O5pJ4$Ctf}=*>rilMC*^huE`W5XPY-{fF1iu4?;bNK4ast qIij' );
define( 'SECURE_AUTH_KEY',  'wY:,ZQTkBq|3B|pR?pe >C-6Tanc]BH/tzHEa0l~V.;l7VFztzsD>zl#d2YQK:;z' );
define( 'LOGGED_IN_KEY',    'yKz+~Pq|{2pLF4 PeSQ9XtI+^kFiX<Cgt28rWd,ux~PmB>c584!_tkO,*_E.i4&/' );
define( 'NONCE_KEY',        '{nZeOv^8:T_ZlmO9kZHLwDx_MAVFMu,j brz.BxtI.?Fuz*+n,v%J w7t,Dub%3x' );
define( 'AUTH_SALT',        '!x!,iSw(JX^>{po^h+QE^<nKq{po.`6i{tU>J}+McO__x:7{{|1+WFv q]^9jrql' );
define( 'SECURE_AUTH_SALT', 'JcmKeXEX`gK.)=Ek$!Qg-bdb9]Sdi8x]Sx%6qVV?-[I1iv{R4C)-XL-.EE=K0oIq' );
define( 'LOGGED_IN_SALT',   '5UQ>Q1ceVhN&uCJ8zM#=pB(Nv4a6UfCiGZgiRfJKW[u=$dB>Q#oaT-*9~Ni5tBhX' );
define( 'NONCE_SALT',       '%<^$zMT`dFvw@{9rlMi<qI?b,_9.AOl8ISNQ=gu^g N{3;.y=)e#ww.+Sl@/l7}V' );

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
