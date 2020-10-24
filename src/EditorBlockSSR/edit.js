/** Exteral dependencies */

/** WordPress dependencies */
import { __ } from "@wordpress/i18n"
import { __experimentalBlock as Block } from "@wordpress/block-editor"

/** Internal dependencies */

function RHEditorBlockStarterEdit({ attributes, setAttributes }) {
  // Extract attributes
  // const {attribute} = attributes;

  /* Helper methods defined as variables */
  // const someFunction = (value) => {
  //   return value;
  // };

  /* Return */
  return (
    <Block.div>
      <p>Editor contents.</p>
    </Block.div>
  )
}

export default RHEditorBlockStarterEdit
