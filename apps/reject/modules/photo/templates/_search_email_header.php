<?php 
	$submitID = HrLib::randomID();
	$loadUrl = url_for('') . $sf_params->get('module') .'/emailSearchPager';
	$paramVar = 'file_name,email_address';
	$extraParm = '&id=' . $sf_params->get('id');
	echo AjaxLib::SearchHeaderAjax($submitID, $loadUrl, $paramVar, $searchPagerDivID, $extraParm);
?>
<tr class="bg-color-blueLight" style="display:<?php echo ( $sf_params->get('isAjax')  ? '' : 'none' ) ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search','id="'. $submitID .'"') ?></td>
    <td></td>
    <td><?php //echo input_tag('employee_no', $sf_params->get('employee_no'), 'size="20"') ?></td>
    <td><?php echo input_tag('file_name', $sf_params->get('file_name'), 'size="15"') ?></td>
    <td><?php echo input_tag('email_address', $sf_params->get('email_address'), 'size="15"') ?></td>
    <td><?php //echo input_tag('employee_no', $sf_params->get('employee_no'), 'size="20"') ?></td>
    <td><?php echo submit_tag('search','id="'. $submitID .'"') ?></td>   
</tr> 
