<?php

/**
 * @package WordPress
 * @subpackage Timberland
 * @since wpstarter 1.0
 */

$context               = Timber::context();

$excludedCatIds = get_field('excluded_categories', $post->ID);

$catArgs = [
	'taxonomy' => 'category',
	'hide_empty' => false,
	'exclude' => $excludedCatIds ? array_merge([1], $excludedCatIds) : [1],

];

$context['categories'] = Timber::get_terms( $catArgs );

$postsArgs = [
	'post_type' => 'post',
	'category__not_in' => $excludedCatIds,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1
];
$context['posts'] = Timber::get_posts($postsArgs);
$templates             = array( 'index.twig' );

if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}

Timber::render( $templates, $context );