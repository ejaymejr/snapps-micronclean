<?php use_helper('Validation', 'Javascript') ?>
<script>
  $(function(){
//    $("select").searchable({
//		maxMultiMatch: 10
//	});
    
  });
</script>
<?php 
	$dsabledText = "<span class='negative'>disabled</span>";
	$loadUrl = $_SERVER['SCRIPT_NAME'] .'/' ;
	echo javascript_tag ("
			$(document).ready(function(){
				var params = 'new_customer, new_garment, new_color, add=add me';
				$('#load_basic').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: params, update: '#result'}, doAjax);
				$('#customer').on('change', {loadUrl: '".$loadUrl . 'photo/refreshGarmentInformation' . "' , param: 'customer', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_customer').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'new_customer,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_garment').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_garment,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_color').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_color,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_size').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_size,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_reason').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_reason,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_department').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_department,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#save_new_shift').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_shift,garment,color,size,reason,department,shift,garment_action', update: '#DIVGarmentInformation'}, doAjax);
				$('#shift').on('change', {loadUrl: '".$loadUrl . 'photo/ajaxRefreshEmailSendTo' . "' , param: 'customer,department,shift', update: '#DIVEmailSending'}, doAjax);
				$('#department').on('change', {loadUrl: '".$loadUrl . 'photo/ajaxRefreshEmailSendTo' . "' , param: 'customer,department,shift', update: '#DIVEmailSending'}, doAjax);
			});
		");
	if (! $sf_params->get('id')):
		$dsabledText = "";
	endif;
?>
<?php

