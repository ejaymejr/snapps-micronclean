<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td >
     <?php //echo input_tag('initiated_date', $sf_params->get('initiated_date'), 'size="15"') ?>
     <?php echo HTMLForm::DrawDateInput('tos', $sf_params->get('tos'), XIDX::next(), XIDX::next(), 'size="11"');
           echo '&nbsp; to &nbsp;';
           echo HTMLForm::DrawDateInput('toe', $sf_params->get('toe'), XIDX::next(), XIDX::next(), 'size="11"') ;
     ?>
    </td>
    <td><?php echo input_tag('qan_no', $sf_params->get('qan_no'), 'size="10"') ?></td>
    <td width="50%">&nbsp;</td>
    <td><?php echo input_tag('initiator', $sf_params->get('initiator'), 'size="15"') ?></td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="15"') ?></td>
    <td><?php echo input_tag('closed_out_date', $sf_params->get('closed_out_date'), 'size="15"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
