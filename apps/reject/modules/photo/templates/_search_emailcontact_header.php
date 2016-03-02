<?php 
	$submitID = HrLib::randomID();
	$loadUrl = url_for('') . $sf_params->get('module') .'/'.$sf_params->get('action');
	$paramVar = 'email_address,company,department,shift,website';
	echo AjaxLib::SearchHeaderAjax($submitID, $loadUrl, $paramVar, $searchPagerDivID);
?>
<tr class="bg-color-blueLight" style="display:<?php echo ( $sf_params->get('isAjax')  ? '' : 'none' ) ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search','id="'. $submitID .'"') ?></td>
    <td></td>
    <td><?php //echo input_tag('employee_no', $sf_params->get('employee_no'), 'size="20"') ?></td>
    <td><?php echo input_tag('email_address', $sf_params->get('email_address'), 'size="15"') ?></td>
    <td><?php echo input_tag('company', $sf_params->get('company'), 'size="15"') ?></td>
    <td><?php echo input_tag('department', $sf_params->get('department'), 'size="15"') ?></td>
    <td><?php echo input_tag('shift', $sf_params->get('shift'), 'size="15"') ?></td>
    <td><?php echo input_tag('website', $sf_params->get('website'), 'size="15"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
