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
		'single-product-script', // আমরা এই হ্যান্ডেল নামটি সব জায়গায় ব্যবহার করবো
		get_stylesheet_directory_uri() . '/src/js/single-product.js',
		array(),
		null,
		true // এটি ফুটার এ লোড হবে
	);
	wp_enqueue_script(
		'chack-out-script', // আমরা এই হ্যান্ডেল নামটি সব জায়গায় ব্যবহার করবো
		get_stylesheet_directory_uri() . '/src/js/chack-out.js',
		array(),
		null,
		true // এটি ফুটার এ লোড হবে
	);
}

add_action('wp_enqueue_scripts', 'asif_child_style', 20);

/**
 * Your code goes below.
 */
