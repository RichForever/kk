<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph', 'core/button' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Strefa wiedzy',
			'className' => 'mb-0'
		]
	],
	[
		'core/paragraph',
		[
			'content' => 'Polskie prawo jest przeładowane przepisami i skomplikowane, a z roku na rok ten stan się pogłębia. Nie jestem w stanie napisać o wszystkim. Mam jednak nadzieję, że wśród publikowanych tu informacji znajdziesz odpowiedź na choćby część z Twoich wątpliwości.',
		]
	]

];


$blockName                          = 'recent-posts';
$context                            = Timber::context();
$context['fields']                  = get_fields();
$context['block']                   = [
	'id'          => uniqid(),
	'name'        => $block['name'],
	'anchor'      => ! empty( $block['anchor'] ) ? 'id="' . esc_attr( $block['anchor'] ) . '" ' : '',
	'customClass' => ! empty( $block['className'] ) ? $blockName . ' ' . $block['className'] : $blockName
];
$context['attributes']              = $block['attributes'];
$context['allowed_blocks']          = $allowedBlocks;
$context['allowed_blocks_template'] = $template;

$categories = get_field( 'categories' );
$stickyPost = get_field( 'sticky_post' );

// Base arguments for query
$args = [
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'posts_per_page' => 3
];

if($categories) {
	$args['category__in'] = $categories;
}

if($stickyPost) {
	$args['posts_per_page'] = 2;
	$context['sticky_post'] = Timber::get_post($stickyPost);
}

$context['posts'] = Timber::get_posts( $args );

Timber::render( 'blocks/' . $blockName . '.twig', $context );