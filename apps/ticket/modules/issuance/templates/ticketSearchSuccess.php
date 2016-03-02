<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div class="grid-toolbar-2 FORMlabel">                       
<?php //echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Create New Template',    url_for('issuance/templateDesignAdd'));  ?>
<?php echo link_to('<button class="default">Issue New Ticket</button>', 'issuance/issueByDesignSearch' ); ?>
</div>
	<div id="DIVTagSearch" class="DIVSearchPanel" >
	<?php
	include_partial('global/datagrid/container', $gridVarsDelivery);
	?>
	</div>

