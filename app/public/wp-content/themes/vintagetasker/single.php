<?php
get_header();
?>

<div class="content">
    <div class="single-post">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h1><?php the_title(); ?></h1>
                <div class="posts-meta">
                    <span><?php the_date(); ?></span> by <span><?php the_author(); ?></span>
                    <div class="post-categories">
                        <strong>Categories:</strong> <?php the_category(', '); ?>
                    </div>
                    <div class="post-tags">
                        <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                    </div>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
