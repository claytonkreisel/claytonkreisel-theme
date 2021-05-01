<!-- Begin Main Navigation -->
<section class="menu">
    <nav>
        <ul id="main-menu">
            <li class="top-cap bottom-cap margin-bottom--xxs">
                <a class="menu-icon--holder mobile-menu">
                    <div class="menu-item--content">
                        <div class="menu-item--icon padding-bottom-important--none">
                            <div class="menu-icon"></div>
                        </div>
                    </div>
                </a>
            </li>
            <?php

                //Define buttons
                $btns = array(
                    'about' => ['About', 'user1'],
                    'skills' => ['Skills', 'embed'],
                    'work' => ['Work', 'pen'],
                    'labs' => ['Labs', 'lab'],
                    'contact' => ['Contact', 'addressbook1']
                );

                //Define active
                $active_btn = 'about';
                if($wp->request){
                    $active_btn = $wp->request;
                }

            ?>
            <?php
                foreach($btns as $btni => $btnv) : //START BUTTON LOOP

                    //Check to see if is top or bottom cap
                    $cap = '';
                    if($btni === array_key_first($btns)) $cap = 'top-cap';
                    if($btni === array_key_last($btns)) $cap = 'bottom-cap';
            ?>
                <li class="<?php echo $cap; ?>">
                    <a class="pane-btn <?php if($btni == $active_btn) echo 'active'; ?>" data-tag="<?php echo $btni ?>" href="<?php echo site_url($btni.'/') ?>">
                        <div class="menu-item--content">
                            <div class="menu-item--icon"><i class="icon-<?php echo $btnv[1] ?> display--block"></i></div>
                            <div class="menu-item--text"><?php echo $btnv[0] ?></div>
                        </div>
                    </a>
                </li>
            <?php endforeach; //END BUTTON LOOP ?>
        </ul>
    </nav>
</section>
<!-- End Main Navigation -->
