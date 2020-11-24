<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'y175v[0f%p%zWRgx&/M_mz*X:12bT]27Wcq#M@(f6qX3[zD*2M:(|xx2#8)x&o&(');
define('SECURE_AUTH_KEY', 'Zo6;1X0eK1o4iqS)!5RdL17uKM+ekv]Ky*z5*20:;1TmyP:kYkpH@1s#lrI|QCG]');
define('LOGGED_IN_KEY', 'gMQUem@5[|RjeRb9Av80~;u8B8](#ho!3~WT6l0Rc#W-2*e4w-yZB93J1uv8EZuP');
define('NONCE_KEY', '8*VxTC/TE66-b97zd38|~1JdS(oAF*5;D8uv/65H_zx_tXZ9:;ODq5y74kp~_*;K');
define('AUTH_SALT', 'SfQY88o(C-6wWk:8m|[8208k6Pstq@8Ng%0l0V1s#sz;+99;dd)-*GPQN(5w570h');
define('SECURE_AUTH_SALT', '(j8J7T4mE&3iI28[C7&0R0ROnK9dlT84e2~/!6i3JLq~/JLqoSl8l-1d50y6A1L)');
define('LOGGED_IN_SALT', 'L;+3ki8x]%K*k|8d0/P9K6B0H0Jy4#M@5dqH6gX26d6(#s%*E[E9_ez#XrBTYD53');
define('NONCE_SALT', ')J/#[2g6HRL+N(5]58/5Z;P5#6_43v#FP6#@DW[-_i3PN5n7Z7~YV8r0lPe;_a20');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xKTtBuM_';




define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG', false );
define( 'WP_HOME', 'https://tienthanhmobile.server2.trinchera.dev' );
define( 'WP_SITEURL', 'https://tienthanhmobile.server2.trinchera.dev' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
