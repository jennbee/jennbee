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
define('DB_NAME', 'jennbee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '. Una%YdR@QPT1xr,M/?,B/Yq:;atW >gOHU8z~CvL3=]9eM,zKrNpjPFMgKF/C^');
define('SECURE_AUTH_KEY',  '2WBub?Nxez8qU Q$:)VTHyXZ1tu[/P+.^,jxNK/jArhp=Z,I]g!]zbJI#9:4err~');
define('LOGGED_IN_KEY',    'YB%D(qqJ0@,H=G%ftSC7g-_~9RDP-NvHqk]H+nGGx?vDn{U!s9dam>Fa<}nd!,?]');
define('NONCE_KEY',        '(9]CjDgV7oHpzYnnwJKBN)ELciNN]9Wf6d2a)D_mEb5XS80:8;;2J*jxO2G9|xk~');
define('AUTH_SALT',        'j<97jsd,d{D`Qc,;t7RbC!oT<9304!c.I2_owz!#&N!OkR<Z:h! f4Dw}8z_},q#');
define('SECURE_AUTH_SALT', '[^.P3OI@~JzFk p{EZh0J<zaUO.O%F@J9chPsct.QyzQ>Cdx*_op_ D:5@+a;si!');
define('LOGGED_IN_SALT',   'w*CWeKwtQw=(N/1kEr0V`tz_.i2*Iw[kVwn3d)&+UDvJv1r ?|5Y+3VEJET0iQ<y');
define('NONCE_SALT',       '7S0rw/mertLZK(C]US*+=B3}Y7R!Cm]DW6L)AxJD/8XpSrs([CFPI8Yj+}YpG[5{');

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
