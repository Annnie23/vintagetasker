<?php
/* Template Name: Model */
get_header();
?>

<div class="content">

    <!-- Model Section -->
    <div class="model-section">
        <?php
        // ACF felter for Model-siden
        $model_titel = get_field('model_titel');
        $model_content = get_field('model_content');

        if ($model_titel) {
            echo '<h1 class="model-title">' . esc_html($model_titel) . '</h1>';
        }

        if ($model_content) {
            echo '<div class="model-content">' . wp_kses_post($model_content) . '</div>';
        }
        ?>
    </div>

</div>

<?php get_footer(); ?>
