<?php use_helper('Validation', 'Javascript') ?>
<div id="DIVCustomerInformation">
	<?php echo include_partial('customer_email_info', array('customerList'=> $customerList , 'shiftList'=>$shiftList, 'deptList'=>$deptList) )?>
</div>
