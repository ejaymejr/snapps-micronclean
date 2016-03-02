<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<?php 
$eventArgumentList = '';
foreach ($pager->getResults() as $cat) {    
    $eventArgs = "{'id':'" . escape_javascript($cat->getId()) . "'," .
                "'name':'" . escape_javascript($cat->getCategory()) . "'," .
                "'account_no':'" . escape_javascript($cat->getAccountNo()). "'}";    
    $eventArgumentList .= "\nEventCategoryData['" . $cat->getId() . "'] = " . $eventArgs . ";";
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
$recordID = escape_javascript($cat->getId());
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
$rowID = 'dgr_cat_' . $cat->getId();  
?>
<tr class="<?=$rowClass?>"
    id="<?=$rowID?>"
    alt="click to select"
    title="click to select"
    style="cursor:pointer;"
    onMouseOver="rowHovered('<?=$rowID?>');"
    onMouseOut="rowUnhovered('<?=$rowID?>');"
    onMouseDown="rowClicked('<?=$rowID?>', null);EventCategorySelected.fire(EventCategoryData[<?php echo $recordID; ?>]);"
    >
    <td><?php echo $SN; ?></td>
    <td nowrap><?php echo $cat->getType() ?></td>
    <td nowrap><?php echo $cat->getAccountNo() ?></td>
    <td nowrap><?php echo $cat->getCategory() ?></td>
    <td nowrap><?php echo snappsCompanyPeer::GetNicknameByName($cat->getCompany()) ?></td>
</tr>
<?php $SN++; $rowCount++; endforeach ?>
