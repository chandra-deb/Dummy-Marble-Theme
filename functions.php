<?php

if ( function_exists( 'acf_add_local_field_group' ) ):

    acf_add_local_field_group( [
        'key'                   => 'group_60392262025ea',
        'title'                 => 'Home Page Settings',
        'fields'                => [
            [
                'key'               => 'field_60392eb33fc88',
                'label'             => 'Service Icon',
                'name'              => 'service_icon',
                'type'              => 'text',
                'instructions'      => 'Enter icon class here',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => 'fab fa-adversal',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'service',
                ],
            ],
        ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',
    ] );

endif;

function load_features() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wp-block-styles' );
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

require_once get_template_directory() .
    '/requires/acf_installer.php';