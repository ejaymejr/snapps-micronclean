<?php
$row = '';
$seq = 0;
?>
<table width="60%" cellspacing="1" cellpadding="4" border="0" class="FORMtable">
<tbody>
	<tr height="18">
		<td width="10%" nowrap="" class="gridButton alignCenter   alignTop">SEQ</td>
		<td width="30%" nowrap="" class="gridButton alignCenter   alignTop">LEAVE</td>
		<td width="20%" nowrap="" class="gridButton alignCenter   alignTop">ENTITLED</td>
		<td width="20%" nowrap="" class="gridButton alignCenter   alignTop">APPLIED</td>
		<td width="20%" nowrap="" class="gridButton alignCenter   alignTop">BALANCE</td>
	</tr>
	<?php foreach ($leaveData as $cr) :
		if ($row <> 'dataGridRowEven') {	
			$row = 'dataGridRowOdd'; 
		}else{
			$row = 'dataGridRowEven';
		}
		if ( $cr->getLeaveType() == 'Annual Leave' ||
		     $cr->getLeaveType() == 'Medical Leave' )
		{
		     $row = 'tk-gree';
		} 
		
		$consumed = HrEmployeeLeavePeer::GetCountLeaves($cr->getEmployeeNo(), $cr->getHrLeaveId(), sfConfig::get('fiscal_year'));
		//$consumed = 0;
		$balance = $cr->getCredits() - $consumed;
		$seq += 1;
	?>
	<tr onmousedown="rowClicked('<?php echo $cr->getId() ?> ?>', null);" 
		onmouseout="rowUnhovered('<?php echo $cr->getId() ?>');" 
		onmouseover="rowHovered('<?php echo $cr->getId() ?>');" 
		id="<?php echo $cr->getId() ?>" 
		class="<?php echo $row ; ?> "
		height="20"
		>
		<td class='alignRight tk-dblue' nowrap> <?php echo $seq . '.';?> </td>
		<td class='alignLeft tk-dblue' nowrap> <?php echo $cr->getLeaveType() ?> </td>
		<td class='alignCenter tk-dblue' nowrap> <?php echo $cr->getCredits() ?> </td>
		<td class='alignCenter tk-dblue' nowrap> <?php echo $consumed ?> </td>
		<td class='alignCenter tk-dblue' nowrap> <?php echo $balance ?> </td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>
	