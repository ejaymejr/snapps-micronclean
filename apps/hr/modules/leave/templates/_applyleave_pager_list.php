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

?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php echo $editLink . ' | ' . $deleteLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getEmployeeNo(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $desc ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getLeaveType() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getReasonLeave() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getInclusiveDateFrom() ?></td>    
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getInclusiveDateTo() ?></td>
    <td class="alignRight alignTop" nowrap ><?php echo $record->getNoDays() ?></td>        
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getHalfDay() ?></td>    
    <td width = "20%" class="alignCenter alignTop" nowrap >    <?php
        $link = "http://orion.micronclean/cityhall/hr/hrLog.php?modBy=".$record->getModifiedBy().'&modDt='.$record->getDateModified().'&crBy='.$record->getCreatedBy().'&crDt='.$record->getDateCreated();
        echo ("
            <a href='' onClick=\"myRef = window.open(
            '".$link."'
            ,'mywin',
            'left=500,top=200,width=500,height=160,toolbar=0,resizable=0, status=0, location=0, directories=0');
            myRef.focus()\">Show Log</a>
            ");
    ?>  
</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>


<tr bgcolor="#F9EC59" >
    <td colspan="4" class="alignCenter alignTop" nowrap>SUMMARY</td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Annual Leave ='.$al ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Medical Leave ='.$ml ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Unpaid Leave ='.$ul ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Hospitalization ='.$hl ?></td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Others ='.$ol ?></td>
    <td colspan="4" class="alignCenter alignTop" nowrap>&nbsp</td>
</tr>
