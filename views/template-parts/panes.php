<?php
    global $wp;
    $panes = [
        'about',
        'skills',
        'work',
        'labs',
        'contact'
    ];
    $active = $panes[0];
    if($wp->request){
        $active = $wp->request;
    }
?>
<div class="panes">
    <?php foreach($panes as $pane) : ?>
    <div class="pane <?php if($active == $pane) echo 'active' ?>" data-pane="<?php echo $pane ?>">
        <div class="pane--content">
            <?php echo apply_filters('the_content', get_post_field('post_content', get_field($pane.'_page', 'option'))); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
