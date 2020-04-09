<?php

//PERMETTANT DE CHANGER LE LOGO DU SITE
function wpc_theme_support() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','wpc_theme_support');

function wpc_customize_register($wp_customize) {
	$wp_customize->add_section('wpc_logo_section', array(
			'title'          => __('Logo', 'textdomain'),
			'priority'       => 30,
			'description'    => __('Upload a logo to replace the default site name and description in the header', 'textdomain')
		)
	);
	$wp_customize->add_setting('wpc_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wpc_logo', array(
			'label'      => __('Logo', 'textdomain'),
			'section'    => 'wpc_logo_section',
			'settings'   => 'wpc_logo')
		)
	);
}


// enregistrement de ma seconde navigation
function register_my_menu() {
	register_nav_menu('menu-burger',__( 'Menu Burger' )); // mon nouveau menu s'appellera "Menu Burger" dans mon back-office
	}
	add_action( 'init', 'register_my_menu' );

	function register_my_menu_sculpture() {
		register_nav_menu('menu-sculpture',__( 'Menu Sculpture' )); // mon nouveau menu s'appellera "Menu Sculpture" dans mon back-office
		}
		add_action( 'init', 'register_my_menu_sculpture' );


// 		add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
// function gkp_insert_css_in_head() {
//     // On ajoute le css general du theme
//     wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
//     wp_enqueue_style( 'style' );
// }