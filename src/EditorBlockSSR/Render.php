<?php

/**
 * Use this file if you need server-side rendering for your block.
 *
 * @package RHEditorBlockStarter
 * @version 1.0
 * @since 1.0.0
 */
namespace RHEditorBlockStarter\EditorBlockSSR;

/**
 * Server side rendering of an editor block is set up in this class.
 * As such it also handles server side block registration.
 *
 * @package RHEditorBlockStarter
 * @version 1.0
 * @since 1.0.0
 */
class Render
{
    /**
     * Set up the block by hooking into the WordPress `wp_loaded` action.
     *
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public static function init()
    {
        $self = new self();
        add_action('wp_loaded', [$self, 'registerBlock']);
    }

    /**
     * Function to register the block server-side.
     *
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public function registerBlock()
    {
        register_block_type_from_metadata(__DIR__, [
            'render_callback' => [$this, 'renderBlock'],
            'editor_script' => 'rh-editor-block-starter-editor-js',
            'editor_style' => 'rh-editor-block-starter-editor-css',
            'style' => 'rh-editor-block-starter-css',
        ]);
    }

    /**
     * This function actually renders the block. It is set up as callback in the `register_block_type` function above.
     *
     * @package RHEditorBlockStarter
     * @version 1.0
     * @since 1.0.0
     */
    public function renderBlock($attributes)
    {
        $blockContent = '';

        return $blockContent;
    }
}
