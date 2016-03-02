<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">EXERCISE</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                     <li><?php echo link_to('Tummy Tone', 'viewer/tummyTone'  )?></li>
                </ul>
            </li>
        </ul>
<?php endif;?>    