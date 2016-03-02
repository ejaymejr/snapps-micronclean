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


$desc = $record->getEmailAddress();

$fileDetail = FileDetailPeer::retrieveByPK($record->getFileDetailId());
if ($fileDetail):
	$fileName = $fileDetail->getFileName();
endif;

$checkBoxID = 'gridCheckBox_item_' . $record->getId();
?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    >
    <td class="alignCenter alignTop"  nowrap>
        <?php //echo $deleteLink .' | ' . $editLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getEmailDate(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $fileName ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getEmailAddress() ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getModifiedBy() ?></td>
    <td class="alignLeft alignTop" nowrap >&nbsp;</td>
</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>

<?php 
// 	foreach($garmentCounter as $garment=>$cntr):
// 		echo "<div><span class='tk-dred'><h2>".$garment . " : " . $cntr . "</h2></span></div>";
// 	endforeach;
?>
