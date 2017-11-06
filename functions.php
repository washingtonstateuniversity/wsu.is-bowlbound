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
	wp_enqueue_style( 'graduate', '//fonts.googleapis.com/css?family=Graduate' );
}
