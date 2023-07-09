<div class="entry-content" itemprop="mainEntityOfPage">

    <meta itemprop="description" content="<?php echo esc_html(wp_strip_all_tags(get_the_excerpt(), true)); ?>" />
    <div class="container">
        <div class="row">
            <div class="single-post col-9">
                <div class="single-post_meta">
                    <h1><?php the_title() ?></h1>
                    <span>Posted by <?php the_author() ?> on <?php the_date('Y-m-d') ?></span>
                </div>
                <div class="single-post_content">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('post-image', array('class' => 'img-fluid')); ?>
                    <?php endif; ?>
                    <div class="singe-post_content--main">
                        <?php the_content() ?>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div id="sidebar-primary" class="sidebar">
                    <?php dynamic_sidebar('primary'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>