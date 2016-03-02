<?php use_helper('Text', 'Number', 'Form', 'Javascript', 'PagerNavigation'); ?>


<?php 
//var_dump($pager);
$SN = 1;
$rowCount = 0;
$SN = $pager->getFirstIndice();
$garmentCounter = array();
foreach ($pager->getResults() as $record): ?>
<?php
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'sq_' . $record->getId();  

if ($sf_params->get('hIDs') && is_array($sf_params->get('hIDs')) && in_array($record->getId(), $sf_params->get('hIDs'))) {
    $rowClass .= ' highlightRow';
}


if (! in_array($record->getGarment(), $garmentCounter )):
	$garmentCounter[$record->getGarment()] = 0;
endif;
$garmentCounter[$record->getGarment()] = $garmentCounter[$record->getGarment()] + 1;

$desc = $record->getName();
$editLink = 'Edit';
$deleteLink = 'Delete';
$editLink = link_to('Edit', 'photo/uploadEdit?id=' . $record->getId());
  
$deleteLink = link_to('Delete', 'photo/deletePhoto?id=' . $record->getId(),
                    array('confirm' => 'Record [ '.$SN.': - '.$desc . ' ]  Sure to delete this record?')); 


$checkBoxID = 'gridCheckBox_item_' . $record->getId();

?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php echo $editLink //$deleteLink .' | ' . $editLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo DateUtils::DUFormat('Y-m-d', $record->getTransDate() ); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getName() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getDepartment() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getShift() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getGarment() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getColor() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getSize() ?></td>
    
    <td class="alignCenter alignTop" nowrap >&nbsp;</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>

<?php 
// 	foreach($garmentCounter as $garment=>$cntr):
// 		echo "<div><span class='tk-dred'><h2>".$garment . " : " . $cntr . "</h2></span></div>";
// 	endforeach;
?>
