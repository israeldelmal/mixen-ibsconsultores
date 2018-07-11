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
define('DB_NAME', 'wp_ibs');

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
define('AUTH_KEY',         '~[.F]e8{q]}v5+>FyAwzJd3/#jHsl;R0  Fzbkt#x|(>j%iS+Ey27y#03j}bSSXt');
define('SECURE_AUTH_KEY',  '}QTg VKUvq5i.6~!7%$=`<c.+KzuDuJVdKTp=@EQm_$,bs8:))p8UWU*24-(@+Ut');
define('LOGGED_IN_KEY',    '.1j1CI_@!@Edc`ZOF(Ux Zn6Dt@viY9$~aU{;STvBKpz|icW4a4t7do?o|n~BS(8');
define('NONCE_KEY',        'e$JFazQy4Laycz@A~JrTe #(v~on<H9oco.o@P3U]t/Xa{&mEkiv[.H;2XSIBFvB');
define('AUTH_SALT',        'c9faH6C24;Z=3J%e3y%.$bV@o6Heg[+bRTi%b0f;Tv7m`|sU$,W?^C(WOv!FPT[i');
define('SECURE_AUTH_SALT', 'DmoqP1>Dm?vv*+O3x 5?5AB~[m=,v#Vyn=?=~Sqo_W)0QH(m8P<N~(Aw}^{R!;6k');
define('LOGGED_IN_SALT',   'Kw_f8A_D%T}_p,Q4mP2(lFddR.6X>y;4!A8Epdjf%p-ST@0kAcWh)KaC_;J_RRCs');
define('NONCE_SALT',       '+SGRBx-Qys~_L~Ji;:l>@>PSf#V?n#Q?kqJeS^t*;/$p]aIeB]pH1]tOZeMYU,Ea');

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
