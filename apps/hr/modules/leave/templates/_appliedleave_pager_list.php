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
$tot = 0;

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
$editLink = link_to('Edit', 'leave/leaveApplyEdit?id=' . $record->getId(),'target=_BLANK');
  
$deleteLink = link_to('Delete', 'leave/leaveApplyDelete?id=' . $record->getId(),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?')); 


$checkBoxID = 'gridCheckBox_item_' . $record->getId();

$tot = $tot + $record->getNoDays();


?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php //echo $editLink ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getLeaveType(); ?></td>  
    <td class="alignLeft alignTop" nowrap ><?php echo DateUtils::DUFormat('Y-m-d', $record->getInclusiveDateFrom()) ?></td>    
    <td class="alignLeft alignTop" nowrap ><?php echo DateUtils::DUFormat('Y-m-d', $record->getInclusiveDateTo() ) ?></td>
    <td class="alignRight alignTop" nowrap ><?php echo $record->getNoDays() ?></td>        
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getHalfDay() ?></td>
    <td class="alignLeft alignTop" nowrap > </td>    
</tr>
<?php $SN++; $rowCount++; endforeach ?>


<tr bgcolor="#F9EC59" >
    <td colspan="4" class="alignCenter alignTop" nowrap>SUMMARY</td>
    <td class="alignCenter alignTop" nowrap><?php echo 'Total ='.$tot ?></td>
    <td class="alignLeft alignTop" colspan="3" nowrap ></td>
</tr>
