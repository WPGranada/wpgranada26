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
	$items = array(
		array(
			'label' => __( 'Próximos eventos', 'wpgranada26' ),
			'url'   => 'https://www.meetup.com/es-es/granada-wordpress-meetup/events/',
		),
		array(
			'label' => __( 'Eventos pasados', 'wpgranada26' ),
			'url'   => 'https://www.meetup.com/es-ES/granada-wordpress-meetup/events/past/',
		),
		array(
			'label' => __( 'Calendario', 'wpgranada26' ),
			'url'   => 'https://www.meetup.com/es-ES/granada-wordpress-meetup/events/calendar/',
		),
	);

	return wpgranada26_footer_nav_markup( __( 'Eventos del footer', 'wpgranada26' ), $items );
}

add_shortcode( 'wpgranada_footer_comunidad', 'wpgranada26_footer_comunidad_shortcode' );
function wpgranada26_footer_comunidad_shortcode() {
	$items = array(
		array(
			'label' => __( 'Sobre nosotros', 'wpgranada26' ),
			'url'   => home_url( '/sobre-nosotros/' ),
		),
		array(
			'label' => __( 'Ser ponente', 'wpgranada26' ),
			'url'   => 'https://wp-granada-beta.local/ser-ponente/',
		),
		array(
			'label' => __( 'Patrocinadores', 'wpgranada26' ),
			'url'   => 'https://close.technology/',
		),
	);

	return wpgranada26_footer_nav_markup( __( 'Comunidad del footer', 'wpgranada26' ), $items );
}

/**
 * Render a semantic footer navigation list.
 *
 * @param string $aria_label Accessible label for the navigation landmark.
 * @param array  $items      Label and URL pairs.
 * @return string
 */
function wpgranada26_footer_nav_markup( $aria_label, $items ) {
	$html  = '<nav aria-label="' . esc_attr( $aria_label ) . '" class="wpgranada-footer-nav">';
	$html .= '<ul class="footer-nav-menu">';

	foreach ( $items as $item ) {
		$html .= '<li><a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['label'] ) . '</a></li>';
	}

	$html .= '</ul></nav>';

	return $html;
}

add_filter( 'render_block_core/social-links', 'wpgranada26_replace_legacy_footer_social_links', 10, 2 );
/**
 * Replace a saved legacy footer social-links block containing Telegram.
 * The block template part may be stored in WordPress and override parts/footer.html.
 *
 * @param string $block_content Rendered social-links block.
 * @param array  $block         Parsed block data.
 * @return string
 */
function wpgranada26_replace_legacy_footer_social_links( $block_content, $block ) {
	if ( false === strpos( $block_content, 't.me/wpgranada' ) && false === strpos( $block_content, 'wp-social-link-telegram' ) ) {
		return $block_content;
	}

	$social_links = array(
		array(
			'label' => 'LinkedIn',
			'url'   => 'https://www.linkedin.com/company/closemarketing/posts/',
			'icon'  => 'linkedin.svg',
		),
		array(
			'label' => 'Instagram',
			'url'   => 'https://www.instagram.com/closemarketing/',
			'icon'  => 'instagram.svg',
		),
		array(
			'label' => 'YouTube',
			'url'   => 'https://www.youtube.com/@ClosemarketingEs',
			'icon'  => 'youtube.svg',
		),
		array(
			'label' => 'TikTok',
			'url'   => 'https://www.tiktok.com/@closemarketing',
			'icon'  => 'tiktok.svg',
		),
	);

	$base_url = trailingslashit( get_template_directory_uri() ) . 'assets/images/';
	$html     = '<ul class="wpgranada-footer__social-links" aria-label="' . esc_attr__( 'Redes sociales de WPGranada', 'wpgranada26' ) . '">';

	foreach ( $social_links as $social_link ) {
		$html .= '<li><a href="' . esc_url( $social_link['url'] ) . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr( $social_link['label'] ) . '">';
		$html .= wpgranada26_footer_social_icon_markup( $social_link, $base_url ) . '</a></li>';
	}

	$html .= '</ul>';

	return $html;
}

/**
 * Render a visible white icon for social services whose supplied SVG has a solid background.
 *
 * @param array  $social_link Social link data.
 * @param string $base_url   Theme social icon directory URL.
 * @return string
 */
function wpgranada26_footer_social_icon_markup( $social_link, $base_url ) {
	if ( 'Instagram' === $social_link['label'] ) {
		return '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="5" stroke="#fff" stroke-width="2"/><circle cx="12" cy="12" r="4" stroke="#fff" stroke-width="2"/><circle cx="17.5" cy="6.5" r="1.25" fill="#fff"/></svg>';
	}

	if ( 'YouTube' === $social_link['label'] ) {
		return '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><rect x="3" y="5.5" width="18" height="13" rx="4" stroke="#fff" stroke-width="2"/><path d="M10 8.8v6.4l5.5-3.2L10 8.8Z" fill="#fff"/></svg>';
	}

	return '<img src="' . esc_url( $base_url . $social_link['icon'] ) . '" alt="" />';
}

