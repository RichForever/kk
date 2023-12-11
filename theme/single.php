<?php

/**
 * @package WordPress
 * @subpackage wpstarter
 * @since wpstarter 1.0
 */

$context               = Timber::context();
$timber_post           = Timber::get_post();
$context['post']       = $timber_post;
$context['categories'] = Timber::get_terms( 'category', array( 'hide_empty' => false ) );

// Parse all blocks from the post content
$post_content = get_the_content();
$blocks = parse_blocks($post_content);
$blocksCount = count($blocks);

$blockCta = null;
$blockContact = null;
$filteredPostContent = '';

foreach ($blocks as $index => $block) {

	// Check if the block is the ACF block you want to render
	if ($block['blockName'] == 'kk/cta') {
		// Render the block
		$blockCta = render_block($block);
	} elseif ($block['blockName'] == 'kk/contact') {
		// Render the block
		$blockContact = render_block($block);
	} else {
		$filteredPostContent .= render_block($block);
	}
}

$context['filteredPostContent'] = $filteredPostContent;
$context['blockCta'] = $blockCta;
$context['blockContact'] = $blockContact;

if ( post_password_required( $timber_post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array(
		'single-' . $timber_post->ID . '.twig',
		'single-' . $timber_post->post_type . '.twig',
		'single-' . $timber_post->slug . '.twig',
		'single.twig'
	), $context );
}