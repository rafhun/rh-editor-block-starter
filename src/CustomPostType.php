<?php

namespace RHEditorBlockStarter;

/**
 * Define a custom post type.
 *
 * @package RHEditorBlockStarter
 * @version 1.0
 * @since 1.0.0
 */
class CustomPostType
{
    /**
     * Constructor which calls all necessary hooks.
     *
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public function __construct()
    {
        // Keep if necessary to set up initial state.
    }

    /**
     * Static initializer
     *
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public static function init()
    {
        $self = new self();
        // Register the custom post type.
        add_action("wp_loaded", [$self, "registerPostType"], 0);
    }

    /**
     * Register the post type.
     *
     * @return void
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public function registerPostType()
    {
        $labels = [];

        register_post_type(
            "post-type-id",
            [], // Args
        );
    }
}
