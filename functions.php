<?php

    /**
    * Detect plugin. For use on Front End only.
    */
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    //See if ReKreate Framework plugin is set and active. If not include ReKreate Framework from theme.
    if(!defined('RKF_DIR')){
        define('RKF_DIR', get_stylesheet_directory() . '/inc/rekreate-framework/');
        include_once RKF_DIR . 'rekreate-framework.php';
    }

    //Load the included theme files. inc/_loader.php
    include_once rkf_inc_dir('_loader.php');
