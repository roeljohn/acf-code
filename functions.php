<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Enqueue scripts and styles
 */
function acf_code_enqueue_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '5.3.0' );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '20120206', true );
    //wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/all.min.css');
}
add_action( 'wp_enqueue_scripts', 'acf_code_enqueue_scripts' );



/* create shortcode for slider acf */
function acf_slider_shortcode( $atts ) {
    $test = get_field('slider', 'option');
    var_dump($test);
    ob_start();
        get_template_part( 'template-parts/slider/slider-part' );
        $slider_part = ob_get_contents();
    ob_end_clean();
    return $slider_part;
}
add_shortcode( 'acf_slider', 'acf_slider_shortcode' );

