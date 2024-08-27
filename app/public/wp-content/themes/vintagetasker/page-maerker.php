<?php
/* Template Name: Mærker */
get_header();
?>

<div class="content">

    <!-- Mærker Section -->
    <div class="brands-section">
        <?php
        // ACF felter for Mærker-siden
        $maerker_titel = get_field('maerker_titel');
        $maerker_content = get_field('maerker_content');

        if ($maerker_titel) {
            echo '<h1 class="brands-title">' . esc_html($maerker_titel) . '</h1>';
        }

        if ($maerker_content) {
            echo '<div class="brands-content">' . wp_kses_post($maerker_content) . '</div>';
        }
        ?>
    </div>

</div>

<?php get_footer(); ?>
