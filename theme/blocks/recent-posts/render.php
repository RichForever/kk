<?php

$allowedBlocks = ['core/heading', 'core/paragraph'];
$template = [
    ['core/heading',
        [
            'level' => 2,
            'content' => 'Heading here',
        ]
    ],
    ['core/paragraph',
        [
            'content' => 'Content here',
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
    'order' => 'ASC',
    'orderby' => 'date',
    'posts_per_page' => 2,
	'cat' => get_field('categories')
]);

Timber::render('blocks/'.$blockName.'.twig', $context);