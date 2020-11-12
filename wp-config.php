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
define( 'DB_NAME', 'teachaway' );

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
define( 'AUTH_KEY',         '|JY --tW-C{#h2/RLrbL+<D[/&l[+Yxr5454H3AK8A.BCA<czBPjb7Q|PedeGKsI' );
define( 'SECURE_AUTH_KEY',  'FM~usUb>]C=S7>$D7`QLI#&JN$SPd6(<:mU+D,CRUOP-$C}PynR,f ib[PgDi#I@' );
define( 'LOGGED_IN_KEY',    '>VcGz&Al2+?i`$U.b7^kDuM%MR~37GI*%KLSi]LPriT2[X:u}Kr`yq(JJ=!8zqqY' );
define( 'NONCE_KEY',        'AFA_?p?4}7wd+g,W;6>X`-`?;IRAwf(C^aW?.Cvwh`)kdKIGXuu=%Z{]w1L;(z4g' );
define( 'AUTH_SALT',        '48fb,SMt*iXozju80?KOn {ML/W`SKTsW%iJ^qhS%XZ0e:1]7PL%OGHaC%3?{yuH' );
define( 'SECURE_AUTH_SALT', '.f3k-Rg#r_Qii<E;~fZAQ{mRmJrBm^@^~eR+L&e6`T(#|{c0%+xtX$%,mdkTJVB{' );
define( 'LOGGED_IN_SALT',   'kN3JiLqklrJ1utbgw/[r5q5+Ww9xD.s4scPH&$A=czh+u#%.;74aN2<+zW%4pFat' );
define( 'NONCE_SALT',       'x8q5_dj{1D@k=d7H>ZVe@ p;cE GDO`H,v]q5-?Kmja D4bPI4k0$5]w01t?LI>Q' );

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
