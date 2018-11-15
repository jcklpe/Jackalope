<?php

/**
 * Jackalope functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jackalope
 */

if (!function_exists('jackalope_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jackalope_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Jackalope, use a find and replace
	 * to change 'jackalope' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('jackalope', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
		'menu-1' => esc_html__('Primary', 'jackalope'),
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Set up the WordPress core custom background feature.
	add_theme_support('custom-background', apply_filters('jackalope_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
endif;
add_action('after_setup_theme', 'jackalope_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jackalope_content_width()
{
	$GLOBALS['content_width'] = apply_filters('jackalope_content_width', 640);
}
add_action('after_setup_theme', 'jackalope_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jackalope_widgets_init()
{
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'jackalope'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'jackalope'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'jackalope_widgets_init');



/**
 * Enqueue HEADER SCRIPTS
 */


wp_register_script('header-jackalope', get_template_directory_uri() . '/header-script-prod.js', array('jquery'), '', false);

wp_enqueue_script('header-jackalope');




/**
 * Enqueue FOOTER SCRIPTS
 */
function jackalope_footer()
{
	wp_register_style('jackalope-style', get_stylesheet_uri(), array(), '', all);
	wp_enqueue_style('jackalope-style');

	wp_register_script('footer-jackalope', get_template_directory_uri() . '/footer-script-prod.js', array('jquery'), '', true);

	wp_enqueue_script('footer-jackalope');


}
add_action('wp_enqueue_scripts', 'jackalope_footer');






//
//    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//        wp_enqueue_script( 'comment-reply' );
//    }







function add_favicon()
{
	$favicon_url = get_stylesheet_directory_uri() . '/favicon-admin.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

// Now, just make sure that function runs when you're on the login page and admin pages
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');









////// customize length of exerpt
function custom_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//add_action('get_header', 'my_filter_head');
//
//function my_filter_head() {
//    remove_action('wp_head', '_admin_bar_bump_cb');
//}

function tag_stripped_sub_field($field)
{

	$field = get_sub_field($field);
	$field_stripped = wp_strip_all_tags($field);

	return $field_stripped;


}

function tag_stripped_field($field)
{

	$field = get_field($field);
	$field_stripped = wp_strip_all_tags($field);

	return $field_stripped;


}



/**
 * strip_selected_tags ( string str [, string strip_tags[, strip_content flag]] )
 * ---------------------------------------------------------------------
 * Like strip_tags() but inverse; the strip_tags tags will be stripped, not kept.
 * strip_tags: string with tags to strip, ex: "<a><p><quote>" etc.
 * strip_content flag: TRUE will also strip everything between open and closed tag
 */
function strip_selected_tags($str, $tags = "", $stripContent = false)
{
	preg_match_all("/<([^>]+)>/i", $tags, $allTags, PREG_PATTERN_ORDER);
	$replace = "%(<$tag.*?>)(.*?)(<\/$tag.*?>)%is";
	foreach ($allTags[1] as $tag) {
		if ($stripContent) {
			$str = preg_replace($replace, '', $str);
		}
		$str = preg_replace($replace, '${2}', $str);
	}
	return $str;
}

//- Disable Emojis
/**
 * Disable the emoji's
 */
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
	add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
	if ('dns-prefetch' == $relation_type) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

		$urls = array_diff($urls, array($emoji_svg_url));
	}

	return $urls;
}


function filter_ptags_on_images($content)
{
	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
