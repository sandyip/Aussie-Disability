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
define( 'DB_NAME', 'disability' );

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
define('AUTH_KEY',         'Mi Pl84bwP}wy^e)[{wQDA*dZ$$_Jr46|H./6i2UV}tie^|aud4>e.6B:%g6~S53');
define('SECURE_AUTH_KEY',  '?Q4fi=Ggx[cx3=-R4Y2xP38%P1zy5+B[#=uz[|-]3m*O:_A$]}|P77|O<A|3HF->');
define('LOGGED_IN_KEY',    '3rB&9,2X@d?6Z+P79nS-[d3<4/l,=soh:]A(pG?T7Ke_2y6ar0Jl<L+X00j978;z');
define('NONCE_KEY',        ')NG|_j@L$_sMysgdEncU;$me<Nj!Z&s@ ]_,&).&O<(tbhO%!{k_{*N2Avk 6U3w');
define('AUTH_SALT',        'JH3}Rye,gG7+x)K@{&sn:}Vb>*!nfLD/-N-`(Tz+]oC|<87dH#mwYc4%a3W2]i7o');
define('SECURE_AUTH_SALT', '!/^1{e[}c9<]Ghc6BqbM1f+Jc3XS1Ewg.<uaD:{|MOv1kI?:jUf^q2Z_o=$Ow{5E');
define('LOGGED_IN_SALT',   '{A(+]P00&K)F{#diz.H#D_2NYrUv5@|wJv^A,y._&od2n?ac#dQS/jt?#8z3{W_B');
define('NONCE_SALT',       '8THB:?xNx@a_5kif>h_7T,4O*vyN<R+iQ-sV7ly5ry+c@5r_c~%;aA@e3f5ODIt8');

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
