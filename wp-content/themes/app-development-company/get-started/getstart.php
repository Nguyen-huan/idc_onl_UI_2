<?php
/**
 * Admin functions.
 *
 * @package App Development Company
 */

define('APP_DEVELOPMENT_COMPANY_SUPPORT',__('https://wordpress.org/support/theme/app-development-company/','app-development-company'));
define('APP_DEVELOPMENT_COMPANY_REVIEW',__('https://wordpress.org/support/theme/app-development-company/reviews/#new-post','app-development-company'));
define('APP_DEVELOPMENT_COMPANY_BUY_NOW',__('https://www.wpradiant.net/blocks/app-development-wordpress-theme/','app-development-company'));
define('APP_DEVELOPMENT_COMPANY_LIVE_DEMO',__('https://www.wpradiant.net/pattern/app-development-company/','app-development-company'));
define('APP_DEVELOPMENT_COMPANY_PRO_DOC',__('https://www.wpradiant.net/tutorial/app-development-company-pro/','app-development-company'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function app_development_company_admin_menu_page() {

	$theme = wp_get_theme( get_template() );

	add_theme_page(
		$theme->display( 'Name' ),
		$theme->display( 'Name' ),
		'manage_options',
		'app-development-company',
		'app_development_company_do_admin_page'
	);

}
add_action( 'admin_menu', 'app_development_company_admin_menu_page' );

function app_development_company_admin_theme_style() {
	wp_enqueue_style('app-development-company-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'app_development_company_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function app_development_company_do_admin_page() {

	$theme = wp_get_theme( get_template() );
	?>
	<div class="app-development-company-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'app-development-company' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'app-development-company' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'app-development-company' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'app-development-company' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'app-development-company' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'app-development-company' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'app-development-company' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'app-development-company' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'app-development-company' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'app-development-company' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'app-development-company' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'app-development-company' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'app-development-company' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'app-development-company' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( APP_DEVELOPMENT_COMPANY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'app-development-company' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}

