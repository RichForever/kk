<?php

$allowedBlocks = ['core/heading', 'core/paragraph', 'core/button'];
$template = [
    ['core/heading',
        [
            'level' => 3,
            'content' => 'Potrzebujesz pomocy prawnej?',
            'className' => 'text-white-500'
        ]
    ],
    ['core/paragraph',
        [
            'content' => 'W zależności od Twojej sytuacji może to być jednorazowa konsultacja albo dłuższa współpraca',
        ]
    ],
    ['core/button',
        [
            'text' => 'skontaktuj się ze mną',
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