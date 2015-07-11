<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+|LZj?|,1o9<r|Xu+Y1h7wo7%UkceoXH+Rd6I#ov|1SCN}r5by)/wgb2m4J/#@ZJ');
define('SECURE_AUTH_KEY',  'S~}dN)U|g |+@5m)MfjJ`~V8I2VRD@H?w:hz<|>Wqtj{]Ei34FlD_AGTQOIqbO*C');
define('LOGGED_IN_KEY',    '>M,+;?;8JSR#=cTCVp}L!4ylLnI}|M f7&y}s^qAEZY);c=OqlsE70=YfxM?0O(?');
define('NONCE_KEY',        '#V W,yGI*lAqg3s+x8jp}[VjF0AJU/D^Q>Q4&hj{JcP)Af#RGIl+Iv;;B^8O5&~C');
define('AUTH_SALT',        'd?],,~Vx!jqnu/HjS$c]^U!;?v!.L8g+Oy+xgyBQ{HI|VRSsHk3k;*<9IQ]L+g^.');
define('SECURE_AUTH_SALT', 'Vx:@`5}$rS`x;:@s?)sxl-%K)P#BE,D=}^{#lM_]VGA?!R|-$ay-ksj`ru7C|Ps_');
define('LOGGED_IN_SALT',   'r0-+5ve1u#A/w3)]aDuW0h+Kj9/e%W}Mo7nbb7_r*q%Lu|d0t>6o-bw=j5y:NPNT');
define('NONCE_SALT',       '^_7eat<4F{pihAGe.mY-:x!`WSY8:PD-D ji=pg|npinj;Te8 !{`}?LgG9!P18M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
