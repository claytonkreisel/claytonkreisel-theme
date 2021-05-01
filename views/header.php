<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php if(has_site_icon()): ?>
            <?php wp_site_icon() ?>
        <?php else: ?>
            <link rel="icon" href="<?php echo rkf_images_url('favicon.png'); ?>">
        <?php endif;?>
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <meta name="description" content="<?php
            if ( is_single() ) {
                single_post_title('', true);
            } else {
                bloginfo('name'); echo " - "; bloginfo('description');
            }
        ?>" />
        <?php
            wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Begin Foreground -->
        <div class="master--foreground">
