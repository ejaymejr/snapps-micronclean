	 <?php use_helper('Text', 'Number', 'Form', 'Javascript', 'PagerNavigation'); ?>
	 <?php
 		$id = $sf_params->get('id');
 		$photoDetail = PhotoDetailPeer::retrieveByPK($id);
 		$fileID = array();
 		$files = FileDetailPeer::GetDataByBatchId($photoDetail->getBatchId());
 		foreach ($files as $f):
 			$fileID[] = $f->getId();
 		endforeach;
 		$c = new EmailHistoryCriteria();
 		$c->add(EmailHistoryPeer::FILE_DETAIL_ID, $fileID, Criteria::IN);
 		$pager = EmailHistoryPeer::GetPager($c);
	 
	$gridVars = array(
			    'searchTemplate' => 'search_email_header',
			    'pagerTemplate' => 'search_email_list',
			    'baseURL' => $sf_request->getModuleAction() , 
			    'pager' => $pager,
			    'searchContainerID' => XIDX::next(),
			    'headers' => sfConfig::get('app_email_search_headers')
	);
	include_partial('global/datagrid/container', $gridVars);
	?>