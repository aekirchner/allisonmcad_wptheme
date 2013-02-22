<?php
/**
 * allisonMCAD_wptheme Theme Customizer
 *
 * @package allisonMCAD_wptheme
 * @since allisonMCAD_wptheme 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since allisonMCAD_wptheme 1.2
 */
function allisonmcad_wptheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'allisonmcad_wptheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since allisonMCAD_wptheme 1.2
 */
function allisonmcad_wptheme_customize_preview_js() {
	wp_enqueue_script( 'allisonmcad_wptheme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'allisonmcad_wptheme_customize_preview_js' );
