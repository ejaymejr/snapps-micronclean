<?php use_helper('Validation', 'Javascript') ?>
<?php
// $Source$
// $Id$

?>
<tr class="bg-color-blueLight" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
	<td ><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td></td>
    <td><?php echo input_tag('name', $sf_params->get('company'), 'size="20"') ?></td>  
    <td><?php echo input_tag('name', $sf_params->get('department'), 'size="10"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
