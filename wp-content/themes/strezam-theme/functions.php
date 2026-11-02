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
 * Design navigation used until a menu is assigned in wp-admin.
 */
function strezam_primary_menu_fallback() {
	$links = array(
		array( '#mechanism', 'Механізм дії' ),
		array( '#practice', 'Переваги' ),
		array( '#indications', 'Пацієнту' ),
		array( '#evidence', 'Докази' ),
		array( '#product', 'Як призначати' ),
	);

	echo '<ul class="nav-menu">';
	foreach ( $links as $link ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( $link[0] ),
			esc_html( $link[1] )
		);
	}
	echo '<li class="btn-instruction"><a href="#materials">Інструкція</a></li>';
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
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap',
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
