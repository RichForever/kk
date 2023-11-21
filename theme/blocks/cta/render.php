<?php

$allowedBlocks = ['core/heading', 'core/paragraph', 'core/button'];
$template = [
    ['core/heading',
        [
            'level' => 3,
            'content' => 'Heading here',
            'className' => 'text-white-500 font-extrabold mb-4 text-lg md:text-xl xl:text-2xl'
        ]
    ],
    ['core/paragraph',
        [
            'content' => 'Content here',
            'className' => 'font-regular text-base'
        ]
    ],
    ['core/button',
        [
            'text' => 'Label here',
            'className' => 'kk-block__btn mt-6'
        ]
    ]

];


$blockName = 'cta';
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