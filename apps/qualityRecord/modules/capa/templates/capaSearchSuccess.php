<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>

<!--<div class="grid-toolbar-2">                       -->
<?php //echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Add CA/PA Entry', url_for('capa/capaAdd')); ?>
<!--</div>-->
<div class="contentBox">
<nav class="breadcrumbs">
<ul>
	<li><a href="<?php echo url_for('capa/capaSearch') ?>">Capa Search</a></li>
	<li><a href="<?php echo url_for('capa/qanSearch') ?>">QAN Search</a></li>
	<li><a href="<?php echo url_for('capa/capaAdd') ?>">Add CA/PA Entry</a></li>
</ul>
</nav>
<?php
//$gridVars = array(
//    'searchTemplate' => 'sea_list_header_search',
//    'pagerTemplate'  => 'sea_pager_list',
//    'baseURL' => $sf_request->getModuleAction(),
//    'pager' => $pager,
//    'searchContainerID' => XIDX::next(),
//    'headers' => sfConfig::get('app_sea_grid_headers')
//);
//include_partial('global/datagrid/container', $gridVars);
?>

<?php 
   	if (isset($pager)):
		$filename = PagerJson::SearchCapa($pager);
		$cols = array('action', 'seq', 'report_no', 'title','reported_by','issue_date', 'follow_up', 'status', 'is_effective' );
		echo PagerJson::TableHeaderFooter($cols, $filename, 10, sizeof($pager)); //create the table
	endif;
?>

</div>