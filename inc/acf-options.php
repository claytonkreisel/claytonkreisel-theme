<?php

    //Declare the options page
    function add_acf_option_pages(){

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
            	'page_title' 	=> 'CK Settings',
            	'menu_title'	=> 'CK Settings',
            	'menu_slug' 	=> 'ck-settings',
            	'capability'	=> 'edit_posts',
            	'redirect'		=> false
            ));

        }
    }

    add_action('init', 'add_acf_option_pages');
