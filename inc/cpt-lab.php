<?php

    /******************************************/
    /* Labs Custom Post Type */
    /******************************************/

    function lab_cpt_init() {
        $labels = array(
            'name'                  => _x( 'Labs', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Lab', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Labs', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'Lab', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'Add New Lab', 'textdomain' ),
            'new_item'              => __( 'New Lab', 'textdomain' ),
            'edit_item'             => __( 'Edit Lab', 'textdomain' ),
            'view_item'             => __( 'View Lab', 'textdomain' ),
            'all_items'             => __( 'All Labs', 'textdomain' ),
            'search_items'          => __( 'Search Labs', 'textdomain' ),
            'parent_item_colon'     => __( 'Parent Labs:', 'textdomain' ),
            'not_found'             => __( 'No labs found.', 'textdomain' ),
            'not_found_in_trash'    => __( 'No labs found in Trash.', 'textdomain' ),
            'featured_image'        => _x( 'Lab Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'Lab archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into lab', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this lab', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter labs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Labs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Labs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'lab' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M19.332 19.041c0 0-1.664 2.125-3.79 0-2.062-2-3.562 0-3.562 0l-4.967 9.79c-0.144 0.533 0.173 1.081 0.706 1.224h16.497c0.533-0.143 0.85-0.69 0.707-1.224l-5.591-9.79zM26.939 28.33l-7.979-13.428v-0.025l-0.014-7.869h0.551c0.826 0 1.498-0.671 1.498-1.499 0-0.827-0.672-1.498-1.498-1.498h-7.995c-0.827 0-1.498 0.671-1.498 1.498 0 0.828 0.671 1.499 1.498 1.499h0.482l-0.016 7.871-6.908 13.451c-0.428 1.599 0.521 3.242 2.119 3.67h17.641c1.6-0.428 2.549-2.071 2.119-3.67zM24.553 30.998l-17.108-0.019c-1.065-0.286-1.697-1.382-1.412-2.446l6.947-13.616 0.021-8.908h-1.498c-0.275 0-0.499-0.224-0.499-0.5s0.224-0.499 0.499-0.499h7.995c0.275 0 0.498 0.224 0.498 0.499 0 0.276-0.223 0.5-0.498 0.5h-1.498l0.025 8.875 7.939 13.666c0.286 1.067-0.347 2.163-1.411 2.448zM16.48 2.512c0 0.552 0.448 1 1 1s1-0.448 1-1-0.447-1-1-1-1 0.447-1 1zM17.48 0.012c0.828 0 1.5-0.671 1.5-1.5s-0.672-1.5-1.5-1.5-1.5 0.671-1.5 1.5 0.672 1.5 1.5 1.5zM13.48 2.512c0.553 0 1-0.448 1-1s-0.447-1-1-1-1 0.448-1 1 0.447 1 1 1z"/></svg>'),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );

        register_post_type( 'lab', $args );
    }

    add_action( 'init', 'lab_cpt_init' );
