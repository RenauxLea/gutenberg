import { __ } from '@wordpress/i18n'
import { useBlockProps } from '@wordpress/block-editor'

import './editor.scss'

export default function Edit(props) {
	const blockProps = useBlockProps();

	const onChangeContent = event => {
		props.setAttributes( { content: event.target.value } )
	}

	return (
		<div {...blockProps}>
			{ props.isSelected ? ( 
				<input
					type='text'
					value={ props.attributes.content }
					onChange={ onChangeContent }
					placeholder={ __('Write a text!', 'capitainewp-gut-bases' ) }
				/>
			) : (
				<p className="content">{ props.attributes.content }</p>
			) }
		</div>
	)
}