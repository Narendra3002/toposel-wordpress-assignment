<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function toposel_assets() {
    wp_enqueue_style('toposel-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'toposel_assets');
