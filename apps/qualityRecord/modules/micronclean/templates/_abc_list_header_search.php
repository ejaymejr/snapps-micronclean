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
    <td><?php echo input_tag('bacteria_count', $sf_params->get('bacteria_count'), 'size="20"') ?></td>
    <td><?php echo input_tag('filter_area', $sf_params->get('filter_area'), 'size="25"') ?></td>
    <td><?php echo input_tag('tester', $sf_params->get('tester'), 'size="20"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 

