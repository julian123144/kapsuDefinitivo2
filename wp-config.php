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
define( 'DB_NAME', 'kapsuDefinitivo2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b614aac6b6e28dd7029e7518b0ef89832789fffa1fb318c5' );

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
define( 'AUTH_KEY',         'arC=kw]k`(Y$j`D?KkA`|xX&(w4h:N_8UmiNHy;m{>uPu>RI5IIEXa,U0,8Db%x}' );
define( 'SECURE_AUTH_KEY',  'r-DQZT3Cz6Tqb3&FO}Pi~&<I.Kv2cLyS+I)SkyvvmxWGjnZ:g2|Y(H6glD)D6{gl' );
define( 'LOGGED_IN_KEY',    '`E,8?U<RtG&,KX&j;wsCtkB:ni^g|a4.=Fm8I*R^$Fo<=`0G)7ijNVBcmXr1&owC' );
define( 'NONCE_KEY',        '{3sx~riqZM+zaVS$0JISZ({^hN:V{;,7vL-#H+Q1kk.25D<DZ77Z5S}Yq5DY$j:E' );
define( 'AUTH_SALT',        '=/)byuT7LY3^DylX;c`af<m#|AkU=FrH>7PsYD;c<71z4ZjL&&yLB<v.<8R-Wp~P' );
define( 'SECURE_AUTH_SALT', 'D8NcQN^x8P|WaO-lK[hmai9p-ypG{o0b$W/B,cRQ--Wr>GxvIQ7<7:1`ZAC*a%:x' );
define( 'LOGGED_IN_SALT',   'mmgFvZe>C~c[V+_9{=-,LqoyqP#d!7cD2bpUjgGEsP+?epx($h*S?Oi3gR:WiT#Z' );
define( 'NONCE_SALT',       'H]j{z6SLQ! <?zHd)XDEzcp4|9d8z^ONb~Btk3d-sKq9]<K=F,Y&5T+Ek%H;Z6SS' );

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
