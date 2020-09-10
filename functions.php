<?php
/**
 * njc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package njc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'njc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function njc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on njc, use a find and replace
		 * to change 'njc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'njc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'njc' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'njc_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'njc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function njc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'njc_content_width', 640 );
}
add_action( 'after_setup_theme', 'njc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function njc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'njc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'njc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'njc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function njc_scripts() {
	wp_enqueue_style( 'njc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'njc-style', 'rtl', 'replace' );

	wp_enqueue_script( 'njc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'njc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//register footer widgets
register_sidebar(array(
    'name' => 'Footer Tel Number',
	'id' => 'footer-1',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));
    register_sidebar(array(
    'name' => 'Footer Email',
	'id' => 'footer-2',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ));
    register_sidebar(array(
    'name' => 'Facebook link',
    'id' => 'footer-3',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
	));
	register_sidebar(array(
    'name' => 'Insta link',
    'id' => 'footer-4',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
	));
	register_sidebar(array(
    'name' => 'Youtube link',
    'id' => 'footer-5',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
	));
	register_sidebar(array(
    'name' => 'Adress 1',
    'id' => 'footer-6',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
	));
	register_sidebar(array(
    'name' => 'Doporučení od studentů',
    'id' => 'doporuceni_od_st',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
	));
	register_sidebar(array(
    'name' => 'Adress 3',
    'id' => 'footer-8',
	'class' => '',
    'description' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));
	
function footer_tel() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : 
		endif;
}


function footer_email() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : 
		endif;
}

function footer_fb_link() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : 
		endif;
}

function footer_insta_link() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : 
		endif;
}

function footer_youtube_link() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : 
		endif;
}

function footer_adr_1() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-6') ) : 
		endif;
}
	 
function doporuceni_od_st() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('doporuceni_od_st') ) : 
		endif;
}
	 
function footer_adr_3() {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-8') ) : 
		endif;
}


/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});


/* antispan field check */ 

 
if(isset($_POST['adres']) && !empty($_POST['adres'])) {
 
echo "sorry, antispan fires!";
 
exit;
 
}