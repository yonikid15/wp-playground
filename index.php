<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<?php

		get_template_part( 'template-parts/content', 'home-about-us' );

		get_template_part( 'template-parts/content', 'home-sectors' );

		get_template_part( 'template-parts/content', 'home-services' );

		get_template_part( 'template-parts/content', 'home-accomplishments' );

		/*
			$my_wp_query = new WP_Query();
			$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

			//Get the page as an Object
			$home = get_page_by_title('Home');

			//Filter through all pages and find children
			$home_children = get_page_children( $home->ID, $all_wp_pages );

			foreach ( $home_children as $child ) {
				$content =  $child->post_content;
				
				// ABOUT US - HOME PAGE REPRESENTATION
				if( $child->post_title == 'Home - About Us') :

					get_template_part( 'template-parts/content', 'home-about-us' );
				
				?> 
				
				<?php endif;
				
				if( $child->post_title == 'Home - Sectors') : ?>

					<div class="home-page-section hp-sectors"> 
						<h1>Sectors</h1>
						
						<div class="sector">
							<div class="sector-image">
								<span class="sector-icon"></span>
							</div>
							<h4><a href="<?php echo esc_url( home_url( '/sectors/disaster-risk-management' ) ); ?>">Disaster Risk Management</a></h4>
						</div>
						
						<div class="sector">
							<h4><a href="<?php echo esc_url( home_url( '/sectors/environment' ) ); ?>">Environment</a></h4>
						</div>

						<div class="sector">
							<h4><a href="<?php echo esc_url( home_url( '/sectors/social-and-economic-development' ) ); ?>">Social and Economic Development</a></h4>
						</div>
						
					</div>

				<?php endif;

				if( $child->post_title == 'Home - Services') : ?>
					<div class="home-page-section">
						<h1>Services</h1>

					
					</div>
				<?php endif ?>
				
  			<?php 
			  }*/
		 ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
