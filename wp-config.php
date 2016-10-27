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
define('DB_NAME', 'tenkana_hahn');
// define('DB_NAME', 'hita');

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
define('AUTH_KEY',         '9<z/|zmT@*>JDGVJ-XH`+zsxR[,g+R2X %M&4*+n?~evlot[4C3no]/G <>O[,,0');
define('SECURE_AUTH_KEY',  'fl!cM $OF|A_|bS&V[>{}xj_6FsD-jJf;dwlLf4K[pH@#YW]H5x,+Lj,;M>C5hG%');
define('LOGGED_IN_KEY',    'UntLQ 1/.<V>cWU!u2$N=q^]p2/@+|3D+A.7i0l.>g)^n)cuHd@ime$;t+*}EA? ');
define('NONCE_KEY',        '{iH$q|Gsj~KN2>gaBJ?-N,8{J!OZ8`vNa6}-,$oPvz{on0n_]&6CM35X:oQ(t(A^');
define('AUTH_SALT',        '(D:AQ+W1+^=O6+|c|V(aV^,mi0M2+06#4-Cn$jF`O+4i*|>F0k0e@l+}*mr*,83x');
define('SECURE_AUTH_SALT', '}AY+~./z~+Gb5ufYR9/X$D%,~]?XH7+#8CqjY?qzP{?-0>|~p_:1;C(LZ$uNv5`T');
define('LOGGED_IN_SALT',   'HccVIWZ;rx}Z6~KpF &^sq>n=JMIL_8k>GCzCcEe_|b4Fm@[^ImA;tB4|)eFR:k+');
define('NONCE_SALT',       'Obd*;*Zh<-iOE4!H3?}+&,)v_5R H_yqi+`@.g{:t~}1GJ^fORr0R%JOfIkOCFQ8');

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
