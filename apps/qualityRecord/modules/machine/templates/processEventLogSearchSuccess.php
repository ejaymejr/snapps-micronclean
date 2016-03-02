<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php 
if (strpos($_SERVER['SCRIPT_FILENAME'], '_dev')):
	$loc = url_for('').'../../images/qualityRecord/';
else:
	$loc = url_for('').'../images/qualityRecord/';
endif;
?>
<div class="contentBox">
<nav class="breadcrumbs">
<ul>
	<li><a href="<?php echo url_for('machine/waterMonitoringSearch') ?>">Home</a></li>
	<li><a href="<?php echo url_for('machine/processEventLogAdd') ?>">Add Event Log </a></li>
	<li><a href="#">&nbsp;</a></li>
</ul>
</nav>
<br>

<?php 
   	if (isset($pager)):
		$filename = PagerQualityRecord::ProcessLogPager($pager);
		$cols = array('action', 'seq', 'date', 'time', 'machine', 'Failure', 'log' );
		echo PagerJson::AkoDataTable($cols, $filename); //create the table
	endif;
?>

</div>