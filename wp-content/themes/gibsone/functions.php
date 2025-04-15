<?php

require get_template_directory() . '/posts/register-posts.php';
require get_template_directory() . '/acf-fields/register-fields.php';
require get_template_directory() . '/ajax/init.php';


function clean_wp()
{
	if (is_admin()) return;

	// 🔹 Turning off emoji
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// 🔹 Turning off oEmbed
	remove_action('wp_head', 'wp_oembed_add_discovery_links');
	remove_action('wp_head', 'wp_oembed_add_host_js');
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	remove_action('rest_api_init', 'wp_oembed_register_route');

	// 🔹 Turning off Gutenberg стилі
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style'); // WooCommerce

	// 🔹 Turning off jQuery Migrate
	add_filter('wp_default_scripts', function ($scripts) {
		if (isset($scripts->registered['jquery'])) {
			$scripts->registered['jquery']->deps = array_diff(
				$scripts->registered['jquery']->deps,
				['jquery-migrate']
			);
		}
	});

	// 🔹 Turning off RSS, RSD, WLW, REST API links
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rest_output_link_wp_head');
	remove_action('wp_head', 'wp_shortlink_wp_head');
}

add_action('wp_enqueue_scripts', 'clean_wp', 100);

function register_my_menus()
{
	register_nav_menus(
		array(
			'main_menu' => __('Main Menu'),
			'footer_menu' => __('Footer Menu')
		)
	);
}

add_action('after_setup_theme', 'register_my_menus');

function allow_svg_uploads($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');

function fix_svg_display()
{
	echo '<style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg_display');

// add styles and scripts

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function my_enqueue_scripts()
{
	// css
	wp_enqueue_style(
		'swiper-css',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
		[],
		null
	);

	wp_enqueue_style(
		'main-style',
		get_template_directory_uri() . '/styles/main.css',
		[],
		filemtime(get_template_directory() . '/styles/main.css'),
		'all'
	);

	// footer
	wp_enqueue_script(
		'swiper-js',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
		[],
		null,
		true
	);

	wp_enqueue_script(
		'main-script',
		get_template_directory_uri() . '/scripts/main.js',
		[],
		filemtime(get_template_directory() . '/scripts/main.js'),
		true
	);
}

class Custom_Main_Menu_Walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null) {}

	function end_lvl(&$output, $depth = 0, $args = null) {}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$title = esc_html($item->title);
		$url = esc_url($item->url);

		$output .= "<a href=\"{$url}\">{$title} <span></span> <span></span></a>";
	}

	function end_el(&$output, $item, $depth = 0, $args = null) {}
}
