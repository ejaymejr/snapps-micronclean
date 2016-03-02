<?php use_helper('Validation', 'Javascript') ?>
<div class="grid-toolbar-2 FORMlabel">
	<?php echo link_to('<button class="default"><i class="icon-file-excel"></i> Generate XLS File</button>', 'issuance/ticketSummaryXLS?id=' . $sf_params->get('id') ); ?>
</div>

<div class="page-region-content-indented">
	<?php 
// 	var_dump($headerID);
// 	exit();
	foreach($garmentList as $garment):
		echo include_partial('delivery_record_summary_pergarment', array('garment'=>$garment, 'deliveryRecordData'=>$deliveryRecordData ) );
	endforeach;
	?>

</div>
