<?php

function astra_child_enqueue_assets() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), ['parent-style']);
    wp_enqueue_script('scroll-top', get_stylesheet_directory_uri() . '/js/scroll-top.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_assets');

function astra_child_register_sidebar() {
    register_sidebar([
        'name' => __('Custom Sidebar', 'astra-child'),
        'id' => 'custom-sidebar',
        'before_widget' => '<div class="custom-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'astra_child_register_sidebar');
