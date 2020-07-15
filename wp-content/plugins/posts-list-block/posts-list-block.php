<?php
/**
 * Plugin Name: Posts List Block
 * Description: A block to display a list of your latest posts, similar to your blog page.
 * Version: 1.1
 * Author: Automattic
 * Author URI: https://automattic.com/wordpress-plugins/
 * License: GPLv2 or later
 * Text Domain: posts-list-block
 *
 * @package posts-list-block
 */

/**
 * Load plugin.
 */
function a8c_load_posts_list_block_plugin() {
	if ( function_exists( 'is_automattician' ) && ! is_automattician() ) {
		return;
	}

	if ( class_exists( 'Posts_List_Block' ) ) {
		require_once ABSPATH . '/wp-admin/includes/plugin.php';
		deactivate_plugins( array( __FILE__ ), true );
		return;
	}

	require_once __DIR__ . '/posts-list-block/utils.php';
	require_once __DIR__ . '/posts-list-block/class-posts-list-block.php';

	Posts_List_Block::get_instance();
}
add_action( 'plugins_loaded', 'a8c_load_posts_list_block_plugin' );
