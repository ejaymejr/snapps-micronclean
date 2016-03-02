<?php
// $Source$
// $Id$

$errorMsg = $sf_request->getErrorMsg();
$successMsg = $sf_request->getSuccessMsg();

if(isset($errorMsg) && sizeof($errorMsg->msg)) {
    ?>
    <div class="error-message" id="thisIsErrorMsgID">
        <?php $errorMsg->printMsg(); ?>
        <p align="right">X <a href="#" onClick="document.getElementById('thisIsErrorMsgID').style.display='none';return false;">Close</a></p>
    </div>
    <?php
}
if(isset($successMsg) && sizeof($successMsg->msg)) {
    ?>
    <div class="success-message" id="thisIsSuccessMsgID">
        <?php $successMsg->printMsg(); ?>
        <p align="right">X <a href="#" onClick="document.getElementById('thisIsSuccessMsgID').style.display='none';return false;">Close</a></p>
    </div>
    <?php
}
?>
