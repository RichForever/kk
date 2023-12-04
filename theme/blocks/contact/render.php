<?php

$allowedBlocks = [ 'core/heading', 'core/paragraph' ];
$template      = [
	[
		'core/heading',
		[
			'level'     => 2,
			'content'   => 'Kontakt',
			'className' => 'mb-0'
		]
	],
	[
		'core/paragraph',
		[
			'content' => 'Każda relacja zaczyna się od pierwszego kontaktu. Możesz do mnie zadzwonić lub napisać SMS bądź wiadomość e-mail. 
Telefony odbieram w dni robocze od 10:00 do 18:00. Jeśli nie odbiorę lub nie odpisuje od razu, to najpewniej pomagam w tym czasie innej osobie, a do Ciebie odpiszę lub oddzwonię w późniejszym terminie.',
		]
	]

];


$blockName                          = 'contact';
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