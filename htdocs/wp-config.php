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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-base');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm.+A^$>RnxVJcv#MaTJt&%_|,D=T0sZM|-OQQE+66[Lzu5AiFASezHgd`)RP80#g');
define('SECURE_AUTH_KEY',  'gX3{r^{D;NyN4a2,0m+|G%mf8|4X`Hrsg&N9bd)KBxleivU JjaqJ!}OnjfApiA|');
define('LOGGED_IN_KEY',    '6#URaP*OXB@nu;~,u!O;c-s/X|C-y3QWn}(:5k|[=%tMVUrO2SMq Gkt=&,HSzWs');
define('NONCE_KEY',        'Qm<pr,KxY4}W*J4-s[ %$IK)4[#*APq-OQ]sd8a/VA<:)mLlLf~~4V{ENa-YT6r+');
define('AUTH_SALT',        'a ~=z-72{,ZUz(vF3e-v+#|E*+7Ccf4GS=)dMF2?&E,i.Yt.TONn[|`kCFp;TuoK');
define('SECURE_AUTH_SALT', 'ryt|f|cC!:vS-C=6mA]V!5lyt>otoOJSM(uX./wTA4%xr0P +mR&mib+7.,Q2DJG');
define('LOGGED_IN_SALT',   'Wj!8k1dY{(Nlwcmgs5~=L(bA:OjH{z:PqFo%Px:gn+d6M+~8@9xyk+ qZryLLuW7');
define('NONCE_SALT',       '6Y+#Pu}z3sUIj-,iT2roCoWBqoTHRI6.)y Iyj-f;fPu3:u5VFp95Z%Ow>-d<rY|');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(wp-base.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
