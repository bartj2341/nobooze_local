<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package _s
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function _s_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', '_s_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function _s_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', '_s_pingback_header' );


// Handle layout builders
function nobooze_layout( $name = 'page_partials', $dir = 'page' ) 
{
    if ( have_rows( $name ) ) :
        while ( have_rows( $name ) ) : the_row();
    
            $builder = str_replace(
                '_', '-', get_row_layout()
            );
    
            get_template_part( "partials/{$dir}/{$builder}" );
    
        endwhile;
    endif;
}

/**
 * Print SVG Directory
 */ 
function get_icons_directory( $file ) 
{
    $dir = '/assets/src/images/';
    return get_stylesheet_directory() . $dir . $file;
}
