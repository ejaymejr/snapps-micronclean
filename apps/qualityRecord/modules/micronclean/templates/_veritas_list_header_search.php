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
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="60"') ?></td>
    <td><?php echo input_tag('department', $sf_params->get('department'), 'size="20"') ?></td>
    <td><?php echo input_tag('type', $sf_params->get('type'), 'size="20"') ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo input_tag('tester', $sf_params->get('tester'), 'size="20"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 

