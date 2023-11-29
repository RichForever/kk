<?php

$context = Timber::context();
$context['posts'] = Timber::get_posts();
$context['title'] = single_cat_title('', false);
$context['categories'] = Timber::get_terms('category', array('hide_empty' => false));
$context['recent_posts'] = Timber::get_posts([
	'posts_per_page' => 3
]);

Timber::render('category.twig', $context);