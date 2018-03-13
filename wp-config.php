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
define('DB_NAME', 'projectwp');

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
define('AUTH_KEY',         'TZx} YI!oWUV^4RU!6Ii~GRR`fP-w%1LiW!p765R@o-z8IP=?`C!;>PjO*+BF>A0');
define('SECURE_AUTH_KEY',  '2(fi@(Q!x*5VG0_xL#aGWoTw>YMal561>?2zWpGt+xCZ^6Rn8^-DH^Ya*02CM1p?');
define('LOGGED_IN_KEY',    'qW>[]Fm}Ep,0ljkzSs,u=?uzWMh%]WA_,R66)q$uS}}H6D]c+1~$,(xZod6j$/Bb');
define('NONCE_KEY',        '4?u7;>74C2Ua63*98ZLUGKit5wbG~I&Z@X:|.w>QwPx(]v0F)kju)b5;T1noi]+m');
define('AUTH_SALT',        '8+[bNym[[Lk>]Z`(GNVC<xC>@v5yHm(7t}&o@glT.i_7W4p!*Te,%W9zM$$((H-]');
define('SECURE_AUTH_SALT', '`Ph$Q$VJ-@#JGX2Vbj)F-7[=:)wG`!dE<pix~cs$ NRJXq{GOS82yB}W T@Kl0__');
define('LOGGED_IN_SALT',   '3hBu(3CM#X_!R0YO9oL!=b/=riz-4<wEls25NeYmjqUUEz?KphiAI{.hd#sNqYn$');
define('NONCE_SALT',       'F|Z+ND0L}NNUy^|oL0AOh|lD#j{=4]$|S#)b>{t5,P++z@FP>J,vPUr#OZ@pyqet');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

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
