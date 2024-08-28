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



