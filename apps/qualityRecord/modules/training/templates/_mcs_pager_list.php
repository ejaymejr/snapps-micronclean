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

$desc = $record->getName() . ' - ' .$record->getDateFrom();
$editLink = 'Edit';
$deleteLink = 'Delete';
$editLink = link_to('Edit', 'training/mcsTrainingEdit?id=' . $record->getId());
  
$deleteLink = link_to('Delete', 'training/mcsTrainingDelete?id=' . $record->getId(),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?')); 

$checkBoxID = 'gridCheckBox_item_' . $record->getId();

$trEval = link_to('Evaluation', 'training/mcsTrainingEval?id=' . $record->getId());

//$certLink = link_to('Certificate', 'training/acroNanoCertificatePDF?id=' . $record->getId());

$certLink = link_to(image_tag('pdfFile.jpg'), 'training/mcsCertificatePDF?id=' . $record->getId());

$eData = HrEmployeeMasterPeer::GetEmployeeData( $record->getEmployeeNo());
//var_dump($eData);
//exit();
$edate = '';
if ($eData): 
	if ($eData->getCommenceDate()):
		$edate = DateUtils::DUFormat('Y-m-d', $eData->getCommenceDate());
	endif;
endif;

//$edate = $record->getEmployeeNo();

?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php echo $editLink . ' | ' . $deleteLink . ' | ' . $trEval; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getDateFrom() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getDateTo() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getEmployeeNo() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getName() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getCompany() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getVerify() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $record->getNoHrs() ?></td>
    <td class="alignCenter alignTop" nowrap > <?php echo $certLink; ?></td>
     <td class="alignCenter alignTop" nowrap > <?php echo $edate ; ?></td>
        <td width = "20%" class="alignCenter alignTop" nowrap ><?php
//         $link = "http://orion.micronclean/cityhall/hr/hrLog.php?modBy=".$record->getModifiedBy().'&modDt='.$record->getDateModified().'&crBy='.$record->getCreatedBy().'&crDt='.$record->getDateCreated();
//         echo ("
//             <a href='' onClick=\"myRef = window.open(
//             '".$link."'
//             ,'mywin',
//             'left=500,top=200,width=500,height=160,toolbar=0,resizable=0, status=0, location=0, directories=0');
//             myRef.focus()\">Show Log</a>
//             ");
    ?>  
</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>
