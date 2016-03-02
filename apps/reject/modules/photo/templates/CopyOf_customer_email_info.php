<?php use_helper('Validation', 'Javascript') ?>
<?php 
	$dsabledText = "<span class='negative'>disabled</span>";
	$loadUrl = $_SERVER['SCRIPT_NAME'] .'/' ;
	if (! $sf_params->get('id')):
		echo javascript_tag ("
			$(document).ready(function(){				
				$('#customer').on('change', {loadUrl: '".$loadUrl . 'photo/ajaxRefreshCustomerInfo' . "' , param: 'customer', update: '#DIVCustomerInformation',extraparams: 'a=b'}, doAjax);
				$('#save_new_customer').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'new_customer', update: '#DIVCustomerInformation',extraparams: 'template_name=ajaxRefreshCustomerInfo'}, doAjax);
				$('#save_new_department').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_department', update: '#DIVCustomerInformation',extraparams: 'template_name=ajaxRefreshCustomerInfo' }, doAjax);
				$('#save_new_shift').click({loadUrl: '".$loadUrl . 'photo/ajaxSaveNewInfo' . "' , param: 'customer, new_shift', update: '#DIVCustomerInformation', extraparams: 'template_name=ajaxRefreshCustomerInfo'}, doAjax);
			});	
		");	
		$dsabledText = "";
	endif;
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table bordered">
	<tr class="bg-darkOrange">
        <td colspan="10" class="dataGridTableHeaderColumn alignCenter alignMiddle" nowrap><h4 style="color: #fff;" >EMAIL MANAGER</h4></td>
    </tr>
	<tr class="dataGridRowOdd">
        <td width="20%" class="bg-clearBlue alignRight alignMiddle" nowrap>Company</td>
        <td width="30%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
        <div class="input-control select">
        <?php 
        	
        		echo select_tag('customer', options_for_select($customerList, $sf_params->get('customer') )
					, array('id'=>'customer') ) ;
				echo input_tag('id', $sf_params->get('id'), 'type=hidden');
        
        ?>
        </div>
        </td>
         <td width="15%" class="bg-clearBlue alignRight alignMiddle" nowrap>New Customer</td>
         <td width="35%" class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap>
         <div class="input-control text span3">
        <?php 
        	//echo input_tag('new_customer', $sf_params->get('new_customer'), 'size=15');
        	//echo "&nbsp;&nbsp;&nbsp;". link_to('<i class="icon-floppy"></i>', "#", array('id'=>'save_new_customer')  ) . $dsabledText;
        ?>
        </div>
        </td>
    </tr>

    <tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Department</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVDepartment">
         <div class="input-control select">
        <?php 
        	//echo $sf_params->get('no_of_times_wash');
        	echo select_tag('cdepartment', options_for_select($deptList, $sf_params->get('cdepartment') ) ) ;
        ?>
        </div></div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Department</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <div class="input-control text span3">
       <?php 
        	//echo $sf_params->get('size');
        	//echo input_tag('new_department', $sf_params->get('new_department'), 'size=15');
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
        	//echo $sf_params->get('no_of_times_wash');
        	echo select_tag('cshift', options_for_select($shiftList, $sf_params->get('cshift') ) ) ;
        ?>
        </div></div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>New Shift</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
        <div class="input-control text span3">
       <?php 
        	//echo input_tag('new_shift', $sf_params->get('new_shift'), 'size=15');
        	if ($sf_params->get('customer')):
        		//echo "&nbsp;&nbsp;&nbsp;". link_to("<i class='icon-floppy'></i>", "#", array('id'=>'save_new_shift')  );
        	endif;
        	?></div>
        </td>
    </tr>  
	<tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Name</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVName">
         <div class="input-control text">
        <?php 
        	//echo $sf_params->get('email_address');
        	echo input_tag('cname', $sf_params->get('cname'), 'size="40"' ) ;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>&nbsp;</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
		&nbsp;
        </td>
    </tr>
	<tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Email Address</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVEmailAddress">
         <div class="input-control text">
        <?php 
        	//echo $sf_params->get('email_address');
        	echo input_tag('cemail_address', $sf_params->get('cemail_address'), 'size="40"' ) ;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>&nbsp;</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
		&nbsp;
        </td>
    </tr>
	<tr  class="dataGridRowOdd">
         <td class="bg-clearBlue alignRight alignMiddle" nowrap>Website</td>
         <td class="dataGridTableHeaderColumn alignLeft alignMiddle" nowrap><div id="DIVWebsite">
         <div class="input-control text">
        <?php 
        	//echo $sf_params->get('website');
        	echo input_tag('cwebsite', $sf_params->get('cwebsite'), 'size="40"' ) ;
        ?>
        </div>
        </div>
        </td>
        <td class="bg-clearBlue alignRight alignMiddle" nowrap>&nbsp;</td>
        <td class="dataGridTableHeaderColumn alignLeft alignMiddle " nowrap>
		&nbsp;
        </td>
    </tr>
    <tr  class="dataGridRowOdd">
    	<td class="bg-clearBlue alignRight alignMiddle" nowrap></td>
        <td colspan="3" class="alignLeft alignMiddle" nowrap>
        	<button type="submit" class="default"><i class="icon-floppy"></i> New Email Information</button>
        </td>
    </tr>
 
</table>

