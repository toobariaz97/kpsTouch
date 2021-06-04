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
define( 'DB_NAME', 'kpss' );

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
define( 'AUTH_KEY',         'ZeSo=)Z;R,24g7iJoYx(3&x7ZCW~75LxlP oe]fMs41+uP?sDp>uB_fY61%&0~`]' );
define( 'SECURE_AUTH_KEY',  '<0v:,c7-eou^kD)7ac;=vS^2Ym+M:^v O<R~W1,]N%6@GHd1ka6>aZ8MmU#oULf.' );
define( 'LOGGED_IN_KEY',    'frrRm}gGG!]HRo#GSsBGi6t86<8j-;JGvgRQi6k9FjzU+Ak;?/5k%4UQIBxs6B3~' );
define( 'NONCE_KEY',        '}5&J:v_}_jdrA_e6Q%IJcCzgu{J^h0WYpoLmWu^#D<4)+x;[v~>b^Iu#wy:YMouD' );
define( 'AUTH_SALT',        '(&yWI,y+59gw[a{|i@Lh%DLiegYyw>| E}yebj5mmtoUo57k.j}BD+0&5c#ZUkuO' );
define( 'SECURE_AUTH_SALT', 'kmMgvyv0r [)e}M#p7B&@|Th*KF]?#8-3B8jv_~2=dErL[.QQw%uIBt0G)%c7{U2' );
define( 'LOGGED_IN_SALT',   '$]6FUI-}HdnoRYgHv,AJ~6|vGMU+aZei4pdk(]7r+unN~ao}55NXaxVc^t;UE_p_' );
define( 'NONCE_SALT',       'SVgRcA5+er$>O)[S%@1t.}ZUg8y]x?{P8LX,aIm1x66H9&B^dI-0iZ%<i`DxwIQ9' );

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
