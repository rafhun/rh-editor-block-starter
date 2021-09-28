/** External dependencies */

/** WordPress dependencies */
// import {paragraph as icon} from '@wordpress/icons';

/** Internal dependencies */
// import deprecated from './deprecated';
import edit from "./edit"
import icon from "./icon"
import metadata from "./block.json"
import save from "./save"
import transforms from "./transforms"

const { name } = metadata
export { metadata, name }

export const settings = {
  icon: {
    background: "#000",
    foreground: "#fff",
    src: icon,
  },
  example: {},
  transforms,
  edit,
  save,
  // deprecated,
}

export const removesBlocks = []
