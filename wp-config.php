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
define('DB_NAME', 'kim.heyse');

/** MySQL database username */
define('DB_USER', 'kim.heyse');

/** MySQL database password */
define('DB_PASSWORD', 'G6fDdf');

/** MySQL hostname */
define('DB_HOST', 'dt5.ehb.be');

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
define('AUTH_KEY',         'gjBR-->qylO!~piI*VjNe;K|8b0TPGA5*[83&q$:2:?*^r?)7HNNC`q@?{j9pp.8');
define('SECURE_AUTH_KEY',  'ASODF0FMjQ{9kwOP,qEm<+{t2E[u}3#&$H;Yq@~cCDGqQ$O+NlZCa7%MzXpjRLQ>');
define('LOGGED_IN_KEY',    'gV@1d{L^u^Nb0Z:<=/|;&`Pfq7@0j&e7B@HO2|wDG0gM3NPp>0%h,D7pmyYBCPLW');
define('NONCE_KEY',        'dFzl&|S|gR$Bp2V2w%TZZnr=XgLpM*u/jAPj ZZ#K!wOcm&$U>U-hSmd)BUca6AH');
define('AUTH_SALT',        '@+Xsb`uz C@ @Dca90aDy/Ygst;VpO6+f%xNEW/Z6#f_PBLN*[`1ER(NHl{/2:,v');
define('SECURE_AUTH_SALT', 'PJ,}BdacG0)..y-+n-]:!MX0HVwZ{5G!p&S+?y!Vgx.*%y`-2v~/sU]1VX;:2kN-');
define('LOGGED_IN_SALT',   '4>g49F;$;_d`|fje+wDZJS:u+]ek`FCtl6Lcte@hV2f+rWZX0An>MJ-]QM6v+|P]');
define('NONCE_SALT',       '/z-l4kX*I #-kf}-2tADJNMw=z.H0_~l!-U (+J]Ygw9s8;bCQ&O|V94$*#f)3EJ');

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
