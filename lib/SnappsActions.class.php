<?php

class SnappsActions extends sfActions
{
    
    protected function _G($var, $default = null)
    {
        return $this->getRequestParameter($var, $default);
    }
    protected function _S($var, $val)
    {
        return $this->getRequest()->setParameter($var, $val);
    }
    protected function _ERR($text)
    {
        return $this->getRequest()->getErrorMsg()->addMsg($text);
    }
    protected function _ERF($text)
    {
        return $this->setFlash('errorMsg', $text);
    }
    protected function _SUC($text)
    {
        return $this->getRequest()->getSuccessMsg()->addMsg($text);
    }
    protected function _SUF($text)
    {
        return $this->setFlash('successMsg', $text);
    }

    protected function _WRN($text)
    {
        return $this->getRequest()->getWarningMsg()->addMsg($text);
    }
    protected function _WRF($text)
    {
        return $this->setFlash('warningMsg', $text);
    }
    
    protected function _U()
    {
        return $this->getUser()->getUsername();
    }
    protected function _UFN()
    {
        return $this->getUser()->getProfile()->getFirstName() . ' ' .
            $this->getUser()->getProfile()->getLastName();
    }
    
    protected function CreateGridVars($pager, $searchTemplate, $pagerTemplate, $DIVName,  $headers)
    {
    	$targetUrl = $this->getModuleName() .'/' . $this->getActionName();
    	$gridVars = array(
    			'pager' => $pager,
    			'searchTemplate' => $searchTemplate,
    			'pagerTemplate' => $pagerTemplate,
    			'baseURL' => $this->getModuleName() .'/' . $this->getActionName(),
    			'searchContainerID' => XIDX::next(),
    			'DIVName' => $DIVName,
    			'targetUrl' => $targetUrl,
    			'headers' => $headers
    	);
    	//include_partial('global/datagrid/container', $emailPager);
    	return $gridVars;
    }
    
    protected function _SaveXLS($exportFilename, $csvContent)
    {
    	$this->getResponse()->clearHttpHeaders();
    	$this->getResponse()->addCacheControlHttpHeader("Cache-control","private");
    	$this->getResponse()->setHttpHeader("Content-Description","File Transfer");
    	$this->getResponse()->setContentType('application/octet-stream',TRUE);
    	$this->getResponse()->setHttpHeader("Content-Length",(string) strlen($csvContent), TRUE);
    	$this->getResponse()->setHttpHeader('content-transfer-encoding', 'binary', TRUE);
    	$this->getResponse()->setHttpHeader("Content-Disposition","attachment; filename=\"".$exportFilename."\"", TRUE);
    	$this->getResponse()->sendHttpHeaders();
    	echo $csvContent;
    	exit();
    }
    
	protected function _H()
	{
		$highlightRow = $this->getRequestParameter('HID');
		echo '<script>
			$(document).ready(function() {
				$("#tr_'.$highlightRow.'").addClass("info ");
			});
			</script>
		';
	}
	
	protected function var_dump($vars)
	{
		echo '<pre>';
		print_r($vars);
		echo '</pre>';
		return;
	}
}