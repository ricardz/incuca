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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'incuca' );

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
define( 'AUTH_KEY',         'Tt_]xdkBoozf-kT9N LT?]T8- ofZZ[.)6jqqQ3jH)b>&ZOhL`$.u!5<e@vRXhw.' );
define( 'SECURE_AUTH_KEY',  ')kCf_TrDj$o&tW(aFFpOjBhxOo.^ib0%9kpfU%DL4W]qx2&C{AB:^lFI:(B2)sO#' );
define( 'LOGGED_IN_KEY',    '8fbv9BqmlExk2P4v,yaZpVKi0X04U>7x?Wy3eB`7g9vr@q9Mh+m8ZpkQr7v/8XE%' );
define( 'NONCE_KEY',        'E]0uU.mAznHVj}4o=ZI!~}pu84JYD{Mp{rK)8=J}rAXZj s3Plh*rmVzal? gt~m' );
define( 'AUTH_SALT',        'Z^?)im)[sw}]rN;]^nRG%{O^Vw+k])RKv3JzD3MJdHad3bmZ$jO@2xV]>?a/SpT/' );
define( 'SECURE_AUTH_SALT', 'q-;X}>3m3OGVw,164:9Vr<@w=gCExp<da5c_JxpmX,/sa@T!`OO@2FPbZgV_HiBe' );
define( 'LOGGED_IN_SALT',   ':NzMeo}w8y5>me._AOR:;0]>:(ff[E >v-QJw9sB:0@hyLO>uBhBj]*aj7$/`W?D' );
define( 'NONCE_SALT',       '_B+[AM*Wph=U6T=?a#y*Wob-{8!OdtA~Bp!c-}Vq:%@3sD=%@^IM@` _fS65ov5u' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