add_shortcode( 'wpgranada_reading_time', 'wpgranada26_reading_time_shortcode' );
/**
 * Render an estimated reading time for the current post.
 *
 * @return string
 */
function wpgranada26_reading_time_shortcode() {
	$post_content = get_post_field( 'post_content', get_the_ID() );
	$plain_text   = wp_strip_all_tags( strip_shortcodes( (string) $post_content ) );
	$word_count   = preg_match_all( '/[\p{L}\p{N}]+/u', $plain_text );
	$minutes      = max( 1, (int) ceil( (int) $word_count / 200 ) );

	return '<span class="wpgranada-single-reading-time">' . esc_html( sprintf( __( '%d MIN DE LECTURA', 'wpgranada26' ), $minutes ) ) . '</span>';
}

add_shortcode( 'wpgranada_post_share', 'wpgranada26_post_share_shortcode' );
/**
 * Render dynamic links for sharing the current post.
 *
 * @return string
 */
function wpgranada26_post_share_shortcode() {
	$post_url   = get_permalink( get_the_ID() );
	$linkedin_url = add_query_arg( 'url', $post_url, 'https://www.linkedin.com/sharing/share-offsite/' );

	return '<div class="wpgranada-single-share"><span>' . esc_html__( 'Compartir', 'wpgranada26' ) . '</span><a href="' . esc_url( $linkedin_url ) . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr__( 'Compartir en LinkedIn', 'wpgranada26' ) . '">in</a></div>';
}

add_shortcode( 'wpgranada_post_toc', 'wpgranada26_post_toc_shortcode' );
/**
 * Render the article table of contents from H2 headings collected at render time.
 *
 * @return string
 */
function wpgranada26_post_toc_shortcode() {
	$items = $GLOBALS['wpgranada26_single_toc_items'] ?? array();

	if ( empty( $items ) ) {
		return '';
	}

	$output = '<nav class="wpgranada-single-toc" aria-label="' . esc_attr__( 'Índice del artículo', 'wpgranada26' ) . '"><p>' . esc_html__( 'EN ESTE ARTÍCULO', 'wpgranada26' ) . '</p><ol>';
	foreach ( $items as $index => $item ) {
		$output .= '<li><a href="#' . esc_attr( $item['id'] ) . '"><span>' . esc_html( sprintf( '%02d', $index + 1 ) ) . '</span>' . esc_html( $item['title'] ) . '</a></li>';
	}
	$output .= '</ol></nav>';

	return $output;
}

add_filter( 'the_content', 'wpgranada26_add_post_toc_heading_ids', 20 );
/**
 * Collect every rendered H2 from the post content and assign matching unique IDs.
 *
 * @param string $content Rendered post content.
 * @return string
 */
function wpgranada26_add_post_toc_heading_ids( $content ) {
	if ( ! is_singular( 'post' ) || get_queried_object_id() !== get_the_ID() ) {
		return $content;
	}

	$items    = array();
	$used_ids = array();

	$rendered_content = preg_replace_callback(
		'/<h2\b([^>]*)>(.*?)<\/h2>/is',
		function ( $matches ) use ( &$items, &$used_ids ) {
			$attributes = $matches[1];
			$title      = trim( wp_strip_all_tags( $matches[2] ) );
			if ( '' === $title ) {
				return $matches[0];
			}

			$existing_id = '';
			if ( preg_match( '/\bid\s*=\s*(["\'])(.*?)\1/i', $attributes, $id_match ) ) {
				$existing_id = sanitize_title( $id_match[2] );
			}
			$slug = $existing_id ? $existing_id : sanitize_title( $title );
			$slug = '' !== $slug ? $slug : 'seccion';
			$id   = $slug;
			$suffix = 2;
			while ( in_array( $id, $used_ids, true ) ) {
				$id = $slug . '-' . $suffix++;
			}
			$used_ids[] = $id;
			$items[]    = array(
				'id'    => $id,
				'title' => $title,
			);

			if ( preg_match( '/\bid\s*=\s*(["\']).*?\1/i', $attributes ) ) {
				$attributes = preg_replace( '/\bid\s*=\s*(["\']).*?\1/i', 'id="' . esc_attr( $id ) . '"', $attributes, 1 );
			} else {
				$attributes .= ' id="' . esc_attr( $id ) . '"';
			}

			return '<h2' . $attributes . '>' . $matches[2] . '</h2>';
		},
		$content
	);
	$GLOBALS['wpgranada26_single_toc_items'] = $items;

	return $rendered_content;
}

add_filter( 'query_loop_block_query_vars', 'wpgranada26_exclude_current_related_post', 10, 2 );
/**
 * Exclude the current post from the related posts query.
 *
 * @param array    $query_vars Query vars.
 * @param WP_Block $block      Query block.
 * @return array
 */
