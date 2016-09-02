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
define('DB_NAME', 'cremona');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's8xFR>9,fosB._Xvdcn8*XC%uEsAx|o4pLB&3F_MnY!3C:y1qTS6F20B*I`3b&fg');
define('SECURE_AUTH_KEY',  ',{%iwjPF{cLT7HZ0/B,Tru9!w^RZmV&L#y@eg!2yiUkv}5o(m`;C>0gUj8X)oZ7H');
define('LOGGED_IN_KEY',    'X3m(j*;llgmd+zL1.2rc;gAl7xmY()ru{4FBtzw4^kP=IAomAD_.U8n}<&9Is}ky');
define('NONCE_KEY',        'DV3eRt$=^2W]p!nsjCwf,GBl1bm5UMwHb1e3itnV@E=obdozKvAib-Suob3OfFTC');
define('AUTH_SALT',        '+EqGMUxVN}AABv95`&8/OV(mt%jJ/I3!`mP{4iX)i?vZ5E`gUk<[-4/&&f2Mb823');
define('SECURE_AUTH_SALT', 'y*LvKHR!Zd2$tK*zDTHR5Ot9gAva.KT,~~zN`mH,ZNKxjeUw_X];gsL_/Bjpe_E)');
define('LOGGED_IN_SALT',   '9xLaaRr:2{UC.{OY<=1XvPebAkjOD_+5YQ]5i7=Rv-C1LUaa_sIUsW24K/mu )Z0');
define('NONCE_SALT',       '(M^/S1=[zp~0F_ojFWDTi0UFT(o+LeD.fz*nv_*362JD!XyK~6uqn&0ZJ$|as<RR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');