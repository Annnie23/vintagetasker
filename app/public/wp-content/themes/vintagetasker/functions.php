<?php

function blog_theme_setup() {
    add_theme_support("title-tag");

    
    register_nav_menus(array(
        "primary" => "Primary Menu",
        "footer"  => "Footer Menu" 
    ));
}
add_action("after_setup_theme", "blog_theme_setup");

function blog_theme_load_resources() {
    wp_enqueue_style("blog-theme-style", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "blog_theme_load_resources");

function shop_enable_woocommerce(){
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce");



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
    pll_register_string('your_browser_does_not_support_video', 'Your browser does not support the video tag.', 'my-text-domain');
    pll_register_string('overskrift', 'overskrift', 'my-text-domain');
    pll_register_string('klassikeren_title', 'Klassikeren der vil med dig hjem', 'my-text-domain');
    pll_register_string('koeb_nu_button', 'Køb nu', 'my-text-domain');
    pll_register_string('shop_alle_button', 'Shop alle', 'my-text-domain');
    pll_register_string('shop_tilbud_button', 'Shop tilbud', 'my-text-domain');
    pll_register_string('shop_nu_button', 'Shop nu', 'my-text-domain');
    pll_register_string('support_title', 'Support', 'my-text-domain');

}
add_action('init', 'my_custom_register_strings');




