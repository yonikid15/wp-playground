<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baastel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'baastel' ); ?></a>

	<header id="masthead" class="site-header">
		
		<!-- NAVIGATION MENU-->
		<nav id="site-navigation" class="main-navigation">
			 <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'baastel' ); ?></button> -->
			<div class="logo-container">
				<a href="<?php echo home_url(); ?>">
					<img src="https://www.ingenuitybox.com/wp-content/uploads/2017/07/xBaastel-2001-bleu-gris-1.png.pagespeed.ic.AHMulwY3vg.webp" alt="BAASTEL" id="logo">
				</a>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776</a>
		</nav><!-- #site-navigation -->

		
		<div class="site-branding">
			<?php
			the_custom_logo();
			$description = get_bloginfo( 'description', 'display' );
			
			if ( is_front_page() && is_home() ) : ?>
				<div class="header-image">
					<h1 class="site-title">Baastel</h1>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php else : ?>
					<!--<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>-->
				</div> <!-- header-image -->
			<?php
			endif;
			
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!--<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>-->
			<?php
			endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	
