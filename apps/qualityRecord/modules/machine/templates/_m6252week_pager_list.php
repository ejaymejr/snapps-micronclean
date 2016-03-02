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

$desc = $record->getTransDate() . ' - ' .$record->getMachineNo();
$editLink = 'Edit';
$deleteLink = 'Delete';
$editLink = link_to('Edit', 'machine/weekly6252Edit?id=' . $record->getId());

$deleteLink = link_to('Delete', 'machine/weekly6252Delete?id=' . $record->getId(),
array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?'));

$checkBoxID = 'gridCheckBox_item_' . $record->getId();


?>
<tr class="<?=$rowClass?>" id="<?=$rowID?>"
	onMouseOver="rowHovered('<?=$rowID?>');"
	onMouseOut="rowUnhovered('<?=$rowID?>');"
	onMouseDown="rowClicked('<?=$rowID?>', null);">
	<td class="alignCenter alignTop" nowrap><?php echo $editLink . ' | ' . $deleteLink; ?>
	</td>
	<td class="alignCenter alignTop"><?=$SN?>&nbsp;</td>
	<td class="alignCenter alignTop" nowrap><?php echo $record->getTransDate() ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo $record->getMachineNo() ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getSensorDiagnostic()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getActuatorDiagnostic()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getBasketInspect()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getChamberClean()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getNozzleInspect()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getPlumbingInspect()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getDriveRoller()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getDriveBelt()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo dispOk($record->getChainTention()) ?></td>
	<td class="alignCenter alignTop" nowrap><?php echo $record->getInitial() ?></td>
	<td width="20%" class="alignCenter alignTop" nowrap><?php
	$link = "http://orion.micronclean/cityhall/hr/hrLog.php?modBy=".$record->getModifiedBy().'&modDt='.$record->getDateModified().'&crBy='.$record->getCreatedBy().'&crDt='.$record->getDateCreated();
	echo ("
            <a href='' onClick=\"myRef = window.open(
            '".$link."'
            ,'mywin',
            'left=500,top=200,width=500,height=160,toolbar=0,resizable=0, status=0, location=0, directories=0');
            myRef.focus()\">Show Log</a>
            ");
	?></td>
</tr>
	<?php $SN++; $rowCount++; endforeach ?>

	<?php
	function dispOk($mess){
		return ($mess? 'OK' : '');
	}
	?>