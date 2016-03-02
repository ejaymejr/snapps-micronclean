<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<table width="100%" class="FORMtable" border="0" cellpadding="4"
	cellspacing="0">
	<tr>
		<td colspan="2" height="25" width="100" nowrap>
		<div class="tk-style53 alignCenter">
		<h2>EMPLOYEE LEAVES</h2>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		
<?php 
if (isset($pager))
{
    $filename = DbObject::LeaveSearch($pager);
	$cols = array('seq', 'name', 'leave', 'from', 'to', 'days');
	echo PagerJson::AkoDataTableForTicking($cols, $filename); //create the table
}
?>
	</tr>
</table>