<?php

$allowedBlocks = ['core/heading', 'core/paragraph', 'core/button'];
$template = [
    ['core/heading',
        [
            'level' => 2,
            'content' => 'Strefa wiedzy',
            'className' => 'mb-0'
        ]
    ],
    ['core/paragraph',
        [
            'content' => 'Polskie prawo jest przeładowane przepisami i skomplikowane, a z roku na rok ten stan się pogłębia. Nie jestem w stanie napisać o wszystkim. Mam jednak nadzieję, że wśród publikowanych tu informacji znajdziesz odpowiedź na choćby część z Twoich wątpliwości.',
        ]
    ]

];


$blockName = 'recent-posts';
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

$context['posts'] = Timber::get_posts([
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
	'cat' => get_field('categories')
]);

Timber::render('blocks/'.$blockName.'.twig', $context);