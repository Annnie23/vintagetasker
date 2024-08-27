<?php
/* Denne side er den side der vises når man trykker på "Blog" i menuen. Den viser alle blogindlæg i en liste. */

get_header();
?>

<div class="content">
    <div class="blog-list">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>

        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post-meta">
                            <div class="post-categories">
                                <strong>Categories:</strong> <?php the_category(', '); ?>
                            </div>
                            <div class="post-tags">
                                <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
