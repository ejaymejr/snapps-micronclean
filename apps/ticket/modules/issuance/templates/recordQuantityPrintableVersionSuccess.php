<?php use_helper('Validation', 'Javascript') ?>
<div class="DivDataGridBorder" style="width: 800px;"> 
		<table cellspacing="2" cellpadding="4" border="0" style="width:100%;" class="dataGridTable">
	    <tbody>
	    <tr class="dataGridTableHeader">
	        <td height="23" colspan="50" class="dataGridTableHeaderColumn alignCenter">GARMENT TICKETING SHEET</td>
	    </tr>
	    <tr class="dataGridRowEven  ">
	        <td width="100" height="23" class=" alignRight">TICKET #:</td>
	        <td class=" alignLeft"><?php echo $sf_params->get('ticket_id') ?></td>
	    </tr>  
	    <tr class="dataGridRowOdd  ">
	        <td height="23" class=" alignRight">CUSTOMER NAME:</td>
	        <td class=" alignLeft"><?php echo $templateData->getName() ?></td>
	    </tr>  
	   	<tr class="dataGridRowEven  ">
	        <td height="23" class=" alignRight">DATE PRINTED:</td>
	        <td width="100" class=" alignLeft"><?php echo Date('Y-m-d h:i a') ?></td>
	    </tr>  
	   	<tr class="dataGridRowOdd  ">
	        <td height="23" class=" alignRight">ISSUED BY:</td>
	        <td width="100" class=" alignLeft"><?php echo $sf_user->getUsername() ?></td>
	    </tr>
	    
	    </tbody>
	    </table>
</div>
<?php 
	foreach($garmentList as $garment):
		echo include_partial('delivery_record_summary_pergarment', array('garment'=>$garment, 'id'=>$id ) );
	endforeach;