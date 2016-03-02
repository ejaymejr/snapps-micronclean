<?php 
	$submitID = HrLib::randomID();
	$loadUrl = $_SERVER['SCRIPT_NAME'] .'/' ;
	echo javascript_tag ("
				$(document).ready(function(){			
					$('#".$submitID."').click({loadUrl: '".$loadUrl 
					. 'photo/upload' . "' 
					, param: 'trans_date,customer,garment,color,size'
					, update: '#".$searchPagerDivID."'
					,extraparams: 'isAjax=true'
					}, doAjax);

				});	
			");

?>
<tr class="bg-color-blueLight" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search','id="'. $submitID .'"') ?></td>
    <td></td>
    <td><?php echo input_tag('trans_date', $sf_params->get('trans_date'), 'size="15"') ?></td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="15"') ?></td>
    <td><?php echo input_tag('department', $sf_params->get('department'), 'size="15"') ?></td>
    <td><?php echo input_tag('shift', $sf_params->get('shift'), 'size="15"') ?></td>
    <td><?php echo input_tag('garment', $sf_params->get('garment'), 'size="15"') ?></td>
    <td><?php echo input_tag('color', $sf_params->get('color'), 'size="5"') ?></td>
    <td><?php echo input_tag('size', $sf_params->get('size'), 'size="5"') ?></td>
    <td><?php echo submit_tag('search') ?></td>    
</tr> 
