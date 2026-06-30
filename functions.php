<?php
/**
 * WP Granada 26 - Theme functions
 *
 * @package wpgranada26
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'wpgranada26_register_pattern_categories', 1 );
/**
 * Register custom pattern categories and block styles.
 *
 * @return void
 */
function wpgranada26_register_pattern_categories() {
	register_block_pattern_category( 'wpgranada', array( 'label' => __( 'WPGranada', 'wpgranada26' ) ) );

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'textos-secundarios',
			'label' => __( 'Textos secundarios', 'wpgranada26' ),
		)
	);
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
 * Theme setup: declare block theme support and register nav menus.
 *
 * @return void
 */
function wpgranada26_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );

	register_nav_menus(
		array(
			'menu-principal'  => __( 'Menú Principal', 'wpgranada26' ),
			'footer-eventos'  => __( 'Footer - Eventos', 'wpgranada26' ),
			'footer-comunidad' => __( 'Footer - Comunidad', 'wpgranada26' ),
		)
	);
}

add_filter( 'get_custom_logo', 'wpgranada26_custom_logo' );
/**
 * Override site logo with theme SVG — avoids needing a media-library attachment.
 *
 * @return string
 */
function wpgranada26_custom_logo() {
	return sprintf(
		'<a href="%s" class="custom-logo-link" rel="home"><img src="%s/assets/images/logo-wpgranada.svg" class="custom-logo" alt="%s" width="180" height="auto" /></a>',
		esc_url( home_url( '/' ) ),
		esc_url( get_template_directory_uri() ),
		esc_attr( get_bloginfo( 'name' ) )
	);
}

add_shortcode( 'wpgranada_nav', 'wpgranada26_nav_shortcode' );
/**
 * Render the classic menu assigned to the menu-principal location.
 *
 * @return string
 */
function wpgranada26_nav_shortcode() {
	return wp_nav_menu(
		array(
			'theme_location' => 'menu-principal',
			'echo'           => false,
			'container'      => false,
			'menu_class'     => 'wpgranada-nav-menu',
			'fallback_cb'    => false,
		)
	);
}

add_shortcode( 'wpgranada_footer_eventos', 'wpgranada26_footer_eventos_shortcode' );
function wpgranada26_footer_eventos_shortcode() {
	return wp_nav_menu( array(
		'theme_location' => 'footer-eventos',
		'echo'           => false,
		'container'      => false,
		'menu_class'     => 'footer-nav-menu',
		'fallback_cb'    => false,
	) );
}

add_shortcode( 'wpgranada_footer_comunidad', 'wpgranada26_footer_comunidad_shortcode' );
function wpgranada26_footer_comunidad_shortcode() {
	return wp_nav_menu( array(
		'theme_location' => 'footer-comunidad',
		'echo'           => false,
		'container'      => false,
		'menu_class'     => 'footer-nav-menu',
		'fallback_cb'    => false,
	) );
}

add_filter( 'template_include', 'wpgranada26_meeting_archive_template', 99 );
/**
 * Force FSE block template for metgs_meeting archive, bypassing the plugin's
 * classic PHP template override which hijacks archive_template filter.
 *
 * @param string $template Current template path.
 * @return string
 */
function wpgranada26_meeting_archive_template( $template ) {
	if ( ! is_post_type_archive( 'metgs_meeting' ) ) {
		return $template;
	}
	$block_template = get_block_template( get_stylesheet() . '//archive-metgs_meeting', 'wp_template' );
	if ( $block_template && $block_template->content ) {
		global $_wp_current_template_content, $_wp_current_template_id;
		$_wp_current_template_content = $block_template->content;
		$_wp_current_template_id      = $block_template->id;
		return ABSPATH . WPINC . '/template-canvas.php';
	}
	return $template;
}

add_action( 'wp_enqueue_scripts', 'wpgranada26_enqueue_styles' );
/**
 * Enqueue theme stylesheet and scripts.
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

	wp_enqueue_script(
		'wpgranada26-marquee',
		get_template_directory_uri() . '/assets/js/marquee.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'wpgranada26-hamburger',
		get_template_directory_uri() . '/assets/js/hamburger.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'wp', 'wpgranada26_remove_meeting_content_injection' );
function wpgranada26_remove_meeting_content_injection() {
	if ( is_singular( 'metgs_meeting' ) ) {
		remove_all_filters( 'the_content' );
		add_filter( 'the_content', 'wpautop' );
	}
}

add_filter( 'query_loop_block_query_vars', 'wpgranada26_sidebar_exclude_current', 10, 3 );
function wpgranada26_sidebar_exclude_current( $query, $block, $page ) {
	if ( isset( $block->context['queryId'] ) && 5 === (int) $block->context['queryId'] && is_singular( 'metgs_meeting' ) ) {
		$query['post__not_in'] = array_merge( $query['post__not_in'] ?? array(), array( get_the_ID() ) );
	}
	return $query;
}

add_filter( 'upgrader_source_selection', 'wpgranada26_exclude_git_from_upgrade', 10, 4 );
function wpgranada26_exclude_git_from_upgrade( $source, $remote_source, $upgrader, $hook_extra ) {
	$git_dir = trailingslashit( $source ) . '.git';
	if ( is_dir( $git_dir ) ) {
		$upgrader->skin->feedback( 'Removing .git directory from package...' );
		WP_Filesystem();
		global $wp_filesystem;
		$wp_filesystem->delete( $git_dir, true );
	}
	return $source;
}
