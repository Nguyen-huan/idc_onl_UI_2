<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magazine News Agency
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('magazine_news_agency_preloader_hide', false )){ ?>
	<div class="loader">
		<div class="preloader">
			<div class="diamond">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
<?php } ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'magazine-news-agency' ); ?></a>

<header id="site-navigation" class="header">
	<div class="topheader <?php if( get_theme_mod( 'magazine_news_agency_sticky_header',false) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-6 align-self-center text-center text-lg-left">
					<?php if ( get_theme_mod('magazine_news_agency_date_enable', 'on' ) == true ) : ?>
						<div class="news-date my-2">
							<i class="far fa-calendar-alt mr-2"></i>
							<span><?php echo esc_html( wp_date( 'd-m-y' ) ); ?></span>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-6 align-self-center text-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'magazine-news-agency' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-lg-1 col-md-1 align-self-center text-center">
					<?php if ( get_theme_mod('magazine_news_agency_search_enable', 'on' ) == true ) : ?>
						<div class="search-cont py-2">
							<button type="button" class="search-cont-button"><i class="fas fa-search"></i></button>
						</div>
						<div class="outer-search">
							<div class="inner-search">
								<?php get_search_form(); ?>
							</div>
							<button type="button" class="closepop search-cont-button-close" >X</button>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-header py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 align-self-center">
					<?php $magazine_news_agency_settings = get_theme_mod( 'magazine_news_agency_social_links_settings' ); ?>
					<div class="social-links text-lg-left my-2 text-center">
						<?php if ( is_array($magazine_news_agency_settings) || is_object($magazine_news_agency_settings) ){ ?>
							<?php foreach( $magazine_news_agency_settings as $magazine_news_agency_setting ) { ?>
								<a href="<?php echo esc_url( $magazine_news_agency_setting['link_url'] ); ?>">
									<i class="<?php echo esc_attr( $magazine_news_agency_setting['link_text'] ); ?> mr-2"></i>
								</a>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 align-self-center">
					<div class="logo text-center mb-3 mb-md-0">
						<div class="logo-image">
							<?php the_custom_logo(); ?>
						</div>
						<div class="logo-content">
							<?php
								if ( get_theme_mod('magazine_news_agency_display_header_title', true) == true ) :
									echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
									echo esc_attr(get_bloginfo('name'));
									echo '</a>';
								endif;
								if ( get_theme_mod('magazine_news_agency_display_header_text', false) == true ) :
									echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
								endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 align-self-center text-lg-right text-center">
					<?php if ( get_theme_mod('magazine_news_agency_header_button_url') || get_theme_mod('magazine_news_agency_header_button_text') ) : ?>
						<div class="subscribe-btn my-2 ">
							<a href="<?php echo esc_url( get_theme_mod('magazine_news_agency_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('magazine_news_agency_header_button_text' ) ); ?></a>
						</div>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</header>




