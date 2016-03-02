<?php
// $Source$
// $Id$

$errorMsg = $sf_request->getErrorMsg();
$successMsg = $sf_request->getSuccessMsg();
$warningMsg = $sf_request->getWarningMsg();


$flashError = $sf_flash->get('errorMsg', false);
$flashSuccess = $sf_flash->get('successMsg', false);
$flashWarning = $sf_flash->get('warningMsg', false);

if ($flashError) $errorMsg->addMsg($flashError);
if ($flashSuccess) $successMsg->addMsg($flashSuccess);
if ($flashWarning) $warningMsg->addWarning($flashWarning);

if(isset($errorMsg) && sizeof($errorMsg->msg)) {
    ?>
    
<div class="sfTMessageContainerMini sfTAlertMini"> 
  <?php $errorMsg->printMsg(); ?>
</div>
    <?php
}
if(isset($successMsg) && sizeof($successMsg->msg)) {
    ?>
<div class="sfTMessageContainerMini sfTSuccessMini"> 
    <?php $successMsg->printMsg(); ?> 
</div>
    <?php
}
if(isset($warningMsg) && sizeof($warningMsg->msg)) {
    ?>
<div class="sfTMessageContainerMini sfTWarningMini"> 
    <?php $warningMsg->printMsg(); ?> 
</div>
    <?php
}
?>
