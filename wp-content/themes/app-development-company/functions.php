<?php
/**
 * App Development Company functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package app-development-company
 * @since app-development-company 1.0
 */

if ( ! function_exists( 'app_development_company_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since app-development-company 1.0
	 *
	 * @return void
	 */
	function app_development_company_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'app_development_company_support' );

if ( ! function_exists( 'app_development_company_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since app-development-company 1.0
	 *
	 * @return void
	 */
	function app_development_company_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'app-development-company-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'app-development-company-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'app_development_company_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

/**
 * Display the admin notice if not dismissed.
 */
function app_development_company_admin_notice() {
    // Check if the notice is dismissed
    $dismissed = get_user_meta(get_current_user_id(), 'app_development_company_dismissed_notice', true);

    // Display the notice only if not dismissed
    if (!$dismissed) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
            <p><?php echo esc_html('Initiate your theme exploration by clicking on the "Getting Started" Button.', 'app-development-company'); ?></p>
            <a style="margin-left: 30px;" class="button button-primary"
               href="<?php echo esc_url(admin_url('themes.php?page=app-development-company')); ?>"><?php esc_html_e('Getting Started', 'app-development-company') ?></a>
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'app_development_company_admin_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function app_development_company_dismissed_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'app_development_company_dismissed_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_app_development_company_dismissed_notice', 'app_development_company_dismissed_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function app_development_company_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'app_development_company_dismissed_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'app_development_company_switch_theme');
