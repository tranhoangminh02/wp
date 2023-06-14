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
define( 'DB_NAME', 'wp_001_140623' );

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
define( 'AUTH_KEY',         '%YR(fh#!vBKOc=/IVLpcwML1JgrKUTtMGq$E&#HSeF=},o+[hrF<B7z-zveDxBvV' );
define( 'SECURE_AUTH_KEY',  's:$8zE@rT<xIV!,u|R[/uCKWtQtX(|c^&2D];PV#k! 3aW:n+8_91O<zAP $:e(8' );
define( 'LOGGED_IN_KEY',    '.=%q0tprOb~nMMP,+7mNNM;GogCw|0!5^g.Uj%p;G*F-/[=:)P61FT7,$J] ,v.6' );
define( 'NONCE_KEY',        'a@)&%WdFj%<KX(JT ^][!tC(cc?`CT7;tQSg;6D56}Xo}jNP(Se}cx;+GyDls4&e' );
define( 'AUTH_SALT',        'I O@4OSO-^$S!boo8+6gT89-UORi1MFP.ec]6Zj,4G8|)2<PJ7$o_Qnl^P,/80PQ' );
define( 'SECURE_AUTH_SALT', 'KZH]!n73Bo#,;Sg>4]YnqVII3<qPCcvg2vD7h )_OjV##;?!#RsjCvpeQjkxfOHK' );
define( 'LOGGED_IN_SALT',   '0&)OB!K @bqKvQ{0A&!SF.G#MI(o}R7pMs{TKpL2gTS#(&,@e},Zz>:ZBSzfW@7i' );
define( 'NONCE_SALT',       '|Hv~$llnu8ePy =BP)s6-)y&!8aituvZpLl.lRlS9![5I)IlZsp3Do<x}`@H(v[T' );

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
