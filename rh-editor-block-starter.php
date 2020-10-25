<?php

/**
 * The main plugin file where we load relevant scripts and enqueue
 * assets for WordPress.
 *
 * PHP version 7
 *
 * @package RHEditorBlockStarter
 * @author Raphael Hüni <rafhun@gmail.com>
 * @version 1.0.0
 * @since 1.0.0
 *
 * Plugin Name: RH Editor Block Starter
 * Plugin URI: https://github.com/rafhun/rh-editor-block-starter
 * Description: Describe this block.
 * Version: 1.0.0
 * Author: Raphael Hüni
 * Author URI: https://github.com/rafhun/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: rh-editor-block-starter
 * Domain Path: /languages
 */

namespace RHEditorBlockStarter;

__('RH Editor Block Starter', 'rh-editor-block-starter');

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit();
}

/** Autoloader
 * Only required if file actually exists. If not autoload is managed on a
 * higher hierarchy.
 * */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

// Initialize the plugin
Plugin::init(__FILE__);
