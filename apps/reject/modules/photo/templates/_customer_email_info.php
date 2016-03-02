<?php use_helper('Validation', 'Javascript') ?>
<?php 
	$dsabledText = "<span class='negative'>disabled</span>";
	$loadUrl = $_SERVER['SCRIPT_NAME'] .'/' ;
	echo javascript_tag ("
			$(document).ready(function(){
				$('#customer').on('change', {loadUrl: '".$loadUrl . 'photo/ajaxUpdateDepartmentShift' . "' , param: 'customer,cemail_address,cname,cwebsite', update: '#deptShiftPermission'}, doAjax);
			});	
		");	
	$dsabledText = "";
	
?>
<div class="grid">
<div class="row">
	<div class="span5">
	 
	 	<div class="panel" data-role="panel">
		<div class="panel-header bg-darkOrange fg-white">
		DEPARTMENT SHIFT 
		</div>
		<div class="panel-content">
		
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table bordered">
			<tr class="dataGridRowOdd">
		        <td width="20%" class="bg-clearBlue alignRight alignMiddle" nowrap><small><label>Customer</label></small></td>
		        <td width="30%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
		        <div class="input-control select">
		        <?php 
		        	
		        		echo select_tag('customer', options_for_select($customerList, $sf_params->get('customer') )
							, array('id'=>'customer', 'placeholder'=>"input") ) ;
						echo input_tag('id', $sf_params->get('id'), 'type=hidden');
		        ?>
		        </div>
		        </td>
	
		    </tr>
			<tr  class="dataGridRowOdd">
		         <td class="bg-clearBlue alignRight alignMiddle" nowrap><small><label>Name</label></small></td>
		         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVName">
		         <div class="input-control text">
		        <?php 
		        	//echo $sf_params->get('email_address');
		        	echo input_tag('cname', $sf_params->get('cname'), 'size="40"' ) ;
		        	//HTMLLib::CreateInputText('cname', $sf_params->get('cname'));
		        ?>
		        </div>
		        </div>
		        </td>
		    </tr>
			<tr  class="dataGridRowOdd">
		         <td class="bg-clearBlue alignRight alignMiddle" nowrap><small><label>Email Address</label></small></td>
		         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVEmailAddress">
		         <div class="input-control text">
		        <?php 
		        	//echo $sf_params->get('email_address');
		        	echo input_tag('cemail_address', $sf_params->get('cemail_address'), 'size="40"' ) ;
		        ?>
		        </div>
		        </div>
		        </td>
		    </tr>
			<tr  class="dataGridRowOdd">
		         <td class="bg-clearBlue alignRight alignMiddle" nowrap><small><label>Website</label></small></td>
		         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVWebsite">
		         <div class="input-control text">
		        <?php 
		        	//echo $sf_params->get('website');
		        	echo input_tag('cwebsite', $sf_params->get('cwebsite'), 'size="40"' ) ;
		        ?>
		        </div>
		        </div>
		        </td>
		    </tr>
		    <?php if (true): //(! $sf_params->get('id')): ?>
		    <tr  class="dataGridRowOdd">
		    	<td class="bg-clearBlue alignRight alignMiddle" nowrap></td>
		        <td class="alignLeft alignMiddle" nowrap>
		        	<button type="submit" class="default"><i class="icon-floppy"></i> Save Email Information</button>
		        </td>
		    </tr>
		    <?php endif;?>
		</table>
	</div>
	</div>
	
	</div>
	<div class="span5">
	   <div id="deptShiftPermission" >
         	    <?php include_partial('dept_shift_info', array('customerList'=> $customerList , 'shiftList'=>$shiftList, 'deptList'=>$deptList))?>
       </div>
	</div>

</div>
</div>
