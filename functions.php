<?php
/**
 * LostBoys2020 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LostBoys2020
 */

if ( ! function_exists( 'lostboys2020_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lostboys2020_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on LostBoys2020, use a find and replace
		 * to change 'lostboys2020' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lostboys2020', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'lostboys2020' ),
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
		add_theme_support( 'custom-background', apply_filters( 'lostboys2020_custom_background_args', array(
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
add_action( 'after_setup_theme', 'lostboys2020_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lostboys2020_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lostboys2020_content_width', 640 );
}
add_action( 'after_setup_theme', 'lostboys2020_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lostboys2020_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lostboys2020' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lostboys2020' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lostboys2020_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lostboys2020_scripts() {
	wp_enqueue_style( 'lostboys2020-style', get_stylesheet_uri() );
	/*DMN CS*/
	wp_enqueue_style( 'dmn', '//onsass.designmynight.com?background-color=%23FFFFFF&primary-color=%236DA8A6&body-text-color=%23000000&outer-border-color=gray', array(), '1.0', 'all' );
	
	wp_enqueue_style( 'lbStyle', get_template_directory_uri() . '/css/lb_style.css?v=1.5', array(), '1.0', 'all' );

	wp_enqueue_script( 'lostboys2020-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lostboys2020-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'isotope', 'https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'isotopeScript', get_template_directory_uri() . '/js/isotope.js', array('jquery'), '1.0.0', true);



	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lostboys2020_scripts' );

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
	 * Enqueue required scripts.
	 */
	add_action( 'wp_enqueue_scripts', function() {
		
	
		wp_enqueue_script( 'smootstate-js', 'https://cdnjs.cloudflare.com/ajax/libs/smoothState.js/0.7.2/jquery.smoothState.min.js', array( 'jquery' ), '0.7.2' );
		wp_enqueue_script( 'script-js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/script.min.js' , array( 'jquery', 'smootstate-js' ), '1.0.0', true );

		wp_enqueue_style( 'reviews_css', get_template_directory_uri() . '/css/jquery-google-reviews.css', array(), '1.0', 'all' );
		wp_enqueue_script( 'maps_api', 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDM26xB-jnJUKnkSbQxx_E2JLX5zo07LXU', array());
		wp_enqueue_script( 'reviews-js', get_template_directory_uri() . '/js/jquery-google-reviews.js', array(), true );
		
	} );
// gooogle analitics

	
    function ns_google_analytics() { ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121810903-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-155909275-1');
      </script>
      <?php
      }
      
    add_action( 'wp_head', 'ns_google_analytics', 10 );


