<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
	
	wp_enqueue_script( 'synergy-custom', get_stylesheet_directory_uri() . '/assets/js/synergy-custom.js', ['jquery'], filemtime( get_stylesheet_directory() . '/assets/js/synergy-custom.js' ), ['strategy' => 'async', 'in_footer' => true ] );
}
function add_custom_script_to_head() {
    ?>
    <script type="text/javascript" id="scct">
        window.ct=window.ct||function(){(ct.q=ct.q||[]).push(arguments)};
        window.ct('accountId', '797');
    </script>
    <script async type="module" src="https://cdn.socialclimb.com/ct-min.js"></script>
    <?php
}

add_action('wp_head', 'add_custom_script_to_head');

add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/* Start of custom admin script enqueue */
// Enqueue custom admin script
function custom_admin_scripts() {
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'custom_admin_scripts');
/* End of custom admin script enqueue */


if (function_exists("register_sidebar")) {
  register_sidebar();
}

require_once( get_stylesheet_directory() . '/includes/login-page.php' );
require_once( get_stylesheet_directory() . '/includes/custom-post-types.php' );


