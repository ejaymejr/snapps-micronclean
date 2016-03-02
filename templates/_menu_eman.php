<?php if ($sf_user->isAuthenticated()): ?>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">SKILLS</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                     <li><?php echo link_to('Standard Form', 'home/standardFormSearch', array('data-hints'=>"Standard HTML Forms") ) ?></li>
			          <li><?php echo link_to('Ajax', 'home/ajax', array('data-hints'=>"Ajax Update Areas of the Screen") ) ?></li>
			          <li><?php echo link_to('Chart', 'home/chart', array('data-hints'=>"Show Data Trends")) ?></li>
			          <li><?php echo link_to('Report', 'home/report', array('data-hints'=>"Printing of Reports in Various Forms")) ?></li>
			          <li><a href="#_photography">Apple Store Apps</a></li>
			          <li><a href="#_photography">Photography</a></li>
			          <li><a href="#_funrun">Fun Run</a></li>
                </ul>
            </li>
        </ul>
<?php endif;?>    