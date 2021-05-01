<?php

    //Enqueue the front-end style scripts
    function front_end_enqueue_styles_and_scripts() {
        wp_enqueue_script( 'jquery' ); //Add jquery from wordpress core
        wp_enqueue_script( 'highlight', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/highlight.min.js'); //Add highlight from CDN
        wp_enqueue_script( 'typeit', '//cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js'); //Add typeit from CDN
        wp_enqueue_script( 'jvectormap', rkf_js_url('jvectormap.min.js'), ['jquery'], false, true); //Add jVectorMap
        wp_enqueue_script( 'front-end', rkf_js_url('front-end.min.js'), ['jquery'], time(), true ); //Add the main front-end script.
        wp_enqueue_style( 'highlight', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/styles/default.min.css' ); //Highlight plugin style
        wp_enqueue_style( 'ck-style', get_stylesheet_uri(), ['highlight'] ); //CK Main Style
    }
    add_action( 'wp_enqueue_scripts', 'front_end_enqueue_styles_and_scripts' );

    //Enqueue the back-end style scripts
    function back_end_enqueue_styles_and_scripts() {
        wp_enqueue_script( 'jquery' ); //Add jquery from wordpress core
        wp_enqueue_script( 'highlight', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/highlight.min.js'); //Add highlight from CDN
        wp_enqueue_script( 'typeit', '//cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js'); //Add typeit from CDN
        wp_enqueue_script( 'jvectormap', rkf_js_url('jvectormap.min.js'), ['jquery'], false, true); //Add jVectorMap
        wp_enqueue_style( 'highlight', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/styles/default.min.css' ); //Highlight plugin style
    }
    add_action( 'admin_enqueue_scripts', 'back_end_enqueue_styles_and_scripts' );
