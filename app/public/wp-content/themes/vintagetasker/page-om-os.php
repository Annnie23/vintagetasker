<?php
/* Template Name: Om os */
get_header();
?>

<div class="content">

    <div class="about-section">
        <?php
        // ACF kode for at trække brugerdefineret indhold
        if (have_posts()) :
            while (have_posts()) : the_post();

                $om_os_titel = get_field('om_os_titel');
                $velkommen_titel = get_field('velkommen_titel');
                $velkommen_content = get_field('velkommen_content');
                $vores_historie_titel = get_field('vores_historie_titel');
                $vores_historie_content = get_field('vores_historie_content');
                $vores_kvalitet_titel = get_field('vores_kvalitet_titel');
                $vores_kvalitet_content = get_field('vores_kvalitet_content');
                $baeredygtighed_titel = get_field('baeredygtighed_titel');
                $baeredygtighed_content = get_field('baeredygtighed_content');
                $engagement_titel = get_field('engagement_titel');
                $engagement_content = get_field('engagement_content');
                $tak_titel = get_field('tak_titel');
                $tak_content = get_field('tak_content');

                if ($om_os_titel) {
                    echo '<h1 class="about-title">' . esc_html($om_os_titel) . '</h1>';
                }

                if ($velkommen_titel) {
                    echo '<h2 class="section-title">' . esc_html($velkommen_titel) . '</h2>';
                }

                if ($velkommen_content) {
                    echo '<div class="section-content">' . wp_kses_post($velkommen_content) . '</div>';
                }

                if ($vores_historie_titel) {
                    echo '<h2 class="section-title">' . esc_html($vores_historie_titel) . '</h2>';
                }

                if ($vores_historie_content) {
                    echo '<div class="section-content">' . wp_kses_post($vores_historie_content) . '</div>';
                }

                if ($vores_kvalitet_titel) {
                    echo '<h2 class="section-title">' . esc_html($vores_kvalitet_titel) . '</h2>';
                }

                if ($vores_kvalitet_content) {
                    echo '<div class="section-content">' . wp_kses_post($vores_kvalitet_content) . '</div>';
                }

                if ($baeredygtighed_titel) {
                    echo '<h2 class="section-title">' . esc_html($baeredygtighed_titel) . '</h2>';
                }

                if ($baeredygtighed_content) {
                    echo '<div class="section-content">' . wp_kses_post($baeredygtighed_content) . '</div>';
                }

                if ($engagement_titel) {
                    echo '<h2 class="section-title">' . esc_html($engagement_titel) . '</h2>';
                }

                if ($engagement_content) {
                    echo '<div class="section-content">' . wp_kses_post($engagement_content) . '</div>';
                }

                if ($tak_titel) {
                    echo '<h2 class="section-title">' . esc_html($tak_titel) . '</h2>';
                }

                if ($tak_content) {
                    echo '<div class="section-content">' . wp_kses_post($tak_content) . '</div>';
                }

            endwhile;
        endif;
        ?>
    </div>

</div>

<?php get_footer(); ?>
