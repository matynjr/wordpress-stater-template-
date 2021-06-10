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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%a[M~|HlVr FED{?bbnos@+t<u)Xmsxg?T@W]}Hp%/(~ix|^)Ko[idpq}HzYMNPc' );
define( 'SECURE_AUTH_KEY',  '/sm/pc_bPd,]e#iyxlPm;nWHASLzx+qf&vg^T/;Q)3>M&*=vqmNn{zd;X?dD.Gm;' );
define( 'LOGGED_IN_KEY',    'xpML~kWoS#==StV#?,~1Y(E8=EptkXXSjMj=U==spv#+]uTNl44Pwt$EtTLz}[v$' );
define( 'NONCE_KEY',        '=wf8fRQl=oi[CbT3w2iB:KEB=XjTg:Us{khf`0^rd;eDhSNI6j2e>?-27E9Q~!nJ' );
define( 'AUTH_SALT',        '|@NLTFD|wI$$D=7yZ!QK|wEe6*65V[nJQ$GSvTC&h_C2/%jOIMqG-w~,f*u@^:W8' );
define( 'SECURE_AUTH_SALT', '^iJb2cnrJTWA`st+woN~|#%BWzbu]d1 ~nCvlqrLB{w^B2MAj<G`=57n}ZLota-m' );
define( 'LOGGED_IN_SALT',   'jf]IV7TzJ)x&xANrY l+(+lJuwErFQYj``y=5yQ-$Pwa2FzB&}R^M5axm7r_?L!a' );
define( 'NONCE_SALT',       '(RsQ-0m9??PXEs/lTV/!@g U/ML=|RFN}{-;%iFd?3GUHER|g?P7-/QL^2maoRh_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wwm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
