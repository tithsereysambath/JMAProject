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
define('DB_NAME', 'jmaproject');

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
define('AUTH_KEY',         'k%fh#}BCd)v>9^z5A%/]4_-igoO=%?YXI,I>L}^3(FMaa&3B{rJUq-LZZ@DN22h%');
define('SECURE_AUTH_KEY',  '>!?/>SH%]HAa3gJS1%nkJhS1$A_oJ$>R>[OhLdYQ&]^v.ynbi~/NAa$~+`FVO9Rn');
define('LOGGED_IN_KEY',    '~?>R;}$D/65/sf)#XB2K.%>[L5&~umVwR^<K;<W_adbW0r%,<a;*B5f}nB, )l5[');
define('NONCE_KEY',        '}Mv0l.uf0z>/|3?RH)-hItBEH2]u]T?*VigJJ6bG}QQ~vd[FzFqK&*c3mNZV_v8|');
define('AUTH_SALT',        'kC&h%rw^38[}4>g}b3kQd#`wv&(|z,l#Z8)i/V7&O#Ncxy5Hmb5Bo>&Ph,H-fQm ');
define('SECURE_AUTH_SALT', 'g|i2.V(Rex%UEpWSLBr1MmU^zEEVI!G+YheL)g|we3VbE*yT+Q|Eu@T.B965!mEf');
define('LOGGED_IN_SALT',   'I6wV~,bwB-*9A5I}FN:Qq[9PhE&zUtutavMHE,$t8:Ig``5-<NEB3H-z)JA]s(&l');
define('NONCE_SALT',       'nIUmaXzmuJ7^`Vh%)/aH&;IgKg%}g?C+5(-$n)nOAR*6zAH5T@:RXs>MU2b[Ro5_');

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
