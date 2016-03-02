<?php use_helper('Text', 'Number', 'Form', 'Javascript', 'PagerNavigation'); ?>


<?php 
//var_dump($pager);
$SN = 1;
$rowCount = 0;
$al = 0;
$ml = 0;
$ul = 0;
$hl = 0;
$ol = 0;

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
$editLink = link_to('Edit', 'leave/leaveApplyEdit?id=' . $record->getId());
  
$deleteLink = link_to('Delete', 'leave/leaveApplyDelete?id=' . $record->getId(),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?')); 


$checkBoxID = 'gridCheckBox_item_' . $record->getId();

switch(strtolower($record->getLeaveType()))
{
    case 'annual leave':
        $al += $record->getNoDays();
        break;
    case 'medical leave':
        $ml += $record->getNoDays();
        break;
    case 'leave without pay':
        $ul += $record->getNoDays();
        break;
    case 'Hospitalization Leave':
        $hl += $record->getNoDays();
        break;
    case 'others(basic only)':
        $ol += $record->getNoDays();
        break;
}

$action = '';
$deleteLink = '';
$approvLink = '';
$alertdesc = $desc . "\n" .$record->getReasonLeave() . ' ( ' . $record->getNoDays() .' day )' ;

if ($record->getApproved() != 'OK') {
	$approvLink = link_to('Approve', 'leave/leaveApprove?id=' . $record->getId() . '&cDate=' . $sf_params->get('cMonth'),
                    array('confirm' =>  $alertdesc . "\nMark this as APPROVED?", 'class'=>'button bg-color-greenDark fg-color-white big'));
		
	$denyLink = link_to('deny', 'leave/leaveDeny?id=' . $record->getId(). '&cDate=' . $sf_params->get('cMonth'),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to mark Deny this record?'));
                    
    $action = $approvLink ;                
}else{
	$action = ''; //$deleteLink;
}
$verified = HrEmployeeLeavePeer::GetNameToolTipVerified($record->getId());
$approved = HrEmployeeLeavePeer::GetNameToolTipApproved($record->getId());
?>
<tr >
    <td class="alignCenter " nowrap ><?php echo $action; ?></td>
    <td class="alignCenter "  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft " nowrap ><?php echo $desc ?></td>
    <td class="alignLeft " nowrap ><?php echo $record->getLeaveType() ?></td>
    <td class="alignLeft " nowrap ><?php echo DateUtils::DUFormat('Y-m-d', $record->getInclusiveDateFrom()) ?></td>    
    <td class="alignLeft " nowrap ><?php echo DateUtils::DUFormat('Y-m-d', $record->getInclusiveDateTo()) ?></td>
    <td class="alignRight " nowrap ><?php echo $record->getNoDays() ?></td>  
    <td class="alignRight " nowrap ></td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>
<tr class="bg-color-yellow" >
    <td colspan="3" class="alignCenter alignTop" nowrap>SUMMARY</td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Annual Leave ='.$al ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Medical Leave ='.$ml ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Unpaid Leave ='.$ul ?></td>
    <td colspan="4" class="alignCenter alignTop" nowrap>&nbsp</td>
</tr>
