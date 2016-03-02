<?php use_helper('Validation', 'Javascript') ?>
<?php //echo input_file_tag('file', 'size="50"') ?>

<div >                       
<?php //echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Upload New Reject Photo', url_for('photo/uploader')); 
	echo javascript_tag("
		document.getElementById('DIVShowCustomerPhoto').style.display = 'block'
	");
?>

<?php //echo '&nbsp;&nbsp;&nbsp;' . link_to('close reject list', '', 'onclick="showHideElement(DIVShowCustomer)" style="cursor:pointer; return; false;"') ?>
</div>
<?php
$gridVars = array(
		    'searchTemplate' => '',
		    'pagerTemplate' => 'search_photoview_list',
		    'baseURL' => $sf_request->getModuleAction() , 
		    'pager' => $pager,
		    'searchContainerID' => XIDX::next(),
		    'headers' => sfConfig::get('app_photo_grid_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>

<?php
//$fname = sfConfig::get('sf_upload_dir');
