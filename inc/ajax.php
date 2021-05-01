<?php

//Loads all needed ajax calls

//Add ajax_url to wp_head
add_action('wp_head', 'ck_add_ajax_url');
function ck_add_ajax_url(){
    echo '<script type="text/javascript">var ajax_url = "'.admin_url('admin-ajax.php').'";</script>';
}

//Load Modals on call
add_action('wp_ajax_load_modal', 'ck_ajax_load_modal');
add_action('wp_ajax_nopriv_load_modal', 'ck_ajax_load_modal');
function ck_ajax_load_modal(){
    require rkf_views_dir($_REQUEST['template']);
    die();
}
