<?php

// include project configuration
include(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

// symfony bootstraping
require_once($sf_symfony_lib_dir.'/util/sfCore.class.php');
sfCore::bootstrap($sf_symfony_lib_dir, $sf_symfony_data_dir);
sfConfig::set('sf_app_template_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR . 'templates');

sfConfig::set('sf_app_image_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'tmp' . DIRECTORY_SEPARATOR
. 'hr' . DIRECTORY_SEPARATOR
. 'documents' . DIRECTORY_SEPARATOR );


sfConfig::set('sf_app_flash_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'web' . DIRECTORY_SEPARATOR
. 'flash' . DIRECTORY_SEPARATOR
);

sfConfig::set('sf_app_biometrics_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'tmp' . DIRECTORY_SEPARATOR
. 'hr' . DIRECTORY_SEPARATOR
. 'biometrics' . DIRECTORY_SEPARATOR );

sfConfig::set('sf_app_converter_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'tmp' . DIRECTORY_SEPARATOR
. 'hr' . DIRECTORY_SEPARATOR );

sfConfig::set('sf_app_employee_photo_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'web' . DIRECTORY_SEPARATOR
. 'images' . DIRECTORY_SEPARATOR
. 'employee' . DIRECTORY_SEPARATOR
);

sfConfig::set('sf_app_document_dir', SF_ROOT_DIR . DIRECTORY_SEPARATOR
. 'web' . DIRECTORY_SEPARATOR
. 'images' . DIRECTORY_SEPARATOR
. 'document' . DIRECTORY_SEPARATOR
);