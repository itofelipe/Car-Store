<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/fontawesome.min.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ) );
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/typed.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


	function twentynineteen_setup() {
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
	}
}
?>