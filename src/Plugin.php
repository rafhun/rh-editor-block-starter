<?php

namespace RHEditorBlockStarter;

class Plugin
{
    /**
     * The location (__FILE__) constant of the main plugin file) of the plugin.
     *
     * @var string
     */
    private $pluginFile;

    /**
     * Constructor.
     *
     * @param string $file
     */
    public function __construct($file)
    {
        $this->pluginFile = $file;
    }

    /**
     * Static class initializer that hooks into WordPress
     *
     * @param string $file
     */
    public static function init($file)
    {
        $self = new self($file);

        add_action("plugins_loaded", [$self, "loadTextDomain"]);
        add_action("wp_loaded", [$self, "initBlock"]);

        /** Initialize a custom post type */
        // CustomPostType::init();
        /** Uncomment if you use server-side render */
        // EditorBlock\Render::init();
    }

    /**
     * Load the plugin text domain
     */
    public function loadTextDomain()
    {
        load_plugin_textdomain(
            "rh-editor-block-starter",
            false,
            dirname(plugin_basename($this->pluginFile)) . "/languages",
        );
    }

    /**
     * Block initializer
     *
     * Handles registering scripts, styles and block types and sets up scripts translations.
     */
    public function initBlock()
    {
        // Load the asset file generated by `@wordpress/scripts`
        $assetFilePath =
            plugin_dir_path($this->pluginFile) . "build/index.asset.php";

        // Bail if there is no asset file
        if (!file_exists($assetFilePath)) {
            return false;
        }

        $assetFile = include $assetFilePath;

        wp_register_script(
            "rh-editor-block-starter-editor-js",
            plugins_url("build/index.js", $this->pluginFile),
            $assetFile["dependencies"],
            $assetFile["version"],
        );

        wp_register_style(
            "rh-editor-block-starter-editor-css",
            plugins_url("assets/styles/editor.css", $this->pluginFile),
            ["wp-edit-blocks"],
            filemtime(
                plugin_dir_path($this->pluginFile) . "assets/styles/editor.css",
            ),
        );

        wp_register_style(
            "rh-editor-block-starter-css",
            plugins_url("assets/styles/style.css", $this->pluginFile),
            [],
            filemtime(
                plugin_dir_path($this->pluginFile) . "assets/styles/style.css",
            ),
        );

        // Delete this for server side rendered blocks
        register_block_type(
            plugin_dir_path($this->pluginFile) . "src/EditorBlock",
        );

        wp_set_script_translations(
            "rh-editor-block-starter-editor-js", // Script Handle
            "rh-editor-block-starter", // Text Domain
            plugin_dir_path($this->pluginFile) . "languages", // Path to json translation files
        );
    }
}
