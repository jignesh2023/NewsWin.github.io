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
define( 'DB_NAME', 'newswin' );

/** Database username */
define( 'DB_USER', 'NewsWin' );

/** Database password */
define( 'DB_PASSWORD', 'Ashashukla2320@gmail.com' );

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
define( 'AUTH_KEY',         'vAMMTIrp]u9+_+`K^Pu1>I-mw0rA~x?./EC^X=m.fukBeF6yeUe~JpTVglCO2?[Z' );
define( 'SECURE_AUTH_KEY',  'G(0T&fcOb,mB8J+-lbAD_Z42}#9lK&PB!p-D@G}fOw^=N{UF^odzmaNw]D}TGK:-' );
define( 'LOGGED_IN_KEY',    '3@n;%>KP9uCrf~$f;G~F`rc^dW0b1k:5qd%zrN<BNRYhA~94uOwE(&-ryT^V)AQR' );
define( 'NONCE_KEY',        'S:zZQzW43}f*5V 5DzRV?860;RAlD9KSu49v?fO3U#qV<r84U1%&rye{lCn,4OOV' );
define( 'AUTH_SALT',        '`)vB;*d{aR~a%>[vG x2]&w=s`1a>yeCdA6&v@,NU_k?OYGCC/FAu01#9>h;8iNs' );
define( 'SECURE_AUTH_SALT', '51#y2Uv2A3AI{v6|Vp26kz.0{,bxd^r57 RL:b3&sH?~W:ag.tb>#dZ go1n=;O>' );
define( 'LOGGED_IN_SALT',   'K~vr2y5@L>tZ!,1P>k9bHt6/A3^.X=;WGA15yQ/A(.vqcsacgAt4:~}2*U4abPN6' );
define( 'NONCE_SALT',       'Cb7gho|LSt&U3<Q+J csSk<XGxKEFUh-kp -nhnR=P:yq/Av&.kpKYX2TexJi2.i' );

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
