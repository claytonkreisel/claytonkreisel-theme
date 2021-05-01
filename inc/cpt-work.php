<?php

    /******************************************/
    /* Works Custom Post Type */
    /******************************************/

    function work_cpt_init() {
        $labels = array(
            'name'                  => _x( 'Works', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Work', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Works', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'Work', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'Add New Work', 'textdomain' ),
            'new_item'              => __( 'New Work', 'textdomain' ),
            'edit_item'             => __( 'Edit Work', 'textdomain' ),
            'view_item'             => __( 'View Work', 'textdomain' ),
            'all_items'             => __( 'All Works', 'textdomain' ),
            'search_items'          => __( 'Search Works', 'textdomain' ),
            'parent_item_colon'     => __( 'Parent Works:', 'textdomain' ),
            'not_found'             => __( 'No works found.', 'textdomain' ),
            'not_found_in_trash'    => __( 'No works found in Trash.', 'textdomain' ),
            'featured_image'        => _x( 'Work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'Work archives', 'The post type archive workel used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'work' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M6.625 18.044l-3.263 9.936 4.361-4.377c-0.3-0.757-0.226-2.050 0.387-2.662 0.821-0.822 2.173-0.803 2.994 0.019s0.866 2.198 0.045 3.020c-0.625 0.625-1.998 0.661-2.764 0.337l-4.323 4.335 9.701-3.408 3.533-6.364-4.304-4.246-6.367 3.41zM22.981 3.349c0 0-6.011 6.010-6.938 6.938-0.929 0.928-1.414 4.419-1.414 4.419l2.695 2.696c0 0 3.403-0.486 4.375-1.459s6.938-6.938 6.938-6.938l-5.656-5.656z" /></svg>'),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );

        register_post_type( 'work', $args );
    }

    add_action( 'init', 'work_cpt_init' );
