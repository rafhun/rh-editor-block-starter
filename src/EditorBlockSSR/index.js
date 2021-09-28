/** External dependencies */

/** WordPress dependencies */
// import {postList as icon} from '@wordpress/icons'

/** Internal dependencies */
// import deprecated from './deprecated';
import edit from "./edit"
import icon from "./icon"
import metadata from "./block.json"

const { name } = metadata
export { metadata, name }

export const settings = {
  icon: {
    background: "#000",
    foreground: "#fff",
    src: icon,
  },
  example: {},
  edit,
  // deprecated,
}

export const removesBlocks = []
