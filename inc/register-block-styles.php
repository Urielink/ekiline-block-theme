<?php
/**
 * Block styles.
 *
 * @package ekiline-block-theme
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'ekiline-block-theme-flat-button',
			'label' => __( 'Flat button', 'ekiline-block-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ekiline-block-theme-list-underline',
			'label' => __( 'Underlined list items', 'ekiline-block-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'ekiline-block-theme-box-shadow',
			'label' => __( 'Box shadow', 'ekiline-block-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'ekiline-block-theme-box-shadow',
			'label' => __( 'Box shadow', 'ekiline-block-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'ekiline-block-theme-box-shadow',
			'label' => __( 'Box shadow', 'ekiline-block-theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'ekiline-block-theme-plus',
			'label' => __( 'Plus & minus', 'ekiline-block-theme' ),
		)
	);
}
add_action( 'init', 'ekiline_block_theme_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_unregister_block_style() {
	wp_enqueue_script(
		'ekiline-block-theme-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		EKILINE_BLOCK_THEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'ekiline_block_theme_unregister_block_style' );
