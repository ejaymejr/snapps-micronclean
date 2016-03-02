<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td width="100" >&nbsp;</td>
	<td>
     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('cleanroom', $sf_params->get('cleanroom'), 'size="20"') ?></td>
    <td><?php echo input_tag('area', $sf_params->get('area'), 'size="20"') ?></td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="20"') ?></td>
    <td><?php echo input_tag('checked_by', $sf_params->get('checked_by'), 'size="20"') ?></td>    
    <td><?php echo input_tag('verified_by', $sf_params->get('verified_by'), 'size="20"') ?></td>
    <td>&nbsp;</td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 

