<?php

/**
 * Enqueue Tailwind CSS (Asif Child Theme)
 */

function asif_child_style()
{
	$tailwind_path = get_stylesheet_directory() . '/src/output.css';

	wp_enqueue_style(
		'asif-tailwind', // 🔁 handle name changed
		get_stylesheet_directory_uri() . '/src/output.css',
		[],
		file_exists($tailwind_path) ? filemtime($tailwind_path) : null
	);
	// JS
	$js_path = get_stylesheet_directory() . '/src/js/single-product.js';

	wp_enqueue_script(
		'single-product',
		get_stylesheet_directory() . '/src/js/single-product.js',
		[],

	);
}

add_action('wp_enqueue_scripts', 'asif_child_style', 20);

/**
 * Your code goes below.
 */
