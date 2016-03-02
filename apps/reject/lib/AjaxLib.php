<?php

/**
 * maintenance actions.
 *
 * @package    snapps
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class AjaxLib
{
	public static function SaveDescriptionAjax($sourceID, $targetList)
	{
 		$fileID = str_replace('.', '_', $sourceID);
		$ajaxString = "
		var ajax_load = '<div id=\"showloader\"></div>';
		var loadUrl = '".$_SERVER['SCRIPT_NAME'] .'/'. 'photo/ajaxSaveDescription' ."' ;
		var descriptionEntry = $('#description_text_". $fileID ."').val();
		var withparams = 'description='+descriptionEntry+'&fname=". $sourceID ."' ;";
		foreach($targetList as $targetID):
			$ajaxString .= 
				"$('#".$targetID.$fileID."')
					.html(ajax_load)
					.load(loadUrl, withparams );
				";
		endforeach;
		return $ajaxString;
		
		/* var ajax_load = '<div id=\"showloader\"></div>';
		 var loadUrl = '<?php echo $_SERVER['SCRIPT_NAME'] .'/'. 'photo/ajaxSaveDescription' ?>' ;
		var descriptionEntry = $('#description_text_<?php echo $fileID ?>').val();
		var withparams = 'description='+descriptionEntry+'&fname=<?php echo $file?>' ;
		//$('#FullDescription_<?php echo $fileID ?>').val($('#description_text_<?php echo $fileID ?>').val());
		$('#Description_<?php echo $fileID ?>')
		.html(ajax_load)
		.load(loadUrl, withparams );
		$('#FullDescription_<?php echo $fileID ?>')
		.html(ajax_load)
		.load(loadUrl, withparams );
			
		//alert( $('#FullDescription_<?php echo $fileID ?>').val());
			
		return false;
		*/
	}
	
	public static function DeletePhotoAjax($sourceID, $targetID)
	{
		$fileID = str_replace('.', '_', $sourceID);
		$ajaxString = "
		var ajax_load = '<div id=\"showloader\"></div>';
		var loadUrl = '".$_SERVER['SCRIPT_NAME'] .'/'. 'photo/deleteFile' ."' ;
		var withparams = 'file=". $sourceID ."' ;";
		$ajaxString .=
		"$('#".$targetID."')
					.html(ajax_load)
					.load(loadUrl, withparams );
				";
		//$url = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		//$ajaxString = '';
		//$ajaxString .= "window.location.href = ''; ";
		return $ajaxString;
	}

	public static function GetGarmentInformation($garmentCode, $targetID)
	{
		//$fileID = str_replace('.', '_', $sourceID);
		$ajaxString = "
		var ajax_load = '<div id=\"showloader\"></div>';
		var loadUrl = '".$_SERVER['SCRIPT_NAME'] .'/'. 'photo/ajaxGarmentInformation' ."' ;
		var withparams = 'garment_code=' + $('#garment_code').val() ;";
		$ajaxString .=
		"$('#".$targetID."')
					.html(ajax_load)
					.load(loadUrl, withparams );
				";
		//$url = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		//$ajaxString = '';
		//$ajaxString .= "window.location.href = ''; ";
		return $ajaxString;
	}
	
	public static function SearchHeaderAjax($submitID, $Url, $paramVar, $updateID)
	{
		return "
			<!-- beta ajax -->
			<script type='text/javascript'>
			$(document).ready(function(){
				$('#".$submitID."').click({loadUrl: '".$Url."'
				, param: '".$paramVar."'
				, update: '#".$updateID."'
				, extraparams: 'isAjax=true'
				}, doAjax);
			});
			</script>";
		
// 		$(document).ready(function(){
// 			$('#c4nxmwli3e').click({loadUrl: '/micronclean/reject/reject_dev.php/photo/upload'
// 					, param: 'trans_date,customer,garment,color,size,department,shift'
// 							, update: '#etphwnlb9t'
// 									, extraparams: 'isAjax=true'
// 			}, doAjax);
// 		});
	}
}
