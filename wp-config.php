<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_HOME', 'http://nmiindustrial.com'); 
define('WP_SITEURL', 'http://nmiindustrial.com'); 


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', '');

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
define('AUTH_KEY',         'L8SAuR;mQxktq`#In|z|0JF|^UN`:II5xYo{-UPc~/;VM|W9#%Y|x%n?%=-dHF&l');
define('SECURE_AUTH_KEY',  '`pLi]/q-T*}ifq~we4KDoaCCYRau.HNgnt3`i.|RJ+J#!XW4$=vz-2H< {jMJ(n>');
define('LOGGED_IN_KEY',    'HJx>YGlMKoK#DBMf18d*[h)<t&=7&.=S**%{heSeQZUR:We!8ZQ+>K$g-}l{F^^|');
define('NONCE_KEY',        'FPvN]{|5CLin)T)4dbtS)$|Y37x:XiA(WJq|MT,6fD`8&4R7j)!ankDD0~W)~a4a');
define('AUTH_SALT',        '#0_P~;NN=!B]Ja7|1Vr~65mu^^cDG Ax)d.3YG|Nz3N>+y!>9Pg*6K?SE,OWffwD');
define('SECURE_AUTH_SALT', '/Qb+T>F~<|2wF=,knI5w-TfHsK}bBzzAa.}>-yQRZy[XJth-fJ<KxUILf3+Kgn8_');
define('LOGGED_IN_SALT',   'JT+HBXD%P-*sTeT<*J0$#-z:uV98X$$5dF0PhP>wb~==X2H?%y93.RZ(Rc#P[c^g');
define('NONCE_SALT',       'Q;tN~B%#&Myz%eRCpJi{GRsb+wW8v9;M&EHuYcZgmOP-x<=ADpGd7N8N0sm 08z[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
