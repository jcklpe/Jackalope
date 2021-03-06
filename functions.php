<?php

/**
 * Jackalope functions and definitions
 * @package Jackalope
 */
// supposed to fix issues with generating frontity website stuff
add_filter('rest_pre_serve_request', function ($value) {

	header('Access-Control-Allow-Origin: *');

	header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');

	header('Access-Control-Allow-Credentials: true');

	return $value;
});

if (!function_exists('jackalope_setup')) :
	function jackalope_setup()
	{

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'jackalope'),
		));

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// // Set up the WordPress core custom background feature.
		// add_theme_support('custom-background', apply_filters('jackalope_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// )));

		// // Add theme support for selective refresh for widgets.
		// add_theme_support('customize-selective-refresh-widgets');
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
// function jackalope_content_width()
// {
// 	$GLOBALS['content_width'] = apply_filters('jackalope_content_width', 640);
// }
// add_action('after_setup_theme', 'jackalope_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function jackalope_widgets_init()
// {
// 	register_sidebar(array(
// 		'name' => esc_html__('Sidebar', 'jackalope'),
// 		'id' => 'sidebar-1',
// 		'description' => esc_html__('Add widgets here.', 'jackalope'),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget' => '</section>',
// 		'before_title' => '<h2 class="widget-title">',
// 		'after_title' => '</h2>',
// 	));
// }
// add_action('widgets_init', 'jackalope_widgets_init');


//- Header Style and Scripts
wp_register_script('header-jackalope', get_template_directory_uri() . '/assets/build/head.js', array('jquery'), '', false);
wp_enqueue_script('header-jackalope');

//- Footer Style and Scripts
function jackalope_footer()
{
	wp_register_style('jackalope-style', get_stylesheet_uri(), array(), '', all);
	wp_enqueue_style('jackalope-style');

	wp_register_script('footer-jackalope', get_template_directory_uri() . '/assets/build/footer.js', array('jquery'), '', true);

	wp_enqueue_script('footer-jackalope');
}
add_action('wp_enqueue_scripts', 'jackalope_footer');

