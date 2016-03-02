<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td >&nbsp;</td>
	<td width = "20%">
     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('machine_no', $sf_params->get('machine_no'), 'size="20"') ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><?php echo input_tag('initial', $sf_params->get('initial'), 'size="10"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
    
</tr> 