// var_dump($_SERVER);
// exit();
$hidden = 'type=hidden';
// $customerList = HrLib::GetMercuryCustomerList();
// $colorList = HrLib::GetMercuryColorList();
// $garmentList = HrLib::GetMercuryTypeList();
// $sizeList = HrLib::GetMercurySizeList();
// $reasonList = HrLib::GetRejectAttrByCompany();
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table bordered">
	<tr >
        <td colspan="10" class="bg-darkOrange dataGridTableHeaderColumn alignCenter alignMiddle" nowrap><h4 style="color: #fff;">GARMENT INFORMATION</h4></td>
    </tr>
	<tr class="dataGridRowOdd">
        <td width="20%" class="bg-clearBlue alignRight alignMiddle" nowrap>Customer</td>
        <td width="30%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <div class="input-control select">  
        <?php 
	        
        	if (! $sf_params->get('customer')):
        		echo select_tag('customer', options_for_select($customerList, $sf_params->get('customer') )
					, array('id'=>'customer') ) ;
        	else:
        		echo $sf_params->get('customer');
        		echo input_tag('customer', $sf_params->get('customer'), $hidden);
        	endif;
        ?>
        </div>
        </td>
         <td width="15%" class="bg-clearBlue alignRight alignMiddle" nowrap>New Customer</td>
         <td width="35%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <div class="span2 input-control text">
        <?php 
        	echo input_tag('new_customer', $sf_params->get('new_customer'), 'size=15');
        	echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_customer')  ) ;
        	//echo select_tag('color', options_for_select($colorList, $sf_params->get('color') ) ) ;
        ?>
        </div>
        </td>
    </tr>
	<tr  class="dataGridRowOdd">
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>Garment Type</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <div class="input-control select"> 
        <?php 
        	if (! $sf_params->get('id')):
        		echo select_tag('garment', options_for_select($garmentList, $sf_params->get('garment') ) ) ;
        	else:
        		echo $sf_params->get('garment');
        		echo input_tag('garment', $sf_params->get('garment'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </td>
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Type</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <div class="span2 input-control text">
        <?php 
        	//echo $sf_params->get('size');
        	echo input_tag('new_garment', $sf_params->get('new_garment'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_garment')  );
        	endif;
        	?>	
        </div>
        </td>
    </tr>
    <tr  class="dataGridRowOdd">
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>Color</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <div class="input-control select"> 
        <?php 
        	if (! $sf_params->get('id')):
        		echo select_tag('color', options_for_select($colorList, $sf_params->get('color') ) ) ;
        	else:
        		echo $sf_params->get('color');
        		echo input_tag('color', $sf_params->get('color'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </td>
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Color</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <div class="span2 input-control text">
        <?php 
        	echo input_tag('new_color', $sf_params->get('new_color'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_color')  );
        	endif;
        	?>
        </div>
        </td>
    </tr>
    
    <tr  class="dataGridRowOdd">
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>Size</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <div class="input-control select"> 
        <?php 
        	
        	if (! $sf_params->get('id')):
        		echo select_tag('size', options_for_select($sizeList, $sf_params->get('size') ) ) ;
        	else:
        		echo $sf_params->get('size');
        		echo input_tag('size', $sf_params->get('size'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </td>
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Size</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <div class="span2 input-control text">
        <?php 
        	//echo $sf_params->get('size');
        	echo input_tag('new_size', $sf_params->get('new_size'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_size')  );
        	endif;
        	?>
        </div>
        </td>
    </tr>
    <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Reject Type</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVRejectType">
         <div class="input-control select"> 
        <?php 
        	if (! $sf_params->get('id')):
        		echo select_tag('reason', options_for_select($reasonList, $sf_params->get('reason') ) ) ;
        	else:
        		echo $sf_params->get('reason');
        		echo input_tag('reason', $sf_params->get('reason'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Reason</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <div class="span2 input-control text">
       <?php 
        	//echo $sf_params->get('size');
        	echo input_tag('new_reason', $sf_params->get('new_reason'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_reason')  );
        	endif;
        	?>
        	</div>
        </td>
    </tr>
        <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Department</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVDepartment">
         <div class="input-control select"> 
        <?php
        	if (true): //(! $sf_params->get('id')):
        		echo select_tag('department', options_for_select($deptList, $sf_params->get('department') ) ) ;
        	else:
        		echo $sf_params->get('department');
        		echo input_tag('department', $sf_params->get('department'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Department</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <div class="span2 input-control text">
       <?php 
        	//echo $sf_params->get('size');
        	echo input_tag('new_department', $sf_params->get('new_department'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_department')  );
        	endif;
        	?>
        	</div>
        </td>
    </tr>
    </tr>
        <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Shift</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVShift">
         <div class="input-control select"> 
        <?php 
        	if (! $sf_params->get('id')):
        		echo select_tag('shift', options_for_select($shiftList, $sf_params->get('shift') ) ) ;
        	else:
        		echo $sf_params->get('shift');
        		echo input_tag('shift', $sf_params->get('shift'), 'size=15 type=hidden');
        	endif;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Shift</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <div class="span2 input-control text">
       <?php 
        	//echo $sf_params->get('size');
        	echo input_tag('new_shift', $sf_params->get('new_shift'), 'size=15');
        	if ($sf_params->get('customer')):
        		echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_shift')  );
        	endif;
        	?>
        	</div>
        </td>
    </tr>
    <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Times Wash</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVRejectType">
        <?php 
        	echo $sf_params->get('no_of_times_wash');
        	echo input_tag('no_of_times_wash', $sf_params->get('no_of_times_wash'), $hidden);
        ?>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap></td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        	<button type="submit" name="upload" class="default" id="garment_info" ><i class="icon-floppy"></i> Save Uploaded Photo </button>
        </td>
    </tr> 
        <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Action</td>
         <td colspan="3" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <?php echo input_tag('garment_action', $sf_params->get('garment_action'), $hidden); ?>
         <div id="DIVRejectType">
         
         <div class="input-control radio">
			<label>
			<input name="rejectAction" type="radio" value="REPAIRABLE"  <?php echo ($sf_params->get('garment_action') == 'REPAIRABLE' ? 'checked' : '')  ?> >
			<span class="check"></span>
				REPAIRABLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label>
		 </div>
		 
		 <div class="input-control radio">
			<label>
			<input name="rejectAction" type="radio" value="NON-REPAIRABLE" <?php echo ($sf_params->get('garment_action') == 'NON-REPAIRABLE' ? 'checked' : '')  ?> >
			<?php //echo ($sf_params->get('garment_action') == 'scrapAction' ? 'checked=true' : '')  ?>
			<span class="check"></span>
				NON-REPAIRABLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label>
		 </div>
		 <div class="input-control radio">
			<label>
			<input name="rejectAction" type="radio" value="NO ACTION" <?php echo ($sf_params->get('garment_action') == 'NO ACTION' ? 'checked' : '')  ?> >
			<?php //echo ($sf_params->get('garment_action') == 'noAction' ? 'checked=true' : '')  ?>
			<span class="check"></span>
				NO ACTION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label>
		 </div>         	       
    </tr>    
</table>