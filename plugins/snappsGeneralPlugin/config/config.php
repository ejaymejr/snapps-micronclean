<?php

if (in_array('snappsgCategory', sfConfig::get('sf_enabled_modules', array())))
{
  $r = sfRouting::getInstance();  

  // preprend our routes
  $r->prependRoute('snappsgCategoryList', '/snappsgCategory/list/*', array('module' => 'snappsgCategory', 'action' => 'list'));
  $r->prependRoute('snappsgCategoryAjaxList', '/snappsgCategory/ajaxList/*', array('module' => 'snappsgCategory', 'action' => 'ajaxList'));
}

// general variable name for keyword
sfConfig::set('snappsg_q_category', 'q_sgc');
sfConfig::set('snappsg_q_company', 'q_sgco');
sfConfig::set('snappsg_q_vendor', 'q_sgv');
