<?php use_helper('Validation', 'Javascript') ?>
<?php 
	$loadUrl = $_SERVER['SCRIPT_NAME'] .'/' ;
	echo javascript_tag ("
			$(document).ready(function(){
				$('#customer_list').click({loadUrl: '".$loadUrl . 'photo/ajaxSearchReject' . "' , param: 'customer_list', update: '#DIVSearchReject'}, doAjax);
				$('#check_all_customer').click(function(){
					$('#customer_list option').prop('selected', $('#check_all_customer').is(':checked'));
				});
				$('#check_all_department').click(function(){
					$('#department_list option').prop('selected', $('#check_all_department').is(':checked'));
				});
				$('#check_all_shift').click(function(){
					$('#shift_list option').prop('selected', $('#check_all_shift').is(':checked'));
				});
				$('#shift').on('change', {loadUrl: '".$loadUrl . 'photo/ajaxRefreshEmailSendTo' . "' , param: 'customer,department,shift', update: '#DIVEmailSending'}, doAjax);
			});
		");
?>
<?php $size = 8; ?>

	<div id="DIVSearchReject">
	<div class="selectionStacked">
		<div class="input-control select span4">
			<h3 class="fg-darkOrange size3">CUSTOMER LIST</h3>
		    <?php echo select_tag('customer_list', options_for_select(PhotoDetailPeer::GetAllCustomerList(), $sf_params->get('customer_list')), array('multiple' => true, 'size'=>$size) ) ?>
		</div>
		<div class="input-control checkbox " > 
		<label>
			<?php echo checkbox_tag('check_all_customer', '1', false )?>
			<span class="check "></span>Check All Customer
		</label>
		</div>
	</div>
	
	
	<div class="selectionStacked">
	<div class="input-control select span4">
		<h3 class="fg-darkOrange">DEPARTMENT LIST</h3>
	    <?php
	    	//$deptList = RejectDepartmentAttrPeer::GetDepartmentByCustomer();
	    	echo select_tag('department_list', options_for_select($deptList,''), array('multiple' => true, 'size'=>$size) ) 
	    ?>
	</div>
		<div class="input-control checkbox" > 
		<label>
			<?php echo checkbox_tag('check_all_department', '1', false )?>
			<span class="check"></span>Check All Department
		</label>
		</div>
	</div>
	<div class="selectionStacked">
	<div class="input-control select span4">
		<h3 class="fg-darkOrange">SHIFT LIST</h3>
	    <?php
	    	//$shiftList = RejectShiftAttrPeer::GetShiftByCustomer();
	    	echo select_tag('shift_list', options_for_select($shiftList,''), array('multiple' => true, 'size'=>$size) ) 
	    ?>
	</div>
		<div class="input-control checkbox" > 
		<label>
			<?php echo checkbox_tag('check_all_shift', '1', false )?>
			<span class="check"></span>Check All Shift
		</label>
		</div>
	</div>
	<div class="selectionStackedButton">
		<button class="primary"> Apply Filter </button>
	</div>
	</div>
</div>
