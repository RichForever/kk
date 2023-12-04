<?php

/**
 * @package WordPress
 * @subpackage wpstarter
 * @since wpstarter 1.0
 * Template Name: Subpage
 */

$context = Timber::context();

$timber_post     = Timber::get_post();
$context['post'] = $timber_post;
Timber::render( 'subpage.twig', $context );