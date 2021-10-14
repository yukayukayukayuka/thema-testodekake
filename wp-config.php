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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'q1VQv++BsAClovC1u/bggWRqxaGABt73j5T/HqKnMffK7U8bS0GA5ldRumVSon3S23qmBHiYIDoTK1oX1PFZbQ==');
define('SECURE_AUTH_KEY',  '3uC+qi88kJW2pKxMHWB1DW8zpjEP2J40TgKwC73ZCw1QGxDk8rXuQ17QGFI5WdCc8WJasT8HgfaVZuYwctcSDA==');
define('LOGGED_IN_KEY',    '3F0VHCAOhYqoEWvZBDHv0Z53LWZPClCEXRyAsjqrN/YQoFkt+zQwEmExW/Ox6dKPZILsR83ToohF5rVSEj9d5w==');
define('NONCE_KEY',        'FTmVDCvGywAcvroaMBZN8mEFCxaNyAw0Kk/zX2lRtop8DdREzkDsFiTB6ClGc9bR+0ZXSyFSnhgjsHfh7IflYg==');
define('AUTH_SALT',        'cLfDiIixda84RkFp2Xz7gVOBb5aujUTHZ7Io3JLQVfq0PErOwTT0K2CYGHdiWAR1nkGOM//CeaygDQkzmz5s0g==');
define('SECURE_AUTH_SALT', '6xEs03LTnT/39JuDBUrnb2rvKN1ie7RvcJnzAmxL7qF0gQXhG6BKzMl8bIliB80yw1KCeugeU9vc67oSfz8w1w==');
define('LOGGED_IN_SALT',   'tJgQU4oaDd0JD6uEPcs/HyfU4BN3USzHDZVYobLav95En8K9uMCM9D+jwEOxdKRlGdbyeKLZtI/Qdp+py0i3XA==');
define('NONCE_SALT',       'ELjWUNX1hCEzYQWZtI1MoAzBQ78jqZtBeME0i7yF3oIxPrI4BNhOX86lwDM4LVkOMau026QC7R5IYqxc7b0Klg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
