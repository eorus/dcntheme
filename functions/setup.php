<?php
/*
 * Setup
 */

if ( ! function_exists('b5st_setup') ) {
	function b5st_setup() {

    add_image_size( 'sfa-page', 900, 600, true );
    add_image_size( 'sfa-thumb', 360, 240, true );
    add_image_size( 'sfa-middle', 600, 400 , true);
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
  	add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)

		add_theme_support( 'editor-styles' );
		add_editor_style('theme/css/editor.css');

		// Gutenberg Blocks
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'b5st' ),
					'shortName' => __( 'S', 'b5st' ),
					'size'      => 14,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'b5st' ),
					'shortName' => __( 'M', 'b5st' ),
					'size'      => 16,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'b5st' ),
					'shortName' => __( 'L', 'b5st' ),
					'size'      => 22,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'b5st' ),
					'shortName' => __( 'XL', 'b5st' ),
					'size'      => 28,
					'slug'      => 'huge',
				),
			)
		);

		update_option('thumbnail_size_w', 285); /* internal max-width of col-3 */
		update_option('small_size_w', 350); /* internal max-width of col-4 */
		update_option('medium_size_w', 730); /* internal max-width of col-8 */
		update_option('large_size_w', 1110); /* internal max-width of col-12 */

		if ( ! isset($content_width) ) {
			$content_width = 1100;
		}

		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );

		add_theme_support('automatic-feed-links');
	}
}
add_action('init', 'b5st_setup');

if ( ! function_exists( 'b5st_avatar_attributes' ) ) {
	function b5st_avatar_attributes($avatar_attributes) {
		$display_name = get_the_author_meta( 'display_name' );
		$avatar_attributes = str_replace('alt=\'\'', 'alt=\'Avatar for '.$display_name.'\' title=\'Gravatar for '.$display_name.'\'',$avatar_attributes);
		return $avatar_attributes;
	}
}
add_filter('get_avatar','b5st_avatar_attributes');

if ( ! function_exists( 'b5st_author_avatar' ) ) {
	function b5st_author_avatar() {

		echo get_avatar('', $size = '40');
	}
}

if ( ! function_exists( 'b5st_author_bio_avatar' ) ) {
	function b5st_author_bio_avatar() {

		echo get_avatar('', $size = '96');
	}
}

if ( ! function_exists( 'b5st_author_description' ) ) {
	function b5st_author_description() {
		echo get_the_author_meta('user_description');
	}
}

if ( ! function_exists( 'b5st_post_date' ) ) {
	function b5st_post_date() {
		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
			}

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				get_the_date(),
				esc_attr( get_the_modified_date( 'c' ) ),
				get_the_modified_date()
			);

			echo $time_string;
		}
	}
}

if ( ! function_exists('sfa_excerpt_more') ) {
	function sfa_excerpt_more() {
		return '&hellip;</p><p><a class="btn btn-primary pati float-right text-white stretched-link" href="'. get_permalink() . '">' . __('Read More', 'b4st') . ' <i class="bi bi-arrow-right"></i>' . '</a></p>';
	}
}
add_filter('excerpt_more', 'sfa_excerpt_more');

// Change the default excerpt length to 20 words.
function wpexplorer_excerpt_length( $length ) {
    $length = 30;
    return $length;
}
add_filter( 'excerpt_length', 'wpexplorer_excerpt_length', PHP_INT_MAX );

function my_favicon() { ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/theme/img/favicon.ico">
<?php }
add_action('wp_head', 'my_favicon');
