<?php use_helper('Validation', 'Javascript') ?>
<div id="DIVEditDesc">
<br>
<?php
echo input_tag('file_name_'.$photoNumber, $sf_params->get('file_name_'.$photoNumber) ,'type=hidden');
echo textarea_tag('description_' . $photoNumber, $sf_params->get('description_' . $photoNumber), 'rows="2" cols="24" onclick="this.select()" class="DescriptionEditMode"' );

	//$jsSave = "'description=' + \$F('description') '";
	$desc = 'description_' . $photoNumber;
	$fname = 'file_name_' . $photoNumber;

	$jsSave = "'description=' + escape(\$F('".$desc."' )) + "
			  . "'&fname=' + \$F('".$fname."')";

	$ajaxSave = array(
			'url'		=>'photo/ajaxSaveDescription',
			'with'		=> $jsSave,
			'update' 	=> 'DIV'. $sf_params->get('fname'),
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	);
	
	$jsCancel = "'&fname=' + \$F('".$fname."')";
	$ajaxCancel = array(
			'url'		=>'photo/ajaxSaveDescription',
			'update' 	=> 'DIV'. $sf_params->get('fname'),
			'with'		=> $jsCancel,
            'script'    => true,
            'loading'   => 'stop_remote_pager();',
            'before'   	=> 'showLoader();',
            'complete'  => 'hideLoader();formatFormStyle();',
            'type'      => 'synchronous',			
	);
	
					
$saveLink = link_to('save','#', array('onclick'=>remote_function($ajaxSave) . ';return false;') );		
$cancelLink = link_to('cancel','#', array('onclick'=>remote_function($ajaxCancel) . ';return false;') );		
echo $saveLink . " | " .$cancelLink;

?>
</div>