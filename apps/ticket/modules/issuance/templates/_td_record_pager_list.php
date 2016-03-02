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
$editLink = link_to('Edit','issuance/ticketEdit?ticketID=' . $record->getDeliveryTicketId());
$deleteLink = link_to('Summary','issuance/ticketSummary?id=' . $record->getId());
$checkBoxID = 'gridCheckBox_item_' . $record->getId();
?>
<tr >
    <td class="alignCenter alignTop"  nowrap>
        <?php echo $editLink . ' | ' . $deleteLink; ?>
    </td>
    <td class="alignCenter alignTop"  ><?=$SN?>&nbsp;</td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getTransDate(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getTicketDesignHeaderId(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getDeliveryTicketId(); ?></td>
    <td class="alignLeft alignTop" nowrap ><?php echo $record->getModifiedBy(); ?></td>
    <td width = "20%" class="alignCenter alignTop" nowrap >&nbsp;</td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>
