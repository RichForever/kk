<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph', 'core/button', 'core/list' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Spory gospodarcze',
			'className' => 'mb-0'
		]
	],
	[
		'core/paragraph',
		[
			'content' => 'Nie wykonana lub źle wykonana usługa, brak dostawy towaru lub wadliwy towar, brak zapłaty, naruszenie uczciwej konkurencji - życie gospodarcze przynosi masę niespodziewanych sytuacji wymagających interwencji prawnej.',
		]
	]
];


$blockName                          = 'text-with-list';
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