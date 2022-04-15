<?php
/**
 * Custom post types tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */


 /**
 * Register custom fields Global Options
 */
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Main Menu',
		'menu_title'	=> 'Main Menu',
		'menu_slug' 	=> 'menu-settings',
		'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-editor-justify',
		'redirect'		=> true
	));

    

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'General Settings',
	// 	'menu_title'	=> 'General',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Company Details',
	// 	'menu_title'	=> 'Company Details',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Navigation Links',
	// 	'menu_title'	=> 'Navigation Links',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Marketing Settings',
	// 	'menu_title'	=> 'Marketing',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Archives Settings',
	// 	'menu_title'	=> 'Archives',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Forms Settings',
	// 	'menu_title'	=> 'Forms',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
}
