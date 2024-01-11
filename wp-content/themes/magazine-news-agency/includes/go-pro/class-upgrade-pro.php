<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Magazine_News_Agency_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/includes/go-pro/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Magazine_News_Agency_Customize_Section_Pro' );

		$manager->add_section(
			new Magazine_News_Agency_Customize_Section_Pro(
				$manager,
				'magazine_news_agency_upgrade_pro',
				array(
					'title'       => esc_html__( 'Magazine News Agency Pro', 'magazine-news-agency' ),
					'pro_text'    => esc_html__( 'GO PRO', 'magazine-news-agency' ),
					'pro_url'     => 'https://www.wpelemento.com/elementor/magazine-wordpress-theme/',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Magazine_News_Agency_Customize_Section_Pro(
				$manager,
				'magazine-news-agency-documentation',
				array(
					'title'       => esc_html__( 'Documentation', 'magazine-news-agency' ),
					'pro_text'    => esc_html__( 'DOCS', 'magazine-news-agency' ),
					'pro_url'     => 'https://www.wpelemento.com/theme-documentation/magazine-news-agency/',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Magazine_News_Agency_Customize_Section_Pro(
				$manager,
				'magazine-news-agency-demo',
				array(
					'title'       => esc_html__( 'Pro Demo link', 'magazine-news-agency' ),
					'pro_text'    => esc_html__( 'Demo', 'magazine-news-agency' ),
					'pro_url'     => 'https://www.wpelemento.com/demo/magazine-news-agency/',
					'priority'    => 5,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'magazine-news-agency-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'magazine-news-agency-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Magazine_News_Agency_Customize::get_instance();