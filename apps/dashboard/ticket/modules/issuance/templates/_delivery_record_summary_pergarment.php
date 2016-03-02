<?php use_helper('Validation', 'Javascript') ?>
<?php 
		$headerID = $deliveryRecordData->getTicketDesignHeaderId();
		$ticketID = $deliveryRecordData->getDeliveryTicketId();
		$sizes = TicketDesignDetailPeer::GetValueByHeaderIDandGarment($headerID, $garment);
 		$colors = TicketDesignDetailPeer::GetComponentByHeaderIDandGarment($headerID, $garment);
 		$rowCount = sizeof($sizes);
 		$colorTotal = array();
// 		$qtyList = array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5');
// 		var_dump($sizes);
// 		exit();
?>	
	<div class="span10" > 
		<table cellspacing="2" cellpadding="4" border="0" style="width:100%;" class="striped bordered hovered " >
	    <tbody>
	    <tr class="dataGridTableHeader" style="color: #000">
	        <td height="23" colspan="50" class="dataGridTableHeaderColumn alignCenter"><?php echo $garment?></td>
	    </tr>
	    <tr class="SearchHeaderBg">
	        <td height="23" width="50" class="dataGridTableHeaderColumn alignCenter">Seq</td>
	        <td width="100" class="dataGridTableHeaderColumn alignCenter">Color</td>
	        <?php foreach($sizes as $size): ?>
	        	<td width="100" nowrap="" class="alignCenter"><?php echo $size ?></td>
	        	<?php $colorTotal[$size] = 0 ;?>
	        <?php endforeach;?>
	        <td width="100" class="alignCenter alignTop"  >Total</td>
	    </tr>  
	    <?php 
	   		$grandTotal = 0;
	    	$rowCount = 1;
	    	$totalPerColor = 0;
	    	foreach($colors as $color): 
	    	$rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
	    	$rowID = 'sq_' . $rowCount;  
	    	$totalPerColor = 0;
	    ?>
	    <tr class="<?=$rowClass?> "
		    id="<?=$rowID?>"
		    onMouseOver="rowHovered('<?=$rowID?>');"
		    onMouseOut="rowUnhovered('<?=$rowID?>');"
		    onMouseDown="rowClicked('<?=$rowID?>', null);"
		    >
		    <td height="22px" class="alignCenter alignTop"  ><?=$rowCount?>&nbsp;</td>
		    <td class="alignCenter " nowrap ><?php echo  $color ?></td>
		    <?php 
		    
		    
 		    foreach($sizes as $size):
 		    	$tagTotal = 0;
 		    	$tDeliveryRecord = TicketDeliveryRecordPeer::GetQuantityByGarmentComponentValueTicketID($garment, $color, $size, $ticketID);
 		    	$tagTotal = $tDeliveryRecord ;
				echo '<td  ><div class="alignCenter">';
				echo $tagTotal;
				echo '</div></td>';
				$totalPerColor += $tagTotal;
				$colorTotal[$size] += $tagTotal;
 		    endforeach;
		    
		    ?>
		    <td class="alignCenter alignTop "  ><?php echo $totalPerColor;  ?></td>
		</tr>
		
	    <?php $rowCount++; endforeach;  ?>
	    	<tr class="bg-color-yellow">
	        <td height="23" width="50" class="dataGridTableHeaderColumn alignCenter"></td>
	        <td class="dataGridTableHeaderColumn alignCenter">TOTAL</td>
	        <?php foreach($sizes as $size): ?>
	        <?php $grandTotal += $colorTotal[$size]; ?>
	        <td width="100" nowrap="" class="alignCenter"><?php echo $colorTotal[$size] ?></td>
	        <?php endforeach;?>
	        <td class="alignCenter  "  ><?php echo $grandTotal; ?></td>
	    </tr>
	    </tbody>
	    </table>
	</div>