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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwproject_c0_pl_1' );

/** MySQL database username */
define( 'DB_USER', 'wwproject.c0.pl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Previad4d2006' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.cba.pl' );

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
define( 'AUTH_KEY',         'NgR/.RXg+MtsDw y1dybV7d^uz*hb,+Y,KU&:DE`Himv24NrK1[SWfD$~3PBfS%X' );
define( 'SECURE_AUTH_KEY',  '*fu/d9a>@q0X!N>G-*@|!3y5l$>&_N*^U6~QTsoRh)+nF@EyzfPxM=.mR2&*MkB-' );
define( 'LOGGED_IN_KEY',    'pR=K{<G`Deyy^T*_#E5BtdL&|JrgG)s]UlK$i9stf~n>]E1B:FQH?}WBq4o}mz8Y' );
define( 'NONCE_KEY',        'rCYX}@:D%.(y vhoVEiP,lZ~H.b/VC4dE(4rY(Q$3H!HSQ%KyT-qh&1:n%xfCoK*' );
define( 'AUTH_SALT',        '?(*YO@(Xw?_F/!@S{mIHaf?t_e_?Cdd5d3Tar=`bQQXOel;mUvy`NcP>?#LqJLrm' );
define( 'SECURE_AUTH_SALT', '|ZV}#OD/Txng69<P!w{j(lEpd8rEW<dfX~ac(Vk{u{|,V$!IspGaNC,bwfn( xlr' );
define( 'LOGGED_IN_SALT',   'ydoe]} C;a!9|C}8RssCl5jv:9jx1S]|(VS3CL;vxR4GdgC-j8M3z),rX<p&%<3.' );
define( 'NONCE_SALT',       'Y;IIrM(jd?*2/tJO]6zQQ_KTDn.A{Lk]27L-+]WN,cm.xjVdw*_WR=X[PwIV,TQ`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_b2wp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
