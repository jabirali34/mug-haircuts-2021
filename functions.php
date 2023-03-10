<?php

/**
 * start-theme functions and definitions test comments.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package start-theme
 */

if (!function_exists('start_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function start_theme_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on start-theme, use a find and replace
	 * to change 'start-theme' to the name of your theme in all the template files.
	 */
		load_theme_textdomain('start-theme', get_template_directory() . '/languages');

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
		add_image_size('gallery-img', 500, 500, true); //cropped

		/**
		 * Custom Image Sizes
		 *
		 * STARTER
		 */
		add_image_size('hero', 1920, 1920);
		//add_image_size('featured_preview', 55, 55, true);

		// Nav Menu Locations
		register_nav_menus(array(
			'primary' => esc_html__('Primary', 'start-theme'),
			'footer1' => esc_html__('footer1', 'Footer Column 1'),
			'footer2' => esc_html__('footer2', 'Footer Column 2'),
			'footer3' => esc_html__('footer3', 'Footer Column 3'),
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

		/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
		// STARTER - don't want this. comment it out.
		// add_theme_support( 'post-formats', array('aside','image','video','quote','link', ) );

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('start_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));


		/*
   * Enable additional user fields in admin
   * See http://davidwalsh.name/add-profile-fields
   */
		function modify_contact_methods($profile_fields)
		{
			// Add new fields
			$profile_fields['position'] = 'Position Title';
			$profile_fields['twitter'] = 'Twitter Username';
			$profile_fields['facebook'] = 'Facebook URL';
			$profile_fields['linkedin'] = 'LinkedIn URL';
			$profile_fields['instagram'] = 'Instagram Username';

			// Remove old fields
			unset($profile_fields['admin_color']);
			unset($profile_fields['comment_shortcuts']);
			unset($profile_fields['admin_bar_front']);
			unset($profile_fields['aim']);
			unset($profile_fields['url']);
			unset($profile_fields['yim']);
			unset($profile_fields['jabber']);

			return $profile_fields;
		}
		add_filter('user_contactmethods', 'modify_contact_methods');

		// remove color options from Admin User Profile
		remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
	}
endif;
add_action('after_setup_theme', 'start_theme_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function start_theme_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'start-theme' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => '',
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'start_theme_widgets_init' );
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Company Settings',
		'menu_title'	=> 'Company Settings',
		'menu_slug' 	=> 'company-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' => 'Instgram',
		'menu_title' => 'Instagram Settings',
		'menu_slug' => 'instagram-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
		'icon_url' => 'dashicons-admin-generic',
		'post_id' => 'instagram'
	));
}


/**
 * Enqueue scripts and styles.
 */
function start_theme_scripts()
{
	wp_enqueue_style('start-theme-style', get_stylesheet_uri());

	//   wp_enqueue_script('jquery');

	wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array(), '1', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1', true);
	wp_enqueue_script('start-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
	wp_enqueue_script('start-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '2019', true);
	wp_enqueue_script('modernizr-custom', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array(), '1', true);
	wp_enqueue_script('fastclick', get_stylesheet_directory_uri() . '/js/fastclick.js', array(), '1', false);

	// Remove default WP jquery
	function deregister_jquery_enqueue()
	{
		wp_deregister_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'my_jquery_enqueue');

	// Main Scripts
	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery', 'modernizr-custom'), '2019', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'start_theme_scripts');

// load scripts on Admin Page
function start_admin_scripts($hook)
{
	wp_enqueue_script('adminscript', get_template_directory_uri() . '/js/admin.js', array(), '20160907', false);
}
add_action('admin_enqueue_scripts', 'start_admin_scripts');

/**
 * Enqueue scripts and styles.
 */
function start_styles()
{
	wp_enqueue_style('slick_styles', get_stylesheet_directory_uri() . '/css/slick.css', array(), '1.0.0');
	wp_enqueue_style('slick-theme_styles', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), '1.0.0');
	wp_enqueue_style('main_styles', get_stylesheet_directory_uri() . '/css/scss/min/styles.min.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'start_styles');


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
//require get_template_directory() . '/inc/jetpack.php';


/**
 * Excerpt Customization
 */

/**
 * Excerpt Length
 */
function custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Excerpt content
 */
function new_excerpt_more($more)
{
	global $post;
	return '<a class="moretag" href="' . get_permalink($post->ID) . '">...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 *
 *
 * Custom Admin Settings
 *
 *
 */

/*
 * Hide Admin Bar
 */
//add_filter('show_admin_bar', '__return_false');

/*
 * Login Logo
 *
 * Ref: https://codex.wordpress.org/Customizing_the_Login_Form
 */
function my_login_logo()
{ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url('https://www.signamarketing.com/wp-content/uploads/Signa-logo-amp_03-e1574376005383.jpg');
			padding-bottom: 30px;
			width: 100%;
			background-size: contain;
		}

		body.login {
			background: #fff;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

/*
 * Admin Footer Credentials
 *
 * Ref: http://www.wpbeginner.com/wp-themes/change-the-footer-in-your-wordpress-admin-panel/
 */
function remove_footer_admin()
{
	echo 'Design & Development by <a href="https://www.signamarketing.com/" target="_blank">Signa Marketing</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

/**
 * edit_post_link function open in a new tab
 */
add_filter('edit_post_link', function ($link, $post_id, $text) {
	// Add the target attribute 
	if (false === strpos($link, 'target='))
		$link = str_replace('<a ', '<a target="_blank" ', $link);
	return $link;
}, 10, 3);

add_filter('gform_submit_button', 'custom_form_submit_button', 10, 2);
function custom_form_submit_button($button, $form)
{
	return "<button class='btn blue gform_button' id='gform_submit_button_{$form['id']}'><span>Send</span></button>";
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
	return 'class="blog-recent-post"';
}

function fetch_instagram_posts()
{
	$api_key = 'IGQVJYUzB3TkoycDBuMFJSS2ZAoV2gzMW0xTk90NklmWnVmaDJDeXIyVGFtSFZAwbDFESlc3SVlVbURuUWJaRVNRLTNTWHdwUXJDejF0YjBTem9Xc00yYXFoWDRxUEFFMTd3WUhkQzQtLUh4QmlRbjNlYwZDZD';
	$request = wp_remote_get(sprintf('https://graph.instagram.com/me/media?access_token=%s&fields=media_url,media_type,permalink', $api_key));

	if (is_wp_error($request)) {
		return false;
	}

	$body = wp_remote_retrieve_body($request);

	$posts = json_decode($body, true);

	return $posts;
}

// remove revisions
define('my_revisions_amount', 1);         // let keep only one revision
define('my_autosave_interval', 600);      // 600 minutes is enough

if (is_admin()){   
    add_filter( 'wp_revisions_to_keep', function(){
        return my_revisions_amount;
    } );
    add_filter( 'wp_print_scripts', function(){
        wp_localize_script( 'autosave', 'autosaveL10n', 
              array(
                   'autosaveInterval'=> my_autosave_interval,
                   'blog_id'         => get_current_blog_id(),
              ) 
        );  
    }, 11 );    
}

function is_child_page($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&& $post->post_parent==$pid) {
		return true;   // we're at the page or at a sub page
	}
	else {
		return false;  // we're elsewhere
	}
};

add_filter( 'big_image_size_threshold', '__return_false' );