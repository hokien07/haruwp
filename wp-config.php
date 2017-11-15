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
define('DB_NAME', 'phoharu');

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
define('AUTH_KEY',         '8VRTpbsuLu12h` ]jIdco5d_4[zv:P.VN<t>`Cc=2jIK8i%UUR]L:Yc%_}=^ae$:');
define('SECURE_AUTH_KEY',  ';|G-y/HR01VP>}^#Q._xl#^lF)>qr2vN[^Ue&Fxu|G1vRPbZx&.Jd`~ov?`0.Q=<');
define('LOGGED_IN_KEY',    'T)U7y7LH7xv!oW>:n/KlkrC@Gv]ZDAT]:g9Y/{Bv]CIFD,2&F;%?a7$YElN?wHuI');
define('NONCE_KEY',        'HP30Z;[s<Dox^{=f`D{/%%1EADzv&7w/Pj!T=Q-%EUW$Q)AhpQokl}*,vU#SjDso');
define('AUTH_SALT',        '>*J|LyuRLkxT,EvznSd)We GJ1IvU[WK88Wl)XycD||L!3`@xG(:+#j<w|McC`QX');
define('SECURE_AUTH_SALT', '>b3`6?g=Z`#F2iK{CWekaxAbI@[k/HNz:%BvY4Ivstc$m%A*EFDy{{wv7{#wAzi*');
define('LOGGED_IN_SALT',   ';F9a9DN|gB(($bh?g]qL]_Y}W:?.OU|:SIw94VMnb($T-4`(X6hgB4U&6BPu:=V}');
define('NONCE_SALT',       'K0wO7Uitm(c;{/*ADg50%TvpZz&t0,~SuQAdQ~qzq0 YQG6>O&<#K5*NwOJn_@+j');

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
