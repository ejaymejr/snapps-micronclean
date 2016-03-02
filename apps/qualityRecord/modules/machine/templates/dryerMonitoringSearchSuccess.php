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
	<li><a href="<?php echo url_for('machine/dryerMonitoringSearch') ?>">Home</a></li>
	<li><a href="<?php echo url_for('machine/dryerMonitoringAdd') ?>">Add Dryer Reading</a></li>
	<li><a href="<?php echo url_for('machine/dryerMonitoringGraph') ?>">Graph</a></li>
	<li><a href="<?php echo $loc.'dryerTemperatureReading.xls' ?>">Download Template</a></li>
	<li><a href="#">&nbsp;</a></li>
</ul>
</nav>


<?php 
   	if (isset($pager)):
		$filename = PagerQualityRecord::DryerMonitoringPager($pager);
		$cols = array('action', 'seq', 'date', 'machine', '9am', '10am', '11am', '12nn', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm' );
		echo PagerJson::AkoDataTable($cols, $filename); //create the table
	endif;
?>

</div>