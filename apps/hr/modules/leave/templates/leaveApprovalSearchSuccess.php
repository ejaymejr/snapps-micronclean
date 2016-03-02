<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div class="contentBox" >

<?php 
if (isset($pager))
{
    $filename = hrPager::LeaveApproval($pager);
	$cols = array('seq','sign', 'name', 'leave', 'from', 'to', 'no_days', 'is_verified', 'is_approved');
	echo PagerJson::AkoDataTableForTicking($cols, $filename); //create the table
}

?>
</div>