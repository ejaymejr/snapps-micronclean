<?php
// $Source$
// $Id$

$errorMsg = $sf_request->getErrorMsg();
$successMsg = $sf_request->getSuccessMsg();
$warningMsg = $sf_request->getWarningMsg();


$flashError = $sf_flash->get('errorMsg', false);
$flashSuccess = $sf_flash->get('successMsg', false);
//$flashWarning = $sf_flash->get('warningMsg', false);

if ($flashError) $errorMsg->addMsg($flashError);
if ($flashSuccess) $successMsg->addMsg($flashSuccess);
//if ($flashWarning) $warningMsg->addWarning($flashWarning);

if(isset($errorMsg) && sizeof($errorMsg->msg)) {
	 $msg = $sf_request->getErrorMsg();
	 echo javascript_tag("
	      $(document).ready(function() {
			$.Notify({
			content: '".strip_tags($msg->getMsg())."',
			style: {background: '#9A1616', color: 'white'}, 
			timeout: 10000 
			});
	      });
	 ");
}

      	/* $.Notify.show('test'); 
		alert('".strip_tags($msg->getMsg())."'); */
if(isset($successMsg) && sizeof($successMsg->msg)) {
	 $msg = $sf_request->getSuccessMsg();
	 echo javascript_tag("
	      $(document).ready(function() {
			$.Notify({
			content: '".strip_tags($msg->getMsg())."',
			style: {background: '#60A917', color: 'white'}, 
			timeout: 10000 
			});
	      });
 ");   
}

if(isset($warningMsg) && sizeof($warningMsg->msg)) {
	 $msg = $sf_request->getWarningMsg();
	 echo javascript_tag("
	      $(document).ready(function() {
			$.Notify({
			content: '".strip_tags($msg->getMsg())."',
			style: {background: '#FA6800', color: 'white'}, 
			timeout: 10000 
			});
	      });
	 ");
}
?>
