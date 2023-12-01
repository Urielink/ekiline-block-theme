<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ekiline-block-theme
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'EKILINE_BLOCK_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "ekiline-block-theme-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'ekiline_block_theme_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_styles() {
	wp_enqueue_style(
		'ekiline-block-theme-style',
		get_stylesheet_uri(),
		[],
		EKILINE_BLOCK_THEME_VERSION
	);
	wp_enqueue_style(
		'ekiline-block-theme-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		EKILINE_BLOCK_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ekiline_block_theme_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );


/**
 * Extend styles and scripts with bootstrap.
 * assets/bootstrap/css/bootstrap.min.css
 * assets/bootstrap/js/bootstrap.bundle.min.js
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_setup_extend() {
	// Bootstrap styles editor.
	add_editor_style( './assets/bootstrap/css/bootstrap.css' );
}
add_action( 'after_setup_theme', 'ekiline_block_theme_setup_extend', 0 );

/**
 * Enqueue the CSS and JS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ekiline_block_theme_styles_extend() {
	// Bootstrap styles frontend.
	wp_enqueue_style(
		'ekiline-block-theme-bootstrap-styles',
		get_theme_file_uri( 'assets/bootstrap/css/bootstrap.css' ),
		[],
		EKILINE_BLOCK_THEME_VERSION
	);
	// Bootstrap scripts frontend, to footer.
	wp_enqueue_script(
		'ekiline-block-theme-bootstrap-scripts',
		get_theme_file_uri( 'assets/bootstrap/js/bootstrap.bundle.min.js' ),
		[],
		EKILINE_BLOCK_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ekiline_block_theme_styles_extend', 0 );