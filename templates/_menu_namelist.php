<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">SEAGATE</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Search Template', 'seagate/searchTemplate'  )?></li>
                    <li><?php echo link_to('Process Namelist', 'seagate/processNamelist'  )?></li>
                    <li><?php echo link_to('Print Namelist', 'seagate/searchToPrint'  )?></li>
                    <li><?php echo link_to('Namelist History', 'seagate/namelistHistory'  )?></li>
                </ul>
            </li>
        </ul>
<?php endif;?>
