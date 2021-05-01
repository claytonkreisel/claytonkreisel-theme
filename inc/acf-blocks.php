<?php

    //Declare the blocks for acf
    function register_acf_block_types() {

        // register a typeit block.
        acf_register_block_type(array(
            'name'              => 'typeit',
            'title'             => __('Type It Block'),
            'description'       => __('A custom type it style block.'),
            'render_template'   => 'views/blocks/typeit.php',
            'category'          => 'formatting',
            'icon'              => 'editor-strikethrough',
            'keywords'          => array( 'typeit', 'type-writer' ),
        ));

        // register a ck module block.
        acf_register_block_type(array(
            'name'              => 'ck_module',
            'title'             => __('CK Module'),
            'description'       => __('A custom CK get to know me bill block.'),
            'render_template'   => 'views/blocks/ck.php',
            'category'          => 'common',
            'icon'              => 'welcome-widgets-menus',
            'keywords'          => array( 'Clayton', 'Kreisel' ),
        ));

    }

    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {
        add_action('acf/init', 'register_acf_block_types');
    }
