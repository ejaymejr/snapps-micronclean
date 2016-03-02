<?php use_helper('Validation', 'Javascript') ?>
<div class="grid-toolbar-2 FORMlabel">                       
<?php echo HTMLForm::DrawButtonNewWindow('pushbutton1', 'button1', 'Issue Ticket',    url_for('formTemplate/recordQuantityPrintableVersion?id=' . $sf_params->get('id'))); ?>
</div>
<?php 
	foreach($garmentList as $garment):
		echo include_partial('delivery_record_summary_pergarment', array('garment'=>$garment, 'id'=>$id ) );
	endforeach;