<?php
/**
 * Understrap enqueue scripts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'understrap-child-styles1', get_stylesheet_directory_uri() . '/css/accueil.css', wp_get_theme()->get('Version') );
		wp_enqueue_style( 'understrap-child-styles2', get_stylesheet_directory_uri() . '/css/accueilMeva.css', wp_get_theme()->get('Version') );
		wp_enqueue_style( 'understrap-child-styles3', get_stylesheet_directory_uri() . '/css/nosmodels.css', wp_get_theme()->get('Version') );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'understrap-child-scripts1', get_stylesheet_directory_uri() .'/js/accueil.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'understrap-child-scripts2', get_stylesheet_directory_uri() .'/js/sarino.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'understrap-child-scripts3', get_stylesheet_directory_uri() .'/js/accueilMeva.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'understrap-child-scripts4', get_stylesheet_directory_uri() .'/js/nosmodels.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'jquery-3.6.0', get_stylesheet_directory_uri() .'/js/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
