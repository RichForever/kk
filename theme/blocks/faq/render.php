<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph', 'core/button' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Upadłość konsumencka',
			'className' => 'mb-0'
		]
	],
	[
		'core/paragraph',
		[
			'content' => 'Jeśli jesteś zainteresowany tematyką upadłości konsumenckiej zachęcam Cię do zapoznania się z podstawowymi informacjami zaprezentowanymi poniżej.',
		]
	],
	[
		'core/button',
		[
			'text'      => 'Umów nieodpłatną konsultację',
			'className' => 'kk-block__btn mt-6'
		]
	]

];


$blockName                          = 'faq';
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