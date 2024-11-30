<?php

/**
 * @package WordPress
 * @subpackage wpstarter
 * @since wpstarter 1.0
 *
 * Template name: Blog
 */

$context = Timber::context();

$page_title = get_field('page_title', $post->ID) ? get_field('page_title', $post->ID) : $post->post_title;
$context['page_title'] = $page_title;

$page_subtitle = get_field('page_subtitle', $post->ID);
$context['page_subtitle'] = $page_subtitle;

$show_author_bio = get_field('show_author_bio', $post->ID);
$author_bio = get_field('author_bio', $post->ID);

$author_data = array_merge(['show_author_bio' => $show_author_bio], ['author_bio' => $author_bio]);
$context['author_data'] = $author_data;

$cat_ids = get_field('categories', $post->ID) ? get_field('categories', $post->ID) : ['12'];
$args = [
	'post_type' => 'post',
	'cat' => $cat_ids,
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1
];
$context['posts']      = Timber::get_posts($args);

Timber::render( array( 'page-blog.twig' ), $context );