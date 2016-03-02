<?php
//var_dump(@$_GET["ContextValue"]);
include_partial('phpuploader');
//include_once (sfConfig::get('app_upload_resource_include_uploader_file'));

$uploader=new PhpUploader();

$mvcfile=$uploader->GetValidatingFile();

//if($mvcfile->FileName=="accord.bmp")
//{
//	$uploader->WriteValidationError("My custom error : Invalid file name. ");
//	exit(200);
//}
//
////USER CODE:
//
//$targetfilepath= "savefiles/myprefix_" . $mvcfile->FileName;
//if( is_file ($targetfilepath) )
//	unlink($targetfilepath);
//$mvcfile->MoveTo( $targetfilepath );
//
//$uploader->WriteValidationOK();