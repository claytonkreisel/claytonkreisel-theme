<?php

function add_theme_supports(){
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'dark-editor-style' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'add_theme_supports' );
