<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package njc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/njc/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-includes/fonts/font-awesome/css/font-awesome.min.css"/>
	
	



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'njc' ); ?></a> -->

	<header id="header">
		<div class="header-container">
		<nav role="navigation" class="navbar navbar-expand-lg navbar-light">
			<?php
			the_custom_logo();
			
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			$njc_description = get_bloginfo( 'description', 'display' );
			if ( $njc_description || is_customize_preview() ) :
				?>
				
			<?php endif; ?>

			<button class="navbar-toggler pull right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
			<?php

add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_item_id', '__return_empty_string' );

			wp_nav_menu(
				array(
					'container' => 'false',
					'theme_location' => 'menu-1',
					'menu_id'        => ' ',
					'menu_class' => 'col-md navbar-nav  mr-auto nav justify-content-end navbar-right top-menu',
				)
			);
			
			?>
			</div>
		</nav><!-- nav -->
		</div>
	</header><!-- #masthead -->
