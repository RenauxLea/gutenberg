<?php
/**
 * Plugin Name:       Capitainewp Gut Bases
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       capitainewp-gut-bases
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_capitainewp_gut_bases_block_init() {
	register_block_type( __DIR__ . '/build/block-edit' );
	register_block_type( __DIR__ . '/build/block-1' );
	
	register_block_type( __DIR__ . '/build/block-media' );
	register_block_type( __DIR__ . '/build/block-media-avec-text' );
	register_block_type( __DIR__ . '/build/block-media-avec-legende' );
	
	// register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_capitainewp_gut_bases_block_init' );
