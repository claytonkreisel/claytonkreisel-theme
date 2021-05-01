<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'type-it-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'type-it';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo $className ?>" id="<?php echo esc_attr($id) ?>"></div>
<?php

    $actions = '';

    //This builds a script for the TypeIt object
    if(have_rows('main_text')){
        while(have_rows('main_text')) : the_row();
            $action = get_sub_field('text_action');
            $options = '{';
            if(isset($action['speed']) && $action['speed']) $options .= 'speed: ' . $action['speed'] . ',';
            if(isset($action['delay']) && $action['delay']) $options .= 'delay: ' . $action['delay'] . ',';
            $options .= '}';
            switch($action['action']){

                case "type":
                    $actions .= '.type("'.addslashes($action['text']).'", '.$options.')';
                    break;
                case "break":
                    $actions .= '.break()';
                    break;
                case "pause":
                    $actions .= '.pause('.$action['pause_length'].')';
                    break;
                case "delete":
                    $actions .= '.delete('.$action['number_of_spaces'].', '.$options.')';
                    break;
                case "move":
                    $actions .= '.move('.$action['number_of_spaces'].', '.$options.')';
                    break;
            }
        endwhile;
    }

    $loop = 'false';
    $complete = false;
    if(get_field('loop')) $loop = 'true';
    if(get_field('after_complete')){
        $complete = get_field('after_complete');
    }
?>
<script type="text/javascript">
    if(typeof jQuery("#<?php echo $id ?>").attr('data-typeit-id') == 'undefined'){
        new TypeIt("#<?php echo $id ?>", {
            speed: <?php the_field('speed'); ?>,
            loop: <?php echo $loop; ?>,
            <?php if($complete) : ?>
            afterComplete: async(step, instance) => {
                <?php echo $complete; ?>
            }
            <?php endif; ?>
        })
        <?php echo $actions; ?>
        .go();
    }
</script>
