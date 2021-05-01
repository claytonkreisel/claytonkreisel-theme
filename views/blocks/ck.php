<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'ck-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'ck';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<section id="<?php echo $id ?>" class="<?php echo $className ?>">
    <h2>World Traveler</h2>
    <div class="module">
        <a href="#travel" class="ck-module-trigger modal-trigger" data-modal-template="ck-modules/world-traveler.php" data-modal-target="#modal-1">
            <img src="<?php echo rkf_images_url('globe.jpg'); ?>" />
            <div class="top-swoosh"><div class='swoosh-text'>I love culture and people!</div></div>
            <div class="bottom-swoosh"><div class='swoosh-text'>to learn more about the places I have been click here</div></div>
            <div class="overlay"></div>
        </a>
    </div>
</section>
