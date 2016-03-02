		<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu ">
            <li>
                <a class="dropdown-toggle" href="#">REJECT PHOTO</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><?php echo link_to('Upload Photo', 'photo/upload'  )?></li>
					<li><?php echo link_to('Email Manager', 'photo/emailManager'  )?></li>
					<li><?php echo link_to('Search Reject', 'photo/searchReject'  )?></li>
                </ul>
            </li>
</ul>
<?php endif; ?>
