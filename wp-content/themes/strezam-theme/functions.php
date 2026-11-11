<?php
/**
 * Strezam theme setup.
 *
 * Design copy and images are the defaults. When an ACF field with the same
 * key exists on the front page, that value replaces the default.
 */

if ( ! function_exists( 'strezam_setup' ) ) :
	function strezam_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 48,
				'width'       => 210,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);

		register_nav_menus(
			array(
				'primary' => 'Primary Menu',
				'footer'  => 'Footer Menu',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'strezam_setup' );

/**
 * Return an ACF text value, or the design default.
 *
 * @param string $key     ACF field name.
 * @param string $default Fallback copy from the design.
 */
function strezam_field( $key, $default ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $key );
		if ( is_string( $value ) && $value !== '' ) {
			return $value;
		}
	}

	return $default;
}

/**
 * Return an image URL from ACF, a theme asset, or the media library.
 *
 * @param string $key           ACF image field name.
 * @param string $fallback_file File name inside assets/images or uploads.
 */
function strezam_image( $key, $fallback_file ) {
	if ( function_exists( 'get_field' ) ) {
		$image = get_field( $key );
		if ( is_array( $image ) && ! empty( $image['url'] ) ) {
			return $image['url'];
		}
		if ( is_numeric( $image ) ) {
			$url = wp_get_attachment_image_url( (int) $image, 'full' );
			if ( $url ) {
				return $url;
			}
		}
		if ( is_string( $image ) && $image !== '' ) {
			return $image;
		}
	}

	$theme_path = get_template_directory() . '/assets/images/' . $fallback_file;
	if ( file_exists( $theme_path ) ) {
		return get_template_directory_uri() . '/assets/images/' . $fallback_file;
	}

	$uploads = wp_get_upload_dir();
	$matches = glob( $uploads['basedir'] . '/*/*/' . $fallback_file );
	if ( ! empty( $matches[0] ) ) {
		return $uploads['baseurl'] . str_replace( $uploads['basedir'], '', $matches[0] );
	}

	return '';
}

/**
 * URL of a file exported from the Figma design.
 *
 * @param string $file File name inside assets/images/figma.
 */
function strezam_figma( $file ) {
	return get_template_directory_uri() . '/assets/images/figma/' . ltrim( $file, '/' );
}

/**
 * URL of an image in the theme images folder.
 *
 * @param string $file File name, including spaces.
 */
function strezam_asset( $file ) {
	return get_template_directory_uri() . '/assets/images/' . rawurlencode( $file );
}

/**
 * Design navigation used until a menu is assigned in wp-admin.
 */
/**
 * Homepage section URL that still works from inner pages.
 *
 * @param string $anchor Section id without a hash.
 */
function strezam_section_url( $anchor ) {
	return home_url( '/#' . ltrim( $anchor, '#' ) );
}

/**
 * Permalink of the Research page.
 */
function strezam_research_url() {
	$page = get_page_by_path( 'research' );
	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}

	return home_url( '/research/' );
}

/**
 * Design navigation used until a menu is assigned in wp-admin.
 */
function strezam_primary_menu_fallback() {
	$links = array(
		array( strezam_section_url( 'mechanism' ), 'Механізм дії' ),
		array( strezam_section_url( 'practice' ), 'Переваги' ),
		array( strezam_section_url( 'indications' ), 'Пацієнту' ),
		array( strezam_research_url(), 'Докази' ),
		array( strezam_section_url( 'product' ), 'Як призначати' ),
	);

	echo '<ul class="nav-menu">';
	foreach ( $links as $link ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( $link[0] ),
			esc_html( $link[1] )
		);
	}
	printf(
		'<li class="btn-instruction"><a href="%s">Інструкція</a></li>',
		esc_url( strezam_section_url( 'materials' ) )
	);
	echo '</ul>';
}

/**
 * Style an "Інструкція" item as the header button when a real menu is used.
 *
 * @param string[] $classes Menu item classes.
 * @param WP_Post  $item    Menu item.
 */
function strezam_instruction_menu_class( $classes, $item ) {
	if ( isset( $item->title ) && $item->title === 'Інструкція' ) {
		$classes[] = 'btn-instruction';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'strezam_instruction_menu_class', 10, 2 );

/**
 * Enqueue styles and the small navigation script.
 */
function strezam_scripts() {
	$style_path = get_template_directory() . '/assets/css/style.css';
	$script_path = get_template_directory() . '/assets/js/scripts.js';

	wp_enqueue_style(
		'strezam-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@500;600;700;800;900&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'strezam-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'strezam-fonts' ),
		file_exists( $style_path ) ? (string) filemtime( $style_path ) : '1.1.0'
	);
	wp_enqueue_script(
		'strezam-scripts',
		get_template_directory_uri() . '/assets/js/scripts.js',
		array(),
		file_exists( $script_path ) ? (string) filemtime( $script_path ) : '1.1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'strezam_scripts' );
