<?php
/* Template Name: Forside */
get_header();
?>

<div class="content">

    <!-- Hero Section -->
    <div class="hero-section">
        <?php
        // ACF kode her for at trække brugerdefineret indhold
        if (have_posts()) :
            while (have_posts()) : the_post();

                // Træk ACF felter og indhold ind
                $titel = get_field('hero_titel');

                if ($titel) {
                    echo '<h1 class="hero-title">' . esc_html($titel) . '</h1>';
                }

            endwhile;
        endif;
        ?>
    </div>

    <!-- Brands Section -->
    <div class="brands-section">
        <?php
        // Hent "maerker_titel" feltet fra ACF
        $maerker_titel = get_field('maerker_titel');

        if ($maerker_titel) {
            echo '<h2 class="brands-title">' . esc_html($maerker_titel) . '</h2>';
        }
        ?>
    </div>

</div>

<?php get_footer(); ?>

