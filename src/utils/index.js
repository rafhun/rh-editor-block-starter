/** WordPress dependencies */
import {
  registerBlockType,
  unstable__bootstrapServerSideBlockDefinitions,
} from "@wordpress/blocks"

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

  if (metadata) {
    unstable__bootstrapServerSideBlockDefinitions({ [name]: metadata })
  }

  registerBlockType(name, settings)
}
