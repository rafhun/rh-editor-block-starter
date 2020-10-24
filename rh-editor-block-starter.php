<?php
namespace RHEditorBlockStarter;

/**
 * The main plugin file where we load relevant scripts and enqueue
 * assets for WordPress.
 *
 * PHP version 7
 *
 * @package RHEditorBlockStarter
 * @author Werbelinie AG <support@werbelinie.ch>
 * @version 1.0.0
 * @since 1.0.0
 *
 * Plugin Name: RH Editor Block Starter
 * Plugin URI: https://werbelinie.ch
 * Description: Describe this block.
 * Version: 1.0.0
 * Author: Werbelinie AG
 * Author URI: https://werbelinie.ch
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: rh-editor-block-starter
 * Domain Path: /languages
 */
__('RH Editor Block Starter', 'rh-editor-block-starter');

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/** Autoloader
 * Only required if file actually exists. If not autoload is managed on a
 * higher hierarchy.
 * */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

// Initialize the plugin
Plugin::init();
