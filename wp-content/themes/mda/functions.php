<?php
/**
 * Maison des Aînés Theme functions and definitions
 *
 * @package mda-theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MDA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme setup
 */
function mda_theme_setup() {
	// Add support for block styles
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles
	add_editor_style( 'style.css' );

	// Add support for responsive embedded content
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Load text domain
	load_theme_textdomain( 'mda-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mda_theme_setup' );

/**
 * Enqueue styles
 */
function mda_theme_styles() {
	wp_enqueue_style(
		'mda-theme-style',
		get_stylesheet_uri(),
		array(),
		MDA_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mda_theme_styles' );

/**
 * Register block pattern category
 */
function mda_theme_register_block_pattern_category() {
	register_block_pattern_category(
		'mda-theme',
		array( 'label' => __( 'Maison des Aînés', 'mda-theme' ) )
	);
}
add_action( 'init', 'mda_theme_register_block_pattern_category' );
