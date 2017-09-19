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
define('DB_NAME', 'rowlanda_wpps');

/** MySQL database username */
define('DB_USER', 'rowlanda_wpsp');

/** MySQL database password */
define('DB_PASSWORD', 'm9IswAST9XJ[');

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
define('AUTH_KEY',         'KS-/BdrHYEO%5cSLw1 Z<^>TIw@7,lB@2tP^OA1B0#2+^Ds-ynSnZtwV~!LbT pi');
define('SECURE_AUTH_KEY',  'fQ2yah?uB=NL4KRKznz}w7+,U>a6FRvxc24>:sO:T:#%}!k9]m}>BFQ>O/2/!#]-');
define('LOGGED_IN_KEY',    '1B1z8im$!t7. Ro <;GppO`R7oRlgV85uwWa9.y`+ylVFT=Rk&E8^f6<xoWu&(]1');
define('NONCE_KEY',        'mQ?m7I{Xp+9~I*[eG`-u&-|cNpA%a(r1q5b>>fX,6X@cAln^46J<#ZdM4^tvfMyK');
define('AUTH_SALT',        '_P:7o5*2R*10?eHwJ<_W9qcLSd]2%}jn{|S%]+=0E2&gGvDkVXFj[zqcx`zF(g-l');
define('SECURE_AUTH_SALT', 'k]rAL~rw5LLX}A8TK~X9ai vR:I_ZtR/%dtmRMc5O2QGt|-+dola-b*jav(VI/[~');
define('LOGGED_IN_SALT',   'i+0$xx<`qg*PIf$Qs6dz^(F52eNp~*z%xm,k%t;TZ5&j;M;w[<tTAj%E8`RU~-1Q');
define('NONCE_SALT',       'f.[lsNDAs1@E(?mV9VrC~DNZ,Wi@;G4&rHYV(]fIT[|i! y7wST$ioaVPH {sJNs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rowwp_';

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
