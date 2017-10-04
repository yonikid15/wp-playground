<?php
/**
 * Template part for displaying page content in services.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baastel
 */

?>

<div class="home-page-section">
    <h1 class="home-page-section__title">
        <?php 
            $home = get_page_by_title("Services");
            echo $home->post_title
        ?>
    </h1>
    <div class="home-page-section__content">
        <div class="accordion-module">
            <div class="module-item">
                <h5>Program and Project Management</h5>
            </div>
        </div>
        <div class="accordion-module">
            <div class="module-item">
                <h5>Project Design</h5>
            </div>
        </div>
        <div class="accordion-module">
            <div class="module-item">
                <h5>Monitoring and Evaluation</h5>
            </div>
        </div>
        <div class="accordion-module">
            <div class="module-item">
                <h5>Training and Capacity</h5>
            </div>
        </div>
        <div class="accordion-module">
            <div class="module-item">
                <h5>Language Services</h5>
            </div>
        </div>
    </div>

</div>