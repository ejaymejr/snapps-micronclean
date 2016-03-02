<?php use_helper('Javascript'); ?>
<?php

$keywordField = sfConfig::get('snappsg_q_category', 'q');
?>
<div id="DIVcountSearch"></div>
<form name="FORMsearch" id="FORMsearch" method="get" 
    action="<?php echo url_for($sf_request->getModuleAction()); ?>">
<?php echo input_tag($keywordField, $sf_params->get($keywordField)); ?>
&nbsp; &nbsp; 
<?php echo checkbox_tag('sort_acc_no', 1, false, array('class' => 'checkbox')) ?> Sort Account Number
        
        
</form>
