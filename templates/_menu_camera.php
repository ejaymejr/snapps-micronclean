<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">CAMERA MENU</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Micronclean', 'viewer/index'  )?></li>
                </ul>
            </li>
        </ul>
<?php endif;?>