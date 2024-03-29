<?php
/**
 * Template part for displaying page content in page-home-sectors.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>

<div class="home-page-section"> 
    <h1 class="home-page-section__title">
        <?php 
            $home = get_page_by_title("Sectors");
            echo $home->post_title
        ?>
    </h1>

    <div class="home-page-section__content">
        <div class="sector">
            <h4><a href="<?php echo esc_url( home_url( '/sectors/disaster-risk-management' ) ); ?>">Disaster Risk Management</a></h4>
        </div>
        
        <div class="sector">
            <h4><a href="<?php echo esc_url( home_url( '/sectors/environment' ) ); ?>">Environment</a></h4>
        </div>

        <div class="sector">
            <h4><a href="<?php echo esc_url( home_url( '/sectors/social-and-economic-development' ) ); ?>">Social and Economic Development</a></h4>
        </div>
    </div>
</div>