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
                <a href="">
                    <div class="box">


                        <div class="box-overlay">
                            <p class="project-title">Project</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri() . '/img/1.jpg' ?>" alt="">

                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="box-overlay"></div>
                        <img src="<?php echo get_template_directory_uri() . '/img/2.jpg' ?>" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="box-overlay"></div>
                        <img src="<?php echo get_template_directory_uri() . '/img/3.jpg' ?>" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="box-overlay"></div>
                        <img src="<?php echo get_template_directory_uri() . '/img/4.jpg' ?>" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>



<?php get_footer() ?>