<?php

/**
 * @package WordPress
 * @subpackage Timberland
 * @since wpstarter 1.0
 */

$templates = array( 'search.twig', 'archive.twig', 'index.twig' );

$context          = Timber::context();
$context['title'] = 'Wyniki wyszukiwania dla "' . get_search_query() .'"';
$context['posts'] = Timber::get_posts();

Timber::render( $templates, $context );