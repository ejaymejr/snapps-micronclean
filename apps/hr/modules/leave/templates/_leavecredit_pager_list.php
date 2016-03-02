<?php use_helper('Text', 'Number', 'Form', 'Javascript', 'PagerNavigation'); ?>


<?php 
//var_dump($pager);
$SN = 1;
$rowCount = 0;

$SN = $pager->getFirstIndice();
foreach ($pager->getResults() as $record): ?>
<?php
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'sq_' . $record->getId();  

if ($sf_params->get('hIDs') && is_array($sf_params->get('hIDs')) && in_array($record->getId(), $sf_params->get('hIDs'))) {
    $rowClass .= ' highlightRow';
}
$desc = $record->getName();
$editLink = 'Edit';
$deleteLink = 'Delete';
$editLink = link_to('Edit', 'leave/leaveCreditEdit?id=' . $record->getId());
  
$deleteLink = link_to('Delete', 'leave/leaveCreditDelete?id=' . $record->getId(),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?')); 


$checkBoxID = 'gridCheckBox_item_' . $record->getId();

	$jsGetLeaveInfo = "'employee_no=".$record->getEmployeeNo()."'";	
	
	$ajaxGetLeave = array(
			'url'		=>'leave/leaveSearch',
			'with'		=> $jsGetLeaveInfo,
            'update' 	=> 'DIVLeaveSearch',
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	);

//	var_dump($record);
//	exit();
	$consumed = link_to($record->getConsumed(), 'leave/leaveCreditSearch', array('onclick'=>remote_function($ajaxGetLeave) . ';return false;') );

	$lcId = HrIndividualLeavePeer::GetDatabyEmployeeNoLeaveTypeYear($record->getEmployeeNo(), $record->getLeaveType(), $record->getFiscalYear());
	$id = $lcId? $lcId->getId() : 0;
	
	if ( $id ) {
		$lc = link_to($record->getCredits(), 'maintenance/individualLeaveEdit?id=' . $id,
	                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to Change Leave Allocation?','target'=>'_blank'));
	}else{
		$lID = HrLeavePeer::GetIDbyLeaveType($record->getLeaveType());
		$lc = link_to($record->getCredits(), 'maintenance/individualLeaveSet?empNo='. $record->getEmployeeNo().'&leave_id=' . $lID .'&ent='.$record->getCredits(),'target=_blank' );	                    
	}
	
	$empData = HrEmployeePeer::GetOptimizedDatabyEmployeeNo($record->getEmployeeNo(), array('commence_date'));
	$comDate = $empData? $empData->get('COMMENCE_DATE') : 'No Record';

?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php //echo $editLink . ' | ' . $deleteLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap > <?php echo $record->getEmployeeNo(); ?></td>
    <td class="alignLeft alignTop" nowrap > <?php echo $desc ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $comDate ?></td>
    <td class="alignLeft alignTop" nowrap > <?php echo $record->getLeaveType() ?></td>
    <td class="alignCenter alignTop tk-yell" nowrap><?php echo intval($record->getFiscalYear()) - 1 ?></td>
    <td class="alignRight alignTop tk-yell" nowrap ><?php echo $record->getPreviousBalance() ?></td>
	<td class="alignCenter alignTop tk-oran" nowrap><?php echo $record->getFiscalYear() ?></td>        
    <td class="alignRight alignTop tk-oran" nowrap ><?php echo $lc ?></td>
    <td class="alignRight alignTop tk-gree" nowrap ><?php echo $consumed ?></td>    
    <td class="alignRight alignTop tk-gree" nowrap ><?php echo $record->getCredits() - $record->getConsumed() ?></td>    
        
    <td width = "20%" class="alignCenter alignTop" nowrap >    <?php
        $link = "http://orion.micronclean/cityhall/hr/hrLog.php?modBy=".$record->getModifiedBy().'&modDt='.$record->getDateModified().'&crBy='.$record->getCreatedBy().'&crDt='.$record->getDateCreated();
        echo ("
            <a href='' onClick=\"myRef = window.open(
            '".$link."'
            ,'mywin',
            'left=500,top=200,width=500,height=160,toolbar=0,resizable=0, status=0, location=0, directories=0');
            myRef.focus()\">Show Log</a>
            ");
        
//        echo input_tag('employee_no', $record->getEmployeeNo(), 'type="hidden"');
//        echo input_tag('fiscal', sfConfig::get('fiscal_year'), 'type="hidden"');
    ?>  
    
</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>