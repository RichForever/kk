<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph', 'core/button' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 1,
			'content'   => 'Rozwiązuję problemy',
			'className' => 'text-white-500',
		]
	],
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Krzysztof Andrzej Kaczmarek radca prawy | doradca restrukturyzacyjny',
			'className' => 'text-white-500'
		]
	],
];


$blockName                          = 'hero';
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

Timber::render( 'blocks/' . $blockName . '.twig', $context );