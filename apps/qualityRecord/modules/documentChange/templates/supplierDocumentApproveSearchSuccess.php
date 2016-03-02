<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div class="contentBox">
<nav class="breadcrumbs">
<ul>
	<li><a href="<?php echo url_for('documentChange/supplierDocumentSearch') ?>">Supplier Document Search</a></li>
	<li><a href="<?php echo url_for('documentChange/supplierDocumentAdd') ?>">Add Supplier Document</a></li>
	<li class="active"><a href="<?php echo url_for('documentChange/supplierDocumentApproveSearch') ?>">Approve Document</a></li>
	<li></li>
</ul>
</nav>

<?php 
   	if (isset($pager)):
		$filename = PagerJson::SearchSupplierDocumentApprove($pager);
		$cols = array('action', 'seq', 'date_time', 'company','document','title', 'review', 'approve', 'scr_status');
		echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
	endif;
?>

</div>