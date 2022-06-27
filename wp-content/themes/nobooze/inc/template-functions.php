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

/**
 * Print Favicons Directories
 */ 
function get_favicons() {
	echo "<link rel='apple-touch-icon' sizes='180x180' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/apple-touch-icon.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='32x32' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/favicon-32x32.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='16x16' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/favicon-16x16.png' />" . "\n";
	echo "<link rel='manifest' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/site.webmanifest' />" . "\n";
	echo "<link rel='mask-icon' color='#0a64bc' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/safari-pinned-tab.svg' />" . "\n";
	echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/favicon.ico' />" . "\n";
	echo "<meta name='msapplication-TileColor' content='#da532c' />" . "\n";
	echo "<meta name='msapplication-config' content='" . get_stylesheet_directory_uri() . "/assets/src/favicon/browserconfig.xml' />". "\n";
	echo "<meta name='theme-color' content='#ffffff' />" . "\n";
}

add_action( 'wp_head', 'get_favicons');


/**
 * Removing the bottom margin from the admin bar.
 */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');