<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php 
$eventArgumentList = '';
foreach ($pager->getResults() as $cat) {    
    $eventArgs = "{'id':'" . escape_javascript($cat->getIndexNo()) . "'," .
                "'name':'" . escape_javascript($cat->getVendor()) . "'," .
                "'currency':'" . escape_javascript($cat->getDefaultCurrency()) . "'," .
                "'currency_rate':'" . escape_javascript(snappsCurrencyRatePeer::GetRate($cat->getDefaultCurrency())) . "'," .
                "'terms':'" . escape_javascript($cat->getDefaultTerms()) . "'}";    
    $eventArgumentList .= "\nEventVendorData['" . $cat->getIndexNo() . "'] = " . $eventArgs . ";";
}


echo javascript_tag($eventArgumentList);
?>



<?php 
//var_dump($pager);
$SN = 1;
$rowCount = 0;

$SN = $pager->getFirstIndice();
foreach ($pager->getResults() as $cat): ?>
<?php
$recordID = escape_javascript($cat->getIndexNo());
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'dgr_vendor_' . $cat->getIndexNo();  
?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    alt="click to select"
    title="click to select"
    style="cursor:pointer;"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);EventVendorSelected.fire(EventVendorData[<?php echo $recordID; ?>]);"
    >
    <td><?php echo $SN; ?></td>
    <td nowrap><?php echo $cat->getVendor() ?></td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>
