<?php

function post_type_custom() {

    $labels = array(
        'name'                => _x( 'Custom', 'Post Type General Name', 'post_types' ),
        'singular_name'       => _x( 'Custom', 'Post Type Singular Name', 'post_types' ),
        'menu_name'           => __( 'Custom', 'post_types' ),
        'parent_item_colon'   => __( 'Parent Item:', 'post_types' ),
        'all_items'           => __( 'All Items', 'post_types' ),
        'view_item'           => __( 'View Item', 'post_types' ),
        'add_new_item'        => __( 'Add New Item', 'post_types' ),
        'add_new'             => __( 'Add New', 'post_types' ),
        'edit_item'           => __( 'Edit Item', 'post_types' ),
        'update_item'         => __( 'Update Item', 'post_types' ),
        'search_items'        => __( 'Search Item', 'post_types' ),
        'not_found'           => __( 'Not found', 'post_types' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'post_types' ),
    );
    $args = array(
        'label'               => __( 'Custom', 'post_types' ),
        'description'         => __( 'Custom post type.', 'post_types' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 11,
        'menu_icon'           => 'dashicons-portfolio',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'custom', $args );

}
add_action( 'init', 'post_type_custom', 0 );




