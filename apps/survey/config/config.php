<?php

// include project configuration
include(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

// symfony bootstraping
require_once($sf_symfony_lib_dir.'/util/sfCore.class.php');
sfCore::bootstrap($sf_symfony_lib_dir, $sf_symfony_data_dir);

sfConfig::set('sf_app_template_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'templates');

sfConfig::add(array(
  'sf_upload_dir_name'  => $sf_upload_dir_name = 'uploadedImages',
  'sf_upload_dir'       => sfConfig::get('sf_root_dir').DIRECTORY_SEPARATOR.sfConfig::get('sf_web_dir_name').DIRECTORY_SEPARATOR.$sf_upload_dir_name,      
));