<?php

function nostalgie_load_resources()
{
    wp_enqueue_style("aos", "https://unpkg.com/aos@2.3.1/dist/aos.css");
    wp_enqueue_script("aos", "https://unpkg.com/aos@2.3.1/dist/aos.js");

    wp_enqueue_style("bootstrap", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    wp_enqueue_style("slick", "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");

    wp_register_script('jquery3', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true); // jQuery v3
    wp_enqueue_script('jquery3');
    wp_script_add_data( 'jquery3', array( 'integrity', 'crossorigin' ) , array( 'sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n', 'anonymous' ) );

    wp_register_script('Bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('Bootstrap4');
    wp_script_add_data( 'Bootstrap4', array( 'integrity', 'crossorigin' ) , array( 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', 'anonymous' ) );

    wp_enqueue_script("ajax", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js");

}
add_action("wp_enqueue_scripts", "nostalgie_load_resources");


function nostalgie_register_menu_locations() {
    register_nav_menu("heared-nav-menu", "Header Navigation Menu");
}
add_action("after_setup_theme", "nostalgie_register_menu_locations");
