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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '>OZ2IJVZqkZCa_!3Xo QvTGWhn yF6c$QBW=*SLfZUe%~RBtF:w_bpSSfYP`=F&Y');
define('SECURE_AUTH_KEY',  '5.BvswkN,BQQwLl&hZ_-jLuV6f.$cT ##;?,wW;m9_.lc@8z!SWRg*les, 9jf[e');
define('LOGGED_IN_KEY',    'v(0<;@4bVF,$Cqt6{xigh,%gJ7:Yle//01m@Auk]l|n.3^ncM#84]6CXj2NdJ(aJ');
define('NONCE_KEY',        'qa)[g/UQN*L<xApd=lm!i+Rx.BlM]j2}]BT4)Gq;%x;uV2E_rO1m.f#<SHPt,,<i');
define('AUTH_SALT',        '<DLULU_4BENEwdT;*GNQSfIFZ)-R8`w210=HI%9n>me7#12cE(fi]4-O.QK&|4m ');
define('SECURE_AUTH_SALT', '<y:LG5_-=?-93kAIz8>vgLB].!kZ|v#jGWd<?=$Lp]?].2qn[.Q2ej 5!ICTM)9t');
define('LOGGED_IN_SALT',   'k.7 h|X6M)XP#C6@:pn2ZBZ-26M|]|cC:,.6Q#5-a_ukihJ_p6H8M:Ad!)R`m(Z)');
define('NONCE_SALT',       'qmHS4U|3We+K:JyYgy|/:f).4!2xtTiHDcC5-C1SGMC!%ReYC|LG-OmoW%aL~.Ey');

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
