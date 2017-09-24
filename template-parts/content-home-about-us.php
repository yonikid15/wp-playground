<?php
/**
 * Template part for displaying page content in page-about-us.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>

<div class="home-page-section"> 
    
    <?php 
        $page = get_page_by_title( 'Home - About Us' );
        $content = apply_filters('the_content', $page->post_content);
        echo $content;
    ?>

    <a id="read-more" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Read More</a>
</div>
