<?php

/**
 * @package WordPress
 * @subpackage Timberland
 * @since wpstarter 1.0
 */

$context   = Timber::context();
$context['categories'] = Timber::get_terms('category', array('hide_empty' => false));
$context['recent_posts'] = Timber::get_posts([
	'posts_per_page' => 3
]);
$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );