<?php
if (isset($batchID)) :
	$images = FileDetailPeer::GetImagesByBatchID($batchID);
endif;
if (isset($tokenID)) :
	$images = FileDetailPeer::GetImagesTokenID($tokenID);
endif;

$cnt = 0;
foreach($images as $image => $desc):

$jsEditDescParam = "'fname=". $image ."'" ;
	
$ajaxEditDesc = array(
		'url'		=>'photo/ajaxEditDescription',
		'update' 	=> 'DIV'. $image,
		'with'		=> $jsEditDescParam,
		'script'    => true,
		'loading'   => 'stop_remote_pager();',
		'before'   	=> 'showLoader();',
		'complete'  => 'hideLoader();formatFormStyle();',
		'type'      => 'synchronous',
);

$filename = '../uploadedImages/'.$sf_params->get('customer') . '/'.$image;
//$filename = RejectLib::LocateTheFile($sf_params->get('customer'), $image );
$jsPreviewImage = "'fname=". $filename ."'" ;

$ajaxPreviewImage = array(
		'url'		=>'photo/showImage',
		'update' 	=> 'DIVAjaxImagePreview',
		'with'		=> $jsPreviewImage,
		'script'    => true,
		'loading'   => 'stop_remote_pager();',
		'before'   	=> 'showLoader();',
		'complete'  => 'hideLoader();formatFormStyle();',
		'type'      => 'synchronous',
);

$cnt++;
//$emailLink = link_to('email','photo/emailFile?file='.$image);
$fileDetail = FileDetailPeer::GetDataByFilename($image);
$imageLink = link_to(image_tag($filename, 'height="100" width="83"'),'#', array('onclick'=>remote_function($ajaxPreviewImage) . ';return false;') );
$editLink = link_to('edit','#', array('onclick'=>remote_function($ajaxEditDesc) . ';return false;') );
$deleteLink = link_to('delete','photo/deleteFile?file='.$image.'&id=' . $sf_params->get('id'),'onclick="return confirm(\'Are you sure you want to delete this File?\')"');
$chkbox = checkbox_tag('chkbox_' . $cnt, $image, false, 'onclick=ReadyToPost("'.$image.'", $(this).checked);' );
echo '<div id="DIVAjaxImagePreview" ></div>';
echo '<div class="smallwrapper">';
		
if (EmailHistoryPeer::GetDataByFileDetailId( $fileDetail->getId() ) ):
echo '<div class="ribbon-wrapper-green"><div class="ribbon-green">'.$image.'</div></div>';
//echo link_to(image_tag('../uploadedImages/'.$sf_params->get('customer') . '/'.$image, 'height="270" width="203"'), 'photo/showImage?image=' . $image );
endif;

echo $imageLink;
echo "<div id='DIVChkBoxEmailIcon'>";
if (! isset($tokenID)) :
	echo $chkbox;
	echo '<span style="font-size: 10;" > Email </span>';
	echo "</div>";
endif;
// echo "<div id='DIVDescriptionPreview'  >";
// echo substr($desc, 0, 100);
// echo "</div>";
echo "</div>";
echo "</div>";
endforeach;



//include_partial('yahooui_search');