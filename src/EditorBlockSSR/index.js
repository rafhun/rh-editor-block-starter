/** External dependencies */

/** WordPress dependencies */
import { __ } from "@wordpress/i18n"

/** Internal dependencies */
// import deprecated from './deprecated';
import edit from "./edit"
import icon from "./icon"
import metadata from "./block.json"

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
  // deprecated,
}

export const removesBlocks = []