function wpgranada26_exclude_current_related_post( $query_vars, $block ) {
	$query_id = $block->context['queryId'] ?? ( $block->parsed_block['attrs']['queryId'] ?? 0 );
	if ( is_singular( 'post' ) && 2 === (int) $query_id ) {
		$query_vars['post__not_in'] = array_values( array_unique( array_merge( $query_vars['post__not_in'] ?? array(), array( get_queried_object_id() ) ) ) );
		$query_vars['post_status']  = 'publish';
	}

	return $query_vars;
}

/**
 * Check whether another published post is available for the related section.
 *
 * @return bool
 */
function wpgranada26_has_related_posts() {
	static $has_related_posts = null;
	if ( null !== $has_related_posts ) {
		return $has_related_posts;
	}

	$related_posts = get_posts(
		array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => 1,
			'post__not_in'        => array( get_queried_object_id() ),
			'fields'              => 'ids',
			'no_found_rows'       => true,
			'ignore_sticky_posts' => true,
			'suppress_filters'    => false,
		)
	);

	$has_related_posts = ! empty( $related_posts );

	return $has_related_posts;
}

add_filter( 'render_block_core/group', 'wpgranada26_hide_empty_related_section', 10, 2 );
/**
 * Omit the whole related section when there are no other published posts.
 *
 * @param string $block_content Rendered group HTML.
 * @param array  $block         Parsed block data.
 * @return string
 */
function wpgranada26_hide_empty_related_section( $block_content, $block ) {
	$class_name = $block['attrs']['className'] ?? '';
	if ( ! is_singular( 'post' ) || false === strpos( $class_name, 'wpgranada-single-related' ) ) {
		return $block_content;
	}

	return wpgranada26_has_related_posts() ? $block_content : '';
}

add_filter( 'render_block_core/separator', 'wpgranada26_hide_empty_related_separator', 10, 2 );
/**
 * Hide the divider above related articles when that section is empty.
 *
 * @param string $block_content Rendered separator HTML.
 * @param array  $block         Parsed block data.
 * @return string
 */
function wpgranada26_hide_empty_related_separator( $block_content, $block ) {
	$class_name = $block['attrs']['className'] ?? '';
	if ( is_singular( 'post' ) && false !== strpos( $class_name, 'wpgranada-single-related-separator' ) && ! wpgranada26_has_related_posts() ) {
		return '';
	}

	return $block_content;
}

add_action( 'wp_enqueue_scripts', 'wpgranada26_single_post_inline_script', 20 );
/**
 * Keep the TOC item matching the heading currently in view.
 *
 * @return void
 */
function wpgranada26_single_post_inline_script() {
	if ( ! is_singular( 'post' ) ) {
		return;
	}

	$script = <<<'JS'
(() => {
	const toc = document.querySelector('.wpgranada-single-toc');
	if (!toc) return;
	const links = [...toc.querySelectorAll('a[href^="#"]')];
	const headings = links.map((link) => document.getElementById(decodeURIComponent(link.hash.slice(1)))).filter(Boolean);
	if (!headings.length) return;
	const activate = (heading) => {
		links.forEach((link) => {
			const active = link.hash === `#${heading.id}`;
			link.classList.toggle('wpgranada-single-toc__active', active);
			if (active) link.setAttribute('aria-current', 'location');
			else link.removeAttribute('aria-current');
		});
	};
	const update = () => {
		let current = headings[0];
		headings.forEach((heading) => {
			if (heading.getBoundingClientRect().top <= 150) current = heading;
		});
		if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2) current = headings[headings.length - 1];
		activate(current);
	};
	window.addEventListener('scroll', update, { passive: true });
	window.addEventListener('resize', update);
	update();
})();
JS;

	wp_add_inline_script( 'wpgranada26-marquee', $script, 'after' );
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

add_action( 'wp_footer', 'wpgranada26_mobile_overlay' );
function wpgranada26_mobile_overlay() {
	?>
	<div id="wpgranada-mobile-overlay" class="wpgranada-mobile-overlay" aria-hidden="true">
		<button class="wpgranada-mobile-overlay__close" aria-label="<?php esc_attr_e( 'Cerrar menú', 'wpgranada26' ); ?>">
			<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
				<line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
			</svg>
		</button>
		<img class="wpgranada-mobile-overlay__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-wpgranada.svg" alt="WordPress Granada" width="160">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-principal',
			'menu_class'     => 'wpgranada-mobile-overlay__menu',
			'container'      => false,
			'fallback_cb'    => false,
		) );
		?>
		<a class="wpgranada-mobile-overlay__cta wp-element-button" href="https://www.meetup.com/es-es/granada-wordpress-meetup/" target="_blank" rel="noreferrer noopener">
			<?php esc_html_e( 'Únete al Meetup', 'wpgranada26' ); ?>
		</a>
	</div>
	<?php
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
