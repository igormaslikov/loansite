<?php
/**
 * Astra YDG Child Theme
 *
 * @package Astra YDG Child
 * @since 1.1.0
 */

define( 'ASTRA_YDG_VERSION', '1.1.0' );
define( 'ASTRA_YDG_DIR', get_stylesheet_directory() );
define( 'ASTRA_PARENT_DIR', get_template_directory() );
define( 'ASTRA_YDG_URL', get_stylesheet_directory_uri() );

require( ASTRA_YDG_DIR . '/inc/class-ydg-theme.php' );
require( ASTRA_YDG_DIR . '/inc/class-ydg-scss.php' );
require( ASTRA_YDG_DIR . '/inc/class-ydg-builder.php' );
require( ASTRA_YDG_DIR . '/inc/customizer/class-ydg-customizer.php' );

\YDG\Astra\Theme::init();

/**
 * Current year shortcode
 */
add_shortcode( 'current_year', 'ydg_current_year' );
function ydg_current_year() {
	return date('Y');
}

// Setting it up so we can use shortcode in customizer
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Returns the translated "Apply Online" callout
 * 
 * @return string
 */
function ydg_apply_online_es ()
{
	if ( isset( $_REQUEST['lang'] ) && $_REQUEST['lang'] === 'es' ) {
		return 'Aplica en línea';
	}

	return 'Apply Online';
}
add_shortcode( 'ydg_apply_online_es', 'ydg_apply_online_es' );