<?php

function load_features() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'load_features' );
add_action( 'init', 'custom_post_types' );

function custom_post_types() {
    register_post_type( 'service', [
        'public'    => true,
        'menu_icon' => 'dashicons-networking',
        'labels'    => [
            'name'          => 'Services',
            'add_new_item'  => 'Add new service',
            'edit_item'     => 'Edit service',
            'all_items'     => 'All services',
            'singular_name' => 'Service',

        ],
        'supports'  => ['title', 'editor'],
    ] );

    register_post_type( 'project', [
        'public'     => true,

        'menu_icon'  => 'dashicons-image-filter',
        'taxonomies' => ['category'],
        'labels'     => [
            'name'          => 'Projects',
            'add_new_item'  => 'Add new project',
            'edit_item'     => 'Edit project',
            'all_items'     => 'All projects',
            'singular_name' => 'Project',

        ],

        'supports'   => ['title', 'editor', 'thumbnail'],
    ] );
}