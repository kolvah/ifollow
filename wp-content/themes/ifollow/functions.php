<?php
/**
 * ifollow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ifollow
 */

if ( ! function_exists( 'ifollow_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ifollow_setup() {

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
		'menu-1' => esc_html__( 'Primary', 'ifollow' ),
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
}
endif;
add_action( 'after_setup_theme', 'ifollow_setup' );

/**
 * Enqueue scripts and styles.
 */
function ifollow_scripts() {
	//wp_enqueue_style( 'ifollow-navigation', get_template_directory_uri() . '/js/navigation.js');
	//wp_enqueue_script( 'ifollow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_style( 'ifollow-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'ifollow-libs.min', get_template_directory_uri() . '/css/libs.min.css');
    wp_enqueue_style( 'ifollow-styles.min', get_template_directory_uri() . '/css/styles.min.css');

    wp_enqueue_script( 'ifollow-jquery-2.1.3.min', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '', true );
    wp_enqueue_script( 'ifollow-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'ifollow-jquery.mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js', array(), '', true );
    wp_enqueue_script( 'ifollow-jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '', true );
    wp_enqueue_script( 'ifollow-perfect-scrollbar.jquery', get_template_directory_uri() . '/js/perfect-scrollbar.jquery.js', array(), '', true );
    wp_enqueue_script( 'ifollow-script.min', get_template_directory_uri() . '/js/script.min.js', array(), '', true );
    wp_enqueue_script( 'ifollow-slick', get_template_directory_uri() . '/js/slick.js', array(), '', true );
    wp_enqueue_script( 'ifollow-validation', get_template_directory_uri() . '/js/validation.js', array(), '', true );
    wp_enqueue_script( 'ifollow-inquiry', get_template_directory_uri() . '/js/inquiry.js', array(), '', true );

    wp_localize_script('ifollow-inquiry', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}
add_action( 'wp_enqueue_scripts', 'ifollow_scripts' );

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/ifollow.php';
