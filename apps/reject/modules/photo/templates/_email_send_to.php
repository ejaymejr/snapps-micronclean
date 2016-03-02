<?php use_helper('Validation', 'Javascript') ?>
<?php //var_dump($sf_params->get('customer')); ?>
<?php //var_dump($sf_params->get('department')); ?>
<?php //var_dump($sf_params->get('shift')); ?>

<div id="DIVEmailSending">
     <table width="100%" cellpadding="0" cellspacing="0" border="0" class="table bordered" id="DIVScreenContainer">
     <tr class="bg-darkOrange fg-White" >
        <td colspan="10" class="dataGridTableHeaderColumn alignCenter alignMiddle" nowrap><h4 style="color: #fff;">MAILING INFO/HISTORY</h4></td>
   	 </tr class="">
   	 <tr>
     	<td class="bg-clearBlue alignRight">
	     	Selected File(s)
	     </td>
	    <td>
	     	 <div class="input-control text ">
			 	<?php echo input_tag('selected_files', '') ?>
			 </div>
	    </td> 
     </tr>
     <tr>
     	<td class="bg-clearBlue alignRight">
	     	<?php 
	        	$emailList = EmailContactPeer::GetEmailByCompanyDepartmentShift($sf_params->get('customer'), $sf_params->get('department'), $sf_params->get('shift'));
	        	echo "Email List ";
	        ?>
	     </td>
	    <td>
	    	<div class="input-control select"> 
	    	<?php 
	    		echo select_tag('email_list', options_for_select($emailList),'onchange="javascript: addSendTo()"' );
	    	?>
	    	</div>
	    </td> 
     </tr>	
     <tr>
     	     <td  class="bg-clearBlue  alignRight">
	     	<?php 
	     		echo "Send To: ";
	     	?>
	     	</td>
	 <td>
	 		<div class="input-control textarea">
	    	<?php 
	    		$emailListing = str_replace(' -ALL- , ', '', implode(', ', $emailList));
	    		$sf_params->set('send_to', $emailListing);
	    		echo textarea_tag('send_to', $sf_params->get('send_to'), " size=50x3") ;
	    	?>
	    	</div>
	    </td> 
     </td></tr>
     <tr><td  class="bg-clearBlue alignRight">default mcslogger@gmail.com</td>
     	<td>
<!--       		<input type="submit" class="" name="email" value=" Email Selected Files " />  -->
     		<button value="email" type="submit" name="email" class="default" ><i class="icon-mail"></i> Email Selected Photo </button>
     		<button value="delete" type="submit" name="delete" class="default" onclick="return confirm('Are you sure you want to delete the selected item(s)?')"><i class="icon-cancel-2"></i> Delete Selected Photo </button> 
<!--        	<input type="submit" class="submit-button" name="delete" value=" Delete Selected Files " onclick="return confirm('Are you sure you want to delete the selected item(s)?')") />  -->
     	</td>
     </tr>
     </table>
</div>	 