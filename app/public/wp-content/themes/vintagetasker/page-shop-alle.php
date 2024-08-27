<?php
/* Template Name: Shop Alle */
get_header();
?>

<div class="content">

    <!-- Shop Alle Section -->
    <div class="shop-section">
        <?php
        // ACF felter for Shop Alle-siden
        $shop_alle_titel = get_field('shop_alle_titel');
        $shop_alle_content = get_field('shop_alle_content');

        if ($shop_alle_titel) {
            echo '<h1 class="shop-title">' . esc_html($shop_alle_titel) . '</h1>';
        }

        if ($shop_alle_content) {
            echo '<div class="shop-content">' . wp_kses_post($shop_alle_content) . '</div>';
        }
        ?>
    </div>

</div>

<?php get_footer(); ?>
