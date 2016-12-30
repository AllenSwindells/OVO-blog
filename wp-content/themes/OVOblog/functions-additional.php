<?php

// additional custom functions here
/**
 * Set Jetpack related posts image size
 *
 * @since 1.0.0
 * @param array $thumbnail_size
 * @return array
 */
function ja_jetpack_related_posts_size ( $thumbnail_size ) {
	$thumbnail_size['width']  = 340;
	$thumbnail_size['height'] = 340;
	$thumbnail_size['crop']   = true;
	return $thumbnail_size;
}
add_filter( 'jetpack_relatedposts_filter_thumbnail_size', 'ja_jetpack_related_posts_size' );