<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div class="grid-toolbar-2">
<h2> LEAVE HISTORY </h2>
<?php
//echo HTMLForm::DrawButton('availableCredits', 'button1', 'ReCompute Available Credits', url_for('leave/leaveCreditProcessAll'));
//echo select_tag('fiscal',options_for_select(sfConfig::get('years'),$sf_params->get('fiscal')));
//echo submit_tag('filter');

?></div>
<?php
		$gridVars = array(
		    'searchTemplate' => 'applyleave_list_header_search',
		    'pagerTemplate' => 'appliedleave_pager_list',
		    'baseURL' => $sf_request->getModuleAction(), 
		    'pager' => $pager,
		    'searchContainerID' => XIDX::next(),
		    'headers' => sfConfig::get('app_appliedleave_grid_headers')
		);
		include_partial('global/datagrid/container', $gridVars);		
?>