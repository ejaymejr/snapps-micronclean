<?php use_helper('Validation', 'Javascript') ?>
<div class="contentBox">
<table class="table bordered">
<tr>
	<td colspan="3" >
		<nav class="breadcrumbs">
			<ul>
			<li><a href="#"><i class="icon-home"></i></a></li>
			<li class=" "><a id="save" href="<?php echo url_for('airparticle/acroParticleAdd') ?>" class="" >Add Acro Particle Count</a></li>
			<li><a href="#">&nbsp;</a></li>
			</ul>
		</nav
	</td>
</tr>
</table>	
<?php 
if (isset($pager))
{
    $filename = PagerQualityRecord::AcroAirParticleSearch($pager);
	$cols = array('seq', 'action', 'date', 'humidity', 'temperature', 'diff_pressure', 'frequency', 'tester');
	echo PagerJson::AkoDataTableForTicking($cols, $filename); //create the table
}
?>
</div>