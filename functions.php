<?php

require_once __DIR__ . '/includes/2017-svgs.php';

add_filter( 'spine_child_theme_version', 'bowl_bound_theme_version' );
/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function bowl_bound_theme_version() {
	return '0.0.6';
}

add_action( 'wp_enqueue_scripts', 'bowl_bound_enqueue_scripts', 21 );
/**
 * Enqueues custom styles.
 *
 * @since 0.0.1
 */
function bowl_bound_enqueue_scripts() {
	wp_dequeue_script( 'wsu-spine' );
	wp_dequeue_style( 'spine-theme-child' );

	if ( has_category( '2016', get_the_ID() ) ) {
		wp_enqueue_style( 'bowlbound-2016', get_stylesheet_directory_uri() . '/css/2016.css', array( 'open-sans' ), bowl_bound_theme_version() );
	}

	if ( has_category( '2017', get_the_ID() ) ) {
		wp_enqueue_style( 'graduate', '//fonts.googleapis.com/css?family=Graduate' );
		wp_enqueue_style( 'bowlbound-2017', get_stylesheet_directory_uri() . '/css/2017.css', array( 'graduate' ), bowl_bound_theme_version() );
		wp_enqueue_style( 'bowlbound-2017-ie', get_stylesheet_directory_uri() . '/css/2017-ie.css', array( 'bowlbound-2017' ), bowl_bound_theme_version() );
		wp_style_add_data( 'bowlbound-2017-ie', 'conditional', 'IE' );
		wp_enqueue_script( 'bowlbound-2017', get_stylesheet_directory_uri() . '/js/2017.min.js', array( 'jquery' ), bowl_bound_theme_version(), true );
	}
}

add_filter( 'nav_menu_css_class', 'bowl_bound_remove_menu_classes' );
/**
 * Remove menu item classes output by WordPress.
 *
 * @since 0.0.1
 *
 * @return array
 */
function bowl_bound_remove_menu_classes() {
	return array();
}

add_filter( 'nav_menu_item_id', 'bowl_bound_remove_menu_ids' );
/**
 * Remove menu item ids output by WordPress.
 *
 * @since 0.0.1
 *
 * @return string
 */
function bowl_bound_remove_menu_ids() {
	return '';
}
