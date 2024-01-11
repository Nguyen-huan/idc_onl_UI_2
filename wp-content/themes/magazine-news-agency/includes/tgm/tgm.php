<?php
	
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function magazine_news_agency_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'magazine-news-agency' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WPElemento Importer', 'magazine-news-agency' ),
			'slug'             => 'wpelemento-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Essential Addons for Elementor', 'magazine-news-agency' ),
			'slug'             => 'essential-addons-for-elementor-lite',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	magazine_news_agency_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'magazine_news_agency_register_recommended_plugins' );
