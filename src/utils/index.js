/** WordPress dependencies */
import { registerBlockType } from "@wordpress/blocks"

/**
 * Function to register an individual block.
 *
 * @param {Object} block The block to be registered.
 */
export const registerBlock = block => {
  if (!block) {
    return
  }

  const { metadata, settings, name } = block

  registerBlockType({ name, ...metadata }, settings)
}
