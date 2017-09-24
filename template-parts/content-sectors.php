<?php
/**
 * Template part for displaying page content in page-sectors.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="parallax-css">
            <div class="slide-description">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </div>
        </div>
	</header> 

	<div class="entry-content">
		<?php
			the_content();
        ?>
            <div id="sector-learn-more">
                <a href="#">Learn More</a>
            </div>

            <div class="sector">
                <h4><a href="<?php echo esc_url( home_url( '/sectors/disaster-risk-management' ) ); ?>">Disaster Risk Management</a></h4>
            </div>
            
            <div class="sector">
                <h4><a href="<?php echo esc_url( home_url( '/sectors/environment' ) ); ?>">Environment</a></h4>
            </div>

            <div class="sector">
                <h4><a href="<?php echo esc_url( home_url( '/sectors/social-and-economic-development' ) ); ?>">Social and Economic Development</a></h4>
			</div>
        
        <?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'baastel' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->