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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '8j;;AGm|n2O;{?6pUrE!X|4g)>PlTli1PWHLzA!lg!USl>[aZ6MWAIejBqAE]~NN' );
define( 'SECURE_AUTH_KEY',  '_VU`GF;]g(9U?4=5&c8pZE>LbV?@Q_C{*1#_(L-#|I(d{*Ykjkw-(p.ZKOoEH}:_' );
define( 'LOGGED_IN_KEY',    '??V |r*Vr7n*Y!wp<Gsn?l~y(SUgH3Yby?W2mCUL%j</[%_RUnj4upHnR)CWzkk]' );
define( 'NONCE_KEY',        '|Q9!2sBi^%TW#z&7j)=+@;.S>fCh.tH>%gX(RGoDbn|wYqa^-l6.Rm5#3h?`-xTe' );
define( 'AUTH_SALT',        'zv<6A[_0cB$#x[{z^vhc<;yL,Y3i~+%c2}u]8[ntB:,jvM7Z1Le*>, B+v_ZKKxY' );
define( 'SECURE_AUTH_SALT', '(pM;1SVS W]!$t^`iBK$&rz1!$Rm.y9vOV]D=DP(q>E!Ci*f*dar8bUDuef{A$8G' );
define( 'LOGGED_IN_SALT',   '({YL7Fo1UzmQ.q.ijHAp_]+x2d[Pm:.Mun]~|Tt:U].kl2/>/L7&A o#h_: {Z%1' );
define( 'NONCE_SALT',       '-MH#JO?>LyEMWzmd?LeMkcRK`pIxqWZG *rb>l{j{y3iy.~u~v:t$-gTGYb`-a`e' );

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
