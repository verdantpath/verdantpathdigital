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
define('DB_NAME', 'vpd_db');

/** MySQL database username */
define('DB_USER', 'vpd_admin');

/** MySQL database password */
define('DB_PASSWORD', 'h4uvHbSuPAqwLQ4x');

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
define('AUTH_KEY',         '. [V)Ml`0q@Mjo>F!$gO=skTMcho0JPRJyYSP$n7ywkK6e?mMp:i.@MU+w.>?i^ ');
define('SECURE_AUTH_KEY',  '$HLewse/y#K<+AI4=z;?Z~cdln#r=Yl&`t{j6,n| }^~%V4)AIP>HO,<*Z0iTcL{');
define('LOGGED_IN_KEY',    'pLr?^^PK6_MWK=mdUd+,A1CjymXP@^7[kpVF&NW+@,F:0HH*zdn$$upK*%MO Al9');
define('NONCE_KEY',        'RJm2c|YbT|QD[YK~|7J~1@I!TF|!^+,,P=U-xex0!Pp2D*KTOXDWw=zvlZN7;$d|');
define('AUTH_SALT',        'Z^R408zv Dim;@O4c#7IPTt6rlkg`,t-dn2*e;}C^0LE2Omh,tBPM&>5nxIzCM8e');
define('SECURE_AUTH_SALT', '3Yp|I1|nC1fz<$c/Q2*~ o|=CHFC8<ChimQ=CnouZxP[V{fLZ9GvggP%+XSM?TnI');
define('LOGGED_IN_SALT',   ';}w+&R% !hoymcKZp_yi1=%#}#q`S;(y{Z[<5fZ4kO0Us:Y%CI[6r8 W-~gDto/t');
define('NONCE_SALT',       '5lYqkI%D-NXoWJ^ZhN%~ePB`g^ [`ko-^mh/WYMOF}HwxE=P_+xE2-2UXf$Gtd s');

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
