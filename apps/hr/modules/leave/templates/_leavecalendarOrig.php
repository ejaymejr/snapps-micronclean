<table cellspacing="2" cellpadding="2" border="0" style="width:100%;" class="dataGridTable">
    <tbody>
    <tr height="20px" class="dataGridTableHeader">
			<td width="20" rowspan="2" nowrap="" class="dataGridTableHeaderColumn alignLeft">&nbsp;</td>
            <td width="20" rowspan="2" nowrap="" class="dataGridTableHeaderColumn alignLeft">No</td>
            <td width="20" rowspan="2" nowrap="" class="dataGridTableHeaderColumn alignLeft">Employee Name</td>
            <td width="20" rowspan="2" nowrap="" class="dataGridTableHeaderColumn alignLeft">Company</td>
            <?php
            for ($x=1; $x<= DateUtils::DUFormat('t', $xdate); $x++):
            	$cdate = DateUtils::AddDate($xdate, $x);
            ?>
            <td  width="25"  nowrap="" class="LeaveCalendarDays"><div align="center"><?php echo DateUtils::DUFormat('D', $cdate); ?></div></td>
            <?php
            	endfor; 
            ?>
        <td width="100" nowrap="" class="dataGridTableHeaderColumn alignLeft">&nbsp;</td>
	</tr>
    <tr height="20px" class="dataGridTableHeader">
            <?php
            	for ($x=1; $x<= DateUtils::DUFormat('t', $xdate); $x++):
            	//$cdate = DateUtils::AddDate($xdate, $x);
            ?>
            <td nowrap="" class="LeaveCalendarDays"><div align="center"><?php echo $x ?></div></td>
            <?php
            	endfor; 
            ?>
        <td width="100" nowrap="" class="dataGridTableHeaderColumn alignLeft">&nbsp;</td>
	</tr>   
        
<?php         
$SN = 1;
$rowCount = sizeof($empList);
foreach ( $empList as $empNo => $name): 
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'sq_' . $SN;

$empInfo = HrEmployeePeer::GetDatabyEmployeeNo($empNo);
$company = '';
//$company = $empInfo->HrCompanyId();
if ($empInfo) $company = HrCompanyPeer::GetNamebyId($empInfo->getHrCompanyId() );

?>
<tr height="20px" class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php //echo $editLink . ' | ' . $deleteLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft  alignTop" nowrap ><?php echo substr($name,0, 20) ;?></td>
    <td class="alignLeft  alignTop" nowrap ><?php echo $company ;?></td>
    <?php
        for ($x=1; $x<= DateUtils::DUFormat('t', $xdate); $x++):
             $cdate = DateUtils::AddDate($xdate, $x);
        	 $leaveDisplay = LeaveDisplay( HrEmployeeLeavePeer::IsOnleave($empNo, $cdate) );
        	 $bgColor = $leaveDisplay['color'] == 'none'? '' : $leaveDisplay['color'];
        	 $ldt = $leaveDisplay['color'] == 'none' ? '' : $x;
    ?>
    <td class="alignLeft  alignTop" <?php echo $bgColor ?> nowrap ><div style="color: white; top: 5px" class="alignCenter"><?php echo $ldt ?></div></td>
    <?php
        endfor; 
    ?>
    <td class="alignCenter alignTop"  >&nbsp;</td        
</tr>
<?php $SN++; $rowCount++; endforeach ?>
</tbody></table>

<?php 
function LeaveDisplay($empLeave)
{
	$display = array('color'=>'none', 'remark'=>0);
	if ($empLeave):
		switch($empLeave->getHrLeaveId() ):
			case 1: //MEDICAL LEAVE
				$display['color'] = 'bgcolor=green';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
			case 2: //ANNUAL LEAVE
				$display['color'] = 'bgcolor=blue';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
			case 6:	//LEAVE WITHOUTPAY
				$display['color'] = 'bgcolor=orange';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
			case 13: //HOSPITALIZATION
				$display['color'] = 'bgcolor=brown';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
			case 8:	//NS
				$display['color'] = 'bgcolor=brown';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
			default: 
				$display['color'] = 'bgcolor=red';
				$display['remark'] = $empLeave->getHrLeaveId();
				break;
		endswitch;
	endif;
	return $display;
}

?>