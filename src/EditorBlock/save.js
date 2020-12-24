/** External dependencies */

/** WordPress dependencies */
import { useBlockProps } from "@wordpress/block-editor"

/** Internal dependencies */

export default function save({ attributes }) {
  return (
    <div {...useBlockProps.save()}>
      <p>Save Contents</p>
    </div>
  )
}
