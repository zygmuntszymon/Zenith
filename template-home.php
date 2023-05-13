<?php
/*
Template Name: Home Page
*/

get_header();
?>
<div class="hero-section" style="background:url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center fixed">
    <div class="hero-section_overlay">
        <div class="container">
            <div class="hero-section_left-panel">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</div>
<div class="our-work-section">
    <div class="container p-5">
        <div class="row our-work-section_top">
            <div class="col-6 mx-auto">
                <h3>Our work</h3>
                <p>Sed arcu libero, hendrerit at vulputate ut, elementum in orci. Suspendisse nec ultrices turpis. Donec ac ex augue. Mauris in ligula ac magna congue rutrum.</p>
            </div>
        </div>
        <div class="our-work-section_projects container">
            <div class="projects-showcase">
                <div class="box">1 </div>
                <div class="box"> 2</div>
                <div class="box"> 3</div>
                <div class="box"> 4</div>
                <div class="box"> 5</div>
                <div class="box"> 6</div>
            </div>
        </div>
    </div>

</div>



<?php get_footer() ?>