//- THEME STYLES
function enqueue_theme_css()
{
	wp_enqueue_style('default', get_template_directory_uri() . '/assets/build/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_css');


//- Login Style
function my_login_style()
{
	wp_enqueue_style('login_style', get_template_directory_uri() . '/assets/build/login-style.css');
	// wp_enqueue_script( 'login_style', get_template_directory_uri() . './assets/build/login-style.js' );
}
add_action('login_enqueue_scripts', 'my_login_style');

//- Editor Style
add_editor_style('./assets/build/editor-style.css');

//- Admin Panel Style
function my_admin_style()
{
	wp_register_style('admin_style', get_template_directory_uri() . '/assets/build/admin-style.css', false, '1.0.0');
	wp_enqueue_style('admin_style');
}
add_action('admin_enqueue_scripts', 'my_admin_style');

//- change admin favicon
function add_favicon()
{
	$favicon_url = get_stylesheet_directory_uri() . '/assets/images/favicon-admin.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
// Now, just make sure that function runs when you're on the login page and admin pages
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');


//- customize length of exerpt
function custom_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//- Disable Emojis 😎👌💯🤣😍🍆💦🌊
function disable_wp_emojicons()
{

	// all actions related to emojis
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	// filter to remove TinyMCE emojis
	//add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}
add_action('init', 'disable_wp_emojicons');
// remove dns fetch for emojis
add_filter('emoji_svg_url', '__return_false');

//- UTILITY FUNCTIONS

//- Tag strip sub-fields (necessary for processing some ACF subfields.)
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

function filter_ptags_on_images($content)
{
	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');



//-  IM NOT SURE IF I NEED THESE OR NOT
//-  Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

//-  Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

//-  Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

//-  Customizer additions.
// require get_template_directory() . '/inc/customizer.php';

//-  Register MegaMultiMedia Block with ACF

function jackalope_register_blocks()
{
	if (!function_exists('acf_register_block'))
		return;
	acf_register_block(array(
		'name'			=> 'mega-multimedia-gallery',
		'title'			=> __('MegaMultiMedia Gallery', 'MegaMultiMediaGallery'),
		'render_template'	=> 'template-parts/blocks/mega-multimedia-gallery.php',
		'category'		=> 'common',
		'icon'			=> 'tagcloud',
		'mode'			=> 'edit',
		'keywords'		=> array('gallery', 'media', 'image', 'video', 'link')
	));
}
add_action('acf/init', 'jackalope_register_blocks');

////////////////////////////////
//- ADMIN CUSTOMIZATIONS

//- add filter by post

function kc_add_taxonomy_filters()
{
	global $typenow;

	// an array of all the taxonomies you want to display. Use the taxonomy name or slug
	$my_taxonomies = array('post_tag');
	switch ($typenow) {

		case 'post':

			foreach ($my_taxonomies as $tax_slug) {


				$tax_obj = get_taxonomy($tax_slug);
				$tax_name = $tax_obj->labels->name;
				$terms = get_terms($tax_slug);
				if (count($terms) > 0) {
					echo "<select name='tag' id='$tax_slug' class='postform alignleft actions'>";
					echo "<option value=''>Show All $tax_name</option>";
					foreach ($terms as $term) {
						echo '<option value="', $term->slug, '"
							 ', selected(@$_GET[$tax_slug] == $term->slug, $current = true, $echo = false), '>', $term->name, ' ',
							$term->count,
							')</option>';
					}
					echo "</select>";
				}
			}
			break;
	}
}

add_action('restrict_manage_posts', 'kc_add_taxonomy_filters');

//- remove categories filter
add_action('load-edit.php', 'no_category_dropdown');

function no_category_dropdown()
{
	add_filter('wp_dropdown_cats', '__return_false');
}

//- remove readability and seo scores filters
add_action('admin_init', 'bb_remove_yoast_seo_admin_filters', 20);
function bb_remove_yoast_seo_admin_filters()
{
	global $wpseo_meta_columns;
	if ($wpseo_meta_columns) {
		remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown'));
		remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown_readability'));
	}
}







/**
 * strip_selected_tags ( string str [, string strip_tags[, strip_content flag]] )
 * ---------------------------------------------------------------------
 * Like strip_tags() but inverse; the strip_tags tags will be stripped, not kept.
 * strip_tags: string with tags to strip, ex: "<a><p><quote>" etc.
 * strip_content flag: TRUE will also strip everything between open and closed tag
 */
// {
// 	{
// 		preg_match_all("/<([^>]+)>/i", $tags, $allTags, PREG_PATTERN_ORDER);
// 		preg_match_all("/<([^>]+)>/i", $tags, $allTags, PREG_PATTERN_ORDER);
// 		$replace = "%(<$tag.*)(.*?)(<\/$tag.*)%is";
// 		$replace = "%(<$tag.*)(.*?)(<\/$tag.*)%is";

// 		foreach ($allTags[1] as $tag) {

// 			 foreach ($allTags[1] as $tag) { if ($stripContent)
// 				{ $str=preg_replace($replace, '' , $str); }

// 				$str=preg_replace($replace,
// 				if ($stripContent) {'${2}' , $str); }
// 	  return $str; }
// 	  function filter_ptags_on_images($content)
// 	  { $content=preg_replace('/ <p>\s*(<a .*>)?\s*(<img
// 				$str = preg_replace($replace, '', $str);
// 			 .* \ />)\s*(<\/a>)?\s* <\/p>/iU', '\1\2\3' , $content);
// 			  return preg_replace('/ <p>\s*(<iframe .*>*.<\/iframe>)\s* <\/p>/iU',
// 			}

// 			'\1' , $content); }
// 			 add_filter('the_content', 'filter_ptags_on_images' );
// 			$str = preg_replace($replace, '${2}', $str);
// 		}
// 		return $str;
// }
