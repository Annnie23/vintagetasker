<?php
/* Template Name: Tilbud */
get_header();
?>

<div class="content">
    <div class="offers-section">
        <?php
        // ACF kode her for at trække brugerdefineret indhold
        if (have_posts()) :
            while (have_posts()) : the_post();
        
            $tilbud_titel = get_field('tilbud_titel');
            $tilbud_content = get_field('tilbud_content');

            if ($tilbud_titel) {
                echo '<h1 class="offers-title">' . esc_html($tilbud_titel) . '</h1>';
            }

            if ($tilbud_content) {
                echo '<div class="offers-content">' . wp_kses_post($tilbud_content) . '</div>';
            }

            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
