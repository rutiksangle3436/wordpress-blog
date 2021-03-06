<?php

// Note that 'jetpack-layout-grid' gets replaced with 'jetpack-layout-grid' when bundling
add_action( 'init', function() {
	register_block_type( 'jetpack/layout-grid', [
		'editor_script' => 'jetpack-layout-grid',
		'style' => 'jetpack-layout-grid',
		'editor_style' => 'jetpack-layout-grid-editor',
		'render_callback' => function( $attribs, $content ) {
			wp_enqueue_style( 'wpcom-layout-grid-front' );
			return $content;
		},
	] );

	register_block_type( 'jetpack/layout-grid-column', [
		'editor_script' => 'jetpack-layout-grid',
		'style' => 'jetpack-layout-grid',
		'editor_style' => 'jetpack-layout-grid-editor',
		'render_callback' => function( $attribs, $content ) {
			wp_enqueue_style( 'wpcom-layout-grid-front' );
			return $content;
		},
	] );

	wp_set_script_translations( 'jetpack/layout-grid', 'layout-grid' );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_register_style(
		'wpcom-layout-grid-front',
		plugins_url( 'front.css', __FILE__ ),
		[], // no dependencies
		filemtime( plugin_dir_path( __FILE__ ) . 'front.css' )
	);
} );
