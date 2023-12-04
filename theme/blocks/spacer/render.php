<?php

$blockName             = 'spacer';
$context               = Timber::context();
$context['fields']     = get_fields();
$context['block']      = [
	'id'          => uniqid(),
	'name'        => $block['name'],
	'anchor'      => ! empty( $block['anchor'] ) ? 'id="' . esc_attr( $block['anchor'] ) . '" ' : '',
	'customClass' => ! empty( $block['className'] ) ? $blockName . ' ' . $block['className'] : $blockName
];
$context['attributes'] = $block['attributes'];

Timber::render( 'blocks/' . $blockName . '.twig', $context );