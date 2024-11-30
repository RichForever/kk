<?php

/**
 * @package WordPress
 * @subpackage wpstarter
 * @since wpstarter 1.0
 *
 * Template name: Blog
 */

$context = Timber::context();

$context['fields'] = get_fields();

$cat_ids = get_field('categories', $post->ID) ? get_field('categories', $post->ID) : ['12'];
$args = [
	'post_type' => 'post',
	'cat' => $cat_ids,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1
];
$context['posts'] = Timber::get_posts($args);

Timber::render( array( 'page-blog.twig' ), $context );