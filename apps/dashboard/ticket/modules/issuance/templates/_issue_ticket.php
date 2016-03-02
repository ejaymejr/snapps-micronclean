<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<?php 
	
	$colors = array(' bg-color-greenDark',' bg-color-orangeDark',' bg-color-blueDark',' bg-color-pinkDark');
	$key = rand(0,3);
	$valueOpt = TicketDesignDetailPeer::GetValueOptById($detail->getId());
	$compOpt = TicketDesignDetailPeer::GetComponentOptByID($detail->getId());
	
?>

<?php foreach($compOpt as $component):?>	
<?php foreach($valueOpt as $size):?>
<?php 
	$inputID = TicketDeliveryRecordPeer::GenerateInputID($detail->getId(), $detail->getGarment(), $component, $size); 
	$totalID = 'total'.$inputID;
	$prevID = 'prev'.$inputID;
	$valueID = 'value'.$inputID;
	$valueID = 'value'.$inputID;
	$DIVPrevValue = 'DIVPreviousValue'.$inputID;
?>
	<div class="tile  double-vertical double ">
		<div class="tile-content <?php echo $colors[$key]; ?> ">
			<div id="DIVQuantityTitle<?php echo $inputID ?>" class="DIVQuantityGarment" ' style="color:#FFD8B1; font-size:30px "' >
				<?php 
					echo $detail->getGarment() ;
				?>
			</div>
			<div id="DIVQuantityTitle<?php echo $inputID ?>" class="DIVQuantityColor" ' style="color:#fff; font-size:20px"' >
				<?php 
					echo $component;
				?>
			</div>
			<div id="DIVQuantityTitle<?php echo $inputID ?>" class="DIVQuantitySize" ' style="color:#fff; font-size:20px"' >
				<?php 
					echo $size ;
				?>
			</div>
			<div id="DIVQuantityCount<?php echo $inputID ?>" class="DIVQuantityCount" style="font-size: 100px;"><?php echo $sf_params->get($totalID, 0) ?></div>
			<div id="DIVQuantityInput<?php echo $inputID ?>" class="DIVQuantityInput">
				<?php 
				echo input_tag($totalID, $sf_params->get($totalID, 0),'size=5 style=color: #000 type=hidden') ;
				echo input_tag($prevID, 0,'size=5 style=color: #000 type=hidden');
				echo input_tag($inputID, $sf_params->get($inputID, 0), 'style="color:#000; font-size:50px" type="tel" size="3" onblur=appendQuantity("'.$inputID.'") onclick="appendQuantity("'.$inputID.'")"' );
				?>
			</div>
			<div class="brand">
				<span class="name"><i class="icon-box-remove"></i></span>
				<div class="badge bg-color-orange" id="<?php echo $DIVPrevValue ; ?>">0</div>
			</div>
		</div>
	</div>
<?php endforeach;?>
<!--                 <div class="tile icon" id="positionedDialog"> -->
<!--                     <div class="tile-content bg-color-green"><i class="icon-save"></i></div> -->
<!--                     <div class="brand"> -->
<!--                         <span class="name">Save Entry</span> -->
<!--                     </div> -->
<!--                 </div>	 -->
<?php endforeach;?>
	