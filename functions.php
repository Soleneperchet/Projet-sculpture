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




