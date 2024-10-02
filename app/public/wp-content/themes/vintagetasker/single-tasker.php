<?php get_header(); ?>

<div class="single-taske-container">
    <h1><?php the_title(); ?></h1>
    
    <p><strong>Mærke:</strong> <?php the_field('mærke'); ?></p>
    <p><strong>Farve:</strong> <?php the_field('farve'); ?></p>
    <p><strong>Pris:</strong> <?php the_field('pris'); ?> DKK</p>
    <p><strong>Model:</strong> <?php the_field('model'); ?></p>
    
    <?php 
    $taske_billede = get_field('billede');
    if( $taske_billede ): ?>
        <img src="<?php echo $taske_billede['url']; ?>" alt="<?php echo $taske_billede['alt']; ?>" />
    <?php endif; ?>
    
    <p><strong>Beskrivelse:</strong> <?php the_field('beskrivelse'); ?></p>
</div>


<?php get_footer(); ?>
