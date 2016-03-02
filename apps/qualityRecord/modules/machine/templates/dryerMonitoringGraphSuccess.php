<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<br>
<div class="contentBox">
<?php
	if ($pager):
		include_partial('dryer_reading_graph', array('pager'=>$pager));
	endif;
?></div>