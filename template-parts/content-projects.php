<?php
/**
 * Template part for displaying page content in page-projects.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div id="projects" class="parallax-css">
            <div class="slide-description">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </div>
        </div>
	</header>

    <div class="entry-content">
        <div class="projects-categories">
            <div class="projects-checkbox" data-value="location">
            Location <span class="projects-counter">(2)</span>
            <span class="projects-expand">[-]</span>
            </div>
            <div class="projects-depth visible">
                <div class="projects-checkbox" data-value="northamerica">
                    North America
                    <span class="projects-counter">(2)</span>
                </div>
                <div class="projects-checkbox" data-value="africa">
                    Africa
                    <span class="projects-counter">(1)</span>
                </div>
                <div class="projects-checkbox" data-value="Europe">
                    Europe
                    <span class="projects-counter">(1)</span>
                </div>
            </div>

            <div class="projects-checkbox" data-value="sector">
            Sector
                <span class="projects-counter">(2)</span>
                <span class="projects-expand">[-]</span>
            </div>
            <div class="projects-depth visible">
                <div class="projects-checkbox" data-value="environment">
                Environtment
                    <span class="projects-counter">(2)</span>
                </div>
                <div class="projects-checkbox" data-value="social">
                    Social
                    <span class="projects-counter">(1)</span>
                </div>
            </div>

            <div class="projects-checkbox" data-value="services">
            Services
                <span class="projects-counter">(2)</span>
                <span class="projects-expand">[-]</span>
            </div>
            <div class="projects-depth visible">
                <div class="projects-checkbox" data-value="monitoringandevaluation">
                    Monitoring and Evaluation
                    <span class="projects-counter">(2)</span>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->