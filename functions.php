<?php
function register_css_and_js() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("theme", get_stylesheet_directory_uri() . "/style.css");

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", [], true);
}
add_action("wp_enqueue_scripts", "register_css_and_js");