<?php

/**
 * @package WordPress
 * @subpackage wpstarter
 * @since wpstarter 1.0
 *
 * Template name: Blog
 */

$context = Timber::context();

$catIds = get_field('categories', $post->ID) ? get_field('categories', $post->ID) : ['12'];
$args = [
	'post_type' => 'post',
	'cat' => $catIds,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1
];
$context['posts']      = Timber::get_posts($args);

Timber::render( array( 'page-blog.twig' ), $context );