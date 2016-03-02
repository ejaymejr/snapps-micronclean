<?php use_helper('Validation', 'Javascript') ?>
<?php //echo input_file_tag('file', 'size="50"') ?>  
<form name="FORMupload" method="post" action="<?php echo url_for('photo/viewCustomerReject') ?>" enctype="multipart/form-data">
                   
<?php //echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Upload New Reject Photo', url_for('photo/uploader')); 
	$sizes = 10;
	$aCustomer = GarmentinformationPeer::GetCustomer($sf_params->get('customer'), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));
	
?>
<div class="grid-toolbar-2">
<div id="DIVRejectFilter"><H3> :: CUSTOMER ::</H3>
 <?php 
 	echo select_tag('customer', options_for_select($aCustomer, $sf_params->get('customer')), ' size='.$sizes);  
 ?>
 <br>
 
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
&nbsp;<input  class="submit-button" type="button" value="Reset" onClick="window.location.href=window.location.href">&nbsp;&nbsp;<input type="submit" value="Search Customer">

</div>
<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div class="grid-toolbar-2">                       
<?php
//	echo input_tag('token', $sf_params->get('token'), 'type=hidden'); 
//	echo input_tag('customer', $sf_params->get('customer'), 'type=hidden'); 
//	echo input_tag('garment_code', $sf_params->get('garment_code'), 'type=hidden'); 
//	if ($sf_params->get('token'))
//		echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Show Email Photo', url_for('photo/view') . '?token=' . $sf_params->get('token') );
//	if ($sf_params->get('garment_code'))
//		echo HTMLForm::DrawButton('pushbutton2', 'button1', 'Show All Photos of this Garment', url_for('photo/view') . '?garment_code=' . $sf_params->get('garment_code') .'&token='.$sf_params->get('token').'&show=garment'); 
//	if ($sf_params->get('customer'))
//		echo HTMLForm::DrawButton('pushbutton3', 'button1', 'Show All Reject (customer)', url_for('photo/view') . '?customer=' . $sf_params->get('customer')  .'&token='.$sf_params->get('token').'&show=customer'); 
	
?>
</div>  
    <table id="tableUpload" width="100%" cellpadding="4" cellspacing="2" border="0">
    <tr class="dataGridRowOdd" id="whyDoIhavetobethelastsibling">
        <td colspan="3">
        <?php
			$cnt = 0;
			foreach($images as $image => $desc):
			
			$jsQueryString = "'fname= " . $image . "'"
			;
			
//			$jsQueryString = 
//				"'batchID=' + \$F('batch_id') +"
//				."'&fname=" . $image ."'"
//			;
			$ajaxOptions = array(
					'url'		=>'photo/ajaxEditDescription?fname='.$image,
		            'update' 	=> 'DIV'. $image,
		            'script'    => true,
		            'loading'   => 'stop_remote_pager();',
		            'before'   	=> 'showLoader();',
		            'complete'  => 'hideLoader();formatFormStyle();',
		            'type'      => 'synchronous',			
			);

	
			$cnt++;
			//$emailLink = link_to('email','photo/emailFile?file='.$image);
			$fileDetail = FileDetailPeer::GetDataByFilename($image);
			$photoDetail = PhotoDetailPeer::GetDataByGarmentCode($fileDetail->getGarmentCode());
			$editLink = link_to('edit','#', 'onclick='. remote_function($ajaxOptions) . ';return false;' );
			$deleteLink = link_to('delete','photo/deleteFile?file='.$image.'&id=' . $sf_params->get('id'),'onclick="return confirm(\'Are you sure you want to delete this File?\')"');
			$chkbox = checkbox_tag('chkbox_' . $cnt, $image, false );
			echo "<div id='DIVuploadedImagePreview'>";
			echo link_to(image_tag('../uploadedImages/'.$photoDetail->getName() . '/'.$image, 'height="270" width="203"'), 'photo/showImage?image=' . $image);
			//echo link_to(image_tag($fileDetail->getPath() . $image, 'height="270" width="203"'), 'photo/showImage?image=' . $image);
				echo "<div id=DIV".$image.">";	
				echo "<div id='DIVDescriptionPreview'>";
				echo substr($desc, 0, 100);
				echo "</div>";
				echo "</div>";
				echo "<div id='DIVChkBoxPreview'>";
				echo $chkbox;
				echo "</div>";
				echo "<div id='DIVChkBoxEmailIcon'>";
				if ($fileDetail):
					echo $fileDetail->getEmailAddress() ? image_tag('/images/icons/mailIcon.png') : image_tag('/images/icons/emailNotSent.png');
				endif;
				echo "</div>";
				echo "<div id='DIVEmailDeletePreview'>";
				//echo $editLink. ' | ' . $deleteLink;
				echo "</div>";
			echo "</div>";
			
		endforeach;
		
		?>
        <a href=""></a>
        </td>
    </tr>

    </table> 
