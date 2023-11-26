<?php

$allowedBlocks = ['core/heading', 'core/paragraph', 'core/button', 'core/list'];
$template = [
    ['core/heading',
        [
            'level' => 2,
            'content' => 'O mnie',
        ]
    ],
    ['core/paragraph',
        [
            'content' => 'Krzysztof Andrzej Kaczmarek radca prawny I doradca restrukturyzacyjny',
        ]
    ],
	['core/button',
		[
			'text' => 'poznaj bliżej',
			'className' => 'kk-block__btn mt-6'
		]
	]

];


$blockName = 'text-with-image';
$context = Timber::context();
$context['fields'] = get_fields();
$context['block'] = [
	'id' => uniqid(),
	'name' => $block['name'],
	'anchor' => !empty( $block['anchor'] ) ? 'id="' . esc_attr( $block['anchor'] ) . '" ' : '',
	'customClass' => !empty( $block['className'] ) ? $blockName . ' ' . $block['className'] : $blockName
];
$context['attributes'] = $block['attributes'];
$context['allowed_blocks'] = $allowedBlocks;
$context['allowed_blocks_template'] = $template;

Timber::render('blocks/'.$blockName.'.twig', $context);