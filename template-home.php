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
<div class="blog-section">

</div>



<?php get_footer() ?>