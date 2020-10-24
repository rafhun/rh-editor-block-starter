/** WordPress dependencies */
import { unregisterBlockType } from "@wordpress/blocks"
import domReady from "@wordpress/dom-ready"
// This is not used and only here to add a dependency to the assets file.
// This is necessary to ensure all blocks are registered before possible unregister.
// Remove this import and dependency if you are not planning to unregister any other blocks.
import "@wordpress/edit-post"

/** Internal dependencies */
import { registerBlock } from "./utils"

/** Import our blocks */
import * as EditorBlock from "./EditorBlock"

/**
 * Loop through all imported components and register them as blocks.
 */
;[
  // Register blocks first which should be prioritized in their display.
  EditorBlock,
].forEach(block => {
  registerBlock(block)

  domReady(() => {
    if (block.removesBlocks && block.removesBlocks.length) {
      block.removesBlocks.forEach(blockType => unregisterBlockType(blockType))
    }
  })
})
