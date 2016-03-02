

<div id="DIVdataGridContainerCategory" class="defaultGrid dataGridContainer " style="width:100%; margin-left:100px;">
    <div class="dataGridContent LightHeader">    
    
<table class="dataGridTable" width="300" cellpadding="4" cellspacing="2" border="0">
<tr>
    <td class="dataGridTableHeaderColumn" width="100"><b>Month</b></td>
    <td class="dataGridTableHeaderColumn alignRight"><b>Handling Cost</b></td>
</tr>
<?php $rowCount = 0; $total = 0; foreach ($monthlyCosts as $yyyymm => $tmp) : ?>
<?php
$total += $tmp['totalCost'];
$rowCount++;
$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
?>
<tr class="<?php echo $rowClass ?>">
    <td nowrap><?php echo $tmp['monthNice'] ?></td>
    <td nowrap class="alignRight"><?php echo number_format($tmp['totalCost'], 2) ?></td>
</tr>
<?php endforeach; ?>

<?php 
$average = $total / $rowCount;
?>
<tr>
    <td class="dataGridTableHeaderColumn" width="100"><b>Average</b></td>
    <td class="dataGridTableHeaderColumn alignRight"><b><?php echo number_format($average, 2) ?></b></td>
</tr>
<tr>
    <td class="dataGridTableHeaderColumn" width="100"><b>Annual Estimate</b></td>
    <td class="dataGridTableHeaderColumn alignRight"><b><?php echo number_format(round($average * 12, -3), 2) ?></b></td>
</tr>

</table>


</div>
</div>








