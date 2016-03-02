<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<script language="JavaScript" type="text/javascript">
	function addSendTo()
	{
		elist = $F('email_list');
		sendto = $F('send_to');
		document.getElementById('send_to').value = elist + ', ' + sendto; 
		//alert(elist);
	}
</script>
<form name="FORMupload" method="post"
	action="<?php echo url_for('photo/searchCriteria') ?>"
	enctype="multipart/form-data">

	<?php //echo HTMLForm::DrawButton('pushbutton1', 'button1', 'Upload New Reject Photo', url_for('photo/uploader')); 
$sizes = 10;
$aList = array('test1', 'test2', 'test3');
$aWash = array('0'=>'Any', '50'=>'0-50', '100'=>'51-100', '150'=>'101-150', '200'=>'151-200', '250'=>'201-250', '251'=>'Greater than 250');
$aCustomer = GarmentinformationPeer::GetCustomer($sf_params->get('customer'), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));
// 	$aGarment = GarmentinformationPeer::GetType($sf_params->get('customer'), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));
// 	$aSize = GarmentinformationPeer::GetSize($sf_params->get('customer'), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));
// 	$aColor = GarmentinformationPeer::GetColor($sf_params->get('customer'), $sf_params->get('garment'), $sf_params->get('size'), $sf_params->get('color'), $sf_params->get('xwash'));

$aCustomer = PhotoDetailPeer::GetAllCustomer();
$aGarment = PhotoDetailPeer::getAllGarment();
$aSize = PhotoDetailPeer::GetAllSize();
$aColor = PhotoDetailPeer::GetAllColor();
?>
	<div id="DIVShowSearchFilter">
		<div id="DIVRejectFilter">
			<H3>:: CUSTOMER ::</H3>
			<?php 
			echo select_tag('customer', options_for_select($aCustomer, $sf_params->get('customer')), 'multiple=multiple size='.$sizes);
			?>
			<br>

		</div>

		<div id="DIVRejectFilter">
			<H3>:: GARMENT ::</H3>
			<?php echo select_tag('garment', options_for_select($aGarment, $sf_params->get('garment')), 'multiple=multiple size='.$sizes);  ?>
		</div>
		<div id="DIVRejectFilter">
			<H3>:: SIZE ::</H3>
			<?php echo select_tag('size', options_for_select($aSize, $sf_params->get('size')), 'multiple=multiple size='.$sizes);  ?>
		</div>

		<div id="DIVRejectFilter">
			<H3>:: COLOR ::</H3>
			<?php echo select_tag('color', options_for_select($aColor, $sf_params->get('color')), 'multiple=multiple size='.$sizes);  ?>
		</div>

		<div id="DIVRejectFilter">
			<H3>:: TIMES WASH ::</H3>
			<?php echo select_tag('xwash', options_for_select($aWash, $sf_params->get('xwash')), 'width=30 size='.$sizes);  ?>
		</div>
		<?php echo '&nbsp;' ?>
		<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
		<br /> <br /> <br /> <br /> &nbsp;<input class="submit-button"
			type="button" value="Reset"
			onClick="window.location.href=window.location.href">&nbsp;&nbsp;<input
			type="submit" value="Apply Filter">
	</div>
	<div>



		<div id="DIVShowSearchFilter">
			<h1>CUSTOMER REJECT LIST</h1>
			<a href="" style="cursor: pointer;"
				onclick="showHideElement('DIVShowCustomerPhoto'); return false;">Show/Hide
				Reject List</a>
		</div>
		<div id="DIVShowSearchFilter">
			<?php 
			
			$jsSendEmail = "'email_list=' + escape(\$F('send_to'))
							+ '&filename=' + escape(\$F('filename'))
							 ";
			
			$ajaxSendEmail = array(
					'url'		=>'photo/ajaxSendEmail',
					'update' 	=> 'DIVEmailStatus',
					'with'		=> $jsSendEmail,
					'script'    => true,
					'loading'   => 'stop_remote_pager();',
					'before'   	=> 'showLoader();',
					'complete'  => 'hideLoader();formatFormStyle();',
					'type'      => 'synchronous',
			);
				

			$co = 'micronclean';
			$emailList = RejectLib::GetEmailList($co);
			echo "emailList: " . select_tag('email_list', options_for_select($emailList), 'onchange=addSendTo()' );
			echo '<br>';
			echo "SEND TO: " . textarea_tag('send_to', $sf_params->get('send_to'), " size=50x3") ;
			echo '<br>';
			echo textarea_tag('filename', '', 'size=50x3 hidden=hidden'); //
			echo '<br>';
			echo submit_tag(' Email Selected Files ',array('onclick'=>remote_function($ajaxSendEmail) . ';return false;'));
			?>
			<div id="DIVEmailStatus"></div>
		</div>
		<div id="DIVShowCustomerPhoto"></div>
		<div id="DIVShowCustomerLists">
			<?php
			$gridVars = array(
		    'searchTemplate' => '',
		    'pagerTemplate' => 'search_criteria_list',
		    'baseURL' => $sf_request->getModuleAction() ,
		    'pager' => $pager,
		    'searchContainerID' => XIDX::next(),
		    'headers' => sfConfig::get('app_search_criteria_headers')
);
include_partial('global/datagrid/container', $gridVars);
?>
		</div>

</form>
<?php
echo javascript_tag("
	function ReadyToPost(fname, ischeck)
	{
		filename = document.getElementById('filename') ;
		fname = fname + ', ';
		space = ' ';
		if (ischeck)
		{
			filename.value = fname + filename.value;
	}else{
			str = filename.value ;
			filename.value= str.replace(fname, '');
	
	}
}
");
//$fname = sfConfig::get('sf_upload_dir');
