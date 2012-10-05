<?php
/**
 * WP_Real_Estate functions and definitions
 *
 * @package WP_Real_Estate
 * @since WP_Real_Estate 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since WP_Real_Estate 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wp_real_estate_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since WP_Real_Estate 1.0
 */
function wp_real_estate_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WP_Real_Estate, use a find and replace
	 * to change 'wp_real_estate' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wp_real_estate', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wp_real_estate' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // wp_real_estate_setup
add_action( 'after_setup_theme', 'wp_real_estate_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since WP_Real_Estate 1.0
 */
function wp_real_estate_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'wp_real_estate' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer 1', 'wp_real_estate' ),
		'id' => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer 2', 'wp_real_estate' ),
		'id' => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer 3', 'wp_real_estate' ),
		'id' => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer 4', 'wp_real_estate' ),
		'id' => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wp_real_estate_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function wp_real_estate_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'base', get_template_directory_uri() . '/_css/base.css', '20120822' );

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/_css/responsive.css', '20120822' );

	//wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/_js/vendor/modernizr-2.6.1-respond-1.1.0.min.js', array( 'javascript' ), '20120206');

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/_js/main-ck.js', array( 'jquery' ), '20120901', true  );
	
	wp_enqueue_script( 'flexslider_js', get_template_directory_uri() . '/_js/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '20120901', true  ); 

	wp_enqueue_script( 'chirp', get_template_directory_uri() . '/_js/chirp.min.js', array( 'jquery' ), '20120823'  );


	//wp_enqueue_script( 'main_js', get_template_directory_uri() . '/_js/main-ck.js', array( 'javascript' ), '20120206', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_real_estate_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

// Style Excerpt

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
       global $post;
	return '<span class="read-more"> <a href="'. get_permalink($post->ID) . '">[read more]</a></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Gallery to Slideshow Settings



function my_gallery_to_slideshow_settings( $params ){
    /*
        'thumbnails'        => true,
        'slideshow'         => true,
        'slideshowSpeed'    => 7000,
        'animationDuration' => 600,
        'mousewheel'        => false,
        'controlNav'        => false,
        'keyboardNav'       => false,
        'directionNav'      => false,
        'manualControls'    => '.pager li a img',
        'pausePlay'         => false,
        'prevText'          => __( "Previous", 'mv-gallery-to-slideshow' ),
        'nextText'          => __( "Next", 'mv-gallery-to-slideshow' ),
        'pauseText'         => __( "Pause", 'mv-gallery-to-slideshow' ),
        'randomize'         => false,
        'slideToStart'      => 0,
        'animationLoop'     => true,
        'pauseOnAction'     => true,
        'pauseOnHover'      => false,
        'controlsContainer' => '',
    */
    $params = array(
	 'thumbnails'        => false,
	 'slideshow'         => true,
	 'slideshowSpeed'    => 7000,
	 'animationDuration' => 600,
	 'mousewheel'        => false,
	 'controlNav'        => false,
	 'keyboardNav'       => true,
	 'directionNav'      => true,
	 'manualControls'    => '.pager li a img',
	 'pausePlay'         => false,
	 'prevText'          => __( "&lt; Previous", 'mv-gallery-to-slideshow' ),
	 'nextText'          => __( "Next &gt;", 'mv-gallery-to-slideshow' ),
	 'pauseText'         => __( "Pause", 'mv-gallery-to-slideshow' ),
	 'randomize'         => false,
	 'slideToStart'      => 0,
	 'animationLoop'     => true,
	 'pauseOnAction'     => true,
	 'pauseOnHover'      => false,
	 'controlsContainer' => '',
	);
    return $params;
}
add_filter( 'mv_gallery_to_slideshow_js_params', 'my_gallery_to_slideshow_settings' );