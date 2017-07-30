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
define('DB_NAME', 'imeficom');

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
define('AUTH_KEY',         '&]:}[6x-]JFjKs-E?[|Y,$-[s+H15QFhK@h#RvJb_?1rufqd (gfKjL1T6+[DB=S');
define('SECURE_AUTH_KEY',  'Ev0Q*[]%~5pb3de5-[/5P`i+|BCJ4W:Oem(!Q.E<bOV/dF5G)i69z`TW,eJYCm|i');
define('LOGGED_IN_KEY',    'su-?hJ?]?cAOeXgK?OaoT0{Uc[u!s%!<F;D?M*vyiuF2_0!HFebOQgM7E[^43&>0');
define('NONCE_KEY',        'bt#wv&QQ*97`kmsA-ku?kchR8|AX`>TH>cR]735czK2AR3UmQp77;Ek!J4]C5wBC');
define('AUTH_SALT',        'CTO?Ae,,)%jIH[f&wlHlY>{XJ/Z{[,VwSjvuXZ_)kp62~n#jwm(E19oJkAD $.|-');
define('SECURE_AUTH_SALT', '/Buo|*w4[V[klU(2Ib^P4n[M5 ?wM]*h]N} gUD?Vq$h{G|VVa:Cm$F@52-^e1--');
define('LOGGED_IN_SALT',   '|s-:W z:][A5TTe_f3ct]:-lz?4k=X]i8QOd2Nvq~~f+uH&J#71oY]SMrwb/.7j}');
define('NONCE_SALT',       'tk{0cqqlj)=6aR>AikIb[NgV|Ug,TmBzbt)XzJ6(W Wptlvudo_AJTE:Vq`dv?Zt');

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
