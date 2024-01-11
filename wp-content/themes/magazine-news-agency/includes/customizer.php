<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'magazine_news_agency_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'magazine-news-agency' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'magazine-news-agency' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'magazine-news-agency' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'magazine_news_agency_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'magazine_news_agency_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'magazine_news_agency_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'magazine-news-agency' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'magazine_news_agency_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h1_typography_heading',
		'section'     => 'magazine_news_agency_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h1_typography_font',
		'section'   =>  'magazine_news_agency_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'IBM Plex Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  array('.header-image-box h1'),
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'magazine_news_agency_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h2_typography_heading',
		'section'     => 'magazine_news_agency_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h2_typography_font',
		'section'   =>  'magazine_news_agency_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'magazine_news_agency_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h3_typography_heading',
		'section'     => 'magazine_news_agency_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h3_typography_font',
		'section'   =>  'magazine_news_agency_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'magazine_news_agency_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h4_typography_heading',
		'section'     => 'magazine_news_agency_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h4_typography_font',
		'section'   =>  'magazine_news_agency_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'magazine_news_agency_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h5_typography_heading',
		'section'     => 'magazine_news_agency_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h5_typography_font',
		'section'   =>  'magazine_news_agency_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'magazine_news_agency_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_h6_typography_heading',
		'section'     => 'magazine_news_agency_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_h6_typography_font',
		'section'   =>  'magazine_news_agency_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'magazine_news_agency_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_body_typography_heading',
		'section'     => 'magazine_news_agency_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'magazine_news_agency_body_typography_font',
		'section'   =>  'magazine_news_agency_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'IBM Plex Sans', sans-serif",
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel

	Kirki::add_panel( 'magazine_news_agency_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'magazine-news-agency' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'magazine_news_agency_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'magazine-news-agency' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'magazine-news-agency' ),
	    'panel'    => 'magazine_news_agency_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_menu_size_heading',
		'section'     => 'magazine_news_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'magazine_news_agency_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'magazine-news-agency' ),
		'type'        => 'text',
		'section'     => 'magazine_news_agency_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_menu_text_transform_heading',
		'section'     => 'magazine_news_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_menu_text_transform',
		'section'     => 'magazine_news_agency_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'magazine-news-agency' ),
			'uppercase' => esc_html__( 'Uppercase', 'magazine-news-agency' ),
			'lowercase' => esc_html__( 'Lowercase', 'magazine-news-agency' ),
			'capitalize' => esc_html__( 'Capitalize', 'magazine-news-agency' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_date_enable',
		'label'       => esc_html__( 'Enable/Disable Date', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_search_enable',
		'label'       => esc_html__( 'Enable/Disable Search', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_enable_button_heading',
		'section'     => 'magazine_news_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Subscribe Button', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'magazine-news-agency' ),
		'settings' => 'magazine_news_agency_header_button_text',
		'section'  => 'magazine_news_agency_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'magazine-news-agency' ),
		'settings' => 'magazine_news_agency_header_button_url',
		'section'  => 'magazine_news_agency_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_enable_socail_link',
		'section'     => 'magazine_news_agency_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'magazine_news_agency_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'magazine-news-agency' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'magazine-news-agency' ),
		'settings'     => 'magazine_news_agency_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'magazine-news-agency' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f","fab fa-whatsapp","fab fa-instagram","fab fa-twitter".', 'magazine-news-agency' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'magazine-news-agency' ),
				'description' => esc_html__( 'Add the social icon url here.', 'magazine-news-agency' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'magazine_news_agency_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'magazine-news-agency' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'magazine-news-agency' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_shop_page_layout',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'magazine-news-agency' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'magazine-news-agency' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'magazine_news_agency_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_products_per_row',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_products_per_page',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_single_product_sidebar_layout',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'magazine-news-agency' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'magazine-news-agency' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'magazine_news_agency_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_products_button_border_radius_heading',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'magazine_news_agency_products_button_border_radius',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_sale_badge_position_heading',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_sale_badge_position',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'magazine-news-agency' ),
			'left' => esc_html__( 'Left', 'magazine-news-agency' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_products_sale_font_size_heading',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'magazine_news_agency_products_sale_font_size',
		'section'     => 'magazine_news_agency_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'magazine_news_agency_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'magazine-news-agency' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_theme_options_panel',
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_single_page_layout_heading',
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_single_page_layout',
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'magazine-news-agency' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'magazine-news-agency' ),
			'One Column' => esc_html__( 'One Column', 'magazine-news-agency' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_header_background_attachment_heading',
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_header_background_attachment',
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'magazine-news-agency' ),
			'fixed' => esc_html__( 'Fixed', 'magazine-news-agency' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_header_overlay_heading',
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'magazine_news_agency_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'magazine-news-agency' ),
		'description'    => esc_html__( 'Here you can add post information.', 'magazine-news-agency' ),
		'panel'    => 'magazine_news_agency_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_post_layout_heading',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_post_layout',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'magazine-news-agency' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'magazine-news-agency' ),
			'One Column' => esc_html__( 'One Column', 'magazine-news-agency' ),
			'Three Columns' => esc_html__( 'Three Columns', 'magazine-news-agency' ),
			'Four Columns' => esc_html__( 'Four Columns', 'magazine-news-agency' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_length_setting_heading',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'magazine_news_agency_length_setting',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_single_post_tag',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'magazine-news-agency' ),
		'settings'    => 'magazine_news_agency_single_post_category',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'magazine_news_agency_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_single_post_radius',
		'section'     => 'magazine_news_agency_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'magazine_news_agency_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'magazine-news-agency' ),
		'type'        => 'text',
		'section'     => 'magazine_news_agency_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// FOOTER SECTION

	Kirki::add_section( 'magazine_news_agency_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'magazine-news-agency' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'magazine-news-agency' ),
        'panel'    => 'magazine_news_agency_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_footer_text_heading',
		'section'     => 'magazine_news_agency_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'magazine_news_agency_footer_text',
		'section'  => 'magazine_news_agency_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_footer_enable_heading',
		'section'     => 'magazine_news_agency_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'magazine_news_agency_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'magazine-news-agency' ),
			'off' => esc_html__( 'Disable', 'magazine-news-agency' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_footer_background_widget_heading',
		'section'     => 'magazine_news_agency_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'magazine_news_agency_footer_background_widget',
		'type'        => 'background',
		'section'     => 'magazine_news_agency_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_footer_widget_alignment_heading',
		'section'     => 'magazine_news_agency_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'magazine-news-agency' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'magazine_news_agency_footer_widget_alignment',
		'section'     => 'magazine_news_agency_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'magazine-news-agency' ),
			'right' => esc_html__( 'right', 'magazine-news-agency' ),
			'left' => esc_html__( 'left', 'magazine-news-agency' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'magazine_news_agency_footer_copright_color_heading',
		'section'     => 'magazine_news_agency_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'magazine-news-agency' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'magazine_news_agency_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'magazine-news-agency' ),
		'section'     => 'magazine_news_agency_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );
}
