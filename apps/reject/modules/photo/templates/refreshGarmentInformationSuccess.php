<?php use_helper('Form', 'Javascript', 'PagerNavigation'); ?>
<div id="DIVGarmentInformation" style="top: -100px;">
	<?php include_partial('garment_information', 
		array('garmentCode'=>$sf_params->get('garment_code')
		, 'customerList'=>$customerList
		, 'colorList'=>$colorList
		, 'garmentList'=>$garmentList
		, 'sizeList'=>$sizeList
		, 'reasonList'=>$reasonList
		, 'deptList'=>$deptList
		, 'shiftList'=>$shiftList
	)); ?>
</div>
