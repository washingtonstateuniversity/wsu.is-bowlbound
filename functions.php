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
