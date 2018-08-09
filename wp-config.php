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
define('DB_NAME', 'arraial');

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
define('AUTH_KEY',         '!( !EL42U3S][4`.^K.Bbqs0&sZ*>1~(2=Xus-aB~P$?lv]J%^GeCXjs1/xK5(*s');
define('SECURE_AUTH_KEY',  'o[{$X~KE&psyqKwoAA=SJb[vXq,1 n^!u%ZI.<kNmG7JDO{!ed$c G9;HdrtB_f,');
define('LOGGED_IN_KEY',    '2fH<,/WiPbYk$CvPYef++o_;Ner$Svkst]>XMFz6=rO*Un{_;m[kK[~19jViNA.V');
define('NONCE_KEY',        '!<(Nr^<*aDK)Zcc.&6I0XvO45$0>ns4TR=C`b}hIE=VtU9F0x9di]C*br.Q0os*+');
define('AUTH_SALT',        'KbOG#%X*<8vzg;;u-NW^x{-0|PLaOrB!Y-m` T7NOQ>PieN&Q:tJnNyW6%?QAj04');
define('SECURE_AUTH_SALT', 'Z9:aeL1~_ZU07#M|OFZ<ahw`3w{}pqy6rT;nQl/XJV ]j2ht{)6RY#)M4=W A2_b');
define('LOGGED_IN_SALT',   '2 Q#<9/JQ{8E@H{Edf}}L!^62RDz|.!elFQ&Ddq2SS/:=R~RB`1B%ub(^I9{|CSY');
define('NONCE_SALT',       'CXCd?1@1~)~3N!q7t>WGyU,n1xukzYV:p57m%!0OBxtSxB4q7qwh{XxD^B~u+<Eh');

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
