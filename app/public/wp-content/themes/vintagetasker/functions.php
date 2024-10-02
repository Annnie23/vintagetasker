<?php

function blog_theme_setup() {
    // Add support for title tag
    add_theme_support("title-tag");

    // Register navigation menus
    register_nav_menus(array(
        "primary" => "Primary Menu",
        "footer"  => "Footer Menu"  // Tilføj footer menu registrering
    ));
}
add_action("after_setup_theme", "blog_theme_setup");

function blog_theme_load_resources() {
    // Load stylesheets
    wp_enqueue_style("blog-theme-style", get_template_directory_uri() . "/style.css");

    // Load JavaScript files if needed (add this section if you use JS)
    // wp_enqueue_script("blog-theme-script", get_template_directory_uri() . "/js/script.js", array('jquery'), null, true);
}
add_action("wp_enqueue_scripts", "blog_theme_load_resources");




function my_custom_register_strings() {
    pll_register_string('om_os_titel', 'Om os titel', 'my-text-domain');
    pll_register_string('velkommen_titel', 'Velkommen titel', 'my-text-domain');
    pll_register_string('velkommen_content', 'Velkommen content', 'my-text-domain');
    pll_register_string('vores_historie_titel', 'Vores historie titel', 'my-text-domain');
    pll_register_string('vores_historie_content', 'Vores historie content', 'my-text-domain');
    pll_register_string('vores_kvalitet_titel', 'Vores kvalitet titel', 'my-text-domain');
    pll_register_string('vores_kvalitet_content', 'Vores kvalitet content', 'my-text-domain');
    pll_register_string('baeredygtighed_titel', 'Bæredygtighed titel', 'my-text-domain');
    pll_register_string('baeredygtighed_content', 'Bæredygtighed content', 'my-text-domain');
    pll_register_string('engagement_titel', 'Engagement titel', 'my-text-domain');
    pll_register_string('engagement_content', 'Engagement content', 'my-text-domain');
    pll_register_string('tak_titel', 'Tak titel', 'my-text-domain');
    pll_register_string('tak_content', 'Tak content', 'my-text-domain');
}
add_action('init', 'my_custom_register_strings');




