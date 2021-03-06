<?php
/**
 * oees_hub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oees_hub
 */

if ( ! function_exists( 'oees_hub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function oees_hub_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on oees_hub, use a find and replace
		 * to change 'oees_hub' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'oees_hub', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'oees_hub' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'oees_hub_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'oees_hub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oees_hub_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'oees_hub_content_width', 640 );
}
add_action( 'after_setup_theme', 'oees_hub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oees_hub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oees_hub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oees_hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'oees_hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oees_hub_scripts() {
	wp_enqueue_style( 'oees_hub-style', get_stylesheet_uri() );

	wp_enqueue_script( 'oees_hub-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'oees_hub-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oees_hub_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}



/**
 *--------------------- CUSTOM ---------------------
 */


function custom_styles()
{
	wp_enqueue_style('bootstrap_css', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", NULL, '4.3.1');
	wp_enqueue_style('slick_css', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", NULL, '1.8.1');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/main.min.css', NULL, '1.1.1');
}
add_action('wp_enqueue_scripts', 'custom_styles');

function custom_scripts()
{
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery-migrate');
	wp_enqueue_script('jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", NULL, '3.1.1');
	wp_enqueue_script('jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array('jquery-core'), '3.0.0');

	wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", array('jquery-core'), '1.14.7', true);
	wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array('jquery-core'), '4.3.1', true);

	wp_enqueue_script('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jquery-core'), '1.8.1', true);


	wp_enqueue_script('scrollmagic', "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js", NULL, '2.0.7', true);
	wp_enqueue_script('scrollmagic-debug', "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js", NULL, '2.0.7', true);
	wp_enqueue_script('GSAP-TweenLite', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js", NULL, '2.1.3', true);
	wp_enqueue_script('GSAP-TimelineLite', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js", NULL, '2.1.3', true);
	wp_enqueue_script('GSAP-CSSPlugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js", NULL, '2.1.3', true);
	wp_enqueue_script('GSAP-BezierPlugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/BezierPlugin.min.js", NULL, '2.1.3', true);
	wp_enqueue_script('scrollmagic-gsap', "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js", NULL, '2.0.7', true);

	

	wp_enqueue_script('main_js', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery-core'), '1.0.0', true);
	wp_enqueue_script('acc_js', get_template_directory_uri() . '/js/acc.js', array('jquery-core'), '1.0.0', true);

	wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/3eb520909d.js", NULL, '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_scripts');

function custom_fonts()
{
	wp_enqueue_style( 'Merriweather Sans', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700,800&display=swap&subset=latin-ext' );
}
add_action('wp_enqueue_scripts', 'custom_fonts');

function register_my_menu() {
	register_nav_menu('main-menu',__( 'Menu główne' ));
}
add_action( 'init', 'register_my_menu' );

// ACF OPTION PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia Strony',
		'menu_title'	=> 'Ustawienia Strony',
		'menu_slug' 	=> 'ustawienia-strony',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}