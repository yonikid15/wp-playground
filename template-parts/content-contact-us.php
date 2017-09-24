<?php
/**
 * Template part for displaying page content in various pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>


<div class="footer-contact-us home-page-section">
    <div class="site-description">
        <?php 
            $description = get_bloginfo( 'description', 'display' );
        ?>
        <h3>- <?php echo $description?> -</h3>
    </div>
    <div class="contact-us-button">
        <a href="#" id="home-contact-us-button">Contact Us</a>
    </div>
</div>