<?php
/* Template Name: Shop */
get_header(); ?>

<div class="shop-page">
    <h1><?php the_title(); ?></h1>
    
    <?php
    $args = array(
        'post_type' => 'taske',  // Ændret fra 'tasker' til 'taske'
        'posts_per_page' => 12,  // Viser 12 tasker
    );
    $tasker_query = new WP_Query($args);
    ?> 

    <?php if ($tasker_query->have_posts()) : ?>
        <div class="tasker-grid">
            <?php while ($tasker_query->have_posts()) : $tasker_query->the_post(); ?>
                <div class="task-item">
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <p><?php the_field('pris'); ?> DKK</p>
                    <p><?php the_field('farve'); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Ingen tasker fundet.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
