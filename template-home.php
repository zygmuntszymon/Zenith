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
            <a href="https://github.com/zygmuntszymon" target="_blank">See all projects</a>
        </div>

    </div>
    <div class="news-section">
        <?php
        $recent = new WP_Query(array(
            'type' => 'post',
            'posts_per_page' => 2
        ))

        ?>
        <p class="news-header">Latest News</p>
        <div class="container posts">
            <?php
            while ($recent->have_posts()) {
                $recent->the_post();
            ?>
                <div class="recent-post">
                    <h2 class="recent-post_title"><?php the_title() ?></h2>
                    <p class="recent-post_content"><?php echo wp_trim_words(get_the_content(), 18, '...') ?></p>
                    <br>
                    <a class="see-more-btn" href="<?php echo the_permalink() ?>">See more</a>
                </div>

            <?php
            }
            ?>
        </div>
        <a href="<?php echo site_url("blog") ?>" target="_blank">See all news</a>

    </div>
</div>



<?php get_footer() ?>