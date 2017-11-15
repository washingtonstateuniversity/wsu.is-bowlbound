<?php

add_filter( 'spine_child_theme_version', 'bowl_bound_theme_version' );
/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function bowl_bound_theme_version() {
	return '0.0.1';
}

add_action( 'wp_enqueue_scripts', 'bowl_bound_enqueue_scripts', 21 );
/**
 * Enqueues custom styles.
 *
 * @since 0.0.1
 */
function bowl_bound_enqueue_scripts() {
	wp_dequeue_script( 'wsu-spine' );

	if ( has_category( '2017', get_the_ID() ) ) {
		wp_dequeue_style( 'spine-custom-css' );
		wp_enqueue_style( 'graduate', '//fonts.googleapis.com/css?family=Graduate' );
	} else {
		wp_dequeue_style( 'spine-theme-child' );
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
