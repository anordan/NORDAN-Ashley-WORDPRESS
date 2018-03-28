<?php

add_theme_support('post-thumbnails');

function loadCSS() {
    wp_enqueue_style('theme-style', get_template_directory_url(), '/css/theme-styles.css');
}

add_action('wp_enqueue_scripts', 'loadCSS');

add_filter('show_admin_bar', '_return_false');

?>