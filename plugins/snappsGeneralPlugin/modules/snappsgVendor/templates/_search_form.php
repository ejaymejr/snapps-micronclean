<?php use_helper('Javascript'); ?>
<?php

$keywordField = sfConfig::get('snappsg_q_vendor', 'q');
?>
<div id="DIVcountSearch"></div>
<form name="FORMsearch" id="FORMsearch" method="get" 
    action="<?php echo url_for($sf_request->getModuleAction()); ?>">
<?php echo input_tag($keywordField, $sf_params->get($keywordField)); ?>
</form>
