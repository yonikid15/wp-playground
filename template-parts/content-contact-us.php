<?php
/**
 * Template part for displaying page content in various pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>


<div class="footer-contact-us ">
    <div class="site-description">
        <?php 
            $description = get_bloginfo( 'description', 'display' );
        ?>
        <h3>- <?php echo $description?> -</h3>
    </div>
    <div class="contact-us-button">
        <p class="btn btn__white"><a href="#">Contact Us</a></p>
    </div>
</div>