<?php
function filip_enqueue_files() {
    // glavni stil WP-a
    wp_enqueue_style('filip-style', get_stylesheet_uri());

    // tvoj custom stil
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');

    // JS
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'filip_enqueue_files');
