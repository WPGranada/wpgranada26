<?php
/**
 * WP Granada 26 - Theme functions
 *
 * @package wpgranada26
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'wpgranada26_register_pattern_categories', 1 );
/**
 * Register custom pattern categories.
 *
 * @return void
 */
function wpgranada26_register_pattern_categories() {
	register_block_pattern_category( 'wpgranada', array( 'label' => __( 'WPGranada', 'wpgranada26' ) ) );
}

add_filter( 'query_loop_block_query_vars', 'wpgranada26_upcoming_meetings_query', 10, 2 );
/**
 * Filter Query Loop block vars for meetings CPT to show only upcoming events.
 *
 * @param array    $query_vars Current query vars.
 * @param WP_Block $block      Block instance.
 * @return array
 */
function wpgranada26_upcoming_meetings_query( $query_vars, $block ) {
	if ( ! isset( $query_vars['post_type'] ) || 'meetings' !== $query_vars['post_type'] ) {
		return $query_vars;
	}

	$query_vars['post_status'] = array( 'publish', 'future' );
	$query_vars['date_query']  = array(
		array(
			'after'     => gmdate( 'Y-m-d H:i:s' ),
			'inclusive' => true,
			'column'    => 'post_date',
		),
	);
	$query_vars['orderby'] = 'date';
	$query_vars['order']   = 'ASC';

	return $query_vars;
}

add_action( 'after_setup_theme', 'wpgranada26_setup' );
/**
 * Theme setup: declare block theme support.
 *
 * @return void
 */
function wpgranada26_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
}

add_action( 'wp_enqueue_scripts', 'wpgranada26_enqueue_styles' );
/**
 * Enqueue theme stylesheet.
 *
 * @return void
 */
function wpgranada26_enqueue_styles() {
	wp_enqueue_style(
		'wpgranada26-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
