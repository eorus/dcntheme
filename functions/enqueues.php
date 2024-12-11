<?php
/*
 * Enqueues
 */

if ( ! function_exists('b5st_enqueues') ) {
	function b5st_enqueues() {

		// Styles

		//wp_register_style('fontawesome', get_template_directory_uri() . '/theme/css/fontawesome.css', false, null);
		//wp_enqueue_style('fontawesome');

    wp_enqueue_style( 'google-webfonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap', array(), null );


	 // wp_register_style('bootstrap', get_template_directory_uri() . '/theme/vendor/bootstrap/css/bootstrap.min.css', false, null);
	 //wp_enqueue_style('bootstrap');

   //wp_register_style('spectre', get_template_directory_uri() . '/theme/css/spectre.min.css', false, null);
	 //wp_enqueue_style('spectre');
   //wp_register_style('base', get_template_directory_uri() . '/theme/css/base.css', false, null);
	 //wp_enqueue_style('base');


   //wp_register_style('bootstrapIcons', get_template_directory_uri() . '/theme/vendor/bootstrap-icons/bootstrap-icons.min.css', false, '1.11.1', null);
   //wp_enqueue_style('bootstrapIcons');

	  wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

		wp_register_style('theme', get_template_directory_uri() . '/theme/css/b5st.css', false, null);
		wp_enqueue_style('theme');

		// Scripts

    //wp_register_script('bootstrap-js-bundle', get_template_directory_uri() . '/theme/vendor/bootstrap/js/bootstrap.bundle.min.js', false, null, true);
    //wp_enqueue_script('bootstrap-js-bundle');

		wp_register_script('theme', get_template_directory_uri() . '/theme/js/b5st.js', false, null, true);
		wp_enqueue_script('theme');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b5st_enqueues', 100);
