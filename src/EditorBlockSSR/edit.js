/** Exteral dependencies */

/** WordPress dependencies */
import { __ } from "@wordpress/i18n"
import { useBlockProps } from "@wordpress/block-editor"

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
    <div {...useBlockProps()}>
      <p>Editor contents.</p>
    </div>
  )
}

export default RHEditorBlockStarterEdit
