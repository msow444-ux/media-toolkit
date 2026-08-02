<?php
/**
 * Plugin Name:       Media Toolkit by MS&AI
 * Plugin URI:        https://github.com/msow444-ux/media-toolkit
 * Update URI:        https://github.com/msow444-ux/media-toolkit
 * Description:       Zestaw narzędzi do zarządzania obrazami i plikami multimedialnymi w WordPress.
 * Version:           0.1.0
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Author:            Marek Sowiński
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       media-toolkit-msai
 */

defined( 'ABSPATH' ) || exit;

/**
 * Wersja wtyczki.
 */
define( 'MEDIA_TOOLKIT_VERSION', '0.1.0' );

/**
 * Ścieżka do katalogu wtyczki.
 */
define( 'MEDIA_TOOLKIT_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Adres URL katalogu wtyczki.
 */
define( 'MEDIA_TOOLKIT_URL', plugin_dir_url( __FILE__ ) );