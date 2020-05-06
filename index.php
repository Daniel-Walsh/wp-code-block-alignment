<?php
/**
 * Plugin Name:  Code Block Alignment
 * Plugin URI:   https://github.com/Daniel-Walsh/wp-code-block-alignment
 * Description:  Extends the core Gutenberg code block with <em>wide</em> and <em>center</em> alignment options.
 * Version:      1.0
 * Author:       Dan Walsh
 * Author URI:   https://dwalsh.dev/
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  code-block-alignment
 *
 * @package Code_Block_Alignment
 */

add_action(
	'enqueue_block_editor_assets',
	function() {
		wp_enqueue_script(
			'code-block-alignment-script',
			plugins_url( 'main.js', __FILE__ ),
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . '/main.js' ),
			false,
		);
	}
);
