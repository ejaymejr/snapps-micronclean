		<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu ">
            <li>
                <a class="dropdown-toggle" href="#">USER MENU</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('User', 'user'  )?></li>
                        <li><?php echo link_to('Permission', 'permission'  )?></li>
                        <li><?php echo link_to('Group', 'group'  )?></li>
                </ul>
            </li>
</ul>
<?php endif; ?>
