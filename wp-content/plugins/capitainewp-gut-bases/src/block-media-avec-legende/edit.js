import { __ } from '@wordpress/i18n'
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor'

import './editor.scss'

export default function Edit() {
	const blockProps = useBlockProps()

	
	const ALLOWED_BLOCKS = [ 'core/image', 'core/paragraph' ];

	
	const BASE_TEMPLATE = [
		[ 'core/image', { } ],
		[ 'core/paragraph', { placeholder: __( 'le paragraphe', 'capitainewp-gut-bases' ), className:"legende" } ],
	];

	return (
		<div { ...blockProps  } className="imageAvecTexte" >
			<InnerBlocks
				allowedBlocks={ ALLOWED_BLOCKS }
				template={ BASE_TEMPLATE }
				templateLock="all"
				
			/>
		</div>
	)
}