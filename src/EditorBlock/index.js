/** External dependencies */

/** WordPress dependencies */
import { __ } from "@wordpress/i18n"
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
  title: __("RH Editor Block Starter", "rh-editor-block-starter"),
  description: __("Describe this block.", "rh-editor-block-starter"),
  icon: {
    background: "#000",
    foreground: "#fff",
    src: icon,
  },
  keywords: [__("keyword", "rh-editor-block-starter")],
  example: {},
  edit,
  save,
  // deprecated,
  transforms,
}

export const removesBlocks = []
