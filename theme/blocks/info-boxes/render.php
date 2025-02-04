<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Heading here',
			'className' => 'mb-0'
		]
	],
	[
		'core/paragraph',
		[
			'content' => 'Content here',
		]
	]

];


$blockName                          = 'info-boxes';
